<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-arabic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'مدخل إلى العربية الكلاسيكية',
                'description' => 'تعرّف على معنى العربية الكلاسيكية وخصائصها العامة وبعض المفردات والتراكيب التراثية المبسطة.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالعربية الكلاسيكية في أبسط صورة؟',
                        'choices' => [
                            ['choice_text' => 'العربية التي ظهرت في النصوص الأدبية والتراثية القديمة مثل الشعر والخطب والكتب.', 'is_correct' => true],
                            ['choice_text' => 'لهجة محلية خاصة بمدينة واحدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'لغة حديثة تستخدم في الرسائل الهاتفية فقط.', 'is_correct' => false],
                            ['choice_text' => 'طريقة لكتابة الأرقام بالحروف.', 'is_correct' => false],
                        ],
                        'explanation' => 'العربية الكلاسيكية تشير إلى العربية التي نجدها في كثير من النصوص القديمة والتراثية، ومنها الشعر والخطب والكتب.',
                    ],
                    [
                        'question' => 'أي مصدر من الآتي يرتبط بالعربية الكلاسيكية أكثر؟',
                        'choices' => [
                            ['choice_text' => 'الشعر العربي القديم.', 'is_correct' => true],
                            ['choice_text' => 'رسالة نصية معاصرة باللهجة.', 'is_correct' => false],
                            ['choice_text' => 'إعلان تجاري حديث.', 'is_correct' => false],
                            ['choice_text' => 'محادثة عامية يومية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الشعر العربي القديم من أهم النصوص التي تُظهر خصائص العربية الكلاسيكية.',
                    ],
                    [
                        'question' => 'إذا واجهت كلمة قديمة لا تستعمل كثيرًا اليوم، فما أفضل طريقة لفهمها؟',
                        'choices' => [
                            ['choice_text' => 'النظر إلى معناها من السياق والاستعانة بمعجم مناسب.', 'is_correct' => true],
                            ['choice_text' => 'افتراض أن معناها هو عكس الكلمة.', 'is_correct' => false],
                            ['choice_text' => 'حذفها من النص.', 'is_correct' => false],
                            ['choice_text' => 'تغييرها إلى كلمة عشوائية.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق والمعجم يساعدان على معرفة معنى المفردات القديمة دون التخمين.',
                    ],
                    [
                        'question' => 'أي عبارة أقرب إلى أسلوب عربي تراثي؟',
                        'choices' => [
                            ['choice_text' => 'قال الشيخ: «يا بني، احفظ عهدك.»', 'is_correct' => true],
                            ['choice_text' => 'أرسل لي رسالة على التطبيق.', 'is_correct' => false],
                            ['choice_text' => 'سأرسل لك الملف الآن.', 'is_correct' => false],
                            ['choice_text' => 'افتح الرابط في الهاتف.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى تستخدم أسلوب النداء والنصح بصورة تناسب النصوص التراثية.',
                    ],
                    [
                        'question' => 'ما الذي قد يجعل نصًا كلاسيكيًا أصعب على القارئ المبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'وجود مفردات وأساليب قديمة أو تراكيب أقل استعمالًا اليوم.', 'is_correct' => true],
                            ['choice_text' => 'قصر النص دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'خلو النص من الأفعال.', 'is_correct' => false],
                            ['choice_text' => 'وجود علامات ترقيم كثيرة فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'بعض النصوص القديمة تحتوي مفردات وتراكيب لا يراها المتعلم كثيرًا في العربية المعاصرة.',
                    ],
                    [
                        'question' => 'في نص كلاسيكي، وردت كلمة «فتى». ما المعنى الأقرب لها؟',
                        'choices' => [
                            ['choice_text' => 'شاب.', 'is_correct' => true],
                            ['choice_text' => 'شيخ مسن.', 'is_correct' => false],
                            ['choice_text' => 'مدينة.', 'is_correct' => false],
                            ['choice_text' => 'كتاب.', 'is_correct' => false],
                        ],
                        'explanation' => '«فتى» من الكلمات العربية القديمة والشائعة في الأدب، وتدل غالبًا على الشاب.',
                    ],
                    [
                        'question' => 'في العبارة «يا بني»، ما وظيفة «يا»؟',
                        'choices' => [
                            ['choice_text' => 'أداة نداء.', 'is_correct' => true],
                            ['choice_text' => 'أداة نفي.', 'is_correct' => false],
                            ['choice_text' => 'حرف عطف.', 'is_correct' => false],
                            ['choice_text' => 'أداة شرط.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا» من أشهر أدوات النداء، وتُستخدم هنا لمخاطبة الابن.',
                    ],
                    [
                        'question' => 'إذا قال النص: «مضى الرجل إلى داره»، فما معنى «مضى» في هذا السياق؟',
                        'choices' => [
                            ['choice_text' => 'ذهب أو سار.', 'is_correct' => true],
                            ['choice_text' => 'نام.', 'is_correct' => false],
                            ['choice_text' => 'ضحك.', 'is_correct' => false],
                            ['choice_text' => 'جلس.', 'is_correct' => false],
                        ],
                        'explanation' => '«مضى» قد تأتي بمعنى ذهب أو سار، ويحدد السياق المعنى المقصود.',
                    ],
                    [
                        'question' => 'ما الذي يميز قراءة نص كلاسيكي جيدًا؟',
                        'choices' => [
                            ['choice_text' => 'فهم الكلمات من سياقها وملاحظة التراكيب القديمة دون تجاهل المعنى العام.', 'is_correct' => true],
                            ['choice_text' => 'التركيز على كلمة واحدة ونسيان بقية النص.', 'is_correct' => false],
                            ['choice_text' => 'تبديل كل كلمة قديمة مباشرة بكلمة عامية.', 'is_correct' => false],
                            ['choice_text' => 'حفظ النص دون فهمه.', 'is_correct' => false],
                        ],
                        'explanation' => 'فهم النص الكلاسيكي يحتاج إلى الجمع بين المفردات والسياق والصورة العامة للنص.',
                    ],
                    [
                        'question' => 'أي سبب يجعل دراسة العربية الكلاسيكية مفيدة للمتعلم؟',
                        'choices' => [
                            ['choice_text' => 'تفتح له بابًا لفهم كثير من النصوص الأدبية والتراثية القديمة.', 'is_correct' => true],
                            ['choice_text' => 'لأنها تستبدل كل أشكال العربية المعاصرة.', 'is_correct' => false],
                            ['choice_text' => 'لأنها تستخدم فقط في الحساب.', 'is_correct' => false],
                            ['choice_text' => 'لأنها لا تحتاج إلى قراءة.', 'is_correct' => false],
                        ],
                        'explanation' => 'دراسة العربية الكلاسيكية تساعد المتعلم على قراءة التراث وفهم أساليبه ومفرداته.',
                    ],
                ],
            ],
            [
                'title' => 'مفردات عربية كلاسيكية شائعة',
                'description' => 'تدرّب على فهم كلمات عربية كلاسيكية شائعة من خلال معناها والسياق الذي ترد فيه.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'في جملة «لبث الرجل في القرية أيامًا»، ما معنى «لبث»؟',
                        'choices' => [
                            ['choice_text' => 'مكث وبقي.', 'is_correct' => true],
                            ['choice_text' => 'خرج بسرعة.', 'is_correct' => false],
                            ['choice_text' => 'ضحك كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'نام في الطريق.', 'is_correct' => false],
                        ],
                        'explanation' => '«لبث» تعني مكث أو بقي مدة من الزمن.',
                    ],
                    [
                        'question' => 'في عبارة «أقبل الصباح»، ماذا تعني «أقبل»؟',
                        'choices' => [
                            ['choice_text' => 'جاء أو اقترب.', 'is_correct' => true],
                            ['choice_text' => 'ابتعد تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'اختفى.', 'is_correct' => false],
                            ['choice_text' => 'توقف.', 'is_correct' => false],
                        ],
                        'explanation' => '«أقبل» في هذا السياق تعني جاء أو ظهر واقترب وقته.',
                    ],
                    [
                        'question' => 'ماذا تعني كلمة «أمس» في نص عربي كلاسيكي؟',
                        'choices' => [
                            ['choice_text' => 'اليوم السابق.', 'is_correct' => true],
                            ['choice_text' => 'غدًا.', 'is_correct' => false],
                            ['choice_text' => 'بعد سنة.', 'is_correct' => false],
                            ['choice_text' => 'الآن فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«أمس» تدل على اليوم الذي سبق يوم الحديث.',
                    ],
                    [
                        'question' => 'في العبارة «رجع القوم أدراجهم»، ما المعنى الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'عادوا من الطريق الذي جاؤوا منه.', 'is_correct' => true],
                            ['choice_text' => 'سافروا إلى مدينة جديدة.', 'is_correct' => false],
                            ['choice_text' => 'جلسوا في مكانهم.', 'is_correct' => false],
                            ['choice_text' => 'دخلوا البحر.', 'is_correct' => false],
                        ],
                        'explanation' => '«عاد أدراجه» أو «عاد أدراجه» تدل على الرجوع من الطريق أو الجهة التي أتى منها.',
                    ],
                    [
                        'question' => 'ما معنى «قوم» في كثير من النصوص العربية القديمة؟',
                        'choices' => [
                            ['choice_text' => 'جماعة من الناس.', 'is_correct' => true],
                            ['choice_text' => 'مكان مرتفع.', 'is_correct' => false],
                            ['choice_text' => 'كتاب قديم.', 'is_correct' => false],
                            ['choice_text' => 'وقت من أوقات اليوم.', 'is_correct' => false],
                        ],
                        'explanation' => '«قوم» تعني جماعة من الناس، وغالبًا ما تُستخدم لجماعة معينة في السياق.',
                    ],
                    [
                        'question' => 'في العبارة «اشتدّ الحر»، ماذا يعني الفعل «اشتدّ»؟',
                        'choices' => [
                            ['choice_text' => 'زاد وأصبح أقوى.', 'is_correct' => true],
                            ['choice_text' => 'انخفض.', 'is_correct' => false],
                            ['choice_text' => 'اختفى.', 'is_correct' => false],
                            ['choice_text' => 'تساوى مع البرد.', 'is_correct' => false],
                        ],
                        'explanation' => '«اشتدّ» تعني ازداد قوة أو شدة.',
                    ],
                    [
                        'question' => 'ما معنى «سعى» في جملة مثل «سعى إلى طلب العلم»؟',
                        'choices' => [
                            ['choice_text' => 'اجتهد وطلب وبذل جهدًا للوصول إلى شيء.', 'is_correct' => true],
                            ['choice_text' => 'توقف عن العمل.', 'is_correct' => false],
                            ['choice_text' => 'نام طويلًا.', 'is_correct' => false],
                            ['choice_text' => 'نسي الأمر.', 'is_correct' => false],
                        ],
                        'explanation' => '«سعى إلى» تعني اجتهد وطلب الوصول إلى شيء أو تحقيقه.',
                    ],
                    [
                        'question' => 'في عبارة «غدا المسافر إلى المدينة»، ماذا تعني «غدا»؟',
                        'choices' => [
                            ['choice_text' => 'ذهب في وقت الغدو، وغالبًا في أول النهار.', 'is_correct' => true],
                            ['choice_text' => 'عاد ليلًا.', 'is_correct' => false],
                            ['choice_text' => 'جلس في البيت.', 'is_correct' => false],
                            ['choice_text' => 'نام بعد الظهر.', 'is_correct' => false],
                        ],
                        'explanation' => '«غدا» قد تأتي فعلًا بمعنى ذهب في وقت الغدو، أي في أول النهار.',
                    ],
                    [
                        'question' => 'ماذا تعني كلمة «دار» في عبارة «رجع إلى داره»؟',
                        'choices' => [
                            ['choice_text' => 'منزله أو مسكنه.', 'is_correct' => true],
                            ['choice_text' => 'سوقه.', 'is_correct' => false],
                            ['choice_text' => 'كتابه.', 'is_correct' => false],
                            ['choice_text' => 'سفينته.', 'is_correct' => false],
                        ],
                        'explanation' => '«الدار» من الألفاظ العربية الشائعة للدلالة على المنزل أو المسكن.',
                    ],
                    [
                        'question' => 'في عبارة «حفظ العهد»، ما معنى «العهد» هنا؟',
                        'choices' => [
                            ['choice_text' => 'الوعد أو الالتزام الذي قطعه الشخص.', 'is_correct' => true],
                            ['choice_text' => 'الطريق إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'نوع من الطعام.', 'is_correct' => false],
                            ['choice_text' => 'اسم مكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'العهد هنا هو ما يلتزم به الإنسان أو الوعد الذي قطعه على نفسه أو لغيره.',
                    ],
                ],
            ],
            [
                'title' => 'الضمائر والأفعال في النص الكلاسيكي',
                'description' => 'راجع الضمائر والأفعال الأساسية من خلال جمل قريبة من الأسلوب العربي الكلاسيكي.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'في «قال الفتى: أنا أطلب العلم»، إلى من يعود الضمير «أنا»؟',
                        'choices' => [
                            ['choice_text' => 'إلى الفتى المتكلم.', 'is_correct' => true],
                            ['choice_text' => 'إلى شخص غائب.', 'is_correct' => false],
                            ['choice_text' => 'إلى جماعة من الناس.', 'is_correct' => false],
                            ['choice_text' => 'إلى المكان.', 'is_correct' => false],
                        ],
                        'explanation' => '«أنا» ضمير المتكلم المفرد، وهنا يعود إلى الفتى الذي يتحدث.',
                    ],
                    [
                        'question' => 'أكمل بأسلوب صحيح: «هم ___ إلى القرية»؟',
                        'choices' => [
                            ['choice_text' => 'ذهبوا.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت.', 'is_correct' => false],
                            ['choice_text' => 'ذهب.', 'is_correct' => false],
                            ['choice_text' => 'ذهبا.', 'is_correct' => false],
                        ],
                        'explanation' => 'مع «هم» نستخدم فعل الماضي للجمع المذكر: «ذهبوا».',
                    ],
                    [
                        'question' => 'في «هي حفظت الوعد»، من الفاعل؟',
                        'choices' => [
                            ['choice_text' => 'هي.', 'is_correct' => true],
                            ['choice_text' => 'الوعد.', 'is_correct' => false],
                            ['choice_text' => 'حفظت.', 'is_correct' => false],
                            ['choice_text' => 'الجملة كلها.', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمير «هي» هو الذي قام بالفعل «حفظت».',
                    ],
                    [
                        'question' => 'أي جملة توافق الضمير «أنتَ»؟',
                        'choices' => [
                            ['choice_text' => 'أنتَ تحفظ العهد.', 'is_correct' => true],
                            ['choice_text' => 'أنتَ تحفظان العهد.', 'is_correct' => false],
                            ['choice_text' => 'أنتَ يحفظ العهد.', 'is_correct' => false],
                            ['choice_text' => 'أنتَ أحفظ العهد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمير «أنتَ» للمفرد المذكر، ويأتي معه الفعل «تحفظ».',
                    ],
                    [
                        'question' => 'في «خرج القوم ثم عادوا»، إلى من يعود «عادوا»؟',
                        'choices' => [
                            ['choice_text' => 'إلى القوم.', 'is_correct' => true],
                            ['choice_text' => 'إلى شخص واحد.', 'is_correct' => false],
                            ['choice_text' => 'إلى امرأة مفردة.', 'is_correct' => false],
                            ['choice_text' => 'إلى المكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الواو في «عادوا» تدل على جمع المذكر، والمرجع السابق هو «القوم».',
                    ],
                    [
                        'question' => 'أي فعل يدل على المستقبل في العبارة «سيعود الفتى غدًا»؟',
                        'choices' => [
                            ['choice_text' => 'سيعود.', 'is_correct' => true],
                            ['choice_text' => 'الفتى.', 'is_correct' => false],
                            ['choice_text' => 'غدًا.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد فعل.', 'is_correct' => false],
                        ],
                        'explanation' => '«سيعود» فعل مضارع دخلت عليه السين، وهو يدل على المستقبل.',
                    ],
                    [
                        'question' => 'في «ما خرج الرجل»، ما وظيفة «ما»؟',
                        'choices' => [
                            ['choice_text' => 'النفي.', 'is_correct' => true],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'العطف.', 'is_correct' => false],
                        ],
                        'explanation' => '«ما» هنا أداة نفي تنفي وقوع الفعل «خرج».',
                    ],
                    [
                        'question' => 'أكمل: «لم ___ الرجل عن وعده»؟',
                        'choices' => [
                            ['choice_text' => 'يتراجعْ.', 'is_correct' => true],
                            ['choice_text' => 'تراجعَ.', 'is_correct' => false],
                            ['choice_text' => 'يتراجعُ.', 'is_correct' => false],
                            ['choice_text' => 'تراجعوا.', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد «لم» يأتي الفعل المضارع المجزوم، وهنا الصيغة المناسبة هي «يتراجعْ».',
                    ],
                    [
                        'question' => 'في جملة «إن تجتهدْ تنجحْ»، ما العلاقة بين الفعلين؟',
                        'choices' => [
                            ['choice_text' => 'الأول سبب أو شرط يؤدي إلى الثاني.', 'is_correct' => true],
                            ['choice_text' => 'الأول يشرح لون الثاني.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما في الماضي.', 'is_correct' => false],
                            ['choice_text' => 'لا علاقة بينهما.', 'is_correct' => false],
                        ],
                        'explanation' => 'التركيب الشرطي يربط الاجتهاد بالنتيجة وهي النجاح.',
                    ],
                    [
                        'question' => 'في «كان الشيخ حكيمًا»، ما الكلمة التي تخبر عن صفة الشيخ؟',
                        'choices' => [
                            ['choice_text' => 'حكيمًا.', 'is_correct' => true],
                            ['choice_text' => 'كان.', 'is_correct' => false],
                            ['choice_text' => 'الشيخ.', 'is_correct' => false],
                            ['choice_text' => 'العبارة كلها.', 'is_correct' => false],
                        ],
                        'explanation' => '«حكيمًا» تخبر عن حال أو صفة الشيخ في الجملة.',
                    ],
                ],
            ],
            [
                'title' => 'التراكيب والأساليب الكلاسيكية',
                'description' => 'تدرّب على النداء والنفي والاستفهام والشرط وبعض التراكيب التي تظهر في النصوص العربية الكلاسيكية.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'في «يا طالبَ العلمِ، اجتهد»، ما وظيفة «يا»؟',
                        'choices' => [
                            ['choice_text' => 'النداء.', 'is_correct' => true],
                            ['choice_text' => 'النفي.', 'is_correct' => false],
                            ['choice_text' => 'الشرط.', 'is_correct' => false],
                            ['choice_text' => 'العطف.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا» أداة نداء تُستخدم لاستدعاء المخاطب والانتباه إليه.',
                    ],
                    [
                        'question' => 'أي جملة تحتوي على سؤال؟',
                        'choices' => [
                            ['choice_text' => 'أين تذهب؟', 'is_correct' => true],
                            ['choice_text' => 'اذهب إلى دارك.', 'is_correct' => false],
                            ['choice_text' => 'ما أجمل الصباح!', 'is_correct' => false],
                            ['choice_text' => 'لم يخرج.', 'is_correct' => false],
                        ],
                        'explanation' => '«أين تذهب؟» جملة استفهامية لأنها تطلب معرفة المكان.',
                    ],
                    [
                        'question' => 'في «لا تهملْ واجبك»، ما وظيفة «لا»؟',
                        'choices' => [
                            ['choice_text' => 'النهي عن الفعل.', 'is_correct' => true],
                            ['choice_text' => 'إثبات الفعل.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'العطف.', 'is_correct' => false],
                        ],
                        'explanation' => '«لا» الناهية تدخل على الفعل المضارع للنهي عن القيام به.',
                    ],
                    [
                        'question' => 'في «إن تصبرْ تظفرْ»، ماذا تفيد «إن»؟',
                        'choices' => [
                            ['choice_text' => 'الشرط.', 'is_correct' => true],
                            ['choice_text' => 'النفي.', 'is_correct' => false],
                            ['choice_text' => 'التعجب.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                        ],
                        'explanation' => '«إن» هنا أداة شرط تربط الفعل الأول بالنتيجة في الفعل الثاني.',
                    ],
                    [
                        'question' => 'ما الأسلوب في «ما أكرمَ الضيفَ!»؟',
                        'choices' => [
                            ['choice_text' => 'التعجب.', 'is_correct' => true],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'النهي.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيغة «ما أفعل» في مثل هذا السياق تُستخدم للتعجب.',
                    ],
                    [
                        'question' => 'في «هلا اجتهدت في طلب العلم؟»، ماذا يفهم القارئ غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'حث أو لوم لطيف على الاجتهاد.', 'is_correct' => true],
                            ['choice_text' => 'إخبار عن رحلة.', 'is_correct' => false],
                            ['choice_text' => 'وصف مكان.', 'is_correct' => false],
                            ['choice_text' => 'طلب تحديد الوقت فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«هلا» قد تستعمل للحث أو العتاب، والسياق هنا يحث المخاطب على الاجتهاد.',
                    ],
                    [
                        'question' => 'أي عبارة مثال على النفي؟',
                        'choices' => [
                            ['choice_text' => 'ما حضر الرجل.', 'is_correct' => true],
                            ['choice_text' => 'يا رجل.', 'is_correct' => false],
                            ['choice_text' => 'هل حضر الرجل؟', 'is_correct' => false],
                            ['choice_text' => 'احضر يا رجل.', 'is_correct' => false],
                        ],
                        'explanation' => '«ما حضر الرجل» تنفي حدوث الحضور.',
                    ],
                    [
                        'question' => 'أي تركيب يدل على التمني أو الرجاء؟',
                        'choices' => [
                            ['choice_text' => 'ليت الشباب دائمٌ.', 'is_correct' => true],
                            ['choice_text' => 'لا تهمل واجبك.', 'is_correct' => false],
                            ['choice_text' => 'أين الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'يا فتى.', 'is_correct' => false],
                        ],
                        'explanation' => '«ليت» من أدوات التمني، وتُستخدم للتعبير عن أمر يتمناه المتكلم.',
                    ],
                    [
                        'question' => 'في «ثم عاد إلى داره»، ما وظيفة «ثم»؟',
                        'choices' => [
                            ['choice_text' => 'العطف مع الترتيب والتراخي.', 'is_correct' => true],
                            ['choice_text' => 'النفي.', 'is_correct' => false],
                            ['choice_text' => 'الاستفهام.', 'is_correct' => false],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                        ],
                        'explanation' => '«ثم» تربط بين حدثين مع الإشارة إلى أن الثاني وقع بعد الأول.',
                    ],
                    [
                        'question' => 'أي جملة فيها أسلوب أمر؟',
                        'choices' => [
                            ['choice_text' => 'احفظ عهدك.', 'is_correct' => true],
                            ['choice_text' => 'هل حفظت عهدك؟', 'is_correct' => false],
                            ['choice_text' => 'ما أجمل الوفاء!', 'is_correct' => false],
                            ['choice_text' => 'لم يحفظ عهده.', 'is_correct' => false],
                        ],
                        'explanation' => '«احفظ عهدك» فعل أمر يطلب من المخاطب القيام بالفعل.',
                    ],
                ],
            ],
            [
                'title' => 'قراءة نصوص كلاسيكية مبسطة',
                'description' => 'اقرأ عبارات وفقرات قصيرة بأسلوب تراثي واستخرج معناها المباشر وما تشير إليه من أفكار.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'اقرأ: «خرج الفتى من داره في أول النهار، وسعى إلى طلب العلم.» لماذا خرج؟',
                        'choices' => [
                            ['choice_text' => 'ليطلب العلم.', 'is_correct' => true],
                            ['choice_text' => 'ليشتري ثيابًا.', 'is_correct' => false],
                            ['choice_text' => 'ليزور البحر.', 'is_correct' => false],
                            ['choice_text' => 'ليبحث عن طعام للطيور.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر مباشرة أن خروجه كان سعيًا إلى طلب العلم.',
                    ],
                    [
                        'question' => 'اقرأ: «لبث الشيخ في مجلسه حتى أقبل المساء.» متى غادر المجلس بحسب العبارة؟',
                        'choices' => [
                            ['choice_text' => 'بعد أن جاء المساء أو قربه.', 'is_correct' => true],
                            ['choice_text' => 'عند الفجر.', 'is_correct' => false],
                            ['choice_text' => 'قبل شروق الشمس.', 'is_correct' => false],
                            ['choice_text' => 'في منتصف النهار بالضرورة.', 'is_correct' => false],
                        ],
                        'explanation' => '«حتى أقبل المساء» تعني أنه بقي إلى أن جاء المساء أو اقترب.',
                    ],
                    [
                        'question' => 'اقرأ: «قال الأب لابنه: يا بني، إن الصدق ينجي صاحبه.» ما الفكرة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'الصدق ينفع صاحبه ويحميه من عواقب سيئة.', 'is_correct' => true],
                            ['choice_text' => 'الابن لا يحب الكلام.', 'is_correct' => false],
                            ['choice_text' => 'الأب يتحدث عن السفر.', 'is_correct' => false],
                            ['choice_text' => 'النص يصف مكانًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'القول يربط الصدق بالنجاة، وهذه هي الفكرة التي يحملها النص.',
                    ],
                    [
                        'question' => 'اقرأ: «عاد المسافر أدراجه حين رأى الطريق موحشًا.» لماذا عاد؟',
                        'choices' => [
                            ['choice_text' => 'لأن الطريق بدا مخيفًا أو موحشًا.', 'is_correct' => true],
                            ['choice_text' => 'لأنه وصل إلى هدفه.', 'is_correct' => false],
                            ['choice_text' => 'لأنه وجد صديقه.', 'is_correct' => false],
                            ['choice_text' => 'لأنه أراد النوم في السيارة.', 'is_correct' => false],
                        ],
                        'explanation' => 'صفة الطريق «موحشًا» هي السبب الذي دفع المسافر إلى الرجوع.',
                    ],
                    [
                        'question' => 'اقرأ: «إذا اجتهدت في طلب العلم بلغت الغاية.» ماذا يربط النص؟',
                        'choices' => [
                            ['choice_text' => 'الاجتهاد بالوصول إلى الهدف.', 'is_correct' => true],
                            ['choice_text' => 'النوم بالسفر.', 'is_correct' => false],
                            ['choice_text' => 'الطعام بالعمل.', 'is_correct' => false],
                            ['choice_text' => 'المطر بالقمر.', 'is_correct' => false],
                        ],
                        'explanation' => 'التركيب الشرطي يربط الاجتهاد بتحقيق الغاية.',
                    ],
                    [
                        'question' => 'اقرأ: «لم يضيع التلميذ وقته، بل حفظ درسه وراجع كتبه.» ماذا فعل التلميذ؟',
                        'choices' => [
                            ['choice_text' => 'حفظ درسه وراجع كتبه.', 'is_correct' => true],
                            ['choice_text' => 'ترك الدراسة كلها.', 'is_correct' => false],
                            ['choice_text' => 'نام طوال اليوم.', 'is_correct' => false],
                            ['choice_text' => 'سافر إلى مدينة أخرى.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر نشاطين قام بهما التلميذ: حفظ الدرس ومراجعة الكتب.',
                    ],
                    [
                        'question' => 'اقرأ: «كان الرجل كريمًا، فإذا طرق بابه سائلٌ أعانه.» ماذا نفهم من سلوكه؟',
                        'choices' => [
                            ['choice_text' => 'أنه كان يساعد من يطلب منه العون.', 'is_correct' => true],
                            ['choice_text' => 'أنه لا يفتح بابه لأحد.', 'is_correct' => false],
                            ['choice_text' => 'أنه يكره الضيوف.', 'is_correct' => false],
                            ['choice_text' => 'أنه كان يعمل في السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'استجابته للسائل بالمساعدة تدل على الكرم وحب العون.',
                    ],
                    [
                        'question' => 'اقرأ: «أطلّ الفتى على البحر فرأى السفن تمضي في الأفق.» ماذا رأى؟',
                        'choices' => [
                            ['choice_text' => 'السفن تمضي في الأفق.', 'is_correct' => true],
                            ['choice_text' => 'الجبال تتساقط.', 'is_correct' => false],
                            ['choice_text' => 'القرية تحترق.', 'is_correct' => false],
                            ['choice_text' => 'المدينة تنام.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه هي الصورة التي يذكرها النص مباشرة.',
                    ],
                    [
                        'question' => 'اقرأ: «حفظ الشيخ قولًا قديمًا: من جدّ وجد.» ما الفكرة التي يحملها القول؟',
                        'choices' => [
                            ['choice_text' => 'الاجتهاد يؤدي إلى الوصول والنجاح.', 'is_correct' => true],
                            ['choice_text' => 'الكسل أفضل من العمل.', 'is_correct' => false],
                            ['choice_text' => 'النجاح يحدث بلا جهد.', 'is_correct' => false],
                            ['choice_text' => 'القول يتحدث عن السفر فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«من جد وجد» تلخص فكرة أن من يبذل جهدًا يسعى إلى نتيجة أو نجاح.',
                    ],
                    [
                        'question' => 'اقرأ: «شكر الفتى معلّمه ثم رجع إلى داره مطمئن القلب.» كيف كان شعوره عند العودة؟',
                        'choices' => [
                            ['choice_text' => 'مطمئنًا.', 'is_correct' => true],
                            ['choice_text' => 'غاضبًا.', 'is_correct' => false],
                            ['choice_text' => 'خائفًا.', 'is_correct' => false],
                            ['choice_text' => 'حائرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر صراحة أنه عاد مطمئن القلب.',
                    ],
                ],
            ],
            [
                'title' => 'الأسلوب الأدبي في النصوص القديمة',
                'description' => 'لاحظ النبرة والصور والألفاظ والأسلوب في العبارات العربية الكلاسيكية البسيطة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'في العبارة «أقبل الليل وبسط جناحيه»، ما الصورة الأدبية؟',
                        'choices' => [
                            ['choice_text' => 'تصوير الليل كأنه طائر له جناحان.', 'is_correct' => true],
                            ['choice_text' => 'وصف علمي للليل.', 'is_correct' => false],
                            ['choice_text' => 'تعريف للطيور.', 'is_correct' => false],
                            ['choice_text' => 'تحديد لوقت السفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الليل لا يملك أجنحة حقيقة، لكن الكاتب صوّره ككائن يبسط جناحيه.',
                    ],
                    [
                        'question' => 'إذا وصف الكاتب الصباح بأنه «بهاءٌ يملأ القلب»، فما الذي يبرز؟',
                        'choices' => [
                            ['choice_text' => 'الصورة والعاطفة معًا.', 'is_correct' => true],
                            ['choice_text' => 'الحساب.', 'is_correct' => false],
                            ['choice_text' => 'التعليمات.', 'is_correct' => false],
                            ['choice_text' => 'الزمن فقط دون شعور.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تستخدم صورة جميلة وتربط الصباح بإحساس داخلي لدى الكاتب.',
                    ],
                    [
                        'question' => 'في نص يكثر فيه النداء مثل «يا بني، يا صاحبي»، ماذا نلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'حضور أسلوب النداء والخطاب المباشر.', 'is_correct' => true],
                            ['choice_text' => 'كثرة أسلوب الشرط فقط.', 'is_correct' => false],
                            ['choice_text' => 'غياب المخاطب.', 'is_correct' => false],
                            ['choice_text' => 'تحول النص إلى قائمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار أداة النداء يشير إلى أن الكاتب أو المتكلم يخاطب شخصًا مباشرة.',
                    ],
                    [
                        'question' => 'إذا تكررت عبارة «يا ليتني» في نص حزين، فما العاطفة المتوقعة؟',
                        'choices' => [
                            ['choice_text' => 'التمني والحسرة.', 'is_correct' => true],
                            ['choice_text' => 'الضحك.', 'is_correct' => false],
                            ['choice_text' => 'الغضب من الحساب.', 'is_correct' => false],
                            ['choice_text' => 'اللامبالاة.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا ليتني» تعبّر عن التمني، وقد تحمل معها حسرة على شيء مضى أو لم يتحقق.',
                    ],
                    [
                        'question' => 'أي عبارة تحمل نبرة حكيمة أكثر؟',
                        'choices' => [
                            ['choice_text' => 'من جدّ وجد.', 'is_correct' => true],
                            ['choice_text' => 'وصلت الحافلة.', 'is_correct' => false],
                            ['choice_text' => 'فتحت الباب.', 'is_correct' => false],
                            ['choice_text' => 'جلست قرب النافذة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى تقدم قاعدة أو حكمة عامة عن الاجتهاد والنتيجة.',
                    ],
                    [
                        'question' => 'ما الذي يفعله التكرار في النص الأدبي عندما يستخدم بعناية؟',
                        'choices' => [
                            ['choice_text' => 'يؤكد فكرة أو عاطفة ويقوي الإيقاع.', 'is_correct' => true],
                            ['choice_text' => 'يلغي المعنى دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'يحول النص إلى جدول.', 'is_correct' => false],
                            ['choice_text' => 'يمنع القارئ من متابعة النص.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار المقصود يمكن أن يعطي النص نبرة أقوى ويثبت معنى أو إحساسًا.',
                    ],
                    [
                        'question' => 'في «تجري الريح في أرجاء البيداء»، ما معنى «البيداء» الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الصحراء أو الأرض الواسعة المقفرة.', 'is_correct' => true],
                            ['choice_text' => 'البحر.', 'is_correct' => false],
                            ['choice_text' => 'المدينة.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => '«البيداء» من الألفاظ الأدبية القديمة للصحراء أو الأرض الواسعة.',
                    ],
                    [
                        'question' => 'لماذا قد يستخدم الكاتب كلمة قديمة مثل «الدجى» بدل «الظلام»؟',
                        'choices' => [
                            ['choice_text' => 'لأن اللفظ القديم قد يعطي النص نبرة وأجواءً أدبية خاصة.', 'is_correct' => true],
                            ['choice_text' => 'لأن «الدجى» تعني الضوء دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكاتب لا يريد معنى مفهومًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكلمتين بلا علاقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار اللفظ القديم قد يمنح النص نبرة تراثية وصوتًا أدبيًا خاصًا.',
                    ],
                    [
                        'question' => 'في نص يقول «نامت القرية ولم يبق إلا صوت الحارس»، ما الجو الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الهدوء والليل والسكون.', 'is_correct' => true],
                            ['choice_text' => 'الازدحام الشديد.', 'is_correct' => false],
                            ['choice_text' => 'الاحتفال الصاخب.', 'is_correct' => false],
                            ['choice_text' => 'سوق مزدحم.', 'is_correct' => false],
                        ],
                        'explanation' => 'نوم القرية وبقاء صوت واحد فقط يوحيان بجو هادئ وساكن.',
                    ],
                    [
                        'question' => 'أي سؤال يساعد على فهم أسلوب نص كلاسيكي؟',
                        'choices' => [
                            ['choice_text' => 'لماذا اختار الكاتب هذه الألفاظ والصور بدل ألفاظ أبسط؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون غلاف الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'كم صفحة في الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'أين اشترى القارئ القلم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن اختيار الألفاظ والصور يقود إلى تحليل الأسلوب نفسه.',
                    ],
                ],
            ],
            [
                'title' => 'الفرق بين العربية الكلاسيكية والمعاصرة',
                'description' => 'تعرّف على بعض المفردات والتراكيب التي تبدو أكثر شيوعًا في النصوص الكلاسيكية مقارنة بالاستعمال الحديث.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي كلمة تبدو أكثر تراثية من الاستعمال اليومي الحديث؟',
                        'choices' => [
                            ['choice_text' => 'البيداء.', 'is_correct' => true],
                            ['choice_text' => 'الهاتف.', 'is_correct' => false],
                            ['choice_text' => 'السيارة.', 'is_correct' => false],
                            ['choice_text' => 'الحافلة.', 'is_correct' => false],
                        ],
                        'explanation' => '«البيداء» لفظ تراثي أدبي يدل على الصحراء أو الأرض الواسعة، بينما الكلمات الأخرى شائعة في الاستعمال الحديث.',
                    ],
                    [
                        'question' => 'إذا قرأت «داره» في نص قديم، فما الكلمة الحديثة الأقرب في المعنى؟',
                        'choices' => [
                            ['choice_text' => 'منزله.', 'is_correct' => true],
                            ['choice_text' => 'مدرسته.', 'is_correct' => false],
                            ['choice_text' => 'عمله.', 'is_correct' => false],
                            ['choice_text' => 'هاتفه.', 'is_correct' => false],
                        ],
                        'explanation' => '«دار» من الألفاظ المعروفة في العربية للدلالة على المنزل أو المسكن.',
                    ],
                    [
                        'question' => 'أي عبارة قد تبدو أكثر كلاسيكية؟',
                        'choices' => [
                            ['choice_text' => 'مضى القوم إلى ديارهم.', 'is_correct' => true],
                            ['choice_text' => 'ذهب الناس إلى بيوتهم بعد العمل.', 'is_correct' => false],
                            ['choice_text' => 'أرسل لي رسالة.', 'is_correct' => false],
                            ['choice_text' => 'سأفتح التطبيق.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى تحمل ألفاظًا وتراكيب أقرب إلى الأسلوب التراثي، مثل «مضى» و«ديارهم».',
                    ],
                    [
                        'question' => 'إذا واجهت في نص قديم كلمة «غداة»، فما أفضل طريقة للتعامل معها؟',
                        'choices' => [
                            ['choice_text' => 'فهمها من السياق، ومعرفة أنها تشير إلى أول النهار أو الصباح.', 'is_correct' => true],
                            ['choice_text' => 'اعتبارها اسم مدينة.', 'is_correct' => false],
                            ['choice_text' => 'اعتبارها فعلًا للنوم.', 'is_correct' => false],
                            ['choice_text' => 'حذفها من النص.', 'is_correct' => false],
                        ],
                        'explanation' => '«غداة» لفظ قديم يشير إلى أول النهار أو الصباح، والسياق يؤكد المعنى.',
                    ],
                    [
                        'question' => 'أي جملة أقرب إلى العربية المعاصرة في المفردات؟',
                        'choices' => [
                            ['choice_text' => 'أرسل الطالب رسالة إلى المعلم عبر الهاتف.', 'is_correct' => true],
                            ['choice_text' => 'مضى الفتى إلى داره عند الأصيل.', 'is_correct' => false],
                            ['choice_text' => 'أقبل القوم من البيداء.', 'is_correct' => false],
                            ['choice_text' => 'غدا المسافر نحو الديار.', 'is_correct' => false],
                        ],
                        'explanation' => 'المفردات مثل «رسالة» و«الهاتف» و«الطالب» مستخدمة بصورة طبيعية في العربية المعاصرة.',
                    ],
                    [
                        'question' => 'ما فائدة معرفة المقابل الحديث لكلمة قديمة أثناء القراءة؟',
                        'choices' => [
                            ['choice_text' => 'تساعد على فهم النص دون أن نضيع في الألفاظ القديمة.', 'is_correct' => true],
                            ['choice_text' => 'تجعل النص شعرًا.', 'is_correct' => false],
                            ['choice_text' => 'تلغي الحاجة إلى السياق.', 'is_correct' => false],
                            ['choice_text' => 'تغير أحداث القصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقابل الحديث يساعد المتعلم على الوصول إلى المعنى ثم العودة إلى النص الأصلي.',
                    ],
                    [
                        'question' => 'إذا استخدم النص «الأصيل» لوصف وقت من النهار، فما الزمن المقصود غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'وقت ما قبل غروب الشمس بقليل أو آخر النهار.', 'is_correct' => true],
                            ['choice_text' => 'منتصف الليل.', 'is_correct' => false],
                            ['choice_text' => 'بداية الفجر فقط.', 'is_correct' => false],
                            ['choice_text' => 'منتصف الظهر.', 'is_correct' => false],
                        ],
                        'explanation' => '«الأصيل» من الألفاظ التي تدل على آخر النهار أو الوقت قبل الغروب.',
                    ],
                    [
                        'question' => 'أي كلمة حديثة تقرّب معنى «الركب» في كثير من النصوص القديمة؟',
                        'choices' => [
                            ['choice_text' => 'القافلة أو جماعة المسافرين.', 'is_correct' => true],
                            ['choice_text' => 'المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'المطار.', 'is_correct' => false],
                        ],
                        'explanation' => '«الركب» قد تدل على جماعة من المسافرين أو القافلة.',
                    ],
                    [
                        'question' => 'لماذا لا ينبغي تحويل كل كلمة كلاسيكية مباشرة إلى لهجة عامية أثناء القراءة؟',
                        'choices' => [
                            ['choice_text' => 'لأن بعض الكلمات تحتاج إلى فهم دقيق لسياقها ولحفاظ النص على معناه وأسلوبه.', 'is_correct' => true],
                            ['choice_text' => 'لأن العامية ممنوعة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن النص القديم لا يحمل معنى.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل كلمة لها ترجمة واحدة في كل سياق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترجمة المباشرة إلى العامية قد تضيع بعض الدلالات، بينما يساعد السياق على فهم المعنى المناسب.',
                    ],
                    [
                        'question' => 'ما المهارة التي تساعد أكثر عند الانتقال من العربية الحديثة إلى نص كلاسيكي؟',
                        'choices' => [
                            ['choice_text' => 'مقارنة المفردات والتراكيب مع قراءة السياق.', 'is_correct' => true],
                            ['choice_text' => 'حفظ الكلمات دون أمثلة.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل الأفعال.', 'is_correct' => false],
                            ['choice_text' => 'قراءة العنوان فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقارنة بين المفردات والتراكيب، مع الرجوع إلى السياق، تساعد المتعلم على بناء جسر بين المرحلتين.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في العربية الكلاسيكية',
                'description' => 'اختبر فهمك للمفردات والأساليب والتراكيب والقراءة الأدبية في نصوص عربية كلاسيكية مبسطة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'في جملة «يا طالب العلم، اجتهد تبلغ غايتك»، ما العناصر الأسلوبية الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'نداء وأمر ومعنى شرطي أو نتيجة ضمنية.', 'is_correct' => true],
                            ['choice_text' => 'نفي وتعجب فقط.', 'is_correct' => false],
                            ['choice_text' => 'وصف لمكان فقط.', 'is_correct' => false],
                            ['choice_text' => 'قائمة أسماء.', 'is_correct' => false],
                        ],
                        'explanation' => '«يا طالب العلم» نداء، و«اجتهد» أمر، و«تبلغ غايتك» نتيجة مرتبطة بالاجتهاد في المعنى.',
                    ],
                    [
                        'question' => 'اقرأ: «أقبل الفجر، فنهض المسافر وأعدّ راحلته.» ماذا حدث أولًا؟',
                        'choices' => [
                            ['choice_text' => 'أقبل الفجر.', 'is_correct' => true],
                            ['choice_text' => 'أعدّ المسافر راحلته.', 'is_correct' => false],
                            ['choice_text' => 'غادر المسافر المدينة.', 'is_correct' => false],
                            ['choice_text' => 'عاد إلى داره.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفجر أقبل أولًا، ثم نهض المسافر وأعدّ راحلته.',
                    ],
                    [
                        'question' => 'في العبارة «من جدّ وجد»، ما الفكرة التي تمثلها؟',
                        'choices' => [
                            ['choice_text' => 'الاجتهاد طريق إلى تحقيق النتيجة.', 'is_correct' => true],
                            ['choice_text' => 'الراحة أفضل من العمل دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'الحظ وحده يصنع النجاح.', 'is_correct' => false],
                            ['choice_text' => 'القول يتحدث عن السفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'المثل يربط الجد والاجتهاد بالنتيجة أو النجاح.',
                    ],
                    [
                        'question' => 'أي كلمة في العبارة «عاد القوم أدراجهم» تحتاج من القارئ المبتدئ إلى شرح غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'أدراجهم.', 'is_correct' => true],
                            ['choice_text' => 'عاد.', 'is_correct' => false],
                            ['choice_text' => 'القوم.', 'is_correct' => false],
                            ['choice_text' => 'هم فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«أدراجهم» تعبير تراثي قد يحتاج إلى شرح، بينما بقية الكلمات أسهل في هذا السياق.',
                    ],
                    [
                        'question' => 'إذا وصف الكاتب الصحراء بأنها «البيداء»، ماذا نلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'استخدم لفظًا أدبيًا تراثيًا بدل كلمة أكثر شيوعًا مثل الصحراء.', 'is_correct' => true],
                            ['choice_text' => 'استخدم اسم مدينة.', 'is_correct' => false],
                            ['choice_text' => 'استخدم فعل أمر.', 'is_correct' => false],
                            ['choice_text' => 'تحدث عن البحر.', 'is_correct' => false],
                        ],
                        'explanation' => '«البيداء» من الألفاظ الأدبية القديمة التي تشير إلى الصحراء أو الأرض الواسعة.',
                    ],
                    [
                        'question' => 'في «لم يضيع الفتى وقته»، ما وظيفة «لم»؟',
                        'choices' => [
                            ['choice_text' => 'نفي الفعل في الماضي باستخدام المضارع.', 'is_correct' => true],
                            ['choice_text' => 'النداء.', 'is_correct' => false],
                            ['choice_text' => 'التعجب.', 'is_correct' => false],
                            ['choice_text' => 'الشرط.', 'is_correct' => false],
                        ],
                        'explanation' => '«لم» تنفي وقوع الفعل، وتدخل على الفعل المضارع فتجعله في معنى الماضي المنفي.',
                    ],
                    [
                        'question' => 'أي وصف يناسب نصًا كلاسيكيًا يكثر فيه «يا بني» و«يا أخي» و«يا قوم»؟',
                        'choices' => [
                            ['choice_text' => 'يكثر فيه الخطاب والنداء المباشر.', 'is_correct' => true],
                            ['choice_text' => 'لا توجد فيه شخصيات مخاطبة.', 'is_correct' => false],
                            ['choice_text' => 'هو نص حسابي.', 'is_correct' => false],
                            ['choice_text' => 'هو قائمة مشتريات.', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار «يا» مع المخاطبين يدل على حضور أسلوب النداء والحوار المباشر.',
                    ],
                    [
                        'question' => 'لماذا يحتاج القارئ إلى قراءة السياق في النص الكلاسيكي؟',
                        'choices' => [
                            ['choice_text' => 'لأن الكلمة القديمة قد يتحدد معناها الدقيق من الجملة والموقف.', 'is_correct' => true],
                            ['choice_text' => 'لأن النصوص القديمة بلا معنى.', 'is_correct' => false],
                            ['choice_text' => 'لأن جميع الكلمات لها معنى واحد فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأن السياق لا علاقة له بالمفردات.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق يساعد على اختيار المعنى المقصود عندما يكون للكلمة أكثر من دلالة أو عندما تكون قديمة.',
                    ],
                    [
                        'question' => 'إذا شعرت أن نصًا كلاسيكيًا صعب، ما الاستراتيجية الأفضل؟',
                        'choices' => [
                            ['choice_text' => 'قسّم النص إلى جمل، وحدد الكلمات المهمة، ثم ارجع إلى المعنى العام.', 'is_correct' => true],
                            ['choice_text' => 'اترك كل كلمة غير مألوفة دون محاولة.', 'is_correct' => false],
                            ['choice_text' => 'بدّل كل الجمل إلى لهجة عامية فورًا.', 'is_correct' => false],
                            ['choice_text' => 'احفظ النص دون فهم.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقسيم النص والاعتماد على السياق والمعجم يجعل القراءة أسهل وأكثر دقة.',
                    ],
                    [
                        'question' => 'ما الهدف من دراسة العربية الكلاسيكية إلى جانب العربية المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'فهم الصلة بين العربية الحالية واللغة التي كُتب بها جزء كبير من التراث.', 'is_correct' => true],
                            ['choice_text' => 'التوقف عن استخدام العربية المعاصرة.', 'is_correct' => false],
                            ['choice_text' => 'تعلم الحساب القديم.', 'is_correct' => false],
                            ['choice_text' => 'حفظ النصوص دون معنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'دراسة العربية الكلاسيكية تساعد على قراءة التراث وفهم كيف ترتبط مفرداته وتراكيبه بالعربية التي نعرفها اليوم.',
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
