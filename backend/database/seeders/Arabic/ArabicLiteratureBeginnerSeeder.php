<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-literature')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction to Arabic Literature',
                'description' => 'Practice the basic ideas behind Arabic literature and the difference between poetry and prose.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'أي تعريف أقرب إلى معنى الأدب؟',
                        'choices' => [
                            ['choice_text' => 'تعبير فني عن الأفكار والمشاعر والخبرات باللغة.', 'is_correct' => true],
                            ['choice_text' => 'مجموعة من القواعد الحسابية.', 'is_correct' => false],
                            ['choice_text' => 'قائمة بأسماء المدن فقط.', 'is_correct' => false],
                            ['choice_text' => 'طريقة لكتابة الأرقام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأدب يستخدم اللغة للتعبير الفني عن الأفكار والمشاعر والتجارب الإنسانية.',
                    ],
                    [
                        'question' => 'أي زوج يمثل فرعين أساسيين من الأدب؟',
                        'choices' => [
                            ['choice_text' => 'الشعر والنثر.', 'is_correct' => true],
                            ['choice_text' => 'الحساب والهندسة.', 'is_correct' => false],
                            ['choice_text' => 'الرسم والموسيقى فقط.', 'is_correct' => false],
                            ['choice_text' => 'الطب والعلوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر والنثر من الأشكال الأساسية التي يدرسها الأدب.',
                    ],
                    [
                        'question' => 'ما الفرق المبسط بين الشعر والنثر؟',
                        'choices' => [
                            ['choice_text' => 'الشعر يعتمد غالبًا على إيقاع وصياغة شعرية، أما النثر فليس ملتزمًا بالبنية الشعرية نفسها.', 'is_correct' => true],
                            ['choice_text' => 'النثر دائمًا أقصر من الشعر.', 'is_correct' => false],
                            ['choice_text' => 'الشعر لا يعبر عن المشاعر.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد أي فرق بينهما.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر له خصائص إيقاعية وصياغية مميزة، بينما النثر أكثر حرية في بناء الجمل والفقرات.',
                    ],
                    [
                        'question' => 'لماذا يقرأ الناس الأدب؟',
                        'choices' => [
                            ['choice_text' => 'للاستمتاع باللغة وفهم الأفكار والمشاعر وتجارب الناس.', 'is_correct' => true],
                            ['choice_text' => 'لحفظ الأرقام فقط.', 'is_correct' => false],
                            ['choice_text' => 'للتدرب على الحساب.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل نص أدبي يقدم تعليمات عملية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأدب يمكن أن يجمع بين المتعة والفهم والتأمل في الحياة والإنسان.',
                    ],
                    [
                        'question' => 'أي مثال أقرب إلى نص نثري؟',
                        'choices' => [
                            ['choice_text' => 'قصة قصيرة تحكي عن طفل يبحث عن صديقه.', 'is_correct' => true],
                            ['choice_text' => 'قصيدة موزونة.', 'is_correct' => false],
                            ['choice_text' => 'قافية شعرية منفردة.', 'is_correct' => false],
                            ['choice_text' => 'بيت شعري.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة القصيرة شكل من أشكال النثر، بينما القصيدة والبيت الشعري مرتبطان بالشعر.',
                    ],
                    [
                        'question' => 'إذا قرأت نصًا يعبّر عن الحزن لفقد شخص عزيز، فما الجانب الأدبي الذي تلاحظه؟',
                        'choices' => [
                            ['choice_text' => 'العاطفة.', 'is_correct' => true],
                            ['choice_text' => 'عدد الصفحات فقط.', 'is_correct' => false],
                            ['choice_text' => 'نوع الورق.', 'is_correct' => false],
                            ['choice_text' => 'مكان الطباعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحزن الذي يعبّر عنه الكاتب يمثل جانبًا عاطفيًا واضحًا في النص.',
                    ],
                    [
                        'question' => 'ما المقصود بالفكرة العامة للنص الأدبي؟',
                        'choices' => [
                            ['choice_text' => 'المعنى أو القضية الأساسية التي يدور حولها النص.', 'is_correct' => true],
                            ['choice_text' => 'أول كلمة في النص.', 'is_correct' => false],
                            ['choice_text' => 'اسم الكاتب فقط.', 'is_correct' => false],
                            ['choice_text' => 'عدد الفقرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة العامة تلخص القضية أو المعنى الذي يجمع أجزاء النص.',
                    ],
                    [
                        'question' => 'كاتب يصف المطر بطريقة جميلة ويعبّر عن شعوره بالحنين. ماذا يجمع النص هنا؟',
                        'choices' => [
                            ['choice_text' => 'الوصف والعاطفة.', 'is_correct' => true],
                            ['choice_text' => 'الحساب والتعليمات.', 'is_correct' => false],
                            ['choice_text' => 'الجدول والقائمة.', 'is_correct' => false],
                            ['choice_text' => 'الأرقام والخرائط.', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف المطر جانب فني، والحنين جانب عاطفي، ويمكن أن يجتمعا في نص أدبي واحد.',
                    ],
                    [
                        'question' => 'أي عبارة تصف النص الأدبي وصفًا مناسبًا؟',
                        'choices' => [
                            ['choice_text' => 'قد يهتم باللغة والصور والعاطفة والأفكار.', 'is_correct' => true],
                            ['choice_text' => 'يهتم بالأرقام فقط.', 'is_correct' => false],
                            ['choice_text' => 'لا يحتاج إلى معنى.', 'is_correct' => false],
                            ['choice_text' => 'يجب أن يكون خبرًا صحفيًا دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص الأدبي قد يجمع بين جمال اللغة والأفكار والصور والمشاعر.',
                    ],
                    [
                        'question' => 'لماذا يحتاج القارئ إلى الانتباه إلى الكلمات المختارة في النص الأدبي؟',
                        'choices' => [
                            ['choice_text' => 'لأن اختيار الكلمات يؤثر في المعنى والإحساس والأسلوب.', 'is_correct' => true],
                            ['choice_text' => 'لأن كل كلمة تمثل رقمًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكلمات لا تؤثر في النص.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكاتب يختار الكلمات عشوائيًا دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار الألفاظ يمكن أن يغيّر الإيقاع والصورة والعاطفة وطريقة فهم القارئ للنص.',
                    ],
                ],
            ],
            [
                'title' => 'Poetry Basics',
                'description' => 'Learn beginner-friendly ideas about the poetic line, rhythm, rhyme, themes, and imagery in Arabic poetry.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'ما الاسم الذي يطلق عادة على الوحدة الأساسية في القصيدة العربية التقليدية؟',
                        'choices' => [
                            ['choice_text' => 'البيت الشعري.', 'is_correct' => true],
                            ['choice_text' => 'الفقرة.', 'is_correct' => false],
                            ['choice_text' => 'الفصل.', 'is_correct' => false],
                            ['choice_text' => 'العنوان الفرعي.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصائد العربية التقليدية تتكون من أبيات شعرية.',
                    ],
                    [
                        'question' => 'ما المقصود بالقافية في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'الصوت أو النهاية التي تتكرر في أواخر أبيات القصيدة.', 'is_correct' => true],
                            ['choice_text' => 'اسم الشاعر.', 'is_correct' => false],
                            ['choice_text' => 'عدد الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'مكان كتابة القصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'القافية ترتبط بالنهاية الصوتية التي تتكرر في الأبيات وفق بناء القصيدة.',
                    ],
                    [
                        'question' => 'إذا لاحظت تكرار نغمة معينة في أبيات قصيدة، فما الجانب الذي تلاحظه؟',
                        'choices' => [
                            ['choice_text' => 'الإيقاع الموسيقي للنص.', 'is_correct' => true],
                            ['choice_text' => 'مكان الكاتب.', 'is_correct' => false],
                            ['choice_text' => 'عدد الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'نوع الورق.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار الصوتي والإيقاعي من العناصر التي تمنح الشعر موسيقاه الخاصة.',
                    ],
                    [
                        'question' => 'قال شاعر: «الليل يهمس للنجوم». أي صورة تظهر هنا؟',
                        'choices' => [
                            ['choice_text' => 'تصوير الليل كأنه إنسان يهمس.', 'is_correct' => true],
                            ['choice_text' => 'معلومة علمية عن الليل.', 'is_correct' => false],
                            ['choice_text' => 'تعريف مباشر للنجوم.', 'is_correct' => false],
                            ['choice_text' => 'سؤال عن الطقس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الليل لا يهمس حقيقةً، لكن الشاعر يصوره ككائن يفعل فعل الإنسان، وهذا يعطي الصورة حياة.',
                    ],
                    [
                        'question' => 'أي موضوع يمكن أن يظهر كثيرًا في الشعر العربي؟',
                        'choices' => [
                            ['choice_text' => 'الحب والوطن والطبيعة والحكمة.', 'is_correct' => true],
                            ['choice_text' => 'الجداول الحسابية فقط.', 'is_correct' => false],
                            ['choice_text' => 'تعليمات تشغيل الأجهزة فقط.', 'is_correct' => false],
                            ['choice_text' => 'قوائم الأسعار فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر يمكن أن يتناول موضوعات إنسانية متنوعة مثل الحب والوطن والطبيعة والحكمة.',
                    ],
                    [
                        'question' => 'إذا كان الشاعر يكرر كلمة أو عبارة في أكثر من بيت، فما الذي قد يحققه هذا التكرار؟',
                        'choices' => [
                            ['choice_text' => 'التأكيد وإبراز فكرة أو إحساس معين.', 'is_correct' => true],
                            ['choice_text' => 'إخفاء الموضوع دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'تحويل الشعر إلى نثر.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء المعنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار قد يقوي الإيقاع ويؤكد الفكرة أو العاطفة.',
                    ],
                    [
                        'question' => 'في قصيدة عن الوطن، يصف الشاعر الجبال والأنهار والسهول بحب. ما العاطفة الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'الانتماء والاعتزاز.', 'is_correct' => true],
                            ['choice_text' => 'الخوف من الحساب.', 'is_correct' => false],
                            ['choice_text' => 'الملل من الطبيعة.', 'is_correct' => false],
                            ['choice_text' => 'الدهشة من الرياضيات.', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف الوطن بجماله وبنبرة محبة يدل على مشاعر الانتماء والاعتزاز.',
                    ],
                    [
                        'question' => 'أي نص أقرب إلى الشعر؟',
                        'choices' => [
                            ['choice_text' => 'أبيات قصيرة تتكرر فيها قافية واحدة.', 'is_correct' => true],
                            ['choice_text' => 'رسالة إدارية.', 'is_correct' => false],
                            ['choice_text' => 'تعليمات جهاز.', 'is_correct' => false],
                            ['choice_text' => 'قائمة مشتريات.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود الأبيات والقافية من العلامات الواضحة على النص الشعري.',
                    ],
                    [
                        'question' => 'لماذا يستخدم الشاعر الصور والتشبيهات؟',
                        'choices' => [
                            ['choice_text' => 'ليجعل الفكرة أو المشهد أكثر تأثيرًا وتخيّلًا.', 'is_correct' => true],
                            ['choice_text' => 'ليخفي كل معنى.', 'is_correct' => false],
                            ['choice_text' => 'ليحول القصيدة إلى تقرير علمي.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشعر لا يمكن أن يكون واضحًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصور الأدبية تساعد القارئ على تخيل المشهد والشعور به بطريقة أكثر تأثيرًا.',
                    ],
                    [
                        'question' => 'قرأ طالب قصيدة قصيرة ووجد أن الجو العام فيها حزين. ما الذي ينبغي أن يبحث عنه أيضًا لفهم هذا الإحساس؟',
                        'choices' => [
                            ['choice_text' => 'الكلمات والصور والأحداث التي تصنع الحزن.', 'is_correct' => true],
                            ['choice_text' => 'عدد حروف العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'اسم المطبعة.', 'is_correct' => false],
                            ['choice_text' => 'لون الورق.', 'is_correct' => false],
                        ],
                        'explanation' => 'لفهم العاطفة، ينظر القارئ إلى الأدلة الموجودة في اللغة والصور والأحداث.',
                    ],
                ],
            ],
            [
                'title' => 'Prose and Short Stories',
                'description' => 'Practice identifying story characters, setting, events, conflict, and simple themes in Arabic prose.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي عنصر نحتاج إليه في قصة حتى نعرف من يقوم بالأحداث؟',
                        'choices' => [
                            ['choice_text' => 'الشخصيات.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'الوزن.', 'is_correct' => false],
                            ['choice_text' => 'العنوان الفرعي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخصيات هي الأشخاص أو الكائنات التي تشارك في أحداث القصة.',
                    ],
                    [
                        'question' => 'في قصة تحدث أحداثها داخل مدرسة في صباح يوم الاثنين، ما المكان والزمان؟',
                        'choices' => [
                            ['choice_text' => 'المكان المدرسة، والزمان صباح يوم الاثنين.', 'is_correct' => true],
                            ['choice_text' => 'المكان الاثنين، والزمان المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'المكان الصباح، والزمان المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد مكان أو زمان.', 'is_correct' => false],
                        ],
                        'explanation' => 'المدرسة تحدد المكان، وصباح يوم الاثنين يحدد الزمن.',
                    ],
                    [
                        'question' => 'إذا كان بطل القصة يريد الوصول إلى مكان لكنه يواجه مشكلة في الطريق، فما الذي تمثله المشكلة؟',
                        'choices' => [
                            ['choice_text' => 'العقدة أو الصراع الذي يدفع الأحداث إلى الأمام.', 'is_correct' => true],
                            ['choice_text' => 'العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'الخاتمة وحدها.', 'is_correct' => false],
                            ['choice_text' => 'وصف الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود مشكلة أو صراع يجعل الأحداث تتحرك ويعطي القصة اتجاهًا.',
                    ],
                    [
                        'question' => 'أي حدث يصلح لبداية قصة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'وجدت ليان رسالة مجهولة أمام باب بيتها.', 'is_correct' => true],
                            ['choice_text' => 'ثم انتهت القصة.', 'is_correct' => false],
                            ['choice_text' => 'لذلك شكر القارئ الكاتب.', 'is_correct' => false],
                            ['choice_text' => 'أما الفكرة الرئيسية فهي النهاية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحدث الأول يثير فضول القارئ ويمكن أن يقود إلى سلسلة من الأحداث.',
                    ],
                    [
                        'question' => 'ما المقصود بنهاية القصة؟',
                        'choices' => [
                            ['choice_text' => 'الجزء الذي تُغلق فيه الأحداث أو تتضح نتيجتها.', 'is_correct' => true],
                            ['choice_text' => 'عنوان القصة.', 'is_correct' => false],
                            ['choice_text' => 'أول جملة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'وصف الكاتب فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهاية تقدم نتيجة للأحداث أو تغلق المشكلة التي بدأت بها القصة.',
                    ],
                    [
                        'question' => 'قرأ خالد قصة عن طفل يساعد جاره ثم يتعلم منه قيمة الصدق. ما الذي تمثله قيمة الصدق؟',
                        'choices' => [
                            ['choice_text' => 'فكرة أو قيمة يمكن أن يتعلمها القارئ من القصة.', 'is_correct' => true],
                            ['choice_text' => 'مكان القصة.', 'is_correct' => false],
                            ['choice_text' => 'اسم الكاتب.', 'is_correct' => false],
                            ['choice_text' => 'عدد الصفحات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصدق هنا قيمة أو فكرة تربوية تظهر من خلال الأحداث والشخصيات.',
                    ],
                    [
                        'question' => 'أي عنصر يساعد القارئ على تخيل أين تجري القصة؟',
                        'choices' => [
                            ['choice_text' => 'وصف المكان.', 'is_correct' => true],
                            ['choice_text' => 'عدد الفصول فقط.', 'is_correct' => false],
                            ['choice_text' => 'اسم المطبعة.', 'is_correct' => false],
                            ['choice_text' => 'نوع الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف المكان يحدد البيئة التي تجري فيها الأحداث ويساعد القارئ على تصورها.',
                    ],
                    [
                        'question' => 'إذا كان الكاتب يحكي الأحداث كما تقع واحدة بعد أخرى، فما الذي يتابعه القارئ؟',
                        'choices' => [
                            ['choice_text' => 'تسلسل الأحداث.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'الوزن الشعري.', 'is_correct' => false],
                            ['choice_text' => 'عنوان الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'تتابع الأحداث زمنيًا يساعد القارئ على فهم ما حدث أولًا وما جاء بعده.',
                    ],
                    [
                        'question' => 'أي جملة تصف شخصية بطريقة أفضل؟',
                        'choices' => [
                            ['choice_text' => 'كان سامر هادئًا، لكنه لا يتردد في مساعدة أصدقائه.', 'is_correct' => true],
                            ['choice_text' => 'سامر.', 'is_correct' => false],
                            ['choice_text' => 'كان في الصفحة الثالثة.', 'is_correct' => false],
                            ['choice_text' => 'اسمه مكتوب بالحبر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم صفات وسلوكًا يساعدان القارئ على فهم الشخصية.',
                    ],
                    [
                        'question' => 'ما الذي يميز القصة القصيرة عن قائمة تعليمات؟',
                        'choices' => [
                            ['choice_text' => 'القصة تقدم شخصيات وأحداثًا أو تجربة سردية.', 'is_correct' => true],
                            ['choice_text' => 'القصة لا تحتوي على أي معنى.', 'is_correct' => false],
                            ['choice_text' => 'التعليمات دائمًا شعر.', 'is_correct' => false],
                            ['choice_text' => 'القصة تتكون من أرقام فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة تحكي تجربة أو أحداثًا، بينما التعليمات تهدف إلى إرشاد القارئ إلى خطوات عمل.',
                    ],
                ],
            ],
            [
                'title' => 'Idea, Emotion, and Literary Message',
                'description' => 'Learn to distinguish ideas, feelings, and messages in simple Arabic literary passages.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'كتب شاعر عن وطنه بلغة مليئة بالفخر. ماذا تمثل مشاعر الفخر؟',
                        'choices' => [
                            ['choice_text' => 'العاطفة في النص.', 'is_correct' => true],
                            ['choice_text' => 'المكان فقط.', 'is_correct' => false],
                            ['choice_text' => 'عدد الأبيات.', 'is_correct' => false],
                            ['choice_text' => 'اسم القافية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفخر إحساس، ولذلك فهو جزء من الجانب العاطفي للنص.',
                    ],
                    [
                        'question' => 'إذا كانت القصة تعلم الطفل أن مساعدة الآخرين عمل جيد، فما الرسالة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'مساعدة الآخرين قيمة إيجابية.', 'is_correct' => true],
                            ['choice_text' => 'القصة حدثت في مدرسة فقط.', 'is_correct' => false],
                            ['choice_text' => 'الطفل يحب اللون الأزرق.', 'is_correct' => false],
                            ['choice_text' => 'الكاتب يعيش في مدينة كبيرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرسالة هي الفكرة أو القيمة التي يريد النص أن يتركها لدى القارئ.',
                    ],
                    [
                        'question' => 'أي عبارة تصف الفرق بين الفكرة والعاطفة؟',
                        'choices' => [
                            ['choice_text' => 'الفكرة تتعلق بما يقوله النص أو يناقشه، والعاطفة تتعلق بما نشعر به فيه.', 'is_correct' => true],
                            ['choice_text' => 'لا فرق بينهما إطلاقًا.', 'is_correct' => false],
                            ['choice_text' => 'العاطفة هي عدد الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'الفكرة هي القافية فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة تتصل بالمعنى أو القضية، بينما العاطفة تتصل بالمشاعر التي ينقلها النص.',
                    ],
                    [
                        'question' => 'في نص يصف بيت الطفولة بحنان واشتياق، ما العاطفة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الحنين.', 'is_correct' => true],
                            ['choice_text' => 'الغضب.', 'is_correct' => false],
                            ['choice_text' => 'السخرية.', 'is_correct' => false],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاشتياق إلى الماضي والمكان القديم يشير غالبًا إلى الحنين.',
                    ],
                    [
                        'question' => 'كاتب يكرر أن التعاون يجعل العمل أسهل. ما الفكرة التي يركز عليها؟',
                        'choices' => [
                            ['choice_text' => 'قيمة التعاون.', 'is_correct' => true],
                            ['choice_text' => 'جمال الطقس.', 'is_correct' => false],
                            ['choice_text' => 'وصف الطعام.', 'is_correct' => false],
                            ['choice_text' => 'سرعة السفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار أثر التعاون على العمل يشير إلى أن التعاون هو الفكرة الأساسية.',
                    ],
                    [
                        'question' => 'إذا كان نص أدبي يصف المطر بمشاعر فرح، فما الذي يمكن للقارئ أن يلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'الكاتب لا يصف المطر فقط، بل يربطه بمزاجه العاطفي.', 'is_correct' => true],
                            ['choice_text' => 'المطر تحول إلى حقيقة علمية.', 'is_correct' => false],
                            ['choice_text' => 'النص أصبح قائمة أسعار.', 'is_correct' => false],
                            ['choice_text' => 'لا علاقة للمشاعر بالوصف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوصف الأدبي قد يحمل موقف الكاتب ومشاعره، فيمنح المشهد معنى إضافيًا.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على اكتشاف العاطفة في النص؟',
                        'choices' => [
                            ['choice_text' => 'كيف يبدو شعور المتكلم تجاه ما يصفه؟', 'is_correct' => true],
                            ['choice_text' => 'كم حرفًا في العنوان؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم مرة قلبت الصفحة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن شعور المتكلم يدفع القارئ إلى البحث عن نبرة النص وكلماته الدالة على العاطفة.',
                    ],
                    [
                        'question' => 'إذا كانت شخصية في قصة تشعر بالخوف ثم تتغلب عليه، فما الفكرة الممكنة؟',
                        'choices' => [
                            ['choice_text' => 'الشجاعة يمكن أن تساعد الإنسان على مواجهة الخوف.', 'is_correct' => true],
                            ['choice_text' => 'الخوف لا وجود له.', 'is_correct' => false],
                            ['choice_text' => 'القصة عن الطقس فقط.', 'is_correct' => false],
                            ['choice_text' => 'الشخصية لا تمر بأي مشكلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تطور الشخصية من الخوف إلى المواجهة قد يقود إلى فكرة الشجاعة والتغلب على الصعوبات.',
                    ],
                    [
                        'question' => 'ما الذي يساعد القارئ على تحديد الفكرة العامة؟',
                        'choices' => [
                            ['choice_text' => 'ملاحظة الموضوع المتكرر والتفاصيل المرتبطة به.', 'is_correct' => true],
                            ['choice_text' => 'قراءة العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'عدّ علامات الترقيم.', 'is_correct' => false],
                            ['choice_text' => 'النظر إلى طول الكتاب فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة العامة تظهر من تكرار الموضوع والعناصر التي يدور حولها النص.',
                    ],
                    [
                        'question' => 'لماذا قد يستخدم كاتب كلمات هادئة في مشهد عن الغروب؟',
                        'choices' => [
                            ['choice_text' => 'لخلق جو مناسب للمشهد ونقل إحساس معين.', 'is_correct' => true],
                            ['choice_text' => 'لأن الكلمات الهادئة لا معنى لها.', 'is_correct' => false],
                            ['choice_text' => 'لتغيير الغروب إلى سؤال.', 'is_correct' => false],
                            ['choice_text' => 'لإخفاء كل الشخصيات.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار الألفاظ يساعد على تشكيل الجو العام ونقل الإحساس الذي يريد الكاتب أن يوصله.',
                    ],
                ],
            ],
            [
                'title' => 'Language and Literary Imagery',
                'description' => 'Explore simple simile, metaphor, personification, and the effect of imagery on literary meaning.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي جملة تحتوي على تشبيه واضح؟',
                        'choices' => [
                            ['choice_text' => 'وجهه كالقمر في إشراقه.', 'is_correct' => true],
                            ['choice_text' => 'دخل الرجل البيت.', 'is_correct' => false],
                            ['choice_text' => 'قرأ الطالب الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'وصلت الحافلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود «كـ» يقارن الوجه بالقمر، وهذا مثال بسيط على التشبيه.',
                    ],
                    [
                        'question' => 'في عبارة «البحر يبتسم للشاطئ»، ما الأسلوب التصويري الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص البحر وإعطاؤه صفة إنسانية.', 'is_correct' => true],
                            ['choice_text' => 'معلومة علمية.', 'is_correct' => false],
                            ['choice_text' => 'تعريف قاموسي.', 'is_correct' => false],
                            ['choice_text' => 'سؤال مباشر.', 'is_correct' => false],
                        ],
                        'explanation' => 'البحر لا يبتسم حقيقة، لكن الكاتب عامله كأنه إنسان يبتسم، وهذا من التشخيص.',
                    ],
                    [
                        'question' => 'ما فائدة التشبيه في النص الأدبي؟',
                        'choices' => [
                            ['choice_text' => 'تقريب الصورة إلى ذهن القارئ وجعلها أكثر وضوحًا وتأثيرًا.', 'is_correct' => true],
                            ['choice_text' => 'منع القارئ من فهم النص.', 'is_correct' => false],
                            ['choice_text' => 'تحويل النص إلى قائمة.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء المشاعر.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه يقارن شيئًا بشيء آخر لتوضيح صفته أو تقوية الصورة في ذهن القارئ.',
                    ],
                    [
                        'question' => 'أي عبارة أقرب إلى الاستعارة البسيطة؟',
                        'choices' => [
                            ['choice_text' => 'العلم نور.', 'is_correct' => true],
                            ['choice_text' => 'الكتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'ذهب الطالب إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'السماء زرقاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة «العلم نور» تنقل معنى العلم بصورة مجازية تجعل العلم كأنه نور يهدي الإنسان.',
                    ],
                    [
                        'question' => 'في «ابتسمت الزهور في الصباح»، ما الصورة الأدبية؟',
                        'choices' => [
                            ['choice_text' => 'إسناد الابتسام إلى الزهور.', 'is_correct' => true],
                            ['choice_text' => 'وصف علمي للنبات.', 'is_correct' => false],
                            ['choice_text' => 'ذكر مكان فقط.', 'is_correct' => false],
                            ['choice_text' => 'سرد حدث تاريخي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الزهور لا تبتسم حرفيًا، لكن الكاتب يمنحها صفة بشرية لتقوية الصورة.',
                    ],
                    [
                        'question' => 'أي جملة أقل اعتمادًا على الصورة المجازية؟',
                        'choices' => [
                            ['choice_text' => 'جلست مريم على الكرسي.', 'is_correct' => true],
                            ['choice_text' => 'النجوم ترقص في السماء.', 'is_correct' => false],
                            ['choice_text' => 'الليل يمد يده.', 'is_correct' => false],
                            ['choice_text' => 'المدينة تستيقظ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم حدثًا مباشرًا دون إسناد صفات بشرية أو مجازية للشيء.',
                    ],
                    [
                        'question' => 'إذا وصف الكاتب صوتًا بأنه «ناعم كالحرير»، فما الشيء الذي يقصده التشبيه؟',
                        'choices' => [
                            ['choice_text' => 'أن الصوت لطيف ورقيق في الإحساس.', 'is_correct' => true],
                            ['choice_text' => 'أن الصوت مصنوع من الحرير.', 'is_correct' => false],
                            ['choice_text' => 'أن المتكلم يبيع القماش.', 'is_correct' => false],
                            ['choice_text' => 'أن الصوت مرتفع جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه بالحرير ينقل إحساس النعومة والرقة إلى القارئ، لا معنى حرفيًا للصوت.',
                    ],
                    [
                        'question' => 'أي عبارة تستخدم صورة أدبية للمطر؟',
                        'choices' => [
                            ['choice_text' => 'كانت قطرات المطر ترسم موسيقى على النافذة.', 'is_correct' => true],
                            ['choice_text' => 'نزل المطر الساعة السادسة.', 'is_correct' => false],
                            ['choice_text' => 'المطر ماء يسقط من السحب.', 'is_correct' => false],
                            ['choice_text' => 'أخذت مظلتي.', 'is_correct' => false],
                        ],
                        'explanation' => 'فكرة أن قطرات المطر «ترسم موسيقى» صورة فنية تربط الصوت بالموسيقى بصورة مجازية.',
                    ],
                    [
                        'question' => 'لماذا لا ينبغي للقارئ أن يفهم كل صورة أدبية حرفيًا؟',
                        'choices' => [
                            ['choice_text' => 'لأن بعض الصور تهدف إلى التعبير المجازي عن معنى أو إحساس.', 'is_correct' => true],
                            ['choice_text' => 'لأن الأدب لا معنى له.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل الكلمات خاطئة.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكاتب لا يريد أن يفهمه أحد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة الأدبية قد تعني شيئًا غير حرفي، ويحتاج القارئ إلى فهم المعنى المقصود من السياق.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على تحليل صورة أدبية؟',
                        'choices' => [
                            ['choice_text' => 'ما الشيء الذي شبّه به الكاتب، وماذا أضاف هذا التشبيه إلى المعنى؟', 'is_correct' => true],
                            ['choice_text' => 'كم عدد صفحات الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'ما سعر الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين اشترى القارئ القلم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا السؤال يربط الصورة بالمعنى، وهو أساس فهم أثر التشبيه أو الاستعارة.',
                    ],
                ],
            ],
            [
                'title' => 'Reading Literary Texts and Style',
                'description' => 'Read short literary situations and identify tone, atmosphere, wording, and basic stylistic effects.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'اقرأ: «جلس الطفل عند النافذة يراقب المطر، وكان يشعر بالفرح كلما لمع البرق في السماء.» ما الشعور الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'الفرح والدهشة.', 'is_correct' => true],
                            ['choice_text' => 'الغضب.', 'is_correct' => false],
                            ['choice_text' => 'الخوف الشديد.', 'is_correct' => false],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر أن الطفل يشعر بالفرح، ومراقبة البرق تضيف إحساسًا بالدهشة.',
                    ],
                    [
                        'question' => 'اقرأ: «عاد المسافر إلى قريته بعد سنوات، فشعر بالحنين عندما رأى البيت القديم.» ما الموضوع الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الحنين إلى الماضي والمكان.', 'is_correct' => true],
                            ['choice_text' => 'مشكلة في الحساب.', 'is_correct' => false],
                            ['choice_text' => 'تعليمات السفر.', 'is_correct' => false],
                            ['choice_text' => 'وصف الطعام.', 'is_correct' => false],
                        ],
                        'explanation' => 'العودة بعد سنوات والشعور بالحنين عند رؤية البيت القديم يشيران إلى علاقة قوية بالماضي والمكان.',
                    ],
                    [
                        'question' => 'إذا كانت لغة النص مليئة بالأفعال السريعة مثل «ركض، فتح، قفز، عاد»، ماذا قد توحي؟',
                        'choices' => [
                            ['choice_text' => 'بحركة ونشاط وتسارع في الأحداث.', 'is_correct' => true],
                            ['choice_text' => 'بالهدوء التام.', 'is_correct' => false],
                            ['choice_text' => 'بقِلّة الأحداث.', 'is_correct' => false],
                            ['choice_text' => 'بأن النص غير مفهوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأفعال الحركية المتتابعة تعطي إحساسًا بسرعة الأحداث والنشاط.',
                    ],
                    [
                        'question' => 'إذا استخدم الكاتب كلمات مثل «هادئ، ساكن، لطيف، خافت»، فما الجو المتوقع؟',
                        'choices' => [
                            ['choice_text' => 'جو هادئ.', 'is_correct' => true],
                            ['choice_text' => 'جو صاخب.', 'is_correct' => false],
                            ['choice_text' => 'جو غاضب بالضرورة.', 'is_correct' => false],
                            ['choice_text' => 'جو مليء بالمطاردات.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الألفاظ تحمل دلالات على السكون والهدوء، وتساعد في تشكيل جو النص.',
                    ],
                    [
                        'question' => 'كاتب يقول: «تسللت الشمس إلى الغرفة من بين الستائر.» ما أثر هذا الأسلوب؟',
                        'choices' => [
                            ['choice_text' => 'يحوّل دخول الضوء إلى صورة حية يمكن تخيلها.', 'is_correct' => true],
                            ['choice_text' => 'يعطي معلومة هندسية.', 'is_correct' => false],
                            ['choice_text' => 'يمنع القارئ من رؤية الغرفة.', 'is_correct' => false],
                            ['choice_text' => 'يشرح قواعد النحو.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل «تسللت» يجعل الضوء يبدو كأنه يتحرك بخفة مثل كائن حي، فتصبح الصورة أكثر حيوية.',
                    ],
                    [
                        'question' => 'أي شيء يبحث عنه القارئ عندما يسأل: «كيف يتحدث الكاتب عن الشخصية؟»',
                        'choices' => [
                            ['choice_text' => 'أسلوب الوصف والكلمات التي يستخدمها تجاه الشخصية.', 'is_correct' => true],
                            ['choice_text' => 'عدد الصفحات فقط.', 'is_correct' => false],
                            ['choice_text' => 'سعر الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'شكل الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'طريقة وصف الشخصية والألفاظ المستخدمة تكشف موقف الكاتب وأسلوبه في تقديمها.',
                    ],
                    [
                        'question' => 'إذا كانت نهاية القصة تترك القارئ يفكر في القرار الذي اتخذه البطل، فما الأثر المتوقع؟',
                        'choices' => [
                            ['choice_text' => 'دعوة القارئ إلى التأمل في معنى النهاية.', 'is_correct' => true],
                            ['choice_text' => 'إعطاء قائمة أسعار.', 'is_correct' => false],
                            ['choice_text' => 'تحويل القصة إلى قصيدة.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء الأحداث السابقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهاية المفتوحة أو التأملية قد تجعل القارئ يفكر في الشخصيات والقرارات والمعنى.',
                    ],
                    [
                        'question' => 'أي قراءة تساعد على فهم النص الأدبي أكثر؟',
                        'choices' => [
                            ['choice_text' => 'الانتباه إلى الكلمات المتكررة والصور والعاطفة والأحداث.', 'is_correct' => true],
                            ['choice_text' => 'قراءة العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل المشاعر.', 'is_correct' => false],
                            ['choice_text' => 'البحث عن الأرقام فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه العناصر مجتمعة تعطي القارئ أدلة على الموضوع والأسلوب والعاطفة.',
                    ],
                    [
                        'question' => 'كاتب يستخدم جملًا قصيرة جدًا أثناء مشهد خوف. ما الأثر المحتمل؟',
                        'choices' => [
                            ['choice_text' => 'زيادة الإحساس بالسرعة والتوتر.', 'is_correct' => true],
                            ['choice_text' => 'إعطاء إحساس بالبطء دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'تحويل النص إلى معجم.', 'is_correct' => false],
                            ['choice_text' => 'منع ظهور الشخصيات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمل القصيرة قد تجعل القراءة أسرع وتزيد التوتر في المشاهد الحادة.',
                    ],
                    [
                        'question' => 'عندما يختار الكاتب كلمة «دافئ» بدل «حار» لوصف مكان، ماذا نلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'أن اختيار الكلمة يؤثر في الإحساس الذي ينقله النص.', 'is_correct' => true],
                            ['choice_text' => 'أن الكلمتين متطابقتان دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'أن النص أصبح علميًا.', 'is_correct' => false],
                            ['choice_text' => 'أن الكاتب أخطأ بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة «دافئ» تعطي إحساسًا ألطف من «حار»، ولذلك تؤثر في نبرة الوصف.',
                    ],
                ],
            ],
            [
                'title' => 'Comparing Poetry and Prose',
                'description' => 'Compare beginner-level features of Arabic poetry and prose through short examples and practical distinctions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي نص هو الأقرب إلى الشعر؟',
                        'choices' => [
                            ['choice_text' => 'أبيات تحافظ على إيقاع وقافية.', 'is_correct' => true],
                            ['choice_text' => 'رسالة إلى مدير المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'تعليمات استعمال جهاز.', 'is_correct' => false],
                            ['choice_text' => 'خبر عن موعد الحافلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإيقاع والقافية من السمات المعروفة في الشعر، خاصة الشعر التقليدي.',
                    ],
                    [
                        'question' => 'أي مثال أقرب إلى النثر الأدبي؟',
                        'choices' => [
                            ['choice_text' => 'قصة قصيرة فيها شخصيات وأحداث.', 'is_correct' => true],
                            ['choice_text' => 'بيت شعري بقافية.', 'is_correct' => false],
                            ['choice_text' => 'قصيدة من أبيات.', 'is_correct' => false],
                            ['choice_text' => 'شطر شعري.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة القصيرة شكل نثري أدبي، بينما الأبيات والأشطر تنتمي إلى الشعر.',
                    ],
                    [
                        'question' => 'ما الذي يمكن أن يشترك فيه الشعر والنثر؟',
                        'choices' => [
                            ['choice_text' => 'التعبير عن الأفكار والمشاعر واستخدام لغة فنية.', 'is_correct' => true],
                            ['choice_text' => 'الاعتماد على القافية نفسها دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'وجود الوزن الشعري في كل نص.', 'is_correct' => false],
                            ['choice_text' => 'وجود أبيات في كل نص.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلاهما يمكن أن يحمل أفكارًا ومشاعر وصورًا فنية، رغم اختلاف البناء والأسلوب.',
                    ],
                    [
                        'question' => 'إذا كان النص يحتوي على فقرات طويلة وشخصيات وحوارًا دون التزام بوزن شعري، فهو غالبًا:',
                        'choices' => [
                            ['choice_text' => 'نثر أدبي.', 'is_correct' => true],
                            ['choice_text' => 'قصيدة عمودية بالضرورة.', 'is_correct' => false],
                            ['choice_text' => 'بيتًا شعريًا.', 'is_correct' => false],
                            ['choice_text' => 'قافية منفردة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفقرات والسرد والحوار مع غياب البناء الشعري المعتاد تشير إلى النثر.',
                    ],
                    [
                        'question' => 'أي عنصر هو أكثر ارتباطًا بالشعر التقليدي من القصة القصيرة؟',
                        'choices' => [
                            ['choice_text' => 'القافية.', 'is_correct' => true],
                            ['choice_text' => 'الشخصية الرئيسية.', 'is_correct' => false],
                            ['choice_text' => 'الحوار السردي.', 'is_correct' => false],
                            ['choice_text' => 'تسلسل الأحداث.', 'is_correct' => false],
                        ],
                        'explanation' => 'القافية عنصر يرتبط بالشعر التقليدي، بينما الشخصية والحوار وتسلسل الأحداث شائعة في القصص.',
                    ],
                    [
                        'question' => 'أي عنصر يمكن أن يظهر في قصة قصيرة لكنه ليس ضروريًا في قصيدة؟',
                        'choices' => [
                            ['choice_text' => 'الحوار بين الشخصيات.', 'is_correct' => true],
                            ['choice_text' => 'العاطفة.', 'is_correct' => false],
                            ['choice_text' => 'اللغة.', 'is_correct' => false],
                            ['choice_text' => 'الفكرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحوار بين الشخصيات شائع في السرد القصصي، بينما يمكن للشعر أن يتضمنه لكنه ليس عنصرًا لازمًا لكل قصيدة.',
                    ],
                    [
                        'question' => 'إذا أردت دراسة شخصية وتطورها عبر أحداث متعددة، أي نوع أنسب غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'قصة أو نص سردي.', 'is_correct' => true],
                            ['choice_text' => 'بيت شعري منفرد.', 'is_correct' => false],
                            ['choice_text' => 'قافية واحدة.', 'is_correct' => false],
                            ['choice_text' => 'عنوان فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص السردي يتيح مساحة لعرض الشخصية وتطورها عبر مجموعة من الأحداث.',
                    ],
                    [
                        'question' => 'إذا أردت التعبير المكثف عن شعور في بضعة أبيات، أي شكل قد يكون مناسبًا؟',
                        'choices' => [
                            ['choice_text' => 'قصيدة قصيرة.', 'is_correct' => true],
                            ['choice_text' => 'قائمة تعليمات.', 'is_correct' => false],
                            ['choice_text' => 'إعلان تجاري فقط.', 'is_correct' => false],
                            ['choice_text' => 'جدول بيانات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر يسمح بالتعبير المكثف عن المشاعر باستخدام الإيقاع والصور واللغة الشعرية.',
                    ],
                    [
                        'question' => 'أي عبارة مقارنة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'قد يعتمد الشعر على الإيقاع والقافية، بينما يعتمد النثر أكثر على الفقرات والسرد.', 'is_correct' => true],
                            ['choice_text' => 'الشعر لا يمكن أن يحكي قصة.', 'is_correct' => false],
                            ['choice_text' => 'النثر لا يمكن أن يكون أدبيًا.', 'is_correct' => false],
                            ['choice_text' => 'كل نثر يجب أن يحتوي على قافية.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا يوضح فرقًا عامًا في البناء دون القول إن أحد النوعين عاجز عن استخدام خصائص النوع الآخر.',
                    ],
                    [
                        'question' => 'لماذا يفيد الطالب أن يقرأ شعرًا ونثرًا معًا؟',
                        'choices' => [
                            ['choice_text' => 'ليرى تنوع طرق التعبير الأدبي باللغة.', 'is_correct' => true],
                            ['choice_text' => 'ليتعلم نوعًا واحدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشعر والنثر متطابقان تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل نص أدبي يجب أن يكون شعريًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'قراءة النوعين توسع فهم الطالب لأشكال التعبير والأساليب المختلفة في الأدب.',
                    ],
                ],
            ],
            [
                'title' => 'Basic Literary Analysis',
                'description' => 'Practice simple literary analysis by looking at character, setting, conflict, imagery, tone, and evidence from the text.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'عند تحليل قصة قصيرة، ما السؤال الذي يساعدك على فهم الشخصية الرئيسية؟',
                        'choices' => [
                            ['choice_text' => 'ماذا تريد الشخصية، وما المشكلة التي تواجهها؟', 'is_correct' => true],
                            ['choice_text' => 'كم لونًا في غلاف الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم صفحة في الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين طُبع الكتاب؟', 'is_correct' => false],
                        ],
                        'explanation' => 'رغبة الشخصية والمشكلة التي تواجهها يساعدان على فهم دورها في الأحداث.',
                    ],
                    [
                        'question' => 'إذا تغيّر سلوك الشخصية من الأنانية إلى التعاون، ماذا يمكن أن نستنتج؟',
                        'choices' => [
                            ['choice_text' => 'الشخصية تطورت وتعلمت من تجربتها.', 'is_correct' => true],
                            ['choice_text' => 'لم يحدث أي تغير.', 'is_correct' => false],
                            ['choice_text' => 'القصة عن الطقس فقط.', 'is_correct' => false],
                            ['choice_text' => 'لا علاقة للأحداث بالشخصية.', 'is_correct' => false],
                        ],
                        'explanation' => 'تغير السلوك عبر الأحداث علامة على تطور الشخصية ونموها.',
                    ],
                    [
                        'question' => 'في نص يكثر فيه وصف الأشجار والبحر والسماء، ما الجانب الذي يبرز؟',
                        'choices' => [
                            ['choice_text' => 'الوصف.', 'is_correct' => true],
                            ['choice_text' => 'الحوار فقط.', 'is_correct' => false],
                            ['choice_text' => 'الحساب.', 'is_correct' => false],
                            ['choice_text' => 'التعليمات.', 'is_correct' => false],
                        ],
                        'explanation' => 'كثرة تفاصيل الطبيعة تشير إلى أن الوصف عنصر مهم في النص.',
                    ],
                    [
                        'question' => 'إذا كان الكاتب يصف القرية بأنها «نائمة في حضن الجبل»، فما الصورة التي يقدّمها؟',
                        'choices' => [
                            ['choice_text' => 'صورة توحي بالهدوء والحماية والقرب من الجبل.', 'is_correct' => true],
                            ['choice_text' => 'معلومة جغرافية حرفية فقط.', 'is_correct' => false],
                            ['choice_text' => 'إثبات أن القرية شخص حقيقي.', 'is_correct' => false],
                            ['choice_text' => 'وصفًا لعدد سكان القرية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة تجمع القرية بالجبل بطريقة مجازية توحي بالسكينة والاحتضان.',
                    ],
                    [
                        'question' => 'ما الدليل الأفضل على أن النص حزين؟',
                        'choices' => [
                            ['choice_text' => 'وجود كلمات وصور تصف الفقد والوحدة والدموع.', 'is_correct' => true],
                            ['choice_text' => 'وجود عنوان من كلمتين.', 'is_correct' => false],
                            ['choice_text' => 'كثرة الفواصل فقط.', 'is_correct' => false],
                            ['choice_text' => 'اسم الكاتب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات والصور المرتبطة بالحزن هي أدلة مباشرة على العاطفة العامة للنص.',
                    ],
                    [
                        'question' => 'إذا بدأ النص بمشكلة وانتهى بحلها، ماذا نسمّي هذا الجانب في البناء؟',
                        'choices' => [
                            ['choice_text' => 'تطور الحبكة من المشكلة إلى الحل.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'عنوان الفصل.', 'is_correct' => false],
                            ['choice_text' => 'لون الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'انتقال الأحداث من مشكلة إلى حل يمثل جزءًا أساسيًا من بناء الحبكة السردية.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة للمبتدئ في دعم تفسيره لنص أدبي؟',
                        'choices' => [
                            ['choice_text' => 'الاستناد إلى كلمة أو صورة أو حدث واضح من النص.', 'is_correct' => true],
                            ['choice_text' => 'الاعتماد على التخمين فقط.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل النص والحديث عن موضوع آخر.', 'is_correct' => false],
                            ['choice_text' => 'الاعتماد على طول القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التحليل الجيد يحتاج إلى دليل من النص، ولو كان مثالًا بسيطًا.',
                    ],
                    [
                        'question' => 'إذا وصف الكاتب البطل بأنه «هادئ لكنه شجاع»، ماذا نستطيع أن نفهم؟',
                        'choices' => [
                            ['choice_text' => 'الشخصية تجمع بين الهدوء والقدرة على مواجهة الصعوبات.', 'is_correct' => true],
                            ['choice_text' => 'الشخصية غاضبة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'الشخصية بلا صفات.', 'is_correct' => false],
                            ['choice_text' => 'البطل ليس شخصية في القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تقدم صفتين واضحتين للشخصية ويمكن استخدامهما في تحليلها.',
                    ],
                    [
                        'question' => 'في قصيدة عن الفراق، يكرر الشاعر كلمات مثل «رحيل» و«غياب» و«اشتياق». ما الذي يدعم هذا التكرار؟',
                        'choices' => [
                            ['choice_text' => 'موضوع الفراق والعاطفة المرتبطة به.', 'is_correct' => true],
                            ['choice_text' => 'وصف الطعام.', 'is_correct' => false],
                            ['choice_text' => 'الحديث عن الحساب.', 'is_correct' => false],
                            ['choice_text' => 'غياب أي موضوع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الألفاظ المتكررة المرتبطة بالرحيل والاشتياق تؤكد موضوع الفراق وشعوره.',
                    ],
                    [
                        'question' => 'أي سؤال يمثل بداية جيدة لتحليل الأسلوب؟',
                        'choices' => [
                            ['choice_text' => 'هل اللغة مباشرة أم مليئة بالصور والتشبيهات؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون غلاف الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم ثمن الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم صفحة في المكتبة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا السؤال يوجّه القارئ إلى دراسة طريقة استخدام اللغة والصور، وهما من عناصر الأسلوب.',
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
