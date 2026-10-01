<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicRhetoricBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-rhetoric')->firstOrFail();

        $quizzes = [
            [
                'title' => 'مدخل إلى علم البلاغة',
                'description' => 'تعرّف على معنى البلاغة وأهدافها وكيف يمكن أن تجعل العبارة أوضح وأقوى تأثيرًا في القارئ.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالبلاغة في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'اختيار التعبير المناسب والواضح والمؤثر للموقف.', 'is_correct' => true],
                            ['choice_text' => 'استخدام أكبر عدد ممكن من الكلمات.', 'is_correct' => false],
                            ['choice_text' => 'تغيير معنى الجملة عمدًا.', 'is_correct' => false],
                            ['choice_text' => 'حفظ النصوص دون فهمها.', 'is_correct' => false],
                        ],
                        'explanation' => 'البلاغة تهتم بملاءمة الكلام للمقام، وبأن يكون التعبير واضحًا ومؤثرًا.',
                    ],
                    [
                        'question' => 'لماذا يستخدم الكاتب صورة بلاغية بدلًا من التعبير المباشر أحيانًا؟',
                        'choices' => [
                            ['choice_text' => 'لجعل المعنى أكثر تأثيرًا وتخيّلًا.', 'is_correct' => true],
                            ['choice_text' => 'لإخفاء المعنى دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'لإطالة الجملة بلا فائدة.', 'is_correct' => false],
                            ['choice_text' => 'لتحويل النص إلى قائمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة البلاغية يمكن أن تجعل الفكرة أكثر حيوية وتساعد القارئ على تخيلها.',
                    ],
                    [
                        'question' => 'أي عبارة تبدو أكثر تأثيرًا؟',
                        'choices' => [
                            ['choice_text' => 'العلم نور.', 'is_correct' => true],
                            ['choice_text' => 'العلم شيء مفيد.', 'is_correct' => false],
                            ['choice_text' => 'العلم موجود.', 'is_correct' => false],
                            ['choice_text' => 'أنا أدرس العلم.', 'is_correct' => false],
                        ],
                        'explanation' => '«العلم نور» تستخدم صورة مجازية تجعل أثر العلم أوضح وأقوى في ذهن القارئ.',
                    ],
                    [
                        'question' => 'ما الذي يهم عند اختيار أسلوب الكلام؟',
                        'choices' => [
                            ['choice_text' => 'المقام والجمهور والغرض من الكلام.', 'is_correct' => true],
                            ['choice_text' => 'طول الجملة فقط.', 'is_correct' => false],
                            ['choice_text' => 'عدد علامات الترقيم.', 'is_correct' => false],
                            ['choice_text' => 'عدد الكلمات الصعبة.', 'is_correct' => false],
                        ],
                        'explanation' => 'البلاغة تربط أسلوب التعبير بالموقف ومن نخاطبه والهدف من الكلام.',
                    ],
                    [
                        'question' => 'إذا كان الكاتب يريد تشجيع شخص على العمل، فما الأنسب؟',
                        'choices' => [
                            ['choice_text' => 'استخدام عبارة تحفيزية واضحة ومناسبة.', 'is_correct' => true],
                            ['choice_text' => 'استخدام جملة لا علاقة لها بالعمل.', 'is_correct' => false],
                            ['choice_text' => 'تكرار السؤال نفسه بلا سبب.', 'is_correct' => false],
                            ['choice_text' => 'حذف الفعل من الجملة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشجيع يحتاج إلى صياغة تناسب غرض التحفيز وتوصل المعنى بوضوح.',
                    ],
                    [
                        'question' => 'أي عبارة مثال على التعبير المباشر أكثر من كونها صورة بلاغية؟',
                        'choices' => [
                            ['choice_text' => 'وصل الطالب إلى المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'الليل يبتسم للنجوم.', 'is_correct' => false],
                            ['choice_text' => 'العلم نور.', 'is_correct' => false],
                            ['choice_text' => 'الأسد يزأر في الميدان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تخبر عن حدث بصورة مباشرة دون تشبيه أو استعارة واضحة.',
                    ],
                    [
                        'question' => 'ماذا تحقق البلاغة الجيدة في الجملة؟',
                        'choices' => [
                            ['choice_text' => 'تجمع بين وضوح المعنى وحسن التعبير والتأثير.', 'is_correct' => true],
                            ['choice_text' => 'تجعل كل كلمة غامضة.', 'is_correct' => false],
                            ['choice_text' => 'تمنع القارئ من فهم الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'تعتمد على الكلمات الطويلة فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'البلاغة ليست تعقيد الكلام، بل تحسين التعبير بحيث يكون مناسبًا ومفهومًا ومؤثرًا.',
                    ],
                    [
                        'question' => 'إذا كان النص يخاطب طفلًا صغيرًا، فما الأفضل؟',
                        'choices' => [
                            ['choice_text' => 'استخدام لغة واضحة تناسب عمره وفهمه.', 'is_correct' => true],
                            ['choice_text' => 'استخدام ألفاظ صعبة جدًا دون شرح.', 'is_correct' => false],
                            ['choice_text' => 'تجنب أي مثال.', 'is_correct' => false],
                            ['choice_text' => 'كتابة جمل طويلة جدًا دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'ملاءمة الكلام للمخاطب جزء مهم من البلاغة.',
                    ],
                    [
                        'question' => 'أي هدف أقرب لاستخدام الأسلوب البلاغي؟',
                        'choices' => [
                            ['choice_text' => 'تقوية الفكرة أو الصورة أو الشعور.', 'is_correct' => true],
                            ['choice_text' => 'إخفاء الفكرة عن الجميع.', 'is_correct' => false],
                            ['choice_text' => 'زيادة عدد الأسطر فقط.', 'is_correct' => false],
                            ['choice_text' => 'تغيير موضوع النص.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأساليب البلاغية تستخدم غالبًا لتقوية المعنى أو الصورة أو الأثر العاطفي.',
                    ],
                    [
                        'question' => 'ما السؤال المفيد عند تحليل جملة بلاغية؟',
                        'choices' => [
                            ['choice_text' => 'ما الأثر الذي أحدثه هذا الأسلوب في المعنى؟', 'is_correct' => true],
                            ['choice_text' => 'كم حرفًا في الكلمة الأولى؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الصفحة؟', 'is_correct' => false],
                            ['choice_text' => 'كم مرة قرأت الجملة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'التحليل البلاغي لا يكتفي بتسمية الأسلوب، بل ينظر أيضًا إلى أثره في المعنى.',
                    ],
                ],
            ],
            [
                'title' => 'التشبيه وأركانه',
                'description' => 'تعلّم التشبيه في صور بسيطة وحدد المشبه والمشبه به وأداة التشبيه والمعنى الذي يوضحه.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي جملة تتضمن تشبيهًا واضحًا؟',
                        'choices' => [
                            ['choice_text' => 'الطفل كالقمر في جمال وجهه.', 'is_correct' => true],
                            ['choice_text' => 'جلس الطفل على الكرسي.', 'is_correct' => false],
                            ['choice_text' => 'قرأ الطفل الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'ذهب الطفل إلى المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود أداة التشبيه «كـ» يقارن وجه الطفل بالقمر.',
                    ],
                    [
                        'question' => 'في «العالِم كالبحر في عطائه»، ما المشبه؟',
                        'choices' => [
                            ['choice_text' => 'العالِم.', 'is_correct' => true],
                            ['choice_text' => 'البحر.', 'is_correct' => false],
                            ['choice_text' => 'العطاء.', 'is_correct' => false],
                            ['choice_text' => 'الكاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'المشبه هو الشيء الذي نريد وصفه، وهنا هو «العالِم».',
                    ],
                    [
                        'question' => 'في «العالِم كالبحر في عطائه»، ما المشبه به؟',
                        'choices' => [
                            ['choice_text' => 'البحر.', 'is_correct' => true],
                            ['choice_text' => 'العالِم.', 'is_correct' => false],
                            ['choice_text' => 'العطاء.', 'is_correct' => false],
                            ['choice_text' => 'الجملة كلها.', 'is_correct' => false],
                        ],
                        'explanation' => 'المشبه به هو الشيء الذي نقارن به المشبه، وهنا هو البحر.',
                    ],
                    [
                        'question' => 'أي كلمة تمثل أداة التشبيه في «الوجه مثل القمر»؟',
                        'choices' => [
                            ['choice_text' => 'مثل.', 'is_correct' => true],
                            ['choice_text' => 'الوجه.', 'is_correct' => false],
                            ['choice_text' => 'القمر.', 'is_correct' => false],
                            ['choice_text' => 'الجملة كلها.', 'is_correct' => false],
                        ],
                        'explanation' => '«مثل» أداة تشبيه تربط بين الوجه والقمر.',
                    ],
                    [
                        'question' => 'ما الهدف من قولنا «الجندي كالأسد في الشجاعة»؟',
                        'choices' => [
                            ['choice_text' => 'إبراز شجاعة الجندي بتشبيهه بالأسد.', 'is_correct' => true],
                            ['choice_text' => 'الإخبار أن الجندي حيوان.', 'is_correct' => false],
                            ['choice_text' => 'وصف لون ملابس الجندي.', 'is_correct' => false],
                            ['choice_text' => 'تحديد مكان الجندي.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه يوضح صفة الشجاعة من خلال ربط الجندي بالأسد.',
                    ],
                    [
                        'question' => 'أي عبارة تستخدم تشبيهًا مناسبًا للهدوء؟',
                        'choices' => [
                            ['choice_text' => 'كان صوته كالنسيم في هدوئه.', 'is_correct' => true],
                            ['choice_text' => 'كان صوته سيارة.', 'is_correct' => false],
                            ['choice_text' => 'كان صوته قلمًا.', 'is_correct' => false],
                            ['choice_text' => 'كان صوته سريعًا في الكتابة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تشبيه الصوت بالنسيم ينقل إحساسًا باللطف والهدوء.',
                    ],
                    [
                        'question' => 'في «الطالب كالنحلة في نشاطه»، ما الصفة المشتركة المقصودة؟',
                        'choices' => [
                            ['choice_text' => 'النشاط.', 'is_correct' => true],
                            ['choice_text' => 'اللون.', 'is_correct' => false],
                            ['choice_text' => 'الحجم.', 'is_correct' => false],
                            ['choice_text' => 'العمر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة توضح أن الطالب يشبه النحلة في النشاط والحركة.',
                    ],
                    [
                        'question' => 'أي جملة تشرح التشبيه بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'هو مقارنة شيء بشيء آخر لبيان صفة مشتركة بطريقة مؤثرة.', 'is_correct' => true],
                            ['choice_text' => 'هو حذف كل الأفعال من الجملة.', 'is_correct' => false],
                            ['choice_text' => 'هو تكرار الكلمة نفسها بلا معنى.', 'is_correct' => false],
                            ['choice_text' => 'هو سؤال عن مكان الشيء.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه يقوم على المقارنة بين طرفين لإبراز صفة أو معنى مشترك.',
                    ],
                    [
                        'question' => 'إذا قلت «كانت الفتاة كالفراشة في خفتها»، فما الذي يتبادر إلى الذهن؟',
                        'choices' => [
                            ['choice_text' => 'أن حركتها كانت خفيفة ورشيقة.', 'is_correct' => true],
                            ['choice_text' => 'أنها كانت تطير حقيقةً.', 'is_correct' => false],
                            ['choice_text' => 'أنها كانت ترتدي جناحين.', 'is_correct' => false],
                            ['choice_text' => 'أنها كانت تعيش في الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه بالفراشة هنا لنقل معنى الخفة والرشاقة، لا لإثبات الطيران.',
                    ],
                    [
                        'question' => 'أي جملة لا تحتوي على تشبيه صريح؟',
                        'choices' => [
                            ['choice_text' => 'العلم نور.', 'is_correct' => true],
                            ['choice_text' => 'الوجه كالقمر.', 'is_correct' => false],
                            ['choice_text' => 'الجندي كالأسد.', 'is_correct' => false],
                            ['choice_text' => 'صوته مثل النسيم.', 'is_correct' => false],
                        ],
                        'explanation' => '«العلم نور» صورة مجازية مباشرة وليست تشبيهًا صريحًا بأداة مثل «كـ» أو «مثل».',
                    ],
                ],
            ],
            [
                'title' => 'الاستعارة والتشخيص',
                'description' => 'تدرّب على التعرف على الاستعارة والتشخيص وفهم أثرهما في التعبير الأدبي.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي عبارة تعد استعارة بسيطة؟',
                        'choices' => [
                            ['choice_text' => 'العلم نور.', 'is_correct' => true],
                            ['choice_text' => 'العلم مفيد للطالب.', 'is_correct' => false],
                            ['choice_text' => 'قرأ الطالب كتابًا.', 'is_correct' => false],
                            ['choice_text' => 'ذهب المعلم إلى الفصل.', 'is_correct' => false],
                        ],
                        'explanation' => 'في «العلم نور» صُوّر العلم كأنه نور لما بينهما من أثر في الهداية والإضاءة المعنوية.',
                    ],
                    [
                        'question' => 'في «ابتسم الصباح»، ما الأسلوب البلاغي الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص الصباح.', 'is_correct' => true],
                            ['choice_text' => 'تعريف علمي.', 'is_correct' => false],
                            ['choice_text' => 'سؤال استفهامي.', 'is_correct' => false],
                            ['choice_text' => 'نفي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الابتسام من صفات الإنسان، وإسناده إلى الصباح يسمى تشخيصًا.',
                    ],
                    [
                        'question' => 'في «المدينة نائمة»، ماذا فعل الكاتب؟',
                        'choices' => [
                            ['choice_text' => 'عامل المدينة كأنها إنسان ينام.', 'is_correct' => true],
                            ['choice_text' => 'قدم معلومة علمية عن المدينة.', 'is_correct' => false],
                            ['choice_text' => 'ذكر عدد سكان المدينة.', 'is_correct' => false],
                            ['choice_text' => 'استخدم سؤالًا مباشرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكاتب أعطى المدينة صفة بشرية، وهذا هو التشخيص.',
                    ],
                    [
                        'question' => 'ما فائدة الاستعارة في النص؟',
                        'choices' => [
                            ['choice_text' => 'تقوية الصورة ونقل المعنى بطريقة أكثر حيوية.', 'is_correct' => true],
                            ['choice_text' => 'منع القارئ من فهم أي شيء.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'زيادة طول النص فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاستعارة تجعل المعنى مجسدًا أو محسوسًا وتمنحه قوة تصويرية.',
                    ],
                    [
                        'question' => 'أي عبارة فيها تشخيص؟',
                        'choices' => [
                            ['choice_text' => 'تحدثت الأشجار مع الريح.', 'is_correct' => true],
                            ['choice_text' => 'تحركت الريح بين الأشجار.', 'is_correct' => false],
                            ['choice_text' => 'كانت الأشجار طويلة.', 'is_correct' => false],
                            ['choice_text' => 'زرع الفلاح الأشجار.', 'is_correct' => false],
                        ],
                        'explanation' => 'إسناد الكلام إلى الأشجار يجعلها تتصرف كأنها بشر.',
                    ],
                    [
                        'question' => 'في «الوقت يركض»، ما المعنى المقصود غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'الوقت يمر بسرعة.', 'is_correct' => true],
                            ['choice_text' => 'الوقت إنسان حقيقي.', 'is_correct' => false],
                            ['choice_text' => 'الوقت يمارس الرياضة.', 'is_correct' => false],
                            ['choice_text' => 'الساعات تتحرك على الطريق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة صورة مجازية تعبر عن سرعة مرور الوقت.',
                    ],
                    [
                        'question' => 'أي عبارة أقرب إلى التعبير الحقيقي لا المجازي؟',
                        'choices' => [
                            ['choice_text' => 'جلس الطفل تحت الشجرة.', 'is_correct' => true],
                            ['choice_text' => 'الليل يمد يده.', 'is_correct' => false],
                            ['choice_text' => 'الأمل يشرق في القلب.', 'is_correct' => false],
                            ['choice_text' => 'المدينة تستيقظ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تصف حدثًا يمكن وقوعه حرفيًا دون صورة مجازية واضحة.',
                    ],
                    [
                        'question' => 'في «زرع المعلم الأمل في نفوس طلابه»، ماذا تعني العبارة مجازيًا؟',
                        'choices' => [
                            ['choice_text' => 'غرس فيهم الأمل وشجعهم عليه.', 'is_correct' => true],
                            ['choice_text' => 'زرع نباتًا داخل المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'أعطاهم بذورًا.', 'is_correct' => false],
                            ['choice_text' => 'طلب منهم العمل في الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => '«زرع الأمل» استعارة عن إدخال الأمل وتشجيعه في نفوس الطلاب.',
                    ],
                    [
                        'question' => 'لماذا لا نفهم «الوقت يركض» حرفيًا؟',
                        'choices' => [
                            ['choice_text' => 'لأن الكاتب استخدم صورة مجازية ليصف سرعة مرور الوقت.', 'is_correct' => true],
                            ['choice_text' => 'لأن الوقت لا وجود له.', 'is_correct' => false],
                            ['choice_text' => 'لأن كلمة «يركض» لا معنى لها.', 'is_correct' => false],
                            ['choice_text' => 'لأن الجملة سؤال.', 'is_correct' => false],
                        ],
                        'explanation' => 'الركض هنا صورة مجازية تصف سرعة مرور الوقت، وليس حركة جسدية حقيقية.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد في كشف التشخيص؟',
                        'choices' => [
                            ['choice_text' => 'هل أُسند إلى شيء غير إنساني فعل أو صفة بشرية؟', 'is_correct' => true],
                            ['choice_text' => 'هل الجملة طويلة؟', 'is_correct' => false],
                            ['choice_text' => 'هل فيها رقم؟', 'is_correct' => false],
                            ['choice_text' => 'هل الكاتب ذكر اسمه؟', 'is_correct' => false],
                        ],
                        'explanation' => 'التشخيص يقوم على منح الأشياء أو الظواهر صفات الإنسان وأفعاله.',
                    ],
                ],
            ],
            [
                'title' => 'الطباق والمقابلة',
                'description' => 'تعرّف على الطباق والمقابلة من خلال الألفاظ المتضادة ودورهما في تقوية المعنى.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي زوج من الكلمات يمثل طباقًا؟',
                        'choices' => [
                            ['choice_text' => 'الليل والنهار.', 'is_correct' => true],
                            ['choice_text' => 'الكتاب والقلم.', 'is_correct' => false],
                            ['choice_text' => 'البيت والباب.', 'is_correct' => false],
                            ['choice_text' => 'الشجرة والحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الليل والنهار متضادان في المعنى، ولذلك يشكلان طباقًا.',
                    ],
                    [
                        'question' => 'في «يعرف الخير والشر»، ما الأسلوب البلاغي؟',
                        'choices' => [
                            ['choice_text' => 'الطباق.', 'is_correct' => true],
                            ['choice_text' => 'التشبيه.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                        ],
                        'explanation' => '«الخير» و«الشر» متضادان، وهذا مثال واضح على الطباق.',
                    ],
                    [
                        'question' => 'ما أثر الطباق في الكلام؟',
                        'choices' => [
                            ['choice_text' => 'إبراز المعنى وتقوية المقارنة بين المتضادين.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء المعنى.', 'is_correct' => false],
                            ['choice_text' => 'تحويل الكلام إلى سؤال.', 'is_correct' => false],
                            ['choice_text' => 'منع القارئ من فهم العلاقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمع بين المتضادين يجعل الفرق بينهما أوضح ويقوي الفكرة.',
                    ],
                    [
                        'question' => 'أي عبارة تحتوي على مقابلة؟',
                        'choices' => [
                            ['choice_text' => 'يكرم الكريم ويهين اللئيم.', 'is_correct' => true],
                            ['choice_text' => 'جلس الطفل وقرأ.', 'is_correct' => false],
                            ['choice_text' => 'دخل الطالب الفصل.', 'is_correct' => false],
                            ['choice_text' => 'أحب الشاي والقهوة.', 'is_correct' => false],
                        ],
                        'explanation' => 'في العبارة مجموعتان متقابلتان: يكرم/يهين، والكريم/اللئيم، وهذا أقرب إلى المقابلة.',
                    ],
                    [
                        'question' => 'ما الفرق المبسط بين الطباق والمقابلة؟',
                        'choices' => [
                            ['choice_text' => 'الطباق يقوم على تضاد لفظين غالبًا، والمقابلة أوسع وقد تجمع أكثر من زوج متقابل.', 'is_correct' => true],
                            ['choice_text' => 'لا فرق بينهما إطلاقًا.', 'is_correct' => false],
                            ['choice_text' => 'الطباق خاص بالأسئلة فقط.', 'is_correct' => false],
                            ['choice_text' => 'المقابلة تعني التشبيه.', 'is_correct' => false],
                        ],
                        'explanation' => 'الطباق أبسط وأضيق، بينما المقابلة قد تعرض أكثر من معنى في جهة ثم ما يقابله في الجهة الأخرى.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم التضاد بطريقة واضحة؟',
                        'choices' => [
                            ['choice_text' => 'يحب الصدق ويكره الكذب.', 'is_correct' => true],
                            ['choice_text' => 'يحب القراءة والكتابة.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى السوق ثم عاد.', 'is_correct' => false],
                            ['choice_text' => 'جلس قرب النافذة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصدق والكذب متضادان، ولذلك يبرز التضاد في الجملة.',
                    ],
                    [
                        'question' => 'لماذا يستخدم الكاتب الطباق؟',
                        'choices' => [
                            ['choice_text' => 'لتقوية الفكرة وإظهار الفرق بين معنيين.', 'is_correct' => true],
                            ['choice_text' => 'لإخفاء المعنى.', 'is_correct' => false],
                            ['choice_text' => 'لمنع التكرار فقط.', 'is_correct' => false],
                            ['choice_text' => 'لتحويل النص إلى قائمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التضاد يساعد على إبراز الفروق والمعاني المتقابلة.',
                    ],
                    [
                        'question' => 'أي عبارة لا تحتوي على تضاد؟',
                        'choices' => [
                            ['choice_text' => 'العلم والكتاب.', 'is_correct' => true],
                            ['choice_text' => 'الحياة والموت.', 'is_correct' => false],
                            ['choice_text' => 'الحق والباطل.', 'is_correct' => false],
                            ['choice_text' => 'الحضور والغياب.', 'is_correct' => false],
                        ],
                        'explanation' => 'العلم والكتاب ليست بينهما علاقة تضاد، بينما الأزواج الأخرى متضادة.',
                    ],
                    [
                        'question' => 'في «يضحك في الفرح ويبكي في الحزن»، ما الذي يبرز المعنى؟',
                        'choices' => [
                            ['choice_text' => 'التقابل بين الفرح والحزن والضحك والبكاء.', 'is_correct' => true],
                            ['choice_text' => 'تشبيه الشخص بالقمر.', 'is_correct' => false],
                            ['choice_text' => 'استخدام النداء.', 'is_correct' => false],
                            ['choice_text' => 'وصف مكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعتمد على علاقات متقابلة لتوضيح اختلاف حال الإنسان.',
                    ],
                    [
                        'question' => 'ما السؤال المناسب لتحليل الطباق؟',
                        'choices' => [
                            ['choice_text' => 'ما الكلمتان المتضادتان، وما الذي أبرز وجودهما معًا؟', 'is_correct' => true],
                            ['choice_text' => 'كم عدد حروف العنوان؟', 'is_correct' => false],
                            ['choice_text' => 'أين طُبع الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'من قرأ النص أولًا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'تحليل الطباق يشمل تحديد التضاد وبيان أثره في المعنى.',
                    ],
                ],
            ],
            [
                'title' => 'الجناس والسجع',
                'description' => 'تدرّب على التعرف على الجناس والسجع بصورة مبسطة وفهم أثر التشابه الصوتي في الكلام.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالجناس في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'تشابه لفظين في الصوت أو الشكل مع اختلاف المعنى.', 'is_correct' => true],
                            ['choice_text' => 'تضاد كلمتين في المعنى.', 'is_correct' => false],
                            ['choice_text' => 'مقارنة شيء بشيء.', 'is_correct' => false],
                            ['choice_text' => 'استخدام سؤال في نهاية الجملة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجناس يعتمد على تشابه اللفظ مع اختلاف المعنى بين الكلمتين.',
                    ],
                    [
                        'question' => 'أي زوج أقرب إلى الجناس؟',
                        'choices' => [
                            ['choice_text' => 'سَاعة وساعة بمعنيين مختلفين حسب السياق.', 'is_correct' => true],
                            ['choice_text' => 'ليل ونهار.', 'is_correct' => false],
                            ['choice_text' => 'كبير وصغير.', 'is_correct' => false],
                            ['choice_text' => 'بحر ونهر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجناس يقوم على تشابه اللفظ مع اختلاف الدلالة، أما الأزواج الأخرى فليست من هذا النوع.',
                    ],
                    [
                        'question' => 'ما الهدف من استخدام الجناس؟',
                        'choices' => [
                            ['choice_text' => 'إضفاء جمال صوتي وجذب الانتباه إلى العبارة.', 'is_correct' => true],
                            ['choice_text' => 'إظهار التضاد فقط.', 'is_correct' => false],
                            ['choice_text' => 'شرح مكان الحدث.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء المعنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجناس يمنح العبارة جرْسًا صوتيًا لطيفًا ويجعلها أسهل في التذكر أحيانًا.',
                    ],
                    [
                        'question' => 'ما المقصود بالسجع؟',
                        'choices' => [
                            ['choice_text' => 'تشابه أواخر الجمل في النثر بطريقة تمنح الكلام إيقاعًا.', 'is_correct' => true],
                            ['choice_text' => 'مقارنة بين شخصين.', 'is_correct' => false],
                            ['choice_text' => 'تضاد بين كلمتين.', 'is_correct' => false],
                            ['choice_text' => 'سؤال عن المكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'السجع في النثر يقوم على تقارب أو تشابه أواخر الجمل، فيمنحها موسيقى صوتية.',
                    ],
                    [
                        'question' => 'أي مثال أقرب إلى السجع؟',
                        'choices' => [
                            ['choice_text' => 'العلم نور، والجهل شرور.', 'is_correct' => true],
                            ['choice_text' => 'ذهب الطالب إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'قرأت الكتاب في البيت.', 'is_correct' => false],
                            ['choice_text' => 'جلست قرب النافذة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تشابه نهايتي «نور» و«شرور» يمنح العبارة جرسًا متقاربًا ويجعلها مثالًا مبسطًا على السجع.',
                    ],
                    [
                        'question' => 'هل السجع خاص بالشعر فقط؟',
                        'choices' => [
                            ['choice_text' => 'لا، يظهر أيضًا في النثر.', 'is_correct' => true],
                            ['choice_text' => 'نعم، لا يوجد إلا في الشعر.', 'is_correct' => false],
                            ['choice_text' => 'نعم، ولا يوجد في الخطب.', 'is_correct' => false],
                            ['choice_text' => 'لا، لكنه لا يظهر في أي نص عربي.', 'is_correct' => false],
                        ],
                        'explanation' => 'السجع من المحسنات التي تظهر في النثر، خاصة في بعض الخطب والعبارات الأدبية.',
                    ],
                    [
                        'question' => 'أي عنصر يلفت الانتباه إليه السجع؟',
                        'choices' => [
                            ['choice_text' => 'الإيقاع الصوتي لنهايات الجمل.', 'is_correct' => true],
                            ['choice_text' => 'عدد الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'مكان القصة.', 'is_correct' => false],
                            ['choice_text' => 'زمن الحدث.', 'is_correct' => false],
                        ],
                        'explanation' => 'السجع يجعل أواخر الجمل متقاربة في الصوت، ولذلك يبرز الإيقاع.',
                    ],
                    [
                        'question' => 'لماذا لا يكون كل تشابه بين كلمتين جناسًا؟',
                        'choices' => [
                            ['choice_text' => 'لأن الجناس يحتاج إلى تشابه لفظي مع اختلاف في المعنى أيضًا.', 'is_correct' => true],
                            ['choice_text' => 'لأن الجناس يعني التضاد.', 'is_correct' => false],
                            ['choice_text' => 'لأن الجناس خاص بالأفعال.', 'is_correct' => false],
                            ['choice_text' => 'لأن أي كلمتين متجاورتين هما جناس.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشابه الصوتي وحده لا يكفي؛ يجب أن تختلف الدلالة حتى نعده جناسًا.',
                    ],
                    [
                        'question' => 'إذا قال الكاتب عبارة ذات نهايات متقاربة صوتيًا، فما الأسلوب الذي يمكن التفكير فيه؟',
                        'choices' => [
                            ['choice_text' => 'السجع.', 'is_correct' => true],
                            ['choice_text' => 'الطباق.', 'is_correct' => false],
                            ['choice_text' => 'التشبيه.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقارب أصوات أواخر الجمل هو من العلامات الأساسية للسجع.',
                    ],
                    [
                        'question' => 'ما الفائدة العامة من المحسنات الصوتية مثل الجناس والسجع؟',
                        'choices' => [
                            ['choice_text' => 'تحسين جرس الكلام وزيادة أثره وسهولة تذكر بعض العبارات.', 'is_correct' => true],
                            ['choice_text' => 'تغيير الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'إخفاء جميع الأفكار.', 'is_correct' => false],
                            ['choice_text' => 'تحويل النثر إلى خبر.', 'is_correct' => false],
                        ],
                        'explanation' => 'المحسنات الصوتية تمنح الكلام نغمة وإيقاعًا ويمكن أن تزيد من جاذبيته.',
                    ],
                ],
            ],
            [
                'title' => 'الأساليب الإنشائية وأغراضها',
                'description' => 'تعرّف على الاستفهام والأمر والنهي والنداء والتمني، وكيف يفيد كل أسلوب في الموقف.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي جملة أسلوب استفهام؟',
                        'choices' => [
                            ['choice_text' => 'متى يبدأ الدرس؟', 'is_correct' => true],
                            ['choice_text' => 'ابدأ الدرس.', 'is_correct' => false],
                            ['choice_text' => 'لا تهمل واجبك.', 'is_correct' => false],
                            ['choice_text' => 'يا طالب العلم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تطلب معرفة وقت بداية الدرس، فهي استفهام.',
                    ],
                    [
                        'question' => 'أي جملة أسلوب أمر؟',
                        'choices' => [
                            ['choice_text' => 'اقرأ النص بعناية.', 'is_correct' => true],
                            ['choice_text' => 'هل قرأت النص؟', 'is_correct' => false],
                            ['choice_text' => 'لا تهمل النص.', 'is_correct' => false],
                            ['choice_text' => 'يا صديقي.', 'is_correct' => false],
                        ],
                        'explanation' => '«اقرأ» فعل أمر يطلب من المخاطب القيام بالفعل.',
                    ],
                    [
                        'question' => 'أي جملة أسلوب نهي؟',
                        'choices' => [
                            ['choice_text' => 'لا تهمل درسك.', 'is_correct' => true],
                            ['choice_text' => 'راجع درسك.', 'is_correct' => false],
                            ['choice_text' => 'هل راجعت درسك؟', 'is_correct' => false],
                            ['choice_text' => 'يا طالب.', 'is_correct' => false],
                        ],
                        'explanation' => '«لا تهمل» نهي لأن «لا» دخلت على الفعل المضارع لمنع الفعل.',
                    ],
                    [
                        'question' => 'أي جملة تحتوي على نداء؟',
                        'choices' => [
                            ['choice_text' => 'يا أخي، انتبه.', 'is_correct' => true],
                            ['choice_text' => 'انتبه جيدًا.', 'is_correct' => false],
                            ['choice_text' => 'هل انتبهت؟', 'is_correct' => false],
                            ['choice_text' => 'لا تتأخر.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا أخي» نداء مباشر للمخاطب.',
                    ],
                    [
                        'question' => 'أي عبارة تعبّر عن التمني؟',
                        'choices' => [
                            ['choice_text' => 'ليت السلام يسود العالم.', 'is_correct' => true],
                            ['choice_text' => 'احفظ واجبك.', 'is_correct' => false],
                            ['choice_text' => 'هل وصلت؟', 'is_correct' => false],
                            ['choice_text' => 'لا تتأخر.', 'is_correct' => false],
                        ],
                        'explanation' => '«ليت» من أدوات التمني، والجملة تتمنى تحقق السلام.',
                    ],
                    [
                        'question' => 'قد يُستخدم الاستفهام أحيانًا للتعبير عن التعجب. أي مثال أقرب؟',
                        'choices' => [
                            ['choice_text' => 'كيف يكون هذا الجمال!', 'is_correct' => true],
                            ['choice_text' => 'متى يبدأ الدرس؟', 'is_correct' => false],
                            ['choice_text' => 'أين كتابك؟', 'is_correct' => false],
                            ['choice_text' => 'هل وصلت إلى البيت؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة هنا ليست لطلب معلومة عادية، بل للتعبير عن الدهشة والإعجاب.',
                    ],
                    [
                        'question' => 'ما الغرض الأقرب من «احفظ الأمانة»؟',
                        'choices' => [
                            ['choice_text' => 'النصح والإرشاد.', 'is_correct' => true],
                            ['choice_text' => 'طلب مكان.', 'is_correct' => false],
                            ['choice_text' => 'إظهار التعجب.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأمر هنا لا يقصد مجرد إصدار أمر عملي، بل يحمل معنى النصيحة والإرشاد.',
                    ],
                    [
                        'question' => 'في «لا تقطع حديث غيرك»، ما الغرض؟',
                        'choices' => [
                            ['choice_text' => 'النصح والتهذيب من خلال النهي.', 'is_correct' => true],
                            ['choice_text' => 'طلب معلومة.', 'is_correct' => false],
                            ['choice_text' => 'التعجب.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهي هنا يوجه إلى سلوك مهذب، لذلك يحمل معنى النصح.',
                    ],
                    [
                        'question' => 'في «يا ليت الشباب يعود يومًا»، ما الأسلوب؟',
                        'choices' => [
                            ['choice_text' => 'التمني.', 'is_correct' => true],
                            ['choice_text' => 'النهي.', 'is_correct' => false],
                            ['choice_text' => 'الأمر.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام الحقيقي.', 'is_correct' => false],
                        ],
                        'explanation' => '«ليت» تدل على التمني، والجملة تتمنى عودة الشباب.',
                    ],
                    [
                        'question' => 'لماذا لا يكفي أن تسمي الأسلوب الإنشائي؟',
                        'choices' => [
                            ['choice_text' => 'لأن فهم الغرض الذي يؤديه الأسلوب يوضح المعنى المقصود.', 'is_correct' => true],
                            ['choice_text' => 'لأن الاسم لا يهم.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل الأساليب لها غرض واحد.', 'is_correct' => false],
                            ['choice_text' => 'لأن الأساليب الإنشائية بلا معنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأسلوب الواحد قد يؤدي أغراضًا مختلفة، ولذلك يحتاج التحليل إلى معرفة المقصود من السياق.',
                    ],
                ],
            ],
            [
                'title' => 'تطبيق بلاغي في نصوص قصيرة',
                'description' => 'طبّق ما تعلمته على عبارات أدبية قصيرة تجمع بين الصور والمحسنات والأساليب.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «العلم يفتح أبواب المستقبل.» ما الصورة البلاغية الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'استعارة، إذ صُوّر العلم كأنه مفتاح أو سبب لفتح الأبواب.', 'is_correct' => true],
                            ['choice_text' => 'طباق بين العلم والمستقبل.', 'is_correct' => false],
                            ['choice_text' => 'نداء.', 'is_correct' => false],
                            ['choice_text' => 'استفهام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأبواب هنا ليست أبوابًا مادية؛ العبارة تصور العلم وسيلة للوصول إلى فرص المستقبل.',
                    ],
                    [
                        'question' => 'اقرأ: «الجندي كالأسد في شجاعته.» ما الأسلوب؟',
                        'choices' => [
                            ['choice_text' => 'تشبيه.', 'is_correct' => true],
                            ['choice_text' => 'استعارة.', 'is_correct' => false],
                            ['choice_text' => 'سجع.', 'is_correct' => false],
                            ['choice_text' => 'طباق.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود «كـ» مع المقارنة بين الجندي والأسد يجعلها تشبيهًا صريحًا.',
                    ],
                    [
                        'question' => 'اقرأ: «ضحك الصباح وغنى الطير.» ما الصورة الأبرز في «ضحك الصباح»؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص الصباح.', 'is_correct' => true],
                            ['choice_text' => 'طباق.', 'is_correct' => false],
                            ['choice_text' => 'استفهام.', 'is_correct' => false],
                            ['choice_text' => 'جناس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصباح لا يضحك حقيقة، فإسناد الضحك إليه تشخيص.',
                    ],
                    [
                        'question' => 'اقرأ: «يحب الخير ويكره الشر.» ما المحسن البلاغي؟',
                        'choices' => [
                            ['choice_text' => 'الطباق.', 'is_correct' => true],
                            ['choice_text' => 'التشبيه.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'السجع.', 'is_correct' => false],
                        ],
                        'explanation' => '«الخير» و«الشر» متضادان، لذلك يوجد طباق.',
                    ],
                    [
                        'question' => 'اقرأ: «يا طالب العلم، اجتهد.» ما الأسلوب الأساسي في بداية العبارة؟',
                        'choices' => [
                            ['choice_text' => 'النداء.', 'is_correct' => true],
                            ['choice_text' => 'النفي.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا طالب العلم» نداء للمخاطب.',
                    ],
                    [
                        'question' => 'اقرأ: «لا تؤجل عمل اليوم إلى الغد.» ما الغرض الأقرب من النهي؟',
                        'choices' => [
                            ['choice_text' => 'النصح والحث على عدم التسويف.', 'is_correct' => true],
                            ['choice_text' => 'طلب معلومة.', 'is_correct' => false],
                            ['choice_text' => 'التعجب.', 'is_correct' => false],
                            ['choice_text' => 'وصف مكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهي هنا يقدم نصيحة واضحة حول تنظيم العمل وتجنب التأجيل.',
                    ],
                    [
                        'question' => 'اقرأ: «العقل سراج صاحبه.» ما الفكرة الأقرب للصورة؟',
                        'choices' => [
                            ['choice_text' => 'العقل ينير للإنسان طريق التفكير والهداية.', 'is_correct' => true],
                            ['choice_text' => 'العقل مصباح حقيقي.', 'is_correct' => false],
                            ['choice_text' => 'السراج آلة للكتابة.', 'is_correct' => false],
                            ['choice_text' => 'الجملة تتحدث عن الطقس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة تجعل العقل كأنه سراج يضيء للإنسان طريق الفهم والتفكير.',
                    ],
                    [
                        'question' => 'اقرأ: «بالصدق يعلو المرء، وبالكذب يهبط.» ما الذي يبرز؟',
                        'choices' => [
                            ['choice_text' => 'المقابلة والتضاد بين الصدق والكذب والعلو والهبوط.', 'is_correct' => true],
                            ['choice_text' => 'التشبيه فقط.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'السؤال.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تجمع أكثر من زوج متقابل، لذلك يظهر فيها معنى المقابلة والتضاد.',
                    ],
                    [
                        'question' => 'اقرأ: «من جدّ وجد.» ما القيمة البلاغية الأساسية في العبارة؟',
                        'choices' => [
                            ['choice_text' => 'الإيجاز والحكمة مع جرس لفظي سهل التذكر.', 'is_correct' => true],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'التشخيص.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة قصيرة ومكثفة، وتحمل حكمة واضحة مع تشابه صوتي يساعد على حفظها.',
                    ],
                    [
                        'question' => 'ما أفضل سؤال عند تحليل عبارة مثل «الليل يهمس»؟',
                        'choices' => [
                            ['choice_text' => 'ما الصفة الإنسانية التي أُسندت إلى الليل، وما أثرها؟', 'is_correct' => true],
                            ['choice_text' => 'كم عدد حروف كلمة الليل؟', 'is_correct' => false],
                            ['choice_text' => 'أين طُبع الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم مرة وردت الكلمة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا السؤال يقود إلى فهم التشخيص وأثره في تحويل الليل إلى صورة حية.',
                    ],
                ],
            ],
            [
                'title' => 'المحسنات والأساليب في السياق',
                'description' => 'ميّز بين الأنواع البلاغية المختلفة داخل جمل قصيرة ولاحظ الوظيفة التي يؤديها كل أسلوب.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أي جملة تعتمد على التضاد؟',
                        'choices' => [
                            ['choice_text' => 'يحيي الأمل ويموت اليأس.', 'is_correct' => true],
                            ['choice_text' => 'قرأ الطالب الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'سافر الأب إلى المدينة.', 'is_correct' => false],
                            ['choice_text' => 'جلس الطفل قرب النافذة.', 'is_correct' => false],
                        ],
                        'explanation' => 'يحيي/يموت والأمل/اليأس تقدم تقابلًا واضحًا في المعنى.',
                    ],
                    [
                        'question' => 'أي جملة تعتمد على التشبيه؟',
                        'choices' => [
                            ['choice_text' => 'وجهه كالبدر.', 'is_correct' => true],
                            ['choice_text' => 'العلم نور.', 'is_correct' => false],
                            ['choice_text' => 'المدينة نائمة.', 'is_correct' => false],
                            ['choice_text' => 'يا طالب، اجتهد.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود أداة التشبيه «كـ» يجعل «وجهه كالبدر» تشبيهًا صريحًا.',
                    ],
                    [
                        'question' => 'أي جملة فيها استعارة؟',
                        'choices' => [
                            ['choice_text' => 'الأمل يضيء القلب.', 'is_correct' => true],
                            ['choice_text' => 'الطالب كالنحلة.', 'is_correct' => false],
                            ['choice_text' => 'هل وصلت؟', 'is_correct' => false],
                            ['choice_text' => 'لا تهمل عملك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأمل لا يضيء حقيقةً، لكن الكاتب يصوره كشيء مضيء يمنح القلب نورًا معنويًا.',
                    ],
                    [
                        'question' => 'أي عبارة فيها نداء؟',
                        'choices' => [
                            ['choice_text' => 'يا صديقي، تمهل.', 'is_correct' => true],
                            ['choice_text' => 'تمهل قليلًا.', 'is_correct' => false],
                            ['choice_text' => 'هل تمهلت؟', 'is_correct' => false],
                            ['choice_text' => 'لا تتعجل.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا صديقي» أسلوب نداء.',
                    ],
                    [
                        'question' => 'أي عبارة فيها نهي؟',
                        'choices' => [
                            ['choice_text' => 'لا ترفع صوتك.', 'is_correct' => true],
                            ['choice_text' => 'ارفع صوتك.', 'is_correct' => false],
                            ['choice_text' => 'هل رفعت صوتك؟', 'is_correct' => false],
                            ['choice_text' => 'يا رجل.', 'is_correct' => false],
                        ],
                        'explanation' => '«لا ترفع» نهي لأنه يطلب ترك الفعل.',
                    ],
                    [
                        'question' => 'أي عبارة فيها استفهام؟',
                        'choices' => [
                            ['choice_text' => 'أين تسكن؟', 'is_correct' => true],
                            ['choice_text' => 'اسكن هنا.', 'is_correct' => false],
                            ['choice_text' => 'لا تسكن بعيدًا.', 'is_correct' => false],
                            ['choice_text' => 'يا جار.', 'is_correct' => false],
                        ],
                        'explanation' => '«أين» أداة استفهام، والجملة تطلب معرفة مكان السكن.',
                    ],
                    [
                        'question' => 'أي عبارة أقرب إلى السجع؟',
                        'choices' => [
                            ['choice_text' => 'العلم رفعة، والجهل ضعة.', 'is_correct' => true],
                            ['choice_text' => 'الولد في البيت.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'قرأ الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقارب نهايتي «رفعة» و«ضعة» يمنح العبارة جرسًا متشابهًا، وهو مثال مبسط على السجع.',
                    ],
                    [
                        'question' => 'أي عبارة أقرب إلى الجناس؟',
                        'choices' => [
                            ['choice_text' => 'همّته عالية، وهمّه قليل.', 'is_correct' => true],
                            ['choice_text' => 'ليل ونهار.', 'is_correct' => false],
                            ['choice_text' => 'البيت والمدرسة.', 'is_correct' => false],
                            ['choice_text' => 'السماء والأرض.', 'is_correct' => false],
                        ],
                        'explanation' => '«همّته» و«همّه» متقاربتان في اللفظ مع اختلاف المعنى، وهو ما يقربهما من الجناس.',
                    ],
                    [
                        'question' => 'في «هل يستوي المجتهد والمهمل؟»، ما الأثر المحتمل للاستفهام؟',
                        'choices' => [
                            ['choice_text' => 'إثارة التفكير وإبراز الفرق بينهما.', 'is_correct' => true],
                            ['choice_text' => 'طلب وقت الاجتماع فقط.', 'is_correct' => false],
                            ['choice_text' => 'إعطاء أمر مباشر.', 'is_correct' => false],
                            ['choice_text' => 'وصف مكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاستفهام هنا ليس المقصود منه جمع معلومة بسيطة فقط، بل دفع القارئ إلى التفكير في الفرق.',
                    ],
                    [
                        'question' => 'أي عبارة تقدم نصيحة في صورة أمر؟',
                        'choices' => [
                            ['choice_text' => 'احفظ وقتك تستفد منه.', 'is_correct' => true],
                            ['choice_text' => 'هل حفظت وقتك؟', 'is_correct' => false],
                            ['choice_text' => 'لا تضيع وقتك.', 'is_correct' => false],
                            ['choice_text' => 'يا أخي.', 'is_correct' => false],
                        ],
                        'explanation' => '«احفظ وقتك» أمر يحمل معنى النصح والإرشاد.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في البلاغة',
                'description' => 'اختبر قدرتك على التعرف على الصور والمحسنات والأساليب وفهم أثرها في المعنى.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'إذا قال الكاتب «البطل كالأسد»، فما أول شيء تبحث عنه؟',
                        'choices' => [
                            ['choice_text' => 'الصفة المشتركة التي يريد الكاتب إبرازها.', 'is_correct' => true],
                            ['choice_text' => 'عدد صفحات الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'اسم الأسد الحقيقي.', 'is_correct' => false],
                            ['choice_text' => 'مكان الطباعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'في التشبيه نبحث عن الصفة التي ربطت بين المشبه والمشبه به، مثل الشجاعة.',
                    ],
                    [
                        'question' => 'في «تحدثت الأيام عن أثره»، ما الصورة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص الأيام.', 'is_correct' => true],
                            ['choice_text' => 'طباق.', 'is_correct' => false],
                            ['choice_text' => 'استفهام.', 'is_correct' => false],
                            ['choice_text' => 'جناس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأيام لا تتحدث حقيقة، لكن الكاتب أعطاها فعلًا إنسانيًا.',
                    ],
                    [
                        'question' => 'إذا وجدت «الحياة والموت» في عبارة واحدة، فما المحسن المتوقع؟',
                        'choices' => [
                            ['choice_text' => 'الطباق.', 'is_correct' => true],
                            ['choice_text' => 'التشبيه.', 'is_correct' => false],
                            ['choice_text' => 'السجع فقط.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحياة والموت متضادان، ولذلك يظهر الطباق.',
                    ],
                    [
                        'question' => 'إذا تكررت نهايات الجمل بصوت متقارب في نثر قصير، فما الأسلوب المحتمل؟',
                        'choices' => [
                            ['choice_text' => 'السجع.', 'is_correct' => true],
                            ['choice_text' => 'التشبيه.', 'is_correct' => false],
                            ['choice_text' => 'الطباق.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقارب أواخر الجمل في النثر من أبرز علامات السجع.',
                    ],
                    [
                        'question' => 'إذا طلب الكاتب من القارئ «تأمل هذه الكلمات»، فما نوع الأسلوب؟',
                        'choices' => [
                            ['choice_text' => 'الأمر.', 'is_correct' => true],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                        ],
                        'explanation' => '«تأمل» فعل أمر يطلب من المخاطب القيام بالفعل.',
                    ],
                    [
                        'question' => 'في «لا تهمل واجبك»، ما الوظيفة البلاغية الأقرب إذا كان المتكلم ينصح طالبًا؟',
                        'choices' => [
                            ['choice_text' => 'النصح والإرشاد.', 'is_correct' => true],
                            ['choice_text' => 'التعجب.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                            ['choice_text' => 'المقابلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهي في هذا السياق وسيلة لتقديم نصيحة للطالب وحثه على الاهتمام بواجبه.',
                    ],
                    [
                        'question' => 'أي عبارة تحتوي على استعارة أكثر من كونها تشبيهًا صريحًا؟',
                        'choices' => [
                            ['choice_text' => 'الكتاب صديق وفيّ.', 'is_correct' => true],
                            ['choice_text' => 'الكتاب مثل الصديق.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'قرأت الكتاب أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تجعل الكتاب كأنه صديق دون أداة تشبيه صريحة، وهذا يقربها من الاستعارة.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لشرح أثر صورة بلاغية في إجابة اختبار؟',
                        'choices' => [
                            ['choice_text' => 'تذكر الصورة ثم تشرح المعنى أو الشعور الذي أبرزته.', 'is_correct' => true],
                            ['choice_text' => 'تكتب اسم الأسلوب فقط.', 'is_correct' => false],
                            ['choice_text' => 'تكرر الجملة دون شرح.', 'is_correct' => false],
                            ['choice_text' => 'تذكر عنوان النص فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإجابة الأقوى تجمع بين تسمية الأسلوب وتفسير أثره في المعنى.',
                    ],
                    [
                        'question' => 'إذا اجتمع في العبارة تضاد وصورة جميلة، هل يجب أن تختار أسلوبًا واحدًا فقط؟',
                        'choices' => [
                            ['choice_text' => 'ليس بالضرورة؛ قد يجتمع أكثر من أسلوب بلاغي في العبارة.', 'is_correct' => true],
                            ['choice_text' => 'نعم، لا يمكن أن تجتمع أساليب مختلفة.', 'is_correct' => false],
                            ['choice_text' => 'الأسلوب البلاغي لا يظهر إلا مرة.', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن تحليل العبارة.', 'is_correct' => false],
                        ],
                        'explanation' => 'قد تحتوي الجملة الواحدة على أكثر من ظاهرة بلاغية، ويحدد السياق ذلك.',
                    ],
                    [
                        'question' => 'ما الهدف النهائي من دراسة البلاغة للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'فهم كيف تؤثر طريقة التعبير في وضوح المعنى وجماله وقوته.', 'is_correct' => true],
                            ['choice_text' => 'حفظ أسماء الأساليب فقط.', 'is_correct' => false],
                            ['choice_text' => 'استخدام كلمات صعبة في كل جملة.', 'is_correct' => false],
                            ['choice_text' => 'تجنب القراءة الأدبية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الغاية ليست الحفظ فقط، بل فهم العلاقة بين طريقة التعبير والأثر الذي تتركه في القارئ.',
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
