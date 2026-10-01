<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PoetryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'poetry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'أساسيات الشعر العربي',
                'description' => 'تعرّف على مفهوم الشعر والبيت الشعري والقصيدة وبعض الخصائص الأساسية للنص الشعري.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالشعر في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'كلام فني يعتمد على الإيقاع والصور والتعبير عن الأفكار والمشاعر.', 'is_correct' => true],
                            ['choice_text' => 'تعليمات تشغيل جهاز.', 'is_correct' => false],
                            ['choice_text' => 'قائمة أسماء فقط.', 'is_correct' => false],
                            ['choice_text' => 'تقرير مالي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر فن لغوي يستخدم الإيقاع والصور والتعبير المكثف عن الأفكار والمشاعر.',
                    ],
                    [
                        'question' => 'ما الاسم الشائع للوحدة الأساسية في القصيدة العربية التقليدية؟',
                        'choices' => [
                            ['choice_text' => 'البيت الشعري.', 'is_correct' => true],
                            ['choice_text' => 'الفقرة.', 'is_correct' => false],
                            ['choice_text' => 'الفصل.', 'is_correct' => false],
                            ['choice_text' => 'العنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصيدة العربية التقليدية تتكوّن من أبيات شعرية.',
                    ],
                    [
                        'question' => 'ماذا تسمى المجموعة الكاملة من الأبيات التي يتكوّن منها النص الشعري؟',
                        'choices' => [
                            ['choice_text' => 'القصيدة.', 'is_correct' => true],
                            ['choice_text' => 'الجملة.', 'is_correct' => false],
                            ['choice_text' => 'الرسالة.', 'is_correct' => false],
                            ['choice_text' => 'الفقرة الصحفية.', 'is_correct' => false],
                        ],
                        'explanation' => 'القصيدة هي النص الشعري الذي يتكون من مجموعة من الأبيات أو الأسطر بحسب نوع الشعر.',
                    ],
                    [
                        'question' => 'أي موضوع يمكن أن يتناوله الشعر؟',
                        'choices' => [
                            ['choice_text' => 'الحب أو الوطن أو الطبيعة أو الحكمة.', 'is_correct' => true],
                            ['choice_text' => 'الحساب فقط.', 'is_correct' => false],
                            ['choice_text' => 'تعليمات الأجهزة فقط.', 'is_correct' => false],
                            ['choice_text' => 'جداول الأسعار فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر يستطيع التعبير عن موضوعات إنسانية كثيرة، مثل الحب والوطن والطبيعة والحكمة.',
                    ],
                    [
                        'question' => 'ما الذي يجعل الشعر مختلفًا عن الكلام العادي في كثير من الأحيان؟',
                        'choices' => [
                            ['choice_text' => 'العناية بالإيقاع والصور واختيار الألفاظ.', 'is_correct' => true],
                            ['choice_text' => 'أنه لا يحمل معنى.', 'is_correct' => false],
                            ['choice_text' => 'أنه لا يستخدم الأفعال.', 'is_correct' => false],
                            ['choice_text' => 'أنه يجب أن يكون طويلًا جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشاعر يهتم بالإيقاع والصورة والكلمة المختارة، وهذا يعطي النص طابعًا فنيًا.',
                    ],
                    [
                        'question' => 'إذا قرأت أبياتًا تتحدث عن شوق الشاعر إلى وطنه، فما الموضوع الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الحنين والوطن.', 'is_correct' => true],
                            ['choice_text' => 'الرياضيات.', 'is_correct' => false],
                            ['choice_text' => 'الطعام.', 'is_correct' => false],
                            ['choice_text' => 'التقنية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشوق إلى الوطن يشير إلى موضوع الحنين والانتماء.',
                    ],
                    [
                        'question' => 'أي عبارة تمثل شعرًا أكثر من كونها نثرًا عاديًا؟',
                        'choices' => [
                            ['choice_text' => 'يا ليل، طال السهر في عيني.', 'is_correct' => true],
                            ['choice_text' => 'وصلت الحافلة عند الثامنة.', 'is_correct' => false],
                            ['choice_text' => 'يرجى إغلاق الباب.', 'is_correct' => false],
                            ['choice_text' => 'أرسلت التقرير إلى المدير.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى فيها خطاب وصياغة ذات نبرة شعرية وصورة عاطفية.',
                    ],
                    [
                        'question' => 'لماذا يختار الشاعر كلمة معينة بعناية؟',
                        'choices' => [
                            ['choice_text' => 'لأن الكلمة تؤثر في المعنى والإيقاع والصورة والإحساس.', 'is_correct' => true],
                            ['choice_text' => 'لأن عدد الحروف هو الشيء الوحيد المهم.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل الكلمات متساوية في الأثر.', 'is_correct' => false],
                            ['choice_text' => 'لإخفاء الموضوع دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار الكلمة في الشعر قد يغيّر الإيقاع والنبرة والصورة التي يشعر بها القارئ.',
                    ],
                    [
                        'question' => 'ما الذي يبحث عنه القارئ عند بداية قراءة قصيدة؟',
                        'choices' => [
                            ['choice_text' => 'الموضوع العام والصوت أو العاطفة التي تظهر في الأبيات.', 'is_correct' => true],
                            ['choice_text' => 'سعر الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'عدد صفحات المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'لون الورق فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'فهم الموضوع والنبرة العاطفية يساعدان على الدخول إلى القصيدة قبل التفاصيل.',
                    ],
                    [
                        'question' => 'هل يمكن أن يعبر الشعر عن تجربة شخصية؟',
                        'choices' => [
                            ['choice_text' => 'نعم، كثير من الشعر يعبر عن تجارب ومشاعر شخصية.', 'is_correct' => true],
                            ['choice_text' => 'لا، الشعر لا يتحدث عن الإنسان.', 'is_correct' => false],
                            ['choice_text' => 'لا، الشعر خاص بالأرقام.', 'is_correct' => false],
                            ['choice_text' => 'فقط إذا كان طويلًا جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر من أكثر أشكال التعبير قدرة على نقل التجربة والمشاعر الشخصية.',
                    ],
                ],
            ],
            [
                'title' => 'القافية والإيقاع',
                'description' => 'تعلّم ملاحظة القافية والإيقاع والتكرار الصوتي في القصيدة بطريقة سهلة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالقافية في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'الصوت أو النهاية التي تتكرر في أواخر الأبيات أو الأسطر الشعرية.', 'is_correct' => true],
                            ['choice_text' => 'اسم الشاعر.', 'is_correct' => false],
                            ['choice_text' => 'موضوع القصيدة.', 'is_correct' => false],
                            ['choice_text' => 'عدد الشخصيات.', 'is_correct' => false],
                        ],
                        'explanation' => 'القافية ترتبط بالنهاية الصوتية المتكررة في القصيدة.',
                    ],
                    [
                        'question' => 'إذا انتهت عدة أبيات بصوت متشابه، فما الذي قد تلاحظه؟',
                        'choices' => [
                            ['choice_text' => 'وحدة أو تشابه القافية.', 'is_correct' => true],
                            ['choice_text' => 'تغير الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'اختفاء الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'تحول القصيدة إلى خبر.', 'is_correct' => false],
                        ],
                        'explanation' => 'تشابه النهايات الصوتية يدل على وجود قافية مشتركة أو متقاربة.',
                    ],
                    [
                        'question' => 'ما أثر الإيقاع في الشعر؟',
                        'choices' => [
                            ['choice_text' => 'يعطي القصيدة نغمة ويساعد على إحساس التوازن والحركة.', 'is_correct' => true],
                            ['choice_text' => 'يلغي المعنى.', 'is_correct' => false],
                            ['choice_text' => 'يمنع الصور.', 'is_correct' => false],
                            ['choice_text' => 'يجعل كل بيت خبرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإيقاع أحد العناصر التي تمنح الشعر موسيقاه وتؤثر في طريقة تلقيه.',
                    ],
                    [
                        'question' => 'أي شيء يمكن أن يساهم في صنع الإيقاع؟',
                        'choices' => [
                            ['choice_text' => 'تكرار بعض الأصوات والكلمات وانتظام المقاطع.', 'is_correct' => true],
                            ['choice_text' => 'لون الورق.', 'is_correct' => false],
                            ['choice_text' => 'اسم الناشر.', 'is_correct' => false],
                            ['choice_text' => 'عدد صفحات الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار الصوتي وانتظام البناء من العناصر التي قد تساهم في الإيقاع.',
                    ],
                    [
                        'question' => 'إذا شعر القارئ أن الأبيات تنساب بنغمة ثابتة، فما السبب المحتمل؟',
                        'choices' => [
                            ['choice_text' => 'وجود بناء إيقاعي منظم.', 'is_correct' => true],
                            ['choice_text' => 'أن القصيدة بلا معنى.', 'is_correct' => false],
                            ['choice_text' => 'أن كل الكلمات متشابهة في المعنى.', 'is_correct' => false],
                            ['choice_text' => 'أن النص نثري بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإحساس بانسياب منتظم يرتبط غالبًا بالبناء الإيقاعي.',
                    ],
                    [
                        'question' => 'ما وظيفة التكرار في القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'يمكن أن يؤكد الفكرة ويقوي الإيقاع والعاطفة.', 'is_correct' => true],
                            ['choice_text' => 'يمنع فهم القصيدة.', 'is_correct' => false],
                            ['choice_text' => 'يغير الموضوع تلقائيًا.', 'is_correct' => false],
                            ['choice_text' => 'يجعل النص تقريرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار المقصود قد يثبت فكرة أو إحساسًا ويمنح القصيدة نغمة مميزة.',
                    ],
                    [
                        'question' => 'أي عبارة تركز على الصوت أكثر من المعنى؟',
                        'choices' => [
                            ['choice_text' => 'تشابه نهايات الأبيات.', 'is_correct' => true],
                            ['choice_text' => 'قصة الشاعر في طفولته.', 'is_correct' => false],
                            ['choice_text' => 'فكرة الوطن.', 'is_correct' => false],
                            ['choice_text' => 'الشخصية الرئيسية.', 'is_correct' => false],
                        ],
                        'explanation' => 'تشابه النهايات الصوتية جانب صوتي في القصيدة، بينما الخيارات الأخرى تتعلق بالمحتوى.',
                    ],
                    [
                        'question' => 'هل كل قصيدة حديثة تحتاج إلى قافية واحدة ثابتة؟',
                        'choices' => [
                            ['choice_text' => 'لا، تختلف البنية الشعرية ويمكن أن تتنوع القافية.', 'is_correct' => true],
                            ['choice_text' => 'نعم، دون أي استثناء.', 'is_correct' => false],
                            ['choice_text' => 'نعم، بشرط أن تكون القصيدة قصيرة.', 'is_correct' => false],
                            ['choice_text' => 'لا، لأن القصائد لا تحتوي على أصوات.', 'is_correct' => false],
                        ],
                        'explanation' => 'أنواع الشعر متعددة، وبعض الشعر الحديث لا يلتزم بقافية واحدة ثابتة.',
                    ],
                    [
                        'question' => 'إذا تكررت عبارة «يا وطني» في عدة أسطر، ماذا يمكن أن تحقق؟',
                        'choices' => [
                            ['choice_text' => 'التأكيد على موضوع الوطن وتقوية الإحساس به.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'تحويل القصيدة إلى قصة.', 'is_correct' => false],
                            ['choice_text' => 'إخفاء صوت الشاعر.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار هنا يسلط الضوء على الوطن ويقوي العاطفة المرتبطة به.',
                    ],
                    [
                        'question' => 'ما السؤال المناسب عند تحليل القافية؟',
                        'choices' => [
                            ['choice_text' => 'ما الصوت الذي يتكرر في نهايات الأبيات، وما أثر ذلك؟', 'is_correct' => true],
                            ['choice_text' => 'كم سعر الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين اشترى الشاعر القلم؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                        ],
                        'explanation' => 'تحليل القافية يجمع بين ملاحظة التكرار الصوتي وفهم أثره في القصيدة.',
                    ],
                ],
            ],
            [
                'title' => 'موضوع القصيدة وعاطفتها',
                'description' => 'تدرّب على اكتشاف موضوع القصيدة والعاطفة والنبرة من خلال أبيات قصيرة ومعانٍ بسيطة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'إذا كانت القصيدة تتحدث عن أم يشتاق إليها الشاعر، فما العاطفة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الحنين والمحبة.', 'is_correct' => true],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                            ['choice_text' => 'السخرية.', 'is_correct' => false],
                            ['choice_text' => 'الغضب من الطقس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشوق إلى الأم يدل على الحنين والمحبة.',
                    ],
                    [
                        'question' => 'قصيدة تصف الوطن بالفخر وتذكر إنجازاته. ما الشعور الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الاعتزاز والانتماء.', 'is_correct' => true],
                            ['choice_text' => 'الخوف فقط.', 'is_correct' => false],
                            ['choice_text' => 'الملل.', 'is_correct' => false],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفخر بالوطن يدل على الاعتزاز والشعور بالانتماء.',
                    ],
                    [
                        'question' => 'إذا امتلأت القصيدة بكلمات مثل «دموع، فراق، غياب»، فما الجو المتوقع؟',
                        'choices' => [
                            ['choice_text' => 'الحزن والفقد.', 'is_correct' => true],
                            ['choice_text' => 'الفرح الشديد.', 'is_correct' => false],
                            ['choice_text' => 'الاحتفال.', 'is_correct' => false],
                            ['choice_text' => 'المرح.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الكلمات مرتبطة عادة بالحزن والفراق، فتدل على جو عاطفي حزين.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على معرفة عاطفة الشاعر؟',
                        'choices' => [
                            ['choice_text' => 'كيف يشعر الشاعر تجاه الشخص أو المكان الذي يتحدث عنه؟', 'is_correct' => true],
                            ['choice_text' => 'كم حرفًا في العنوان؟', 'is_correct' => false],
                            ['choice_text' => 'من طبع الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الصفحة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'سؤال المشاعر يكشف العلاقة العاطفية بين الشاعر وموضوع القصيدة.',
                    ],
                    [
                        'question' => 'إذا كانت القصيدة عن الربيع وتكثر فيها كلمات «زهر، نسيم، ضوء، ابتسام»، فما الجو الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الفرح والبهجة.', 'is_correct' => true],
                            ['choice_text' => 'الخوف.', 'is_correct' => false],
                            ['choice_text' => 'الحزن الشديد.', 'is_correct' => false],
                            ['choice_text' => 'الغضب.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الألفاظ تعطي صورة لطيفة ومشرقة وتناسب جو الفرح.',
                    ],
                    [
                        'question' => 'قصيدة تتحدث عن فقد صديق قديم بعد سنوات من الصحبة. ما الموضوع الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الفقد والوفاء والذكريات.', 'is_correct' => true],
                            ['choice_text' => 'التسوق.', 'is_correct' => false],
                            ['choice_text' => 'التكنولوجيا.', 'is_correct' => false],
                            ['choice_text' => 'الرياضة.', 'is_correct' => false],
                        ],
                        'explanation' => 'فقد الصديق بعد علاقة طويلة يرتبط بالوفاء والذكريات والحزن.',
                    ],
                    [
                        'question' => 'إذا بدأ الشاعر بحزن ثم انتهى بالأمل، ماذا يمكن أن يحدث للعاطفة؟',
                        'choices' => [
                            ['choice_text' => 'تنتقل من الحزن إلى الرجاء أو التفاؤل.', 'is_correct' => true],
                            ['choice_text' => 'تبقى غضبًا في كل سطر.', 'is_correct' => false],
                            ['choice_text' => 'تختفي المشاعر تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'تتحول إلى تقرير علمي.', 'is_correct' => false],
                        ],
                        'explanation' => 'تطور الأبيات يمكن أن يغير النبرة من حالة حزينة إلى نهاية أكثر تفاؤلًا.',
                    ],
                    [
                        'question' => 'لماذا يمكن أن يختلف إحساس قصيدتين تتحدثان عن البحر؟',
                        'choices' => [
                            ['choice_text' => 'لأن الشاعر قد يربط البحر بعاطفة أو صورة مختلفة.', 'is_correct' => true],
                            ['choice_text' => 'لأن البحر له معنى واحد دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشعر لا يستخدم العاطفة.', 'is_correct' => false],
                            ['choice_text' => 'لأن الموضوع يمنع أي اختلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الموضوع الواحد قد يعالج بطرق مختلفة؛ فقد يراه شاعر رمزًا للحرية وآخر رمزًا للوحدة مثلًا.',
                    ],
                    [
                        'question' => 'ما الذي يساعد على تحديد النبرة العامة للقصيدة؟',
                        'choices' => [
                            ['choice_text' => 'الكلمات والصور والتكرار والعاطفة في الأبيات.', 'is_correct' => true],
                            ['choice_text' => 'عدد صفحات الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'اسم الناشر.', 'is_correct' => false],
                            ['choice_text' => 'نوع الورق.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه العناصر كلها تقدم أدلة على النبرة مثل الفرح أو الحزن أو التأمل.',
                    ],
                    [
                        'question' => 'إذا كان الشاعر يكرر «سأعود» في قصيدة عن الغربة، ماذا قد يوحي ذلك؟',
                        'choices' => [
                            ['choice_text' => 'الأمل في الرجوع والتمسك بالوطن أو المكان.', 'is_correct' => true],
                            ['choice_text' => 'رفض العودة.', 'is_correct' => false],
                            ['choice_text' => 'نسيان الوطن.', 'is_correct' => false],
                            ['choice_text' => 'الانشغال بالرياضة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار «سأعود» في سياق الغربة يؤكد التعلق بالعودة والأمل فيها.',
                    ],
                ],
            ],
            [
                'title' => 'الصور الشعرية',
                'description' => 'تعرف على التشبيه والاستعارة والتشخيص في الشعر وفهم كيف تساعد الصور في نقل الإحساس.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي عبارة تحتوي على تشبيه؟',
                        'choices' => [
                            ['choice_text' => 'وجه الصباح كالقمر.', 'is_correct' => true],
                            ['choice_text' => 'الصباح جميل.', 'is_correct' => false],
                            ['choice_text' => 'طلع الصباح.', 'is_correct' => false],
                            ['choice_text' => 'جاء الصباح.', 'is_correct' => false],
                        ],
                        'explanation' => '«كالقمر» أداة تشبيه تقارن وجه الصباح بالقمر.',
                    ],
                    [
                        'question' => 'في «الليل يهمس للشاعر»، ما الصورة الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص الليل.', 'is_correct' => true],
                            ['choice_text' => 'وصف علمي للليل.', 'is_correct' => false],
                            ['choice_text' => 'طباق.', 'is_correct' => false],
                            ['choice_text' => 'سجع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الليل لا يهمس حقيقة، لكن الشاعر أعطاه فعلًا إنسانيًا.',
                    ],
                    [
                        'question' => 'في «قلبي بحر من الذكريات»، ما الفكرة البلاغية؟',
                        'choices' => [
                            ['choice_text' => 'استعارة تصور كثرة الذكريات وعمقها.', 'is_correct' => true],
                            ['choice_text' => 'معلومة جغرافية.', 'is_correct' => false],
                            ['choice_text' => 'تعريف حرفي للقلب.', 'is_correct' => false],
                            ['choice_text' => 'وصف البحر الحقيقي.', 'is_correct' => false],
                        ],
                        'explanation' => 'تشبيه القلب بالبحر دون أداة يعطي إحساسًا بالعمق والكثرة واتساع الذكريات.',
                    ],
                    [
                        'question' => 'لماذا يستخدم الشاعر الصور؟',
                        'choices' => [
                            ['choice_text' => 'ليجعل المعنى محسوسًا وأكثر تأثيرًا في الخيال.', 'is_correct' => true],
                            ['choice_text' => 'ليخفي كل فكرة.', 'is_correct' => false],
                            ['choice_text' => 'ليمنع القارئ من الشعور.', 'is_correct' => false],
                            ['choice_text' => 'ليحوّل القصيدة إلى تقرير.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصور الشعرية تساعد القارئ على رؤية المعنى أو الإحساس بصورة أقرب للخيال.',
                    ],
                    [
                        'question' => 'أي عبارة تصف ضوء الشمس بصورة شعرية؟',
                        'choices' => [
                            ['choice_text' => 'أرسلت الشمس خيوطها الذهبية إلى النافذة.', 'is_correct' => true],
                            ['choice_text' => 'ظهرت الشمس الساعة السابعة.', 'is_correct' => false],
                            ['choice_text' => 'الشمس موجودة اليوم.', 'is_correct' => false],
                            ['choice_text' => 'ارتفعت درجة الحرارة.', 'is_correct' => false],
                        ],
                        'explanation' => '«خيوطها الذهبية» صورة تجعل الضوء مرئيًا في خيال القارئ.',
                    ],
                    [
                        'question' => 'في «النجوم تضحك في السماء»، ماذا نلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'إسناد فعل إنساني إلى النجوم.', 'is_correct' => true],
                            ['choice_text' => 'تعريفًا فلكيًا.', 'is_correct' => false],
                            ['choice_text' => 'وصفًا مباشرًا للطقس.', 'is_correct' => false],
                            ['choice_text' => 'سؤالًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النجوم لا تضحك حرفيًا، وهذه صورة تشخيصية.',
                    ],
                    [
                        'question' => 'أي صورة تناسب موضوع الوحدة؟',
                        'choices' => [
                            ['choice_text' => 'غرفتي صامتة كقبر في الليل.', 'is_correct' => true],
                            ['choice_text' => 'جلست في الغرفة.', 'is_correct' => false],
                            ['choice_text' => 'الغرفة واسعة.', 'is_correct' => false],
                            ['choice_text' => 'فتحت الباب.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشبيه بالقبر ينقل إحساسًا قويًا بالوحدة والسكون.',
                    ],
                    [
                        'question' => 'إذا وصف الشاعر الأمل بأنه «شمعة في العتمة»، فما المعنى الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الأمل يمنح نورًا أو قوة وسط الصعوبة.', 'is_correct' => true],
                            ['choice_text' => 'الأمل شيء يحترق حرفيًا.', 'is_correct' => false],
                            ['choice_text' => 'الأمل يطفئ الضوء.', 'is_correct' => false],
                            ['choice_text' => 'الأمل نوع من الطعام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشمعة تمثل النور في الظلام، ولذلك ترمز هنا إلى الأمل وسط الصعوبات.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لفهم صورة شعرية صعبة؟',
                        'choices' => [
                            ['choice_text' => 'ربط الصورة بما قبلها وبعدها وبالعاطفة العامة.', 'is_correct' => true],
                            ['choice_text' => 'قراءة الكلمة وحدها فقط.', 'is_correct' => false],
                            ['choice_text' => 'افتراض معنى حرفي دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل السياق.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق والعاطفة يساعدان على فهم المقصود من الصور المجازية.',
                    ],
                    [
                        'question' => 'هل كل صورة شعرية يجب أن تُفهم حرفيًا؟',
                        'choices' => [
                            ['choice_text' => 'لا، كثير من الصور تعبر مجازيًا عن فكرة أو شعور.', 'is_correct' => true],
                            ['choice_text' => 'نعم دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'نعم إذا كانت القصيدة قصيرة.', 'is_correct' => false],
                            ['choice_text' => 'لا، لأنها بلا معنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة الشعرية غالبًا تنقل معنى مجازيًا ولا يكون المقصود هو المعنى الحرفي.',
                    ],
                ],
            ],
            [
                'title' => 'بناء القصيدة وقراءة الأبيات',
                'description' => 'تعلّم كيف تتابع أفكار القصيدة وتفهم العلاقة بين الأبيات وتلاحظ التكرار والتدرج.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'إذا بدأت القصيدة بوصف الطبيعة ثم انتقلت إلى مشاعر الشاعر، ماذا حدث في البناء؟',
                        'choices' => [
                            ['choice_text' => 'انتقل الشاعر من وصف خارجي إلى تجربة داخلية.', 'is_correct' => true],
                            ['choice_text' => 'تحولت القصيدة إلى تقرير مالي.', 'is_correct' => false],
                            ['choice_text' => 'اختفى الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'أصبح النص حوارًا بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => 'انتقال القصيدة من الطبيعة إلى المشاعر يربط المشهد الخارجي بتجربة الشاعر الداخلية.',
                    ],
                    [
                        'question' => 'ما فائدة ترتيب الأبيات في القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'يساعد على تطور الفكرة أو العاطفة من بداية النص إلى نهايته.', 'is_correct' => true],
                            ['choice_text' => 'ليس له أي أثر.', 'is_correct' => false],
                            ['choice_text' => 'يجعل كل بيت بلا علاقة بالآخر.', 'is_correct' => false],
                            ['choice_text' => 'يحدد لون الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'ترتيب الأبيات قد يقود القارئ من مقدمة أو مشهد إلى فكرة أو عاطفة ثم إلى خاتمة.',
                    ],
                    [
                        'question' => 'إذا كرر الشاعر عبارة واحدة في بداية عدة أبيات، ماذا يمكن أن تسمى هذه الظاهرة؟',
                        'choices' => [
                            ['choice_text' => 'تكرارًا افتتاحيًا.', 'is_correct' => true],
                            ['choice_text' => 'قافية فقط.', 'is_correct' => false],
                            ['choice_text' => 'عنوانًا فرعيًا.', 'is_correct' => false],
                            ['choice_text' => 'خطأ نحويًا بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار العبارة في بدايات الأبيات يخلق نمطًا إيقاعيًا ويؤكد الفكرة.',
                    ],
                    [
                        'question' => 'إذا انتهت القصيدة بتكرار الفكرة التي بدأت بها لكن بنبرة أمل، ماذا قد يحقق ذلك؟',
                        'choices' => [
                            ['choice_text' => 'يعطي إحساسًا بالاكتمال والتطور.', 'is_correct' => true],
                            ['choice_text' => 'يلغي كل ما سبق.', 'is_correct' => false],
                            ['choice_text' => 'يحوّلها إلى قصة قصيرة.', 'is_correct' => false],
                            ['choice_text' => 'يجعل القافية غير مهمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العودة إلى الفكرة الأولى مع تغير النبرة يمكن أن تمنح القصيدة بناءً دائريًا أو إحساسًا بالتطور.',
                    ],
                    [
                        'question' => 'عند قراءة بيت شعري صعب، ما الأفضل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'قراءة البيت في سياقه وربطه بالأبيات المحيطة.', 'is_correct' => true],
                            ['choice_text' => 'تغيير كل كلماته.', 'is_correct' => false],
                            ['choice_text' => 'حذف الكلمات الصعبة.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل القصيدة كلها.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق يساعد على فهم الكلمات والمعنى الذي يقصده الشاعر.',
                    ],
                    [
                        'question' => 'ما الذي يمكن أن يدل على انتقال القصيدة إلى فكرة جديدة؟',
                        'choices' => [
                            ['choice_text' => 'تغير الموضوع أو ظهور ألفاظ جديدة مرتبطة بفكرة مختلفة.', 'is_correct' => true],
                            ['choice_text' => 'لون الصفحة.', 'is_correct' => false],
                            ['choice_text' => 'عدد حروف الاسم.', 'is_correct' => false],
                            ['choice_text' => 'نوع الورق.', 'is_correct' => false],
                        ],
                        'explanation' => 'تغير الحقول الدلالية والألفاظ قد يشير إلى انتقال في الموضوع أو الفكرة.',
                    ],
                    [
                        'question' => 'إذا كان كل بيت يضيف تفصيلًا جديدًا عن شخص واحد، فما الخيط الذي يربط القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'الشخصية أو الموضوع الذي تدور حوله الأبيات.', 'is_correct' => true],
                            ['choice_text' => 'القافية وحدها فقط.', 'is_correct' => false],
                            ['choice_text' => 'الغلاف.', 'is_correct' => false],
                            ['choice_text' => 'مكان الطباعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنصر المتكرر في المعنى هو الذي يحافظ على وحدة القصيدة حتى لو اختلفت التفاصيل.',
                    ],
                    [
                        'question' => 'أي قراءة أفضل لقصيدة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'قراءة أولى لفهم المعنى العام ثم قراءة ثانية لملاحظة التفاصيل.', 'is_correct' => true],
                            ['choice_text' => 'قراءة العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'حفظ آخر بيت فقط.', 'is_correct' => false],
                            ['choice_text' => 'قراءة الكلمات المفردة دون سياق.', 'is_correct' => false],
                        ],
                        'explanation' => 'القراءة على مرحلتين تساعد أولًا على فهم الصورة العامة ثم على تحليل التفاصيل.',
                    ],
                    [
                        'question' => 'لماذا قد يكرر الشاعر كلمة «وطني» في نهاية القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'لتأكيد تعلقه بالوطن وترك أثر قوي في النهاية.', 'is_correct' => true],
                            ['choice_text' => 'لأن الشاعر نسي الكلمة.', 'is_correct' => false],
                            ['choice_text' => 'لأن القافية تمنع المعنى.', 'is_correct' => false],
                            ['choice_text' => 'لتحويل القصيدة إلى نثر.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار الختامي قد يقوي الفكرة العاطفية ويمنح النهاية تأكيدًا واضحًا.',
                    ],
                    [
                        'question' => 'ما السؤال الذي يساعد على فهم تطور القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'كيف تغيرت الفكرة أو العاطفة من أول بيت إلى آخر بيت؟', 'is_correct' => true],
                            ['choice_text' => 'كم سعر الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين طُبع الديوان؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الصفحة الأخيرة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'مقارنة البداية بالنهاية تكشف تطور الفكرة أو النبرة أو الموقف.',
                    ],
                ],
            ],
            [
                'title' => 'اللغة الشعرية والتذوق',
                'description' => 'لاحظ أثر الكلمات المختارة والتكرار والنبرة والإيحاءات في الشعر وطوّر قراءة أكثر تذوقًا.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'لماذا قد يختار الشاعر كلمة «نسيم» بدل «هواء»؟',
                        'choices' => [
                            ['choice_text' => 'لأن «نسيم» توحي باللطف والهدوء أكثر في السياق الشعري.', 'is_correct' => true],
                            ['choice_text' => 'لأن «هواء» ليست كلمة عربية.', 'is_correct' => false],
                            ['choice_text' => 'لأن «نسيم» تعني النار.', 'is_correct' => false],
                            ['choice_text' => 'لأن الشاعر لا يهتم بالمعنى.', 'is_correct' => false],
                        ],
                        'explanation' => '«نسيم» تحمل إيحاءً باللطف والرقة، بينما «هواء» أعم وأكثر حيادًا.',
                    ],
                    [
                        'question' => 'ما المقصود بالإيحاء في اللغة الشعرية؟',
                        'choices' => [
                            ['choice_text' => 'المعاني والمشاعر التي توحي بها الكلمة إلى جانب معناها المباشر.', 'is_correct' => true],
                            ['choice_text' => 'عدد الكلمات في البيت.', 'is_correct' => false],
                            ['choice_text' => 'اسم الشاعر.', 'is_correct' => false],
                            ['choice_text' => 'علامة الترقيم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة الشعرية قد تحمل مشاعر وإيحاءات تتجاوز معناها القاموسي المباشر.',
                    ],
                    [
                        'question' => 'أي كلمة تحمل إيحاءً بالحنين أكثر؟',
                        'choices' => [
                            ['choice_text' => 'الذكريات.', 'is_correct' => true],
                            ['choice_text' => 'فاتورة.', 'is_correct' => false],
                            ['choice_text' => 'حاسوب.', 'is_correct' => false],
                            ['choice_text' => 'مقعد.', 'is_correct' => false],
                        ],
                        'explanation' => '«الذكريات» ترتبط بالماضي وتجارب الإنسان، ولذلك تناسب موضوع الحنين.',
                    ],
                    [
                        'question' => 'إذا استخدم الشاعر كلمات مثل «فجر، نور، أمل»، فما الجو الذي قد تصنعه؟',
                        'choices' => [
                            ['choice_text' => 'التفاؤل والبداية الجديدة.', 'is_correct' => true],
                            ['choice_text' => 'الخوف الشديد.', 'is_correct' => false],
                            ['choice_text' => 'الظلام المطلق.', 'is_correct' => false],
                            ['choice_text' => 'الملل.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الكلمات تحمل دلالات مشرقة وتوحي بالأمل والبداية.',
                    ],
                    [
                        'question' => 'أي عبارة أكثر شعرية في وصف الليل؟',
                        'choices' => [
                            ['choice_text' => 'نامت المدينة تحت عباءة الليل.', 'is_correct' => true],
                            ['choice_text' => 'حل الليل الساعة الثامنة.', 'is_correct' => false],
                            ['choice_text' => 'الليل بدأ.', 'is_correct' => false],
                            ['choice_text' => 'كانت السماء مظلمة.', 'is_correct' => false],
                        ],
                        'explanation' => '«عباءة الليل» صورة مجازية تمنح المشهد طابعًا تخييليًا.',
                    ],
                    [
                        'question' => 'كيف يمكن أن يؤثر التكرار في التذوق الشعري؟',
                        'choices' => [
                            ['choice_text' => 'يجعل صوت الفكرة أو العاطفة أكثر حضورًا.', 'is_correct' => true],
                            ['choice_text' => 'يلغي الإيقاع دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'يمنع التأثير.', 'is_correct' => false],
                            ['choice_text' => 'يجعل كل كلمة جديدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار قد يرسّخ إحساسًا أو فكرة ويزيد الأثر الموسيقي.',
                    ],
                    [
                        'question' => 'إذا شعر القارئ أن القصيدة «هادئة»، فما الذي يمكن أن يكون سببًا في ذلك؟',
                        'choices' => [
                            ['choice_text' => 'الألفاظ والصور والإيقاع الهادئ.', 'is_correct' => true],
                            ['choice_text' => 'عدد صفحات الديوان.', 'is_correct' => false],
                            ['choice_text' => 'اسم الشاعر.', 'is_correct' => false],
                            ['choice_text' => 'حجم الخط.', 'is_correct' => false],
                        ],
                        'explanation' => 'النبرة الهادئة تنتج من تفاعل الكلمات والصور والإيقاع، وليس من شكل الكتاب.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على تذوق كلمة شعرية؟',
                        'choices' => [
                            ['choice_text' => 'ماذا توحي هذه الكلمة غير معناها المباشر؟', 'is_correct' => true],
                            ['choice_text' => 'كم حرفًا فيها؟', 'is_correct' => false],
                            ['choice_text' => 'أين طُبعت القصيدة؟', 'is_correct' => false],
                            ['choice_text' => 'كم نسخة من الديوان؟', 'is_correct' => false],
                        ],
                        'explanation' => 'التذوق يبحث عن الإيحاءات والأحاسيس التي تضيفها الكلمة إلى النص.',
                    ],
                    [
                        'question' => 'إذا اختار الشاعر الفعل «يركض» بدل «يمشي» في وصف الزمن، فما الأثر؟',
                        'choices' => [
                            ['choice_text' => 'إيحاء بسرعة مرور الزمن.', 'is_correct' => true],
                            ['choice_text' => 'إيحاء بأن الزمن لا يتحرك.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء فكرة الزمن.', 'is_correct' => false],
                            ['choice_text' => 'تأكيد بطء الحياة.', 'is_correct' => false],
                        ],
                        'explanation' => '«يركض» أقوى حركة من «يمشي»، فتخدم صورة سرعة مرور الوقت.',
                    ],
                    [
                        'question' => 'ما الذي يميز القراءة المتذوقة عن القراءة السريعة فقط؟',
                        'choices' => [
                            ['choice_text' => 'الانتباه إلى المعنى والصورة والإيقاع والإحساس.', 'is_correct' => true],
                            ['choice_text' => 'حساب عدد الكلمات فقط.', 'is_correct' => false],
                            ['choice_text' => 'حفظ أول بيت فقط.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل اختيار الألفاظ.', 'is_correct' => false],
                        ],
                        'explanation' => 'التذوق يجمع بين فهم المعنى وملاحظة الطريقة الفنية التي صاغ بها الشاعر تجربته.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في الشعر',
                'description' => 'اختبر فهمك للشعر من خلال أسئلة تجمع بين القافية والإيقاع والعاطفة والصورة والبنية والتذوق.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'إذا وجدت أبياتًا تنتهي كلها تقريبًا بالصوت نفسه، فما العنصر الذي تلاحظه؟',
                        'choices' => [
                            ['choice_text' => 'القافية.', 'is_correct' => true],
                            ['choice_text' => 'الشخصيات.', 'is_correct' => false],
                            ['choice_text' => 'الحبكة.', 'is_correct' => false],
                            ['choice_text' => 'المكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار الصوت في نهايات الأبيات يدل على القافية.',
                    ],
                    [
                        'question' => 'في «كالورد في رقتها»، ما العنصر الشعري الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'التشبيه.', 'is_correct' => true],
                            ['choice_text' => 'القافية.', 'is_correct' => false],
                            ['choice_text' => 'الطباق.', 'is_correct' => false],
                            ['choice_text' => 'السجع.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود «كـ» يقارن شيئًا بالورد ويبرز صفة الرقة.',
                    ],
                    [
                        'question' => 'قصيدة تكثر فيها كلمات «رحيل، غياب، دموع». ما النبرة الغالبة؟',
                        'choices' => [
                            ['choice_text' => 'الحزن والفقد.', 'is_correct' => true],
                            ['choice_text' => 'المرح.', 'is_correct' => false],
                            ['choice_text' => 'الاحتفال.', 'is_correct' => false],
                            ['choice_text' => 'السخرية.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الكلمات تحمل دلالات حزينة مرتبطة بالفراق والفقد.',
                    ],
                    [
                        'question' => 'إذا قال الشاعر «الصباح يبتسم»، فما الصورة؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص.', 'is_correct' => true],
                            ['choice_text' => 'طباق.', 'is_correct' => false],
                            ['choice_text' => 'جناس.', 'is_correct' => false],
                            ['choice_text' => 'قافية.', 'is_correct' => false],
                        ],
                        'explanation' => 'إسناد الابتسام إلى الصباح يمنحه صفة إنسانية.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لفهم قصيدة جديدة في البداية؟',
                        'choices' => [
                            ['choice_text' => 'قراءة القصيدة كاملة لفهم الموضوع والنبرة قبل تحليل التفاصيل.', 'is_correct' => true],
                            ['choice_text' => 'تحليل كلمة واحدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'قراءة آخر بيت وحده.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل عنوان القصيدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'فهم الصورة العامة أولًا يجعل تحليل القافية والصور والعاطفة أسهل.',
                    ],
                    [
                        'question' => 'ما الذي يمكن أن يربط أبيات القصيدة حتى لو تغيرت الصور؟',
                        'choices' => [
                            ['choice_text' => 'الموضوع أو الفكرة أو العاطفة المشتركة.', 'is_correct' => true],
                            ['choice_text' => 'لون الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'اسم الناشر.', 'is_correct' => false],
                            ['choice_text' => 'عدد الصفحات.', 'is_correct' => false],
                        ],
                        'explanation' => 'وحدة القصيدة المعنوية تأتي من الخيط المشترك بين الأبيات.',
                    ],
                    [
                        'question' => 'إذا تحولت نبرة القصيدة من الحزن إلى الأمل، ماذا نسمي ذلك في القراءة؟',
                        'choices' => [
                            ['choice_text' => 'تطورًا في العاطفة أو النبرة.', 'is_correct' => true],
                            ['choice_text' => 'خطأ في القافية.', 'is_correct' => false],
                            ['choice_text' => 'تغييرًا في اسم الشاعر.', 'is_correct' => false],
                            ['choice_text' => 'حذفًا للمجاز.', 'is_correct' => false],
                        ],
                        'explanation' => 'تغير المشاعر عبر القصيدة جزء من تطور التجربة الشعرية.',
                    ],
                    [
                        'question' => 'أي عنصر يضيف موسيقى إلى القصيدة؟',
                        'choices' => [
                            ['choice_text' => 'الإيقاع والقافية والتكرار الصوتي.', 'is_correct' => true],
                            ['choice_text' => 'عدد صفحات الديوان.', 'is_correct' => false],
                            ['choice_text' => 'شكل الغلاف.', 'is_correct' => false],
                            ['choice_text' => 'اسم القصيدة فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه العناصر الصوتية تمنح الشعر موسيقاه وإحساسه بالإيقاع.',
                    ],
                    [
                        'question' => 'إذا استخدم الشاعر صورة «الأمل شمعة»، فما الرسالة الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الأمل يمنح نورًا وسط الصعوبات.', 'is_correct' => true],
                            ['choice_text' => 'الأمل نار منزلية فقط.', 'is_correct' => false],
                            ['choice_text' => 'الشاعر يتحدث عن متجر للشموع.', 'is_correct' => false],
                            ['choice_text' => 'الأمل لا علاقة له بالمشاعر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشمعة رمز للنور، لذلك تُستخدم هنا لتصوير الأمل وسط الظلمة أو المشكلات.',
                    ],
                    [
                        'question' => 'ما أفضل وصف للتذوق الشعري؟',
                        'choices' => [
                            ['choice_text' => 'فهم المعنى والاستمتاع بالصور والإيقاع وملاحظة أثر الكلمات.', 'is_correct' => true],
                            ['choice_text' => 'حفظ الأبيات دون فهم.', 'is_correct' => false],
                            ['choice_text' => 'عد الكلمات فقط.', 'is_correct' => false],
                            ['choice_text' => 'التركيز على الغلاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'التذوق يجمع بين الفهم والتحليل والاستمتاع بالجانب الفني في القصيدة.',
                    ],
                ],
            ],
            [
                'title' => 'تحليل قصيدة قصيرة للمبتدئين',
                'description' => 'طبّق مهارات قراءة القصيدة وتحليل موضوعها وعاطفتها وصورها وإيقاعها على أمثلة قصيرة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «يا وطني، في القلب أنتَ حكايةٌ لا تنتهي.» ما الموضوع الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'حب الوطن والانتماء إليه.', 'is_correct' => true],
                            ['choice_text' => 'وصف الطعام.', 'is_correct' => false],
                            ['choice_text' => 'الحديث عن السفر فقط.', 'is_correct' => false],
                            ['choice_text' => 'التحدث عن الدراسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'نداء الوطن وربطه بالقلب والحكاية يدل على محبة الوطن والارتباط العاطفي به.',
                    ],
                    [
                        'question' => 'في البيت السابق، ما الأسلوب الذي يظهر في «يا وطني»؟',
                        'choices' => [
                            ['choice_text' => 'النداء.', 'is_correct' => true],
                            ['choice_text' => 'النهي.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'التمني.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود «يا» قبل «وطني» يدل على نداء المخاطب.',
                    ],
                    [
                        'question' => 'اقرأ: «والليل يطوي فوقنا ستاره، حتى يجيء الصبح مبتسمًا.» ما الصورة في «الصبح مبتسمًا»؟',
                        'choices' => [
                            ['choice_text' => 'تشخيص الصباح وإعطاؤه صفة إنسانية.', 'is_correct' => true],
                            ['choice_text' => 'معلومة علمية عن الشمس.', 'is_correct' => false],
                            ['choice_text' => 'وصف عدد ساعات الليل.', 'is_correct' => false],
                            ['choice_text' => 'سؤال عن الصباح.', 'is_correct' => false],
                        ],
                        'explanation' => 'الابتسام فعل إنساني، وإسناده إلى الصباح يجعل الصورة تشخيصية.',
                    ],
                    [
                        'question' => 'إذا كانت القصيدة تنتقل من الليل إلى الصباح، ماذا قد يرمز هذا الانتقال إليه؟',
                        'choices' => [
                            ['choice_text' => 'الانتقال من الحزن أو الظلام إلى الأمل والبداية.', 'is_correct' => true],
                            ['choice_text' => 'الانتقال إلى موضوع الطعام.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء العاطفة.', 'is_correct' => false],
                            ['choice_text' => 'وصف مكان مختلف فقط دون أي دلالة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الانتقال من الليل إلى الصباح قد يحمل معنى رمزيًا مثل الخروج من الصعوبة إلى الأمل.',
                    ],
                    [
                        'question' => 'قصيدة تكرر كلمة «أعود» عدة مرات وهي تتحدث عن الغربة. ما الأثر الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'تأكيد الشوق والتمسك بفكرة الرجوع.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء موضوع الغربة.', 'is_correct' => false],
                            ['choice_text' => 'إظهار الغضب فقط.', 'is_correct' => false],
                            ['choice_text' => 'تحويل القصيدة إلى تقرير.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار يركز انتباه القارئ على فكرة العودة ويقوي مشاعر الشوق.',
                    ],
                    [
                        'question' => 'إذا انتهت أبيات القصيدة بأصوات متقاربة، فما العنصر الذي تلاحظه؟',
                        'choices' => [
                            ['choice_text' => 'القافية.', 'is_correct' => true],
                            ['choice_text' => 'الشخصية الرئيسية.', 'is_correct' => false],
                            ['choice_text' => 'المكان.', 'is_correct' => false],
                            ['choice_text' => 'الحبكة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقارب نهايات الأبيات صوتيًا يدل على القافية.',
                    ],
                    [
                        'question' => 'أي كلمة تحمل إيحاءً بالهدوء أكثر؟',
                        'choices' => [
                            ['choice_text' => 'نسيم.', 'is_correct' => true],
                            ['choice_text' => 'صخب.', 'is_correct' => false],
                            ['choice_text' => 'ضجيج.', 'is_correct' => false],
                            ['choice_text' => 'عاصفة.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة «نسيم» ترتبط غالبًا باللطف والهواء الهادئ، بينما الخيارات الأخرى أقوى وأشد.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لشرح بيت شعري صعب للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'فهم كلماته من السياق ثم صياغة معناه بكلمات بسيطة.', 'is_correct' => true],
                            ['choice_text' => 'تغيير كل كلمة دون قراءة بقية القصيدة.', 'is_correct' => false],
                            ['choice_text' => 'حفظ البيت فقط.', 'is_correct' => false],
                            ['choice_text' => 'الاعتماد على القافية وحدها.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق يساعد على فهم الكلمات، ثم يمكن تلخيص المعنى بلغة بسيطة دون فقد الفكرة الأساسية.',
                    ],
                    [
                        'question' => 'إذا وصف الشاعر المطر بأنه «رسائل من السماء»، فما الذي تضيفه الصورة؟',
                        'choices' => [
                            ['choice_text' => 'تجعل المطر يبدو كأنه يحمل معنى أو هدية من السماء.', 'is_correct' => true],
                            ['choice_text' => 'تثبت أن المطر أوراق مكتوبة فعلًا.', 'is_correct' => false],
                            ['choice_text' => 'تلغي وصف المطر.', 'is_correct' => false],
                            ['choice_text' => 'تحول القصيدة إلى خبر علمي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصورة المجازية تمنح المطر معنى عاطفيًا يتجاوز كونه ماءً نازلًا من السحاب.',
                    ],
                    [
                        'question' => 'بعد قراءة قصيدة قصيرة، ما السؤال الأفضل لمعرفة هل فهمتها جيدًا؟',
                        'choices' => [
                            ['choice_text' => 'ما الموضوع، وما العاطفة، وكيف استخدم الشاعر اللغة والصور لخدمتهما؟', 'is_correct' => true],
                            ['choice_text' => 'كم صفحة في الديوان؟', 'is_correct' => false],
                            ['choice_text' => 'ما سعر الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال يجمع بين أهم جوانب الفهم الشعري: الموضوع والعاطفة واللغة والصور.',
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
