<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SentenceStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sentence-structure')->firstOrFail();

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
                'title' => 'Building Simple Arabic Sentences',
                'description' => 'Practice putting words in a natural order and recognizing the basic parts of a simple Arabic sentence.',
                'questions' => [
                    [
                        'question' => 'رتّب الكلمات لتكوين جملة صحيحة: "الكتاب / يقرأ / سامر".',
                        'choices' => [
                            ['choice_text' => 'سامر يقرأ الكتاب.', 'is_correct' => true],
                            ['choice_text' => 'يقرأ الكتاب سامر.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب سامر يقرأ.', 'is_correct' => false],
                            ['choice_text' => 'يقرأ سامر الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مرتبة بصورة طبيعية وواضحة: سامر هو الفاعل، يقرأ هو الفعل، والكتاب هو الشيء المقروء.'
                    ],
                    [
                        'question' => 'أي جملة تخبرنا عن مكان القلم؟',
                        'choices' => [
                            ['choice_text' => 'القلم على المكتب.', 'is_correct' => true],
                            ['choice_text' => 'كتب أحمد بالقلم.', 'is_correct' => false],
                            ['choice_text' => 'أحمد يشتري قلمًا.', 'is_correct' => false],
                            ['choice_text' => 'القلم جديد أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "القلم على المكتب" تتضمن عبارة مكان واضحة تحدد أين يوجد القلم.'
                    ],
                    [
                        'question' => 'في الجملة "مريم تفتح الباب." من الذي يقوم بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'مريم', 'is_correct' => true],
                            ['choice_text' => 'الباب', 'is_correct' => false],
                            ['choice_text' => 'تفتح', 'is_correct' => false],
                            ['choice_text' => 'لا أحد', 'is_correct' => false],
                        ],
                        'explanation' => 'مريم هي التي تقوم بعملية الفتح، لذلك فهي صاحبة الفعل في الجملة.'
                    ],
                    [
                        'question' => 'أي جملة تبدأ باسم وتصفه؟',
                        'choices' => [
                            ['choice_text' => 'السماء صافية.', 'is_correct' => true],
                            ['choice_text' => 'يركض الطفل.', 'is_correct' => false],
                            ['choice_text' => 'اذهب إلى البيت.', 'is_correct' => false],
                            ['choice_text' => 'يكتب خالد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "السماء صافية" تبدأ بالاسم "السماء" ثم تقدم عنه خبرًا هو "صافية".'
                    ],
                    [
                        'question' => 'أي خيار يكمل الجملة بصورة طبيعية؟ "الطلاب ___ في الفصل."',
                        'choices' => [
                            ['choice_text' => 'يجلسون', 'is_correct' => true],
                            ['choice_text' => 'تجلس', 'is_correct' => false],
                            ['choice_text' => 'أجلس', 'is_correct' => false],
                            ['choice_text' => 'يجلس', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاعل "الطلاب" جمع مذكر، ولذلك تناسبه صيغة الفعل "يجلسون".'
                    ],
                    [
                        'question' => 'رتّب الكلمات: "في الحديقة / الأطفال / يلعبون".',
                        'choices' => [
                            ['choice_text' => 'الأطفال يلعبون في الحديقة.', 'is_correct' => true],
                            ['choice_text' => 'في الأطفال الحديقة يلعبون.', 'is_correct' => false],
                            ['choice_text' => 'يلعبون الحديقة الأطفال في.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة الأطفال في يلعبون.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب الطبيعي هو بدء الجملة بالفاعل ثم الفعل ثم تحديد المكان: الأطفال يلعبون في الحديقة.'
                    ],
                    [
                        'question' => 'في الجملة "شربت ليلى العصير." ما الشيء الذي شربته ليلى؟',
                        'choices' => [
                            ['choice_text' => 'العصير', 'is_correct' => true],
                            ['choice_text' => 'ليلى', 'is_correct' => false],
                            ['choice_text' => 'شربت', 'is_correct' => false],
                            ['choice_text' => 'الجملة', 'is_correct' => false],
                        ],
                        'explanation' => 'العصير هو الشيء الذي وقع عليه فعل الشرب، لذلك هو المفعول به في هذه الجملة.'
                    ],
                    [
                        'question' => 'أي جملة أكثر وضوحًا؟',
                        'choices' => [
                            ['choice_text' => 'ذهب خالد إلى السوق بعد العمل.', 'is_correct' => true],
                            ['choice_text' => 'السوق خالد بعد ذهب العمل إلى.', 'is_correct' => false],
                            ['choice_text' => 'بعد السوق ذهب خالد العمل إلى.', 'is_correct' => false],
                            ['choice_text' => 'خالد العمل إلى السوق ذهب بعد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعرض الفعل والفاعل والمكان والوقت بترتيب سهل الفهم.'
                    ],
                    [
                        'question' => 'إذا كانت الجملة "الطريق طويل"، فأي جزء يصف الطريق؟',
                        'choices' => [
                            ['choice_text' => 'طويل', 'is_correct' => true],
                            ['choice_text' => 'الطريق', 'is_correct' => false],
                            ['choice_text' => 'الطريق طويل', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد وصف', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "طويل" تقدم وصفًا للطريق، ولذلك فهي الجزء الذي يخبرنا بصفته.'
                    ],
                    [
                        'question' => 'اختر الجملة التي تعبّر بوضوح عن حدث في الماضي.',
                        'choices' => [
                            ['choice_text' => 'زار أبي الطبيب أمس.', 'is_correct' => true],
                            ['choice_text' => 'يزور أبي الطبيب الآن.', 'is_correct' => false],
                            ['choice_text' => 'سيزور أبي الطبيب غدًا.', 'is_correct' => false],
                            ['choice_text' => 'أبي طبيب جيد.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أمس" مع الفعل "زار" توضح أن الزيارة حدثت في الماضي.'
                    ],
                ],
            ],
            [
                'title' => 'Nominal and Verbal Sentence Patterns',
                'description' => 'Distinguish simple nominal and verbal sentence patterns and see how the order of words changes the structure.',
                'questions' => [
                    [
                        'question' => 'أي جملة تبدأ بفعل؟',
                        'choices' => [
                            ['choice_text' => 'كتبَ المعلمُ الدرسَ.', 'is_correct' => true],
                            ['choice_text' => 'المعلمُ نشيطٌ.', 'is_correct' => false],
                            ['choice_text' => 'المدرسةُ كبيرةٌ.', 'is_correct' => false],
                            ['choice_text' => 'الطالبُ في الفصل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تبدأ بالفعل "كتب"، بينما الجمل الأخرى تبدأ باسم.'
                    ],
                    [
                        'question' => 'أي جملة تبدأ باسم وتخبر عنه بشيء؟',
                        'choices' => [
                            ['choice_text' => 'البيتُ واسعٌ.', 'is_correct' => true],
                            ['choice_text' => 'فتحَ الأبُ البابَ.', 'is_correct' => false],
                            ['choice_text' => 'يجري الطفلُ سريعًا.', 'is_correct' => false],
                            ['choice_text' => 'ذهبنا إلى السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "البيت واسع" تبدأ بالاسم "البيت" ثم تقدم معلومة عنه وهي "واسع".'
                    ],
                    [
                        'question' => 'في الجملة "يكتب أحمد رسالة"، ما الفعل؟',
                        'choices' => [
                            ['choice_text' => 'يكتب', 'is_correct' => true],
                            ['choice_text' => 'أحمد', 'is_correct' => false],
                            ['choice_text' => 'رسالة', 'is_correct' => false],
                            ['choice_text' => 'أحمد رسالة', 'is_correct' => false],
                        ],
                        'explanation' => '"يكتب" هو الفعل لأنه يدل على الحدث الذي يقوم به أحمد.'
                    ],
                    [
                        'question' => 'أي ترتيب يحول "سارة جميلة" إلى جملة تبدأ بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'جميلة سارة.', 'is_correct' => false],
                            ['choice_text' => 'تجمّلَت سارة.', 'is_correct' => false],
                            ['choice_text' => 'تبدو سارة جميلة.', 'is_correct' => true],
                            ['choice_text' => 'سارة تبدو جميلة.', 'is_correct' => false],
                        ],
                        'explanation' => '"تبدو سارة جميلة" تبدأ بالفعل "تبدو"، ثم يأتي الاسم الذي يقوم بالدور المرتبط به.'
                    ],
                    [
                        'question' => 'في جملة "الطبيب في المستشفى"، ما المعلومة التي يضيفها الجزء "في المستشفى"؟',
                        'choices' => [
                            ['choice_text' => 'يحدد المكان', 'is_correct' => true],
                            ['choice_text' => 'يحدد الزمن', 'is_correct' => false],
                            ['choice_text' => 'يحدد العدد', 'is_correct' => false],
                            ['choice_text' => 'يصف لون الطبيب', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "في المستشفى" تخبرنا أين يوجد الطبيب، لذلك فهي تضيف معلومة مكانية.'
                    ],
                    [
                        'question' => 'أي جملة لها ترتيب فعل ثم فاعل ثم مفعول به؟',
                        'choices' => [
                            ['choice_text' => 'قرأَ الطالبُ القصةَ.', 'is_correct' => true],
                            ['choice_text' => 'الطالبُ قرأَ القصةَ.', 'is_correct' => false],
                            ['choice_text' => 'القصةُ قرأَ الطالبُ.', 'is_correct' => false],
                            ['choice_text' => 'الطالبُ القصةَ قرأَ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تسير بالترتيب: قرأَ = فعل، الطالبُ = فاعل، القصةَ = مفعول به.'
                    ],
                    [
                        'question' => 'إذا أردنا التركيز أولًا على المكان، أي جملة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'في الصباح ذهب علي إلى العمل.', 'is_correct' => true],
                            ['choice_text' => 'ذهب العمل علي الصباح إلى.', 'is_correct' => false],
                            ['choice_text' => 'علي الصباح في ذهب العمل.', 'is_correct' => false],
                            ['choice_text' => 'إلى ذهب في الصباح علي العمل.', 'is_correct' => false],
                        ],
                        'explanation' => 'وضع عبارة الزمن "في الصباح" في بداية الجملة يبرزها للقارئ قبل بقية الحدث.'
                    ],
                    [
                        'question' => 'أي جملة لا تبدأ بفعل؟',
                        'choices' => [
                            ['choice_text' => 'ينام الطفل مبكرًا.', 'is_correct' => false],
                            ['choice_text' => 'وصلت الحافلة.', 'is_correct' => false],
                            ['choice_text' => 'المعلمة تشرح الدرس.', 'is_correct' => true],
                            ['choice_text' => 'قرأ خالد القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "المعلمة تشرح الدرس" تبدأ بالاسم "المعلمة"، أما بقية الجمل فتبدأ بأفعال.'
                    ],
                    [
                        'question' => 'في الجملة "الحديقة جميلة في الربيع"، ما الذي يخبرنا عن الحديقة؟',
                        'choices' => [
                            ['choice_text' => 'جميلة', 'is_correct' => true],
                            ['choice_text' => 'الربيع', 'is_correct' => false],
                            ['choice_text' => 'في', 'is_correct' => false],
                            ['choice_text' => 'الحديقة جميلة في', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "جميلة" هي الوصف أو الخبر الذي يعطي الحديقة صفة في هذه الجملة.'
                    ],
                    [
                        'question' => 'أيهما أوضح لتقديم معلومة عن السيارة؟',
                        'choices' => [
                            ['choice_text' => 'السيارةُ جديدةٌ.', 'is_correct' => true],
                            ['choice_text' => 'جديدة السيارة.', 'is_correct' => false],
                            ['choice_text' => 'السيارة جديدة هي.', 'is_correct' => false],
                            ['choice_text' => 'جديدةٌ في السيارة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "السيارة جديدة" تبدأ بالشيء الذي نتحدث عنه ثم تعطيه وصفًا مباشرًا وواضحًا.'
                    ],
                ],
            ],
            [
                'title' => 'Questions, Negation, and Useful Sentence Changes',
                'description' => 'Practice turning statements into questions, negatives, and simple alternative sentence forms.',
                'questions' => [
                    [
                        'question' => 'حوّل الجملة "أنت تدرس العربية" إلى سؤال مناسب.',
                        'choices' => [
                            ['choice_text' => 'هل تدرس العربية؟', 'is_correct' => true],
                            ['choice_text' => 'لا تدرس العربية.', 'is_correct' => false],
                            ['choice_text' => 'تدرس العربية هل.', 'is_correct' => false],
                            ['choice_text' => 'العربية تدرس أنت.', 'is_correct' => false],
                        ],
                        'explanation' => 'إضافة "هل" في بداية الجملة تحول الخبر إلى سؤال نعم أو لا.'
                    ],
                    [
                        'question' => 'ما الصيغة المنفية المناسبة للجملة "خالد في البيت"؟',
                        'choices' => [
                            ['choice_text' => 'خالد ليس في البيت.', 'is_correct' => true],
                            ['choice_text' => 'خالد هل في البيت.', 'is_correct' => false],
                            ['choice_text' => 'خالد في ليس البيت.', 'is_correct' => false],
                            ['choice_text' => 'لا خالد في البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'مع الجملة الاسمية البسيطة "خالد في البيت" نستخدم "ليس" لنفي وجود خالد في البيت.'
                    ],
                    [
                        'question' => 'أي جملة تسأل عن المكان؟',
                        'choices' => [
                            ['choice_text' => 'أين تسكن؟', 'is_correct' => true],
                            ['choice_text' => 'متى تسكن؟', 'is_correct' => false],
                            ['choice_text' => 'لماذا تسكن؟', 'is_correct' => false],
                            ['choice_text' => 'هل تسكن؟', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أين" تستخدم للسؤال عن المكان.'
                    ],
                    [
                        'question' => 'أي سؤال يسأل عن الزمن؟',
                        'choices' => [
                            ['choice_text' => 'متى يبدأ الدرس؟', 'is_correct' => true],
                            ['choice_text' => 'أين يبدأ الدرس؟', 'is_correct' => false],
                            ['choice_text' => 'من يبدأ الدرس؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا يبدأ؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال بـ"متى" يطلب وقت حدوث الأمر، وهنا يسأل عن وقت بداية الدرس.'
                    ],
                    [
                        'question' => 'أي جملة تنفي حدوث الفعل في الماضي؟',
                        'choices' => [
                            ['choice_text' => 'لم أذهب إلى السوق.', 'is_correct' => true],
                            ['choice_text' => 'لا أذهب إلى السوق الآن.', 'is_correct' => false],
                            ['choice_text' => 'لن أذهب إلى السوق غدًا.', 'is_correct' => false],
                            ['choice_text' => 'أذهب إلى السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة "لم أذهب" تنفي حدوث الذهاب في الزمن الماضي.'
                    ],
                    [
                        'question' => 'إذا قال المعلم: "لا تتحدثوا أثناء الاختبار"، فما نوع الجملة؟',
                        'choices' => [
                            ['choice_text' => 'نهي أو طلب للتوقف عن فعل', 'is_correct' => true],
                            ['choice_text' => 'سؤال عن المكان', 'is_correct' => false],
                            ['choice_text' => 'وصف لمكان', 'is_correct' => false],
                            ['choice_text' => 'خبر عن الماضي', 'is_correct' => false],
                        ],
                        'explanation' => 'استخدام "لا" قبل الفعل هنا يمنع الطلاب من الحديث، لذلك الجملة نهي أو طلب بالكف عن الفعل.'
                    ],
                    [
                        'question' => 'ما السؤال الأنسب للجملة "سافر يوسف إلى طنجة أمس" إذا أردت معرفة المدينة؟',
                        'choices' => [
                            ['choice_text' => 'إلى أين سافر يوسف؟', 'is_correct' => true],
                            ['choice_text' => 'متى سافر يوسف؟', 'is_correct' => false],
                            ['choice_text' => 'لماذا سافر يوسف؟', 'is_correct' => false],
                            ['choice_text' => 'هل سافر يوسف؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن المدينة أو الوجهة يناسبه "إلى أين"، لأن طنجة هي وجهة السفر.'
                    ],
                    [
                        'question' => 'أي جملة تعبر عن سبب باستخدام "لأن"؟',
                        'choices' => [
                            ['choice_text' => 'بقيت في البيت لأنني كنت متعبًا.', 'is_correct' => true],
                            ['choice_text' => 'بقيت في البيت هل كنت متعبًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن بقيت البيت متعبًا.', 'is_correct' => false],
                            ['choice_text' => 'بقيت لأن في البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تربط النتيجة بالسبب: البقاء في البيت كان بسبب التعب.'
                    ],
                    [
                        'question' => 'كيف تغيّر المعنى في الجملة "نجح الطالب لأنه اجتهد" إذا حذفنا كلمة "لأنه"؟',
                        'choices' => [
                            ['choice_text' => 'تصبح العلاقة بين النجاح والاجتهاد أقل وضوحًا.', 'is_correct' => true],
                            ['choice_text' => 'يصبح الطالب جمعًا.', 'is_correct' => false],
                            ['choice_text' => 'يتحول الماضي إلى مستقبل.', 'is_correct' => false],
                            ['choice_text' => 'يصبح الاجتهاد مكانًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "لأنه" تربط النتيجة بسببها، وحذفها يضعف الرابط الواضح بين النجاح والاجتهاد.'
                    ],
                    [
                        'question' => 'أي صياغة تسأل عن الشخص الذي اشترى الكتاب في الجملة "اشترت سارة الكتاب"؟',
                        'choices' => [
                            ['choice_text' => 'من اشترى الكتاب؟', 'is_correct' => true],
                            ['choice_text' => 'ماذا اشترت سارة؟', 'is_correct' => false],
                            ['choice_text' => 'أين اشترت سارة؟', 'is_correct' => false],
                            ['choice_text' => 'متى اشترت سارة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال بـ"من" يطلب معرفة الشخص الذي قام بالفعل، وهنا المقصود هو سارة.'
                    ],
                ],
            ],
            [
                'title' => 'Words, Phrases, and Sentence Expansion',
                'description' => 'Learn how short phrases add place, time, description, and other useful information to a basic sentence.',
                'questions' => [
                    [
                        'question' => 'في الجملة "قرأ علي الكتاب في المساء"، ما العبارة التي تضيف وقتًا؟',
                        'choices' => [
                            ['choice_text' => 'في المساء', 'is_correct' => true],
                            ['choice_text' => 'قرأ علي', 'is_correct' => false],
                            ['choice_text' => 'الكتاب', 'is_correct' => false],
                            ['choice_text' => 'علي الكتاب', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "في المساء" تحدد متى حدثت القراءة، ولذلك فهي تضيف معلومة زمنية.'
                    ],
                    [
                        'question' => 'أي إضافة تجعل الجملة "الطفل يلعب" أكثر تحديدًا من حيث المكان؟',
                        'choices' => [
                            ['choice_text' => 'في الحديقة', 'is_correct' => true],
                            ['choice_text' => 'جدًا', 'is_correct' => false],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                            ['choice_text' => 'ربما', 'is_correct' => false],
                        ],
                        'explanation' => '"في الحديقة" يحدد مكان اللعب، لذلك تصبح الجملة أكثر تحديدًا من حيث المكان.'
                    ],
                    [
                        'question' => 'ما الفائدة من إضافة كلمة "الكبير" في الجملة "دخل الرجل الكبير"؟',
                        'choices' => [
                            ['choice_text' => 'أنها تصف الرجل وتضيف تفصيلًا عنه', 'is_correct' => true],
                            ['choice_text' => 'أنها تغيره إلى مكان', 'is_correct' => false],
                            ['choice_text' => 'أنها تجعله فعلًا', 'is_correct' => false],
                            ['choice_text' => 'أنها تحذف الفاعل', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "الكبير" تضيف وصفًا للرجل، فتمنح القارئ معلومة إضافية عنه.'
                    ],
                    [
                        'question' => 'اختر الإضافة التي تجعل "سافرت مريم" أوضح من حيث الوجهة.',
                        'choices' => [
                            ['choice_text' => 'إلى الرباط', 'is_correct' => true],
                            ['choice_text' => 'بسرعة', 'is_correct' => false],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                            ['choice_text' => 'كثيرًا', 'is_correct' => false],
                        ],
                        'explanation' => 'إضافة "إلى الرباط" تخبرنا إلى أين سافرت مريم.'
                    ],
                    [
                        'question' => 'أي عبارة تكمل الجملة بطريقة طبيعية: "عاد الأب ___"؟',
                        'choices' => [
                            ['choice_text' => 'من العمل', 'is_correct' => true],
                            ['choice_text' => 'لأن العمل', 'is_correct' => false],
                            ['choice_text' => 'من سريعًا العمل', 'is_correct' => false],
                            ['choice_text' => 'العمل هو عاد', 'is_correct' => false],
                        ],
                        'explanation' => '"من العمل" عبارة مكانية أو مصدرية طبيعية تخبرنا من أين عاد الأب.'
                    ],
                    [
                        'question' => 'في الجملة "اشترت نادية قميصًا أزرق"، ما الكلمة التي تضيف لونًا للقميص؟',
                        'choices' => [
                            ['choice_text' => 'أزرق', 'is_correct' => true],
                            ['choice_text' => 'اشترت', 'is_correct' => false],
                            ['choice_text' => 'نادية', 'is_correct' => false],
                            ['choice_text' => 'قميصًا', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أزرق" تصف القميص وتحدد لونه.'
                    ],
                    [
                        'question' => 'أي جملة تحتوي على معلومتين إضافيتين: المكان والوقت؟',
                        'choices' => [
                            ['choice_text' => 'لعب الأطفال في الحديقة صباحًا.', 'is_correct' => true],
                            ['choice_text' => 'لعب الأطفال.', 'is_correct' => false],
                            ['choice_text' => 'الأطفال.', 'is_correct' => false],
                            ['choice_text' => 'لعب صباحًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تتضمن "في الحديقة" للمكان و"صباحًا" للوقت، إضافة إلى الفعل والفاعل.'
                    ],
                    [
                        'question' => 'أضف وصفًا مناسبًا إلى "اشترى خالد سيارة".',
                        'choices' => [
                            ['choice_text' => 'جديدة', 'is_correct' => true],
                            ['choice_text' => 'في', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'أمسًا', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "جديدة" يمكن أن تصف السيارة، فتضيف معلومة عن حالتها.'
                    ],
                    [
                        'question' => 'لماذا نستخدم عبارة مثل "بعد المدرسة" في جملة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'لإضافة وقت أو ترتيب للحدث', 'is_correct' => true],
                            ['choice_text' => 'لتحويل الاسم إلى حرف', 'is_correct' => false],
                            ['choice_text' => 'لحذف الفعل', 'is_correct' => false],
                            ['choice_text' => 'لتغيير المكان إلى شخص', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "بعد المدرسة" تحدد متى حدث الشيء أو ترتيبه بالنسبة إلى حدث آخر.'
                    ],
                    [
                        'question' => 'أي جملة تعطي صورة أكثر تحديدًا؟',
                        'choices' => [
                            ['choice_text' => 'جلس الطفل على المقعد الخشبي قرب النافذة.', 'is_correct' => true],
                            ['choice_text' => 'جلس الطفل.', 'is_correct' => false],
                            ['choice_text' => 'الطفل هناك.', 'is_correct' => false],
                            ['choice_text' => 'جلس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تضيف نوع المقعد ومكانه، لذلك يحصل القارئ على صورة أوضح للمشهد.'
                    ],
                ],
            ],
            [
                'title' => 'Connecting Ideas Inside a Sentence',
                'description' => 'Practice using common connectors such as و، ثم، لكن، لأن، لذلك، وعندما to make ideas flow naturally.',
                'questions' => [
                    [
                        'question' => 'اختر الرابط المناسب: "ذهبنا إلى السوق ___ اشترينا الخضار."',
                        'choices' => [
                            ['choice_text' => 'و', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أين', 'is_correct' => false],
                        ],
                        'explanation' => 'الواو تربط حدثين متصلين في الجملة دون التعبير عن سبب أو تعارض.'
                    ],
                    [
                        'question' => 'أي كلمة تناسب الجملة: "غسلت يدي، ___ تناولت الطعام."',
                        'choices' => [
                            ['choice_text' => 'ثم', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أين', 'is_correct' => false],
                        ],
                        'explanation' => '"ثم" توضح ترتيب الأحداث، فغسل اليدين حدث أولًا وتناول الطعام جاء بعده.'
                    ],
                    [
                        'question' => 'اختر الرابط الذي يبين سببًا: "بقيت في البيت ___ كنت مريضًا."',
                        'choices' => [
                            ['choice_text' => 'لأن', 'is_correct' => true],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'و', 'is_correct' => false],
                        ],
                        'explanation' => '"لأن" تربط الحدث بالسبب الذي أدى إليه، وهو المرض في هذه الجملة.'
                    ],
                    [
                        'question' => 'اختر الرابط المناسب للتعارض: "أحب القهوة، ___ لا أشربها ليلًا."',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'و', 'is_correct' => false],
                        ],
                        'explanation' => '"لكن" تستخدم هنا لأن الفكرة الثانية تختلف أو تحدد الفكرة الأولى.'
                    ],
                    [
                        'question' => 'ما الرابط الأنسب في: "كان الجو ممطرًا، ___ أخذت مظلتي."',
                        'choices' => [
                            ['choice_text' => 'لذلك', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                            ['choice_text' => 'هل', 'is_correct' => false],
                        ],
                        'explanation' => '"لذلك" تربط السبب بالنتيجة: المطر هو السبب، وأخذ المظلة هو النتيجة.'
                    ],
                    [
                        'question' => 'اختر الجملة التي تستخدم "عندما" بشكل طبيعي.',
                        'choices' => [
                            ['choice_text' => 'عندما وصلتُ إلى البيت، اتصلتُ بأمي.', 'is_correct' => true],
                            ['choice_text' => 'عندما الكتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'اتصلت عندما أمي بالبيت.', 'is_correct' => false],
                            ['choice_text' => 'عندما جميلة السماء.', 'is_correct' => false],
                        ],
                        'explanation' => '"عندما" تربط حدثين بزمن، وهنا حدث الاتصال بعد وصول المتحدث إلى البيت.'
                    ],
                    [
                        'question' => 'أي رابط يناسب تسلسل ثلاثة أحداث؟',
                        'choices' => [
                            ['choice_text' => 'استيقظت، ثم تناولت الفطور، ثم خرجت.', 'is_correct' => true],
                            ['choice_text' => 'استيقظت، لكن تناولت الفطور، لأن خرجت.', 'is_correct' => false],
                            ['choice_text' => 'استيقظت، هل تناولت الفطور، ثم خرجت.', 'is_correct' => false],
                            ['choice_text' => 'استيقظت، وذهبت أمس، لأن ثم خرجت.', 'is_correct' => false],
                        ],
                        'explanation' => 'استخدام "ثم" يوضح ترتيب الأحداث المتتابعة من الأول إلى الثالث.'
                    ],
                    [
                        'question' => 'أكمل: "أحب المشي، ___ أفضل الذهاب صباحًا."',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'عندما', 'is_correct' => false],
                        ],
                        'explanation' => '"لكن" مناسبة لأن الجملة الثانية تضيف تفضيلًا أو قيدًا إلى الفكرة الأولى.'
                    ],
                    [
                        'question' => 'في الجملة "درستُ جيدًا، لذلك نجحتُ"، ماذا تعبر كلمة "لذلك"؟',
                        'choices' => [
                            ['choice_text' => 'نتيجة', 'is_correct' => true],
                            ['choice_text' => 'سؤال', 'is_correct' => false],
                            ['choice_text' => 'مكان', 'is_correct' => false],
                            ['choice_text' => 'زمن فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"لذلك" تشير إلى أن النجاح جاء نتيجة للدراسة الجيدة.'
                    ],
                    [
                        'question' => 'أي جملة توضح السبب ثم النتيجة بوضوح؟',
                        'choices' => [
                            ['choice_text' => 'تأخر الباص، لذلك وصلنا متأخرين.', 'is_correct' => true],
                            ['choice_text' => 'تأخر الباص، لكن وصلنا متأخرين.', 'is_correct' => false],
                            ['choice_text' => 'تأخر الباص، ثم لماذا وصلنا.', 'is_correct' => false],
                            ['choice_text' => 'تأخر الباص، وسبب وصلنا متأخرين.', 'is_correct' => false],
                        ],
                        'explanation' => 'التأخر في وصول الحافلة هو السبب، والوصول المتأخر هو النتيجة، و"لذلك" توضح العلاقة بينهما.'
                    ],
                ],
            ],
            [
                'title' => 'Fixing Awkward and Mixed-Up Sentences',
                'description' => 'Identify common beginner sentence-order mistakes and repair them so the meaning becomes clear and natural.',
                'questions' => [
                    [
                        'question' => 'أي تصحيح يجعل الجملة التالية سليمة وواضحة؟ "إلى المدرسة ذهب صباحًا خالد."',
                        'choices' => [
                            ['choice_text' => 'ذهب خالد إلى المدرسة صباحًا.', 'is_correct' => true],
                            ['choice_text' => 'المدرسة خالد صباحًا إلى ذهب.', 'is_correct' => false],
                            ['choice_text' => 'صباحًا إلى خالد المدرسة ذهب.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى صباحًا المدرسة خالد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب المصحح يعرض الفعل والفاعل والوجهة والوقت بطريقة طبيعية وسهلة الفهم.'
                    ],
                    [
                        'question' => 'ما المشكلة في الجملة "البيت في يسكن أحمد"؟',
                        'choices' => [
                            ['choice_text' => 'ترتيب الكلمات غير واضح', 'is_correct' => true],
                            ['choice_text' => 'كل الكلمات أسماء', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد فعل في العربية', 'is_correct' => false],
                            ['choice_text' => 'كلمة البيت لا يمكن استعمالها', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات نفسها مفهومة، لكن ترتيبها يربك القارئ. مثلًا يمكن قول: "يسكن أحمد في البيت".'
                    ],
                    [
                        'question' => 'أي صياغة أوضح؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت سارة إلى المكتبة لشراء كتاب.', 'is_correct' => true],
                            ['choice_text' => 'إلى الكتاب المكتبة ذهبت سارة لشراء.', 'is_correct' => false],
                            ['choice_text' => 'شراء ذهبت كتاب سارة إلى المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'سارة الكتاب لشراء إلى ذهبت المكتبة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تربط الفعل والفاعل والوجهة والهدف بترتيب طبيعي.'
                    ],
                    [
                        'question' => 'رتّب: "الطعام / في / المطبخ / أمي / تطبخ".',
                        'choices' => [
                            ['choice_text' => 'أمي تطبخ الطعام في المطبخ.', 'is_correct' => true],
                            ['choice_text' => 'المطبخ أمي في الطعام تطبخ.', 'is_correct' => false],
                            ['choice_text' => 'تطبخ في أمي المطبخ الطعام.', 'is_correct' => false],
                            ['choice_text' => 'الطعام أمي المطبخ تطبخ في.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب السليم يجمع الفاعل بالفعل، ثم يذكر الشيء الذي تطبخه والمكان.'
                    ],
                    [
                        'question' => 'أي جملة فيها مرجع واضح للضمير؟',
                        'choices' => [
                            ['choice_text' => 'دخل أحمد الصف، ثم جلس في مقعده.', 'is_correct' => true],
                            ['choice_text' => 'دخل أحمد الصف، ثم جلس فيه.', 'is_correct' => false],
                            ['choice_text' => 'دخل أحمد الصف، ثم جلس.', 'is_correct' => false],
                            ['choice_text' => 'دخل، ثم جلس أحمد الصف في.', 'is_correct' => false],
                        ],
                        'explanation' => 'في الجملة الأولى كلمة "مقعده" توضح بجلاء أين جلس أحمد، لذلك تكون الصورة أكثر تحديدًا.'
                    ],
                    [
                        'question' => 'طالب كتب: "أنا في الصباح إلى الجامعة أذهب." ما الصياغة الطبيعية؟',
                        'choices' => [
                            ['choice_text' => 'أذهب إلى الجامعة في الصباح.', 'is_correct' => true],
                            ['choice_text' => 'في الجامعة أذهب الصباح إلى.', 'is_correct' => false],
                            ['choice_text' => 'الجامعة في الصباح أنا أذهب إلى.', 'is_correct' => false],
                            ['choice_text' => 'الصباح أذهب أنا إلى الجامعة في.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة المصححة تبدأ بالفعل ثم تحدد الوجهة وبعدها الوقت، وهو ترتيب واضح جدًا.'
                    ],
                    [
                        'question' => 'أي جملة تمنع الالتباس حول من قام بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'رأت مريم أختها في السوق.', 'is_correct' => true],
                            ['choice_text' => 'في السوق أختها رأت مريم.', 'is_correct' => false],
                            ['choice_text' => 'أختها في مريم رأت السوق.', 'is_correct' => false],
                            ['choice_text' => 'رأت السوق أختها في مريم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعرض الفاعل "مريم" مباشرة بعد الفعل، فتكون العلاقة بين الفعل ومن قام به واضحة.'
                    ],
                    [
                        'question' => 'أي تعديل يجعل العبارة "لأن المطر خرجنا" مفهومة؟',
                        'choices' => [
                            ['choice_text' => 'خرجنا لأن المطر كان شديدًا.', 'is_correct' => true],
                            ['choice_text' => 'لأن خرجنا المطر كان.', 'is_correct' => false],
                            ['choice_text' => 'المطر خرجنا لأن كان شديدًا.', 'is_correct' => false],
                            ['choice_text' => 'خرجنا المطر لأن شديدًا كان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب المصحح يضع النتيجة أولًا ثم السبب، مع إبقاء كلمة "لأن" قبل السبب مباشرة.'
                    ],
                    [
                        'question' => 'أي جملة تحتاج إلى توضيح أكبر بسبب غموضها؟',
                        'choices' => [
                            ['choice_text' => 'ذهب إلى هناك أمس.', 'is_correct' => true],
                            ['choice_text' => 'ذهب أحمد إلى المدرسة أمس.', 'is_correct' => false],
                            ['choice_text' => 'وصلت الحافلة في الثامنة.', 'is_correct' => false],
                            ['choice_text' => 'قرأت ليلى القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى لا تخبرنا من ذهب ولا ما المقصود بـ"هناك"، لذلك تحتاج إلى سياق أو تفاصيل إضافية.'
                    ],
                    [
                        'question' => 'في الجملة "قرأ الطفل القصة ثم نام"، ما الفائدة من كلمة "ثم"؟',
                        'choices' => [
                            ['choice_text' => 'توضيح ترتيب الحدثين', 'is_correct' => true],
                            ['choice_text' => 'نفي القراءة', 'is_correct' => false],
                            ['choice_text' => 'تحديد مكان النوم', 'is_correct' => false],
                            ['choice_text' => 'تحويل الطفل إلى جمع', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ثم" تفيد أن قراءة القصة حدثت أولًا، وبعدها جاء النوم.'
                    ],
                ],
            ],
            [
                'title' => 'Reading Sentence Structure in Context',
                'description' => 'Use short everyday sentences to identify relationships between actions, people, places, and times.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "بعد أن انتهت الحصة، خرج الطلاب إلى الساحة." ما الذي حدث أولًا؟',
                        'choices' => [
                            ['choice_text' => 'انتهت الحصة.', 'is_correct' => true],
                            ['choice_text' => 'خرج الطلاب إلى الساحة.', 'is_correct' => false],
                            ['choice_text' => 'عاد الطلاب إلى البيت.', 'is_correct' => false],
                            ['choice_text' => 'بدأت الحصة التالية.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "بعد أن انتهت الحصة" توضح أن انتهاء الحصة سبق خروج الطلاب إلى الساحة.'
                    ],
                    [
                        'question' => 'اقرأ: "وضعت هناء المفتاح في حقيبتها قبل أن تغادر المنزل." أين وضعت هناء المفتاح؟',
                        'choices' => [
                            ['choice_text' => 'في حقيبتها', 'is_correct' => true],
                            ['choice_text' => 'على الطاولة', 'is_correct' => false],
                            ['choice_text' => 'في السيارة', 'is_correct' => false],
                            ['choice_text' => 'في المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر مباشرة أن المفتاح وُضع في حقيبة هناء قبل مغادرة المنزل.'
                    ],
                    [
                        'question' => 'اقرأ: "كان عمر يشعر بالبرد، لذلك أغلق النافذة." ما العلاقة بين الجزأين؟',
                        'choices' => [
                            ['choice_text' => 'سبب ونتيجة', 'is_correct' => true],
                            ['choice_text' => 'سؤال وجواب', 'is_correct' => false],
                            ['choice_text' => 'مكان وزمن', 'is_correct' => false],
                            ['choice_text' => 'وصفان متناقضان', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعور بالبرد هو السبب، وإغلاق النافذة جاء نتيجة لذلك.'
                    ],
                    [
                        'question' => 'اقرأ: "تعمل نورة في الصباح، وتدرس في المساء." ماذا تفعل نورة مساءً؟',
                        'choices' => [
                            ['choice_text' => 'تدرس', 'is_correct' => true],
                            ['choice_text' => 'تعمل', 'is_correct' => false],
                            ['choice_text' => 'تنام', 'is_correct' => false],
                            ['choice_text' => 'تسافر', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تحدد أن عمل نورة يكون في الصباح، بينما دراستها تكون في المساء.'
                    ],
                    [
                        'question' => 'اقرأ: "زار يوسف عمه في القرية، ثم عاد إلى المدينة مساءً." إلى أين عاد يوسف؟',
                        'choices' => [
                            ['choice_text' => 'إلى المدينة', 'is_correct' => true],
                            ['choice_text' => 'إلى القرية', 'is_correct' => false],
                            ['choice_text' => 'إلى المدرسة', 'is_correct' => false],
                            ['choice_text' => 'إلى السوق', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح أن يوسف زار عمه في القرية ثم عاد لاحقًا إلى المدينة.'
                    ],
                    [
                        'question' => 'اقرأ: "لم يجد فريد حافلته، فاختار المشي إلى العمل." لماذا اختار فريد المشي؟',
                        'choices' => [
                            ['choice_text' => 'لأنه لم يجد الحافلة', 'is_correct' => true],
                            ['choice_text' => 'لأنه يحب السفر بالطائرة', 'is_correct' => false],
                            ['choice_text' => 'لأنه وصل إلى العمل بالفعل', 'is_correct' => false],
                            ['choice_text' => 'لأنه كان يريد شراء حافلة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تربط مباشرة بين عدم العثور على الحافلة وبين قرار فريد بالمشي.'
                    ],
                    [
                        'question' => 'اقرأ: "جلست سارة قرب النافذة لأنها تحب الضوء الطبيعي." ما سبب جلوسها قرب النافذة؟',
                        'choices' => [
                            ['choice_text' => 'لأنها تحب الضوء الطبيعي', 'is_correct' => true],
                            ['choice_text' => 'لأنها كانت تريد النوم', 'is_correct' => false],
                            ['choice_text' => 'لأنها لا تعرف مكانًا آخر', 'is_correct' => false],
                            ['choice_text' => 'لأن النافذة كانت مغلقة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "لأن" تقدم السبب مباشرة، وهو حب سارة للضوء الطبيعي.'
                    ],
                    [
                        'question' => 'اقرأ: "عندما عاد الأب، كان الأطفال قد أنهوا واجبهم." ماذا حدث قبل عودة الأب؟',
                        'choices' => [
                            ['choice_text' => 'أنهى الأطفال واجبهم', 'is_correct' => true],
                            ['choice_text' => 'بدأ الأطفال واجبهم بعد عودته', 'is_correct' => false],
                            ['choice_text' => 'خرج الأب من البيت', 'is_correct' => false],
                            ['choice_text' => 'ذهب الأطفال إلى المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "كان الأطفال قد أنهوا" تدل على أن إنهاء الواجب سبق لحظة عودة الأب.'
                    ],
                    [
                        'question' => 'اقرأ: "اشترى خالد خبزًا وحليبًا من المتجر، ثم عاد إلى المنزل." ما الشيئان اللذان اشتراهما؟',
                        'choices' => [
                            ['choice_text' => 'خبزًا وحليبًا', 'is_correct' => true],
                            ['choice_text' => 'خبزًا وماءً', 'is_correct' => false],
                            ['choice_text' => 'حليبًا وعصيرًا', 'is_correct' => false],
                            ['choice_text' => 'ماءً وفاكهةً', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر الشيئين بالاسم: الخبز والحليب.'
                    ],
                    [
                        'question' => 'اقرأ: "كانت الطريق مزدحمة، لذلك وصلنا متأخرين." ما النتيجة المذكورة؟',
                        'choices' => [
                            ['choice_text' => 'وصلنا متأخرين', 'is_correct' => true],
                            ['choice_text' => 'كانت الطريق مزدحمة', 'is_correct' => false],
                            ['choice_text' => 'أغلقنا الطريق', 'is_correct' => false],
                            ['choice_text' => 'عدنا إلى البيت', 'is_correct' => false],
                        ],
                        'explanation' => '"لذلك" تمهّد للنتيجة، والنتيجة هنا هي الوصول متأخرين بسبب ازدحام الطريق.'
                    ],
                ],
            ],
            [
                'title' => 'Integrated Sentence Structure Practice',
                'description' => 'Review sentence order, linking words, questions, negation, and sentence expansion in practical beginner situations.',
                'questions' => [
                    [
                        'question' => 'اختر الصياغة الأكثر طبيعية: "أمس / إلى الطبيب / ذهبت / أنا".',
                        'choices' => [
                            ['choice_text' => 'ذهبتُ إلى الطبيب أمس.', 'is_correct' => true],
                            ['choice_text' => 'إلى الطبيب أمس أنا ذهبت.', 'is_correct' => false],
                            ['choice_text' => 'أمس الطبيب إلى أنا ذهبت.', 'is_correct' => false],
                            ['choice_text' => 'الطبيب ذهبت أمس إلى أنا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تضع الفعل والوجهة والوقت في ترتيب واضح وطبيعي.'
                    ],
                    [
                        'question' => 'أي سؤال يناسب الإجابة: "في المكتبة"؟',
                        'choices' => [
                            ['choice_text' => 'أين درست؟', 'is_correct' => true],
                            ['choice_text' => 'متى درست؟', 'is_correct' => false],
                            ['choice_text' => 'من درس؟', 'is_correct' => false],
                            ['choice_text' => 'لماذا درست؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الإجابة "في المكتبة" هي مكان، لذلك يناسبها السؤال "أين درست؟".'
                    ],
                    [
                        'question' => 'ما أفضل تكملة: "لم يخرج سامي ___"؟',
                        'choices' => [
                            ['choice_text' => 'لأنه كان مريضًا.', 'is_correct' => true],
                            ['choice_text' => 'ثم كان مريضًا.', 'is_correct' => false],
                            ['choice_text' => 'أين كان مريضًا.', 'is_correct' => false],
                            ['choice_text' => 'لكن كان مريضًا.', 'is_correct' => false],
                        ],
                        'explanation' => '"لأنه كان مريضًا" تقدم سببًا منطقيًا لعدم خروج سامي.'
                    ],
                    [
                        'question' => 'أي جملة تجمع بين المكان والوقت والحدث؟',
                        'choices' => [
                            ['choice_text' => 'اجتمع الموظفون في القاعة صباحًا.', 'is_correct' => true],
                            ['choice_text' => 'اجتمع الموظفون.', 'is_correct' => false],
                            ['choice_text' => 'القاعة صباحًا.', 'is_correct' => false],
                            ['choice_text' => 'الموظفون هناك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تتضمن الحدث، والمكان "في القاعة"، والوقت "صباحًا".'
                    ],
                    [
                        'question' => 'أي جملة صحيحة من حيث ترتيب السؤال؟',
                        'choices' => [
                            ['choice_text' => 'متى يبدأ الاجتماع؟', 'is_correct' => true],
                            ['choice_text' => 'يبدأ متى الاجتماع؟', 'is_correct' => false],
                            ['choice_text' => 'الاجتماع متى يبدأ؟', 'is_correct' => false],
                            ['choice_text' => 'يبدأ الاجتماع متى هو؟', 'is_correct' => false],
                        ],
                        'explanation' => '"متى يبدأ الاجتماع؟" صياغة مباشرة وطبيعية لسؤال عن وقت بداية الاجتماع.'
                    ],
                    [
                        'question' => 'أي جملة تستخدم النفي بصورة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'لم يذهب علي إلى العمل أمس.', 'is_correct' => true],
                            ['choice_text' => 'لم ذهب علي إلى العمل أمس.', 'is_correct' => false],
                            ['choice_text' => 'علي لم إلى العمل ذهب أمس.', 'is_correct' => false],
                            ['choice_text' => 'لم علي يذهب إلى العمل أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد "لم" يأتي الفعل المضارع المجزوم، وفي الجملة "لم يذهب علي" يأتي التركيب بصورة سليمة.'
                    ],
                    [
                        'question' => 'أكمل: "قرأت مريم الرسالة، ___ أرسلت ردًا."',
                        'choices' => [
                            ['choice_text' => 'ثم', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'أين', 'is_correct' => false],
                            ['choice_text' => 'ليس', 'is_correct' => false],
                        ],
                        'explanation' => '"ثم" مناسبة لأن إرسال الرد حدث بعد قراءة الرسالة.'
                    ],
                    [
                        'question' => 'أي جملة تعطي سببًا واضحًا لقرار شخص؟',
                        'choices' => [
                            ['choice_text' => 'أخذت ريم معطفًا لأن الجو بارد.', 'is_correct' => true],
                            ['choice_text' => 'أخذت ريم معطفًا ثم الجو بارد.', 'is_correct' => false],
                            ['choice_text' => 'أخذت ريم معطفًا أين الجو بارد.', 'is_correct' => false],
                            ['choice_text' => 'أخذت ريم معطفًا لكن الجو بارد.', 'is_correct' => false],
                        ],
                        'explanation' => '"لأن الجو بارد" يوضح سبب أخذ ريم للمعطف، فتكون العلاقة بين القرار وسببه واضحة.'
                    ],
                    [
                        'question' => 'طالب كتب: "في الحديقة أمس الأطفال لعبوا." أي صياغة أكثر سلاسة؟',
                        'choices' => [
                            ['choice_text' => 'لعب الأطفال في الحديقة أمس.', 'is_correct' => true],
                            ['choice_text' => 'أمس الحديقة في لعب الأطفال.', 'is_correct' => false],
                            ['choice_text' => 'الأطفال لعبوا أمس في الحديقة.', 'is_correct' => false],
                            ['choice_text' => 'لعب في أمس الأطفال الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تبدأ بالفعل والفاعل ثم المكان والوقت، ولذلك يسهل فهمها بسرعة.'
                    ],
                    [
                        'question' => 'اختر الجملة التي تجمع بين أكثر من فكرة بطريقة واضحة.',
                        'choices' => [
                            ['choice_text' => 'عاد أبي من العمل، وتناول الغداء، ثم أخذ قسطًا من الراحة.', 'is_correct' => true],
                            ['choice_text' => 'عاد أبي العمل الغداء الراحة.', 'is_correct' => false],
                            ['choice_text' => 'من العمل أبي ثم الراحة عاد الغداء.', 'is_correct' => false],
                            ['choice_text' => 'تناول الغداء أبي عاد العمل ثم راحة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تستخدم الفواصل و"ثم" لربط أحداث متتابعة، لذلك تحافظ على وضوح كل فكرة وترتيبها.'
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
