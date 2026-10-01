<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProseBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'prose')->firstOrFail();

        $quizzes = [
            [
                'title' => 'مدخل إلى النثر العربي',
                'description' => 'تعرّف على مفهوم النثر وأشكاله الأساسية والفرق العام بينه وبين الشعر.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالنثر في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'كلام مكتوب أو منطوق لا يعتمد بالضرورة على الوزن والقافية مثل الشعر التقليدي.', 'is_correct' => true],
                            ['choice_text' => 'قصيدة لها قافية ثابتة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'مجموعة أرقام بلا جمل.', 'is_correct' => false],
                            ['choice_text' => 'قائمة أسماء فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'النثر أوسع من الشعر من حيث البناء، ويمكن أن يظهر في القصص والمقالات والخطب وغيرها.',
                    ],
                    [
                        'question' => 'أي مثال يُعد نثرًا أدبيًا؟',
                        'choices' => [
                            ['choice_text' => 'قصة قصيرة تحكي تجربة شخصية.', 'is_correct' => true],
                            ['choice_text' => 'بيت شعري موزون.', 'is_correct' => false],
                            ['choice_text' => 'قصيدة ذات قافية.', 'is_correct' => false],
                            ['choice_text' => 'شطر من قصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة القصيرة من أبرز أشكال النثر الأدبي.',
                    ],
                    [
                        'question' => 'أي نوع من النصوص يعتمد على السرد غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'القصة.', 'is_correct' => true],
                            ['choice_text' => 'القائمة الحسابية.', 'is_correct' => false],
                            ['choice_text' => 'الجدول.', 'is_correct' => false],
                            ['choice_text' => 'الفهرس فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'السرد يعني حكي الأحداث، وهو عنصر أساسي في القصة.',
                    ],
                    [
                        'question' => 'هل يمكن للنثر أن يعبّر عن المشاعر؟',
                        'choices' => [
                            ['choice_text' => 'نعم، يمكن أن ينقل المشاعر والأفكار والتجارب.', 'is_correct' => true],
                            ['choice_text' => 'لا، النثر خاص بالمعلومات فقط.', 'is_correct' => false],
                            ['choice_text' => 'لا، المشاعر لا تظهر في الكتابة.', 'is_correct' => false],
                            ['choice_text' => 'فقط إذا كان النص شعرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النثر الأدبي قادر على التعبير عن الحزن والفرح والحب وغيرها من المشاعر.',
                    ],
                    [
                        'question' => 'ما الذي يميز النثر عن الشعر التقليدي بصورة عامة؟',
                        'choices' => [
                            ['choice_text' => 'أنه لا يلتزم بالوزن والقافية الشعرية بالطريقة نفسها.', 'is_correct' => true],
                            ['choice_text' => 'أنه لا يحتوي على أي معنى.', 'is_correct' => false],
                            ['choice_text' => 'أنه يجب أن يكون أقصر دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'أنه لا يستخدم الصور.', 'is_correct' => false],
                        ],
                        'explanation' => 'النثر أكثر حرية في بناء جمله وفقراته، بينما يرتبط الشعر التقليدي ببنية إيقاعية خاصة.',
                    ],
                    [
                        'question' => 'أي نص أقرب إلى النثر المعلوماتي؟',
                        'choices' => [
                            ['choice_text' => 'مقال يشرح فوائد القراءة.', 'is_correct' => true],
                            ['choice_text' => 'قصيدة غزلية.', 'is_correct' => false],
                            ['choice_text' => 'بيت في قصيدة.', 'is_correct' => false],
                            ['choice_text' => 'نشيد شعري.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقال التفسيري يقدم معلومات في شكل نثري، حتى لو لم يكن أدبيًا بالمعنى الضيق.',
                    ],
                    [
                        'question' => 'إذا كان النص يحكي أحداثًا مرتبة حول شخصية، فأي عنصر نثري يظهر بوضوح؟',
                        'choices' => [
                            ['choice_text' => 'السرد.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'الوزن.', 'is_correct' => false],
                            ['choice_text' => 'البحر الشعري.', 'is_correct' => false],
                        ],
                        'explanation' => 'السرد هو تنظيم الأحداث وحكيها للقارئ.',
                    ],
                    [
                        'question' => 'ما الذي يمكن أن يشترك فيه النثر والشعر؟',
                        'choices' => [
                            ['choice_text' => 'التعبير عن الأفكار والمشاعر واستخدام لغة فنية.', 'is_correct' => true],
                            ['choice_text' => 'الالتزام بالقافية نفسها دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'وجود الأبيات في كل نص.', 'is_correct' => false],
                            ['choice_text' => 'الاعتماد على الوزن في كل نص.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلاهما يمكن أن يكون فنيًا ويعبّر عن الإنسان رغم اختلاف البناء.',
                    ],
                    [
                        'question' => 'لماذا يقرأ الطالب النثر الأدبي؟',
                        'choices' => [
                            ['choice_text' => 'لفهم القصص والأفكار والتجارب والأساليب المختلفة في الكتابة.', 'is_correct' => true],
                            ['choice_text' => 'لأنه يحتوي على أرقام فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأنه لا يحتاج إلى فهم.', 'is_correct' => false],
                            ['choice_text' => 'لحفظ علامات الترقيم وحدها.', 'is_correct' => false],
                        ],
                        'explanation' => 'النثر الأدبي يفتح المجال لفهم الشخصيات والأحداث والأفكار وطريقة استخدام اللغة.',
                    ],
                    [
                        'question' => 'أي مهارة مهمة عند قراءة نص نثري للمرة الأولى؟',
                        'choices' => [
                            ['choice_text' => 'تحديد الموضوع العام وما الذي يحدث في النص.', 'is_correct' => true],
                            ['choice_text' => 'عدّ الكلمات فقط.', 'is_correct' => false],
                            ['choice_text' => 'حفظ أول سطر.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل العنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'فهم الموضوع والأحداث الأساسية يعطي القارئ أساسًا جيدًا قبل تحليل التفاصيل.',
                    ],
                ],
            ],
            [
                'title' => 'القصة القصيرة وعناصرها',
                'description' => 'تعلّم عناصر القصة القصيرة مثل الشخصيات والمشكلة والحبكة والنهاية.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'من يقوم بالأحداث في القصة؟',
                        'choices' => [
                            ['choice_text' => 'الشخصيات.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'الفواصل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخصيات هي التي تقوم بالأفعال وتواجه المواقف داخل القصة.',
                    ],
                    [
                        'question' => 'ما المقصود بالمكان في القصة؟',
                        'choices' => [
                            ['choice_text' => 'الموقع الذي تجري فيه الأحداث.', 'is_correct' => true],
                            ['choice_text' => 'اسم الكاتب.', 'is_correct' => false],
                            ['choice_text' => 'الفكرة الرئيسية فقط.', 'is_correct' => false],
                            ['choice_text' => 'نوع الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'المكان يحدد البيئة التي تقع فيها الأحداث مثل البيت أو المدرسة أو المدينة.',
                    ],
                    [
                        'question' => 'ما المقصود بالزمان في القصة؟',
                        'choices' => [
                            ['choice_text' => 'الوقت أو الفترة التي تقع فيها الأحداث.', 'is_correct' => true],
                            ['choice_text' => 'عدد الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'عنوان القصة.', 'is_correct' => false],
                            ['choice_text' => 'صفة البطل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الزمان يخبر القارئ متى وقعت الأحداث أو خلال أي فترة.',
                    ],
                    [
                        'question' => 'إذا كان بطل القصة يريد الوصول إلى هدف لكنه يواجه عقبة، فما الذي تمثله العقبة؟',
                        'choices' => [
                            ['choice_text' => 'الصراع أو المشكلة.', 'is_correct' => true],
                            ['choice_text' => 'العنوان.', 'is_correct' => false],
                            ['choice_text' => 'الوصف فقط.', 'is_correct' => false],
                            ['choice_text' => 'الخاتمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العقبة تصنع مشكلة أو صراعًا يدفع الأحداث إلى الأمام.',
                    ],
                    [
                        'question' => 'ماذا تسمى مجموعة الأحداث المرتبطة في القصة؟',
                        'choices' => [
                            ['choice_text' => 'الحبكة.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'المحسن البديعي.', 'is_correct' => false],
                            ['choice_text' => 'الفهرس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحبكة هي تنظيم الأحداث وعلاقتها بعضها ببعض من البداية إلى النهاية.',
                    ],
                    [
                        'question' => 'أي حدث يصلح لبداية قصة؟',
                        'choices' => [
                            ['choice_text' => 'وجدت مريم رسالة غامضة أمام باب بيتها.', 'is_correct' => true],
                            ['choice_text' => 'ثم انتهت القصة.', 'is_correct' => false],
                            ['choice_text' => 'وهكذا أغلق الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'في النهاية عرف الجميع كل شيء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرسالة الغامضة تثير فضول القارئ وتفتح المجال لوقوع أحداث لاحقة.',
                    ],
                    [
                        'question' => 'ما وظيفة النهاية في القصة؟',
                        'choices' => [
                            ['choice_text' => 'إغلاق الأحداث أو توضيح ما آلت إليه المشكلة.', 'is_correct' => true],
                            ['choice_text' => 'تقديم عنوان جديد.', 'is_correct' => false],
                            ['choice_text' => 'إدخال شخصيات بلا سبب.', 'is_correct' => false],
                            ['choice_text' => 'بدء قصة مختلفة دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهاية تقدم نتيجة الأحداث وتوضح ما حدث للمشكلة أو الشخصيات.',
                    ],
                    [
                        'question' => 'إذا تغيّر البطل بعد تجربة صعبة، ماذا يعني ذلك؟',
                        'choices' => [
                            ['choice_text' => 'حدث تطور في الشخصية.', 'is_correct' => true],
                            ['choice_text' => 'لم يحدث شيء مهم.', 'is_correct' => false],
                            ['choice_text' => 'تغير مكان الطباعة.', 'is_correct' => false],
                            ['choice_text' => 'اختفت الحبكة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تغير الشخصية بسبب التجربة يدل على تطور أو نمو في مسار القصة.',
                    ],
                    [
                        'question' => 'أي وصف يضيف معلومات عن شخصية؟',
                        'choices' => [
                            ['choice_text' => 'كان خالد هادئًا ويحب مساعدة جيرانه.', 'is_correct' => true],
                            ['choice_text' => 'كان البيت قريبًا.', 'is_correct' => false],
                            ['choice_text' => 'وصل القطار مساءً.', 'is_correct' => false],
                            ['choice_text' => 'كانت السماء غائمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم صفات وسلوكًا للشخصية.',
                    ],
                    [
                        'question' => 'ما الذي يساعد القارئ على متابعة القصة بسهولة؟',
                        'choices' => [
                            ['choice_text' => 'وضوح تسلسل الأحداث والعلاقة بين الشخصيات.', 'is_correct' => true],
                            ['choice_text' => 'تغيير الموضوع في كل سطر.', 'is_correct' => false],
                            ['choice_text' => 'إخفاء جميع الأسباب.', 'is_correct' => false],
                            ['choice_text' => 'تكرار العنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترابط وتسلسل الأحداث يساعدان القارئ على فهم ما يحدث.',
                    ],
                ],
            ],
            [
                'title' => 'الشخصيات والراوي',
                'description' => 'تدرّب على معرفة الشخصية الرئيسية والثانوية وفهم الراوي وبعض الأساليب البسيطة في السرد.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'من هي الشخصية الرئيسية؟',
                        'choices' => [
                            ['choice_text' => 'الشخصية التي تدور حولها أهم الأحداث أو المشكلة.', 'is_correct' => true],
                            ['choice_text' => 'أي شخص يظهر في سطر واحد.', 'is_correct' => false],
                            ['choice_text' => 'الكاتب دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'القارئ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخصية الرئيسية هي محور القصة أو أبرز من يمر بالتجربة الأساسية.',
                    ],
                    [
                        'question' => 'ما دور الشخصية الثانوية غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'تساعد في تطوير الأحداث أو إظهار جوانب من الشخصية الرئيسية.', 'is_correct' => true],
                            ['choice_text' => 'تمنع أي حدث من الوقوع.', 'is_correct' => false],
                            ['choice_text' => 'تكون دائمًا راوي القصة.', 'is_correct' => false],
                            ['choice_text' => 'تكتب عنوان الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخصيات الثانوية قد تدعم البطل أو تعارضه أو تساعد على دفع الأحداث.',
                    ],
                    [
                        'question' => 'إذا كان الراوي يقول «ذهبت إلى السوق ورأيت صديقي»، فما نوع السرد الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'السرد بضمير المتكلم.', 'is_correct' => true],
                            ['choice_text' => 'السرد بضمير الغائب.', 'is_correct' => false],
                            ['choice_text' => 'حوار مباشر فقط.', 'is_correct' => false],
                            ['choice_text' => 'وصف علمي.', 'is_correct' => false],
                        ],
                        'explanation' => 'استخدام «ذهبت» و«رأيت» يدل على أن الراوي يتحدث عن نفسه.',
                    ],
                    [
                        'question' => 'أي ضمير يدل غالبًا على السرد بضمير الغائب؟',
                        'choices' => [
                            ['choice_text' => 'هو أو هي.', 'is_correct' => true],
                            ['choice_text' => 'أنا.', 'is_correct' => false],
                            ['choice_text' => 'نحن.', 'is_correct' => false],
                            ['choice_text' => 'أنت.', 'is_correct' => false],
                        ],
                        'explanation' => 'السرد بضمير الغائب يتحدث عن الشخصيات باستخدام مثل «هو» و«هي».',
                    ],
                    [
                        'question' => 'إذا قال الراوي: «شعرت بالخوف عندما فتحت الباب»، ماذا نعرف مباشرة؟',
                        'choices' => [
                            ['choice_text' => 'أن الراوي نفسه شعر بالخوف.', 'is_correct' => true],
                            ['choice_text' => 'أن القارئ خائف.', 'is_correct' => false],
                            ['choice_text' => 'أن الباب تحدث.', 'is_correct' => false],
                            ['choice_text' => 'أن الشخصية غائبة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمير في «شعرت» يشير إلى تجربة الراوي نفسه.',
                    ],
                    [
                        'question' => 'أي مثال يصف شخصية من خلال سلوكها بدلًا من وصف مباشر؟',
                        'choices' => [
                            ['choice_text' => 'كان يعطي طعامه لمن يحتاجه.', 'is_correct' => true],
                            ['choice_text' => 'كان كريمًا.', 'is_correct' => false],
                            ['choice_text' => 'كان طويلًا.', 'is_correct' => false],
                            ['choice_text' => 'كان عمره عشرين عامًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السلوك «يعطي طعامه لمن يحتاجه» يترك للقارئ استنتاج صفة الكرم.',
                    ],
                    [
                        'question' => 'إذا كان الراوي يعرف ما تفكر فيه الشخصيات جميعًا، ماذا يعني ذلك غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'أن الراوي يملك معرفة واسعة بأفكار الشخصيات.', 'is_correct' => true],
                            ['choice_text' => 'أن الراوي لا يعرف شيئًا.', 'is_correct' => false],
                            ['choice_text' => 'أن القصة كلها حوار.', 'is_correct' => false],
                            ['choice_text' => 'أن النص قصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'معرفة أفكار عدة شخصيات تشير إلى راوي ذي معرفة واسعة بالأحداث والشخصيات.',
                    ],
                    [
                        'question' => 'أي اختيار يساعد على فهم شخصية معقدة؟',
                        'choices' => [
                            ['choice_text' => 'النظر إلى أفعالها وأقوالها وقراراتها عبر القصة.', 'is_correct' => true],
                            ['choice_text' => 'النظر إلى اسمها فقط.', 'is_correct' => false],
                            ['choice_text' => 'قراءة آخر كلمة في القصة.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل تصرفاتها.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخصية تُفهم من مجموع سلوكها وأقوالها وقراراتها، لا من اسمها وحده.',
                    ],
                    [
                        'question' => 'إذا تغير موقف الشخصية بعد حديث مع شخص آخر، فما الذي قد يكون قد أثر فيها؟',
                        'choices' => [
                            ['choice_text' => 'الحوار أو الفكرة التي سمعتها.', 'is_correct' => true],
                            ['choice_text' => 'لون الصفحة.', 'is_correct' => false],
                            ['choice_text' => 'عدد الفقرات.', 'is_correct' => false],
                            ['choice_text' => 'عنوان الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحوار قد يكون سببًا مباشرًا في تغيير موقف الشخصية أو قرارها.',
                    ],
                    [
                        'question' => 'لماذا يهم معرفة الراوي عند قراءة قصة؟',
                        'choices' => [
                            ['choice_text' => 'لأنه يؤثر في الطريقة التي تصل بها الأحداث والمعلومات إلى القارئ.', 'is_correct' => true],
                            ['choice_text' => 'لأنه يحدد سعر الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يغيّر عدد الصفحات.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يختار لون الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الراوي يحدد زاوية السرد ومقدار المعلومات التي يعرفها القارئ.',
                    ],
                ],
            ],
            [
                'title' => 'الوصف في النثر',
                'description' => 'استكشف كيف يستخدم الكاتب الوصف لبناء صورة للمكان والشخصيات والأشياء والأجواء.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'ما وظيفة الوصف في النص النثري؟',
                        'choices' => [
                            ['choice_text' => 'مساعدة القارئ على تخيل المكان أو الشخص أو المشهد.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء الأحداث.', 'is_correct' => false],
                            ['choice_text' => 'تغيير نوع النص إلى شعر.', 'is_correct' => false],
                            ['choice_text' => 'منع القارئ من فهم التفاصيل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوصف يقدم تفاصيل حسية ومرئية تساعد القارئ على تكوين صورة ذهنية.',
                    ],
                    [
                        'question' => 'أي جملة تصف مكانًا بشكل غني؟',
                        'choices' => [
                            ['choice_text' => 'كانت الحديقة واسعة، وفيها أشجار عالية وبركة صغيرة قرب الباب.', 'is_correct' => true],
                            ['choice_text' => 'الحديقة موجودة.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى الحديقة.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم عدة تفاصيل تساعد القارئ على تخيل المكان.',
                    ],
                    [
                        'question' => 'أي كلمة تصف صوتًا منخفضًا؟',
                        'choices' => [
                            ['choice_text' => 'خافت.', 'is_correct' => true],
                            ['choice_text' => 'صاخب.', 'is_correct' => false],
                            ['choice_text' => 'مدوٍ.', 'is_correct' => false],
                            ['choice_text' => 'مرتفع.', 'is_correct' => false],
                        ],
                        'explanation' => '«خافت» تعني ضعيفًا أو منخفضًا من حيث الصوت.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم الحاسة البصرية في الوصف؟',
                        'choices' => [
                            ['choice_text' => 'كانت السماء زرقاء والغيوم بيضاء.', 'is_correct' => true],
                            ['choice_text' => 'كانت رائحة الخبز شهية.', 'is_correct' => false],
                            ['choice_text' => 'كان صوت المطر عاليًا.', 'is_correct' => false],
                            ['choice_text' => 'كان الطعام دافئًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اللون الأزرق والأبيض تفاصيل تراها العين، لذلك فهي من الوصف البصري.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم حاسة الشم؟',
                        'choices' => [
                            ['choice_text' => 'امتلأت الغرفة برائحة الخبز الطازج.', 'is_correct' => true],
                            ['choice_text' => 'كانت النافذة واسعة.', 'is_correct' => false],
                            ['choice_text' => 'سمعنا أصوات الأطفال.', 'is_correct' => false],
                            ['choice_text' => 'كان المقعد خشبيًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرائحة تعتمد على حاسة الشم وتضيف بعدًا حسيًا للمشهد.',
                    ],
                    [
                        'question' => 'إذا وصف الكاتب المكان بأنه «هادئ ومظلم»، فما الجو المحتمل؟',
                        'choices' => [
                            ['choice_text' => 'جو ساكن وقد يحمل شيئًا من التوتر أو الغموض.', 'is_correct' => true],
                            ['choice_text' => 'جو احتفالي صاخب.', 'is_correct' => false],
                            ['choice_text' => 'جو مشمس جدًا.', 'is_correct' => false],
                            ['choice_text' => 'جو رياضي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الهدوء والظلام قد يصنعان جوًا هادئًا لكنه غامض أو متوتر بحسب السياق.',
                    ],
                    [
                        'question' => 'كيف يختلف الوصف عن السرد؟',
                        'choices' => [
                            ['choice_text' => 'الوصف يركز على صفات المشهد، والسرد يركز أكثر على الأحداث وتتابعها.', 'is_correct' => true],
                            ['choice_text' => 'الوصف لا يستخدم الأسماء.', 'is_correct' => false],
                            ['choice_text' => 'السرد لا يحتوي على أفعال.', 'is_correct' => false],
                            ['choice_text' => 'لا فرق بينهما.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوصف يقدم ملامح وصورًا، بينما السرد ينظم الأحداث وما يحدث.',
                    ],
                    [
                        'question' => 'أي وصف للشخصية يعتمد على المظهر؟',
                        'choices' => [
                            ['choice_text' => 'كان طويل القامة ويرتدي معطفًا رماديًا.', 'is_correct' => true],
                            ['choice_text' => 'كان يساعد جيرانه.', 'is_correct' => false],
                            ['choice_text' => 'كان صبورًا.', 'is_correct' => false],
                            ['choice_text' => 'كان يحب القراءة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الطول والملابس تفاصيل خارجية تتعلق بالمظهر.',
                    ],
                    [
                        'question' => 'لماذا قد يختار الكاتب وصفًا قصيرًا بدل وصف طويل جدًا؟',
                        'choices' => [
                            ['choice_text' => 'حتى يحافظ على سرعة الأحداث عندما لا تحتاج القصة إلى تفاصيل كثيرة.', 'is_correct' => true],
                            ['choice_text' => 'لأن الوصف الطويل ممنوع.', 'is_correct' => false],
                            ['choice_text' => 'لأن القارئ لا يفهم أي وصف.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشخصيات لا تحتاج إلى أماكن.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار مقدار الوصف يعتمد على حاجة المشهد؛ قد يحتاج الكاتب إلى تفاصيل قليلة حتى تستمر الحركة.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لقراءة وصف أدبي؟',
                        'choices' => [
                            ['choice_text' => 'ملاحظة الكلمات الحسية وما الجو أو الصورة التي تصنعها.', 'is_correct' => true],
                            ['choice_text' => 'تجاهل الصفات كلها.', 'is_correct' => false],
                            ['choice_text' => 'التركيز على العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'عدّ الكلمات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات الحسية والصفات تكشف الصورة التي يريد الكاتب نقلها للقارئ.',
                    ],
                ],
            ],
            [
                'title' => 'الحوار في النثر',
                'description' => 'تعلّم وظيفة الحوار وكيف يكشف الشخصيات ويدفع الأحداث ويعرض الخلاف أو التفاهم.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالحوار في القصة؟',
                        'choices' => [
                            ['choice_text' => 'تبادل الكلام بين شخصيتين أو أكثر.', 'is_correct' => true],
                            ['choice_text' => 'وصف المكان فقط.', 'is_correct' => false],
                            ['choice_text' => 'سرد الأحداث دون كلام.', 'is_correct' => false],
                            ['choice_text' => 'عنوان القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحوار هو الكلام المتبادل بين الشخصيات.',
                    ],
                    [
                        'question' => 'كيف يمكن للحوار أن يساعد في فهم الشخصية؟',
                        'choices' => [
                            ['choice_text' => 'يكشف طريقة تفكيرها وموقفها وأسلوبها في الكلام.', 'is_correct' => true],
                            ['choice_text' => 'يخفي كل صفاتها دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'يحدد سعر الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'يوقف الأحداث دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار الكلمات وطريقة الرد يكشفان شخصية المتحدث ومواقفه.',
                    ],
                    [
                        'question' => 'أي مثال يمثل حوارًا؟',
                        'choices' => [
                            ['choice_text' => 'قال خالد: «سأعود بعد قليل.» فأجاب علي: «سأنتظرك.»', 'is_correct' => true],
                            ['choice_text' => 'عاد خالد إلى البيت.', 'is_correct' => false],
                            ['choice_text' => 'كان البيت واسعًا.', 'is_correct' => false],
                            ['choice_text' => 'في المساء بدأت الرحلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول يحتوي على كلام متبادل بين شخصيتين.',
                    ],
                    [
                        'question' => 'إذا اختلفت شخصيتان في الحوار، ماذا يمكن أن يحقق ذلك؟',
                        'choices' => [
                            ['choice_text' => 'إظهار الصراع أو اختلاف وجهات النظر.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء القصة.', 'is_correct' => false],
                            ['choice_text' => 'منع أي تطور.', 'is_correct' => false],
                            ['choice_text' => 'تحويل النص إلى قصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخلاف في الحوار يمكن أن يكشف الصراع ويدفع الأحداث إلى الأمام.',
                    ],
                    [
                        'question' => 'أي حوار يبين أن شخصية مترددة؟',
                        'choices' => [
                            ['choice_text' => '«لا أعرف... ربما أذهب، وربما أبقى.»', 'is_correct' => true],
                            ['choice_text' => '«سأذهب الآن بلا تردد.»', 'is_correct' => false],
                            ['choice_text' => '«وصلت في الثامنة.»', 'is_correct' => false],
                            ['choice_text' => '«الباب مفتوح.»', 'is_correct' => false],
                        ],
                        'explanation' => 'التردد يظهر في عدم الحسم والعبارة المترددة «ربما».',
                    ],
                    [
                        'question' => 'متى يكون الحوار مفيدًا في القصة؟',
                        'choices' => [
                            ['choice_text' => 'عندما يكشف معلومات أو مشاعر أو يساعد على تقدم الحدث.', 'is_correct' => true],
                            ['choice_text' => 'عندما يكرر الجمل بلا هدف.', 'is_correct' => false],
                            ['choice_text' => 'عندما يوقف كل الأحداث.', 'is_correct' => false],
                            ['choice_text' => 'عندما يذكر معلومات لا علاقة لها.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحوار الجيد له وظيفة سردية، مثل كشف الشخصية أو تقديم معلومة أو خلق صراع.',
                    ],
                    [
                        'question' => 'إذا قال شخص «أعتذر عن خطئي»، ماذا نعرف عن موقفه؟',
                        'choices' => [
                            ['choice_text' => 'أنه يعترف بخطأ ويعتذر عنه.', 'is_correct' => true],
                            ['choice_text' => 'أنه يرفض المسؤولية.', 'is_correct' => false],
                            ['choice_text' => 'أنه يتحدث عن الطقس.', 'is_correct' => false],
                            ['choice_text' => 'أنه يسأل عن المكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة صريحة في الاعتذار والاعتراف بالخطأ.',
                    ],
                    [
                        'question' => 'لماذا لا ينبغي أن يحتوي الحوار على كل معلومات القصة دفعة واحدة؟',
                        'choices' => [
                            ['choice_text' => 'لأن الحوار الطبيعي يكون مرتبطًا بالموقف ويساعد على كشف المعلومات تدريجيًا.', 'is_correct' => true],
                            ['choice_text' => 'لأن الحوار ممنوع في القصص.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشخصيات لا تتحدث.', 'is_correct' => false],
                            ['choice_text' => 'لأن الحوار يجب أن يكون قصيرًا دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحوار الطبيعي يخدم الموقف ولا ينبغي أن يتحول إلى شرح آلي لكل ما حدث.',
                    ],
                    [
                        'question' => 'أي رد يكشف الغضب بوضوح؟',
                        'choices' => [
                            ['choice_text' => '«قلت لك إنني لا أقبل هذا التصرف!»', 'is_correct' => true],
                            ['choice_text' => '«شكرًا لك على المساعدة.»', 'is_correct' => false],
                            ['choice_text' => '«سأعود بعد قليل.»', 'is_correct' => false],
                            ['choice_text' => '«الجو جميل اليوم.»', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة وعلامة التعجب تدلان على انفعال وغضب.',
                    ],
                    [
                        'question' => 'ما السؤال المفيد عند تحليل حوار؟',
                        'choices' => [
                            ['choice_text' => 'ماذا يكشف كلام كل شخصية عن موقفها أو شخصيتها؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون الورق؟', 'is_correct' => false],
                            ['choice_text' => 'كم صفحة في الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين اشترى القارئ القلم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'تحليل الحوار ينظر إلى ما تكشفه الأقوال عن الشخصيات والصراع والأحداث.',
                    ],
                ],
            ],
            [
                'title' => 'الفكرة والموضوع في النص النثري',
                'description' => 'تدرّب على اكتشاف الفكرة العامة والرسالة والموضوع والعبرة في نصوص نثرية قصيرة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'اقرأ: «ساعدت مريم جارتها الكبيرة في حمل الأغراض، وشكرتها الجارة كثيرًا.» ما الفكرة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'مساعدة الآخرين عمل حسن.', 'is_correct' => true],
                            ['choice_text' => 'المدينة مزدحمة.', 'is_correct' => false],
                            ['choice_text' => 'المتجر مغلق.', 'is_correct' => false],
                            ['choice_text' => 'مريم لا تحب جارتها.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحدث يبرز قيمة مساعدة الآخرين واحترامهم.',
                    ],
                    [
                        'question' => 'إذا كان النص يتحدث عن طالب يواجه صعوبة ثم يواصل المحاولة حتى ينجح، فما الرسالة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'المثابرة تساعد على تجاوز الصعوبات.', 'is_correct' => true],
                            ['choice_text' => 'النجاح يحدث بلا عمل.', 'is_correct' => false],
                            ['choice_text' => 'التعليم غير مهم.', 'is_correct' => false],
                            ['choice_text' => 'المشكلة لا يمكن حلها.', 'is_correct' => false],
                        ],
                        'explanation' => 'إصرار الطالب على المحاولة ثم النجاح يدعم فكرة المثابرة.',
                    ],
                    [
                        'question' => 'ما الفرق بين موضوع النص وفكرته؟',
                        'choices' => [
                            ['choice_text' => 'الموضوع أوسع، والفكرة تحدد ما يقوله النص عنه.', 'is_correct' => true],
                            ['choice_text' => 'لا يوجد فرق أبدًا.', 'is_correct' => false],
                            ['choice_text' => 'الموضوع هو آخر جملة فقط.', 'is_correct' => false],
                            ['choice_text' => 'الفكرة هي اسم الكاتب.', 'is_correct' => false],
                        ],
                        'explanation' => 'موضوع مثل «الصداقة» قد تكون فكرته أن الصديق الحقيقي يظهر وقت الشدة.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على تحديد الفكرة العامة؟',
                        'choices' => [
                            ['choice_text' => 'ما الشيء الذي تتحدث عنه معظم أحداث النص أو تفاصيله؟', 'is_correct' => true],
                            ['choice_text' => 'كم عدد علامات الترقيم؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                            ['choice_text' => 'كم مرة قرأت الصفحة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة العامة تظهر من الموضوع الذي يجمع معظم أجزاء النص.',
                    ],
                    [
                        'question' => 'اقرأ: «كان خالد يضع جزءًا من مصروفه كل أسبوع حتى اشترى الدراجة التي أرادها.» ما الفكرة؟',
                        'choices' => [
                            ['choice_text' => 'الادخار المنتظم يساعد على تحقيق هدف.', 'is_correct' => true],
                            ['choice_text' => 'الدراجات لا فائدة منها.', 'is_correct' => false],
                            ['choice_text' => 'خالد أنفق كل ماله.', 'is_correct' => false],
                            ['choice_text' => 'الأسرة لا تدعم خالد.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة تربط بين الادخار المتدرج والوصول إلى الهدف.',
                    ],
                    [
                        'question' => 'إذا وصف النص صديقين يساند كل منهما الآخر في الصعوبات، فما الموضوع؟',
                        'choices' => [
                            ['choice_text' => 'الصداقة والتعاون.', 'is_correct' => true],
                            ['choice_text' => 'السفر فقط.', 'is_correct' => false],
                            ['choice_text' => 'الطعام.', 'is_correct' => false],
                            ['choice_text' => 'التقنية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الدعم المتبادل بين الصديقين يشير إلى الصداقة والتعاون.',
                    ],
                    [
                        'question' => 'أي جملة تمثل رسالة نصية أو عبرة أكثر من كونها حدثًا؟',
                        'choices' => [
                            ['choice_text' => 'الصدق يبني الثقة بين الناس.', 'is_correct' => true],
                            ['choice_text' => 'دخل سامي الغرفة.', 'is_correct' => false],
                            ['choice_text' => 'جلست مريم قرب النافذة.', 'is_correct' => false],
                            ['choice_text' => 'بدأ المطر مساءً.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم معنى عامًا يمكن أن نستخلصه من قصة أو تجربة.',
                    ],
                    [
                        'question' => 'هل يمكن أن تحمل القصة أكثر من معنى أو فكرة؟',
                        'choices' => [
                            ['choice_text' => 'نعم، قد تجمع بين فكرة رئيسية وأفكار فرعية.', 'is_correct' => true],
                            ['choice_text' => 'لا، كل قصة لها كلمة واحدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'لا، لأن الشخصيات تمنع ذلك.', 'is_correct' => false],
                            ['choice_text' => 'نعم، لكن فقط إذا كانت قصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصة قد تناقش موضوعًا رئيسيًا وتضم معه قيمًا وأفكارًا فرعية.',
                    ],
                    [
                        'question' => 'ما أفضل عنوان لنص عن طالب يتعلم من أخطائه في الدراسة؟',
                        'choices' => [
                            ['choice_text' => 'التعلم من الأخطاء.', 'is_correct' => true],
                            ['choice_text' => 'رحلة إلى البحر.', 'is_correct' => false],
                            ['choice_text' => 'ألوان الملابس.', 'is_correct' => false],
                            ['choice_text' => 'الأخبار الرياضية.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول يلخص التجربة التي يدور حولها النص.',
                    ],
                    [
                        'question' => 'لماذا يفيد تحديد الفكرة العامة قبل تحليل التفاصيل؟',
                        'choices' => [
                            ['choice_text' => 'لأنه يعطي إطارًا يساعد على فهم دور كل حدث أو شخصية.', 'is_correct' => true],
                            ['choice_text' => 'لأنه يلغي الحاجة إلى القراءة.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يكفي لمعرفة كل كلمة.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يحدد سعر الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة العامة تساعد القارئ على وضع التفاصيل داخل معنى أكبر.',
                    ],
                ],
            ],
            [
                'title' => 'التسلسل والزمن في السرد',
                'description' => 'تدرّب على متابعة الأحداث وترتيبها وفهم كلمات الزمن والعلاقات بين الأحداث.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «استيقظ سامي، تناول فطوره، ثم خرج إلى المدرسة.» ماذا فعل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'استيقظ.', 'is_correct' => true],
                            ['choice_text' => 'تناول الفطور.', 'is_correct' => false],
                            ['choice_text' => 'خرج إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'عاد إلى البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحدث الأول في النص هو استيقاظ سامي.',
                    ],
                    [
                        'question' => 'أي كلمة تشير عادة إلى حدث لاحق؟',
                        'choices' => [
                            ['choice_text' => 'ثم.', 'is_correct' => true],
                            ['choice_text' => 'أمس.', 'is_correct' => false],
                            ['choice_text' => 'قبل.', 'is_correct' => false],
                            ['choice_text' => 'أولًا.', 'is_correct' => false],
                        ],
                        'explanation' => '«ثم» تربط حدثًا بما يأتي بعده في التسلسل.',
                    ],
                    [
                        'question' => 'أي كلمة تدل على بداية سلسلة من الأحداث؟',
                        'choices' => [
                            ['choice_text' => 'أولًا.', 'is_correct' => true],
                            ['choice_text' => 'أخيرًا.', 'is_correct' => false],
                            ['choice_text' => 'بعد ذلك.', 'is_correct' => false],
                            ['choice_text' => 'في النهاية.', 'is_correct' => false],
                        ],
                        'explanation' => '«أولًا» تحدد البداية في الترتيب.',
                    ],
                    [
                        'question' => 'اقرأ: «خرجت ليلى من البيت، وبعد ساعة وصلت إلى المكتبة.» ماذا نفهم؟',
                        'choices' => [
                            ['choice_text' => 'الوصول إلى المكتبة حدث بعد الخروج بمدة.', 'is_correct' => true],
                            ['choice_text' => 'الوصول حدث قبل الخروج.', 'is_correct' => false],
                            ['choice_text' => 'الحدثان وقعا في اللحظة نفسها بالضرورة.', 'is_correct' => false],
                            ['choice_text' => 'النص لا يحدد أي ترتيب.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة «بعد ساعة» تحدد أن الوصول جاء بعد الخروج.',
                    ],
                    [
                        'question' => 'إذا بدأت القصة بطفولة البطل ثم انتقلت إلى حياته الحالية، فما الذي حدث؟',
                        'choices' => [
                            ['choice_text' => 'حدث انتقال زمني إلى مرحلة لاحقة.', 'is_correct' => true],
                            ['choice_text' => 'تغير المكان فقط.', 'is_correct' => false],
                            ['choice_text' => 'اختفت الشخصية.', 'is_correct' => false],
                            ['choice_text' => 'تحول النص إلى شعر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الانتقال من الطفولة إلى الحاضر هو انتقال في الزمن.',
                    ],
                    [
                        'question' => 'ما فائدة ترتيب الأحداث ترتيبًا واضحًا؟',
                        'choices' => [
                            ['choice_text' => 'يساعد القارئ على فهم ما حدث أولًا وما حدث بعده.', 'is_correct' => true],
                            ['choice_text' => 'يجعل القصة أقصر دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'يمنع وجود الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'يلغي الوصف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب الزمني الواضح يسهل متابعة القصة وفهم العلاقة بين الأحداث.',
                    ],
                    [
                        'question' => 'اقرأ: «بعد أن أنهى فؤاد واجبه، ذهب للعب.» ماذا حدث أولًا؟',
                        'choices' => [
                            ['choice_text' => 'أنهى واجبه.', 'is_correct' => true],
                            ['choice_text' => 'ذهب للعب.', 'is_correct' => false],
                            ['choice_text' => 'عاد إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'نام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة توضح أن إنهاء الواجب سبق الذهاب للعب.',
                    ],
                    [
                        'question' => 'أي عبارة تدل على نهاية الأحداث؟',
                        'choices' => [
                            ['choice_text' => 'في النهاية.', 'is_correct' => true],
                            ['choice_text' => 'في البداية.', 'is_correct' => false],
                            ['choice_text' => 'أولًا.', 'is_correct' => false],
                            ['choice_text' => 'قبل ذلك.', 'is_correct' => false],
                        ],
                        'explanation' => '«في النهاية» تشير إلى الجزء الأخير أو النتيجة الأخيرة في السرد.',
                    ],
                    [
                        'question' => 'إذا استخدم الكاتب عبارة «بعد سنوات»، ماذا تتوقع؟',
                        'choices' => [
                            ['choice_text' => 'قفزة زمنية إلى فترة أبعد.', 'is_correct' => true],
                            ['choice_text' => 'تغيير لون الشخصية.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء المكان.', 'is_correct' => false],
                            ['choice_text' => 'بداية حوار بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => '«بعد سنوات» تنقل القارئ إلى وقت متأخر بفاصل زمني واضح.',
                    ],
                    [
                        'question' => 'ما السؤال الأفضل لفهم تسلسل قصة؟',
                        'choices' => [
                            ['choice_text' => 'ماذا حدث أولًا، ثم ماذا حدث، وكيف انتهت الأحداث؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                            ['choice_text' => 'كم حرفًا في العنوان؟', 'is_correct' => false],
                            ['choice_text' => 'ما سعر الكتاب؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا السؤال يركز على البنية الزمنية الأساسية للقصة.',
                    ],
                ],
            ],
            [
                'title' => 'تطبيقات متقدمة للمبتدئين في النثر',
                'description' => 'طبّق مهارات السرد والوصف والحوار وتحليل الشخصيات والأفكار على مواقف نثرية متنوعة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «وقف سامر أمام الباب طويلًا، ثم طرقه أخيرًا.» ماذا تكشف كلمة «أخيرًا»؟',
                        'choices' => [
                            ['choice_text' => 'أن الحدث جاء بعد انتظار أو تأخر.', 'is_correct' => true],
                            ['choice_text' => 'أن الحدث وقع أولًا.', 'is_correct' => false],
                            ['choice_text' => 'أن الباب كان مفتوحًا.', 'is_correct' => false],
                            ['choice_text' => 'أن سامر غادر.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة «أخيرًا» تشير إلى أن طرق الباب جاء بعد فترة انتظار أو بعد تردد.',
                    ],
                    [
                        'question' => 'اقرأ: «كانت الغرفة صغيرة، لكن نافذتها تطل على بحر واسع.» ما العنصر الوصفي الأبرز؟',
                        'choices' => [
                            ['choice_text' => 'المقارنة بين ضيق الغرفة واتساع المنظر.', 'is_correct' => true],
                            ['choice_text' => 'وصف شخصية الراوي.', 'is_correct' => false],
                            ['choice_text' => 'عرض حوار طويل.', 'is_correct' => false],
                            ['choice_text' => 'شرح تاريخ المدينة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تجمع بين صغر الغرفة واتساع المشهد الخارجي لتكوين صورة أوضح للمكان.',
                    ],
                    [
                        'question' => 'إذا قال أحد الشخصيات: «لن أترك صديقي وحده في هذه الأزمة»، فما الصفة الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'الوفاء.', 'is_correct' => true],
                            ['choice_text' => 'الكسل.', 'is_correct' => false],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                            ['choice_text' => 'الخوف من القراءة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاستعداد للبقاء مع الصديق وقت الأزمة يدل على الوفاء والدعم.',
                    ],
                    [
                        'question' => 'اقرأ: «عاد الطفل إلى البيت وهو يبتسم ويحمل شهادة في يده.» ما الاستنتاج الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'أنه حقق إنجازًا أو تلقى خبرًا سعيدًا.', 'is_correct' => true],
                            ['choice_text' => 'أنه كان غاضبًا.', 'is_correct' => false],
                            ['choice_text' => 'أنه فقد شيئًا مهمًا.', 'is_correct' => false],
                            ['choice_text' => 'أنه لم يعرف ماذا يفعل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الابتسامة والشهادة معًا توحيان بإنجاز أو خبر سار.',
                    ],
                    [
                        'question' => 'أي جملة تمثل انتقالًا من الوصف إلى الحدث؟',
                        'choices' => [
                            ['choice_text' => 'كانت السماء مظلمة، وفجأة سمعنا طرقًا على الباب.', 'is_correct' => true],
                            ['choice_text' => 'كانت السماء مظلمة والغيوم كثيفة.', 'is_correct' => false],
                            ['choice_text' => 'كان البيت واسعًا وهادئًا.', 'is_correct' => false],
                            ['choice_text' => 'النافذة صغيرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تبدأ بالوصف ثم تنتقل إلى حدث مفاجئ وهو سماع الطرق.',
                    ],
                    [
                        'question' => 'ما الذي يجعل نهاية القصة مرضية للقارئ غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'أن تعطي نتيجة مفهومة أو تغلق السؤال الأساسي الذي طرحته القصة.', 'is_correct' => true],
                            ['choice_text' => 'أن تضيف مشكلة أكبر بلا سبب.', 'is_correct' => false],
                            ['choice_text' => 'أن تغيّر أسماء الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'أن تبدأ موضوعًا مختلفًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهاية الناجحة تعطي القارئ نتيجة مرتبطة بالمشكلة أو السؤال الأساسي في القصة.',
                    ],
                    [
                        'question' => 'إذا استخدم الكاتب الرسائل داخل القصة، فما الوظيفة الممكنة لها؟',
                        'choices' => [
                            ['choice_text' => 'نقل معلومات أو مشاعر لا يعرفها القارئ بطريقة مباشرة.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء دور الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'تحويل النص إلى جدول.', 'is_correct' => false],
                            ['choice_text' => 'منع تطور الأحداث.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرسائل عنصر سردي يمكن أن يكشف معلومات أو مشاعر ويقدمها بطريقة مختلفة عن الحوار المباشر.',
                    ],
                    [
                        'question' => 'اقرأ: «كانت ليلى مترددة في السفر، لكن نصيحة أختها جعلتها تتخذ القرار.» ما الذي دفعها إلى القرار؟',
                        'choices' => [
                            ['choice_text' => 'نصيحة أختها.', 'is_correct' => true],
                            ['choice_text' => 'الطقس فقط.', 'is_correct' => false],
                            ['choice_text' => 'الوصول إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'إغلاق البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يربط قرار ليلى مباشرة بنصيحة أختها.',
                    ],
                    [
                        'question' => 'أي سؤال يساعدك على التمييز بين الوصف والحوار في فقرة؟',
                        'choices' => [
                            ['choice_text' => 'هل الكاتب يصف ملامح المشهد أم ينقل كلام الشخصيات؟', 'is_correct' => true],
                            ['choice_text' => 'كم عدد الصفحات؟', 'is_correct' => false],
                            ['choice_text' => 'من طبع الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الوصف يركز على الملامح والصفات، بينما الحوار ينقل كلام الشخصيات.',
                    ],
                    [
                        'question' => 'بعد قراءة نص نثري، ما أفضل خطوة قبل كتابة رأيك فيه؟',
                        'choices' => [
                            ['choice_text' => 'تحديد فكرة النص والاستناد إلى مثال أو حدث يدعم رأيك.', 'is_correct' => true],
                            ['choice_text' => 'الاعتماد على العنوان وحده.', 'is_correct' => false],
                            ['choice_text' => 'ذكر رأي لا علاقة له بالنص.', 'is_correct' => false],
                            ['choice_text' => 'إعادة كتابة النص كاملًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرأي الأدبي الأقوى يرتبط بما قرأته، ويستند إلى دليل واضح من النص.',
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
