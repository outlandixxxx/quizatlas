<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-vocabulary')->firstOrFail();

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
                'title' => 'Everyday Arabic Words',
                'description' => 'Learn and use common Arabic words for people, places, objects, food, and everyday situations.',
                'questions' => [
                    [
                        'question' => 'ماذا تعني كلمة "بيت" في الاستعمال اليومي؟',
                        'choices' => [
                            ['choice_text' => 'منزل', 'is_correct' => true],
                            ['choice_text' => 'مدرسة', 'is_correct' => false],
                            ['choice_text' => 'سوق', 'is_correct' => false],
                            ['choice_text' => 'مطار', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "بيت" تعني المنزل، أي المكان الذي يعيش فيه الشخص أو الأسرة.'
                    ],
                    [
                        'question' => 'أي كلمة تشير إلى شيء نستخدمه للكتابة؟',
                        'choices' => [
                            ['choice_text' => 'قلم', 'is_correct' => true],
                            ['choice_text' => 'كوب', 'is_correct' => false],
                            ['choice_text' => 'مفتاح', 'is_correct' => false],
                            ['choice_text' => 'وسادة', 'is_correct' => false],
                        ],
                        'explanation' => 'القلم أداة للكتابة، بينما الخيارات الأخرى لها استخدامات مختلفة.'
                    ],
                    [
                        'question' => 'تقول أمينة: "أشعر بالعطش." ماذا تحتاج على الأرجح؟',
                        'choices' => [
                            ['choice_text' => 'ماء', 'is_correct' => true],
                            ['choice_text' => 'معطف', 'is_correct' => false],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'حقيبة', 'is_correct' => false],
                        ],
                        'explanation' => 'العطش يعني الحاجة إلى الشرب، لذلك يكون الماء هو الاختيار الطبيعي.'
                    ],
                    [
                        'question' => 'أي كلمة تنتمي إلى مكان نتسوق فيه؟',
                        'choices' => [
                            ['choice_text' => 'متجر', 'is_correct' => true],
                            ['choice_text' => 'وسادة', 'is_correct' => false],
                            ['choice_text' => 'نافذة', 'is_correct' => false],
                            ['choice_text' => 'بطانية', 'is_correct' => false],
                        ],
                        'explanation' => 'المتجر مكان يذهب إليه الناس لشراء السلع.'
                    ],
                    [
                        'question' => 'أخبرك صديق أنه اشترى خبزًا وجبنًا وحليبًا. ما الموضوع الذي يتحدث عنه؟',
                        'choices' => [
                            ['choice_text' => 'الطعام', 'is_correct' => true],
                            ['choice_text' => 'الطقس', 'is_correct' => false],
                            ['choice_text' => 'الرياضة', 'is_correct' => false],
                            ['choice_text' => 'السفر', 'is_correct' => false],
                        ],
                        'explanation' => 'الخبز والجبن والحليب كلها أطعمة، لذلك الحديث هنا عن الطعام.'
                    ],
                    [
                        'question' => 'أي كلمة تصف شخصًا يعمل في علاج المرضى؟',
                        'choices' => [
                            ['choice_text' => 'طبيب', 'is_correct' => true],
                            ['choice_text' => 'نجار', 'is_correct' => false],
                            ['choice_text' => 'خباز', 'is_correct' => false],
                            ['choice_text' => 'سائق', 'is_correct' => false],
                        ],
                        'explanation' => 'الطبيب يعمل في تشخيص المرضى وعلاجهم، بينما المهن الأخرى لها أعمال مختلفة.'
                    ],
                    [
                        'question' => 'إذا كانت الحقيبة ثقيلة، ماذا يمكن أن تفهم عن وزنها؟',
                        'choices' => [
                            ['choice_text' => 'وزنها كبير', 'is_correct' => true],
                            ['choice_text' => 'وزنها معدوم', 'is_correct' => false],
                            ['choice_text' => 'حجمها صغير دائمًا', 'is_correct' => false],
                            ['choice_text' => 'لونها غامق', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ثقيلة" تصف الوزن، وتعني أن الشيء يحتاج إلى جهد أكبر لحمله.'
                    ],
                    [
                        'question' => 'أي كلمة تناسب الجملة: "وضعت الماء في ___"؟',
                        'choices' => [
                            ['choice_text' => 'كوب', 'is_correct' => true],
                            ['choice_text' => 'سرير', 'is_correct' => false],
                            ['choice_text' => 'حذاء', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                        ],
                        'explanation' => 'الكوب وعاء صغير مناسب للشرب ووضع الماء فيه.'
                    ],
                    [
                        'question' => 'أي كلمة لا تنتمي إلى مجموعة الطعام؟',
                        'choices' => [
                            ['choice_text' => 'تفاحة', 'is_correct' => false],
                            ['choice_text' => 'أرز', 'is_correct' => false],
                            ['choice_text' => 'كرسي', 'is_correct' => true],
                            ['choice_text' => 'خبز', 'is_correct' => false],
                        ],
                        'explanation' => 'التفاحة والأرز والخبز أطعمة، أما الكرسي فهو قطعة أثاث.'
                    ],
                    [
                        'question' => 'قال سامر: "نسيت مفتاح السيارة في البيت." أين المفتاح؟',
                        'choices' => [
                            ['choice_text' => 'في البيت', 'is_correct' => true],
                            ['choice_text' => 'في السيارة', 'is_correct' => false],
                            ['choice_text' => 'في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'في المتجر', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تذكر مباشرة أن المفتاح تُرك في البيت.'
                    ],
                ],
            ],

            [
                'title' => 'People, Places, and Daily Life Vocabulary',
                'description' => 'Build useful vocabulary for family members, professions, public places, and routines.',
                'questions' => [
                    [
                        'question' => 'ما الكلمة التي تعني female teacher؟',
                        'choices' => [
                            ['choice_text' => 'معلمة', 'is_correct' => true],
                            ['choice_text' => 'ممرضة', 'is_correct' => false],
                            ['choice_text' => 'طالبة', 'is_correct' => false],
                            ['choice_text' => 'مهندسة', 'is_correct' => false],
                        ],
                        'explanation' => '"معلمة" هي المرأة التي تعمل في التعليم وتدرّس الطلاب.'
                    ],
                    [
                        'question' => 'أين يذهب الناس عادةً لشراء الدواء؟',
                        'choices' => [
                            ['choice_text' => 'صيدلية', 'is_correct' => true],
                            ['choice_text' => 'مكتبة', 'is_correct' => false],
                            ['choice_text' => 'مخبز', 'is_correct' => false],
                            ['choice_text' => 'محطة قطار', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيدلية هي المكان المعتاد لشراء الأدوية.'
                    ],
                    [
                        'question' => 'ما الكلمة التي تصف شقيق الأب؟',
                        'choices' => [
                            ['choice_text' => 'عم', 'is_correct' => true],
                            ['choice_text' => 'خال', 'is_correct' => false],
                            ['choice_text' => 'جد', 'is_correct' => false],
                            ['choice_text' => 'ابن', 'is_correct' => false],
                        ],
                        'explanation' => 'أخو الأب هو العم، بينما أخو الأم هو الخال.'
                    ],
                    [
                        'question' => 'إذا كان شخص يعمل في بناء الجسور والمباني، أي مهنة قد تناسبه؟',
                        'choices' => [
                            ['choice_text' => 'مهندس', 'is_correct' => true],
                            ['choice_text' => 'مزارع', 'is_correct' => false],
                            ['choice_text' => 'نادل', 'is_correct' => false],
                            ['choice_text' => 'مصور', 'is_correct' => false],
                        ],
                        'explanation' => 'المهندس يمكن أن يعمل في تصميم المنشآت والمباني والجسور.'
                    ],
                    [
                        'question' => 'ما الكلمة المناسبة لمكان نقرأ فيه الكتب ويمكننا استعارتها؟',
                        'choices' => [
                            ['choice_text' => 'مكتبة', 'is_correct' => true],
                            ['choice_text' => 'مطبخ', 'is_correct' => false],
                            ['choice_text' => 'ملعب', 'is_correct' => false],
                            ['choice_text' => 'مرآب', 'is_correct' => false],
                        ],
                        'explanation' => 'المكتبة مكان توجد فيه الكتب، ويمكن استعارة الكتب في كثير من المكتبات.'
                    ],
                    [
                        'question' => 'عندما يقول شخص: "أنا متأخر عن العمل"، ما الكلمة التي ترتبط بالموقف أكثر؟',
                        'choices' => [
                            ['choice_text' => 'الوقت', 'is_correct' => true],
                            ['choice_text' => 'اللون', 'is_correct' => false],
                            ['choice_text' => 'الطعم', 'is_correct' => false],
                            ['choice_text' => 'الشكل', 'is_correct' => false],
                        ],
                        'explanation' => 'التأخر عن العمل يتعلق بموعد الوصول والوقت.'
                    ],
                    [
                        'question' => 'أي كلمة تناسب مكانًا نركب منه الحافلة بين المدن؟',
                        'choices' => [
                            ['choice_text' => 'محطة', 'is_correct' => true],
                            ['choice_text' => 'عيادة', 'is_correct' => false],
                            ['choice_text' => 'مطعم', 'is_correct' => false],
                            ['choice_text' => 'صالون', 'is_correct' => false],
                        ],
                        'explanation' => 'المحطة مكان تصل إليه الحافلات وتغادر منه.'
                    ],
                    [
                        'question' => 'مريم تنظف غرفتها وترتب كتبها كل صباح. ماذا تصف هذه الكلمات؟',
                        'choices' => [
                            ['choice_text' => 'روتينًا يوميًا', 'is_correct' => true],
                            ['choice_text' => 'رحلة طويلة', 'is_correct' => false],
                            ['choice_text' => 'وجبة', 'is_correct' => false],
                            ['choice_text' => 'مهنة', 'is_correct' => false],
                        ],
                        'explanation' => 'الأعمال التي تتكرر كل صباح تشكل جزءًا من الروتين اليومي.'
                    ],
                    [
                        'question' => 'أي كلمة تشير إلى مكان نتناول فيه الطعام عادةً خارج المنزل؟',
                        'choices' => [
                            ['choice_text' => 'مطعم', 'is_correct' => true],
                            ['choice_text' => 'مكتب', 'is_correct' => false],
                            ['choice_text' => 'مدرسة', 'is_correct' => false],
                            ['choice_text' => 'صيدلية', 'is_correct' => false],
                        ],
                        'explanation' => 'المطعم مكان مخصص لتقديم الطعام والشراب للزبائن.'
                    ],
                    [
                        'question' => 'إذا قالت ليلى: "هذا أخي، وهو طالب في الجامعة"، من هو الشخص الذي تتحدث عنه؟',
                        'choices' => [
                            ['choice_text' => 'شقيقها', 'is_correct' => true],
                            ['choice_text' => 'والدها', 'is_correct' => false],
                            ['choice_text' => 'عمها', 'is_correct' => false],
                            ['choice_text' => 'معلمها', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أخي" تعني شقيق المتحدث، وهنا ليلى تتحدث عن شقيقها.'
                    ],
                ],
            ],

            [
                'title' => 'Synonyms and Opposites in Arabic',
                'description' => 'Practice recognizing simple synonyms and opposites so familiar words can be understood in different contexts.',
                'questions' => [
                    [
                        'question' => 'أي كلمة قريبة في المعنى من "سريع"؟',
                        'choices' => [
                            ['choice_text' => 'عاجل', 'is_correct' => true],
                            ['choice_text' => 'بطيء', 'is_correct' => false],
                            ['choice_text' => 'ثقيل', 'is_correct' => false],
                            ['choice_text' => 'ضعيف', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "عاجل" قد تدل على السرعة أو الحاجة إلى إنجاز الشيء بسرعة، لذلك هي الأقرب هنا.'
                    ],
                    [
                        'question' => 'ما عكس كلمة "كبير"؟',
                        'choices' => [
                            ['choice_text' => 'صغير', 'is_correct' => true],
                            ['choice_text' => 'طويل', 'is_correct' => false],
                            ['choice_text' => 'واسع', 'is_correct' => false],
                            ['choice_text' => 'قوي', 'is_correct' => false],
                        ],
                        'explanation' => 'العكس المباشر للحجم الكبير هو الحجم الصغير.'
                    ],
                    [
                        'question' => 'أي كلمة قريبة من معنى "جميل"؟',
                        'choices' => [
                            ['choice_text' => 'حسن', 'is_correct' => true],
                            ['choice_text' => 'قبيح', 'is_correct' => false],
                            ['choice_text' => 'غاضب', 'is_correct' => false],
                            ['choice_text' => 'بعيد', 'is_correct' => false],
                        ],
                        'explanation' => '"حسن" تستخدم لوصف الشيء الجميل أو الجيد في مظهره أو صفته.'
                    ],
                    [
                        'question' => 'ما عكس "قديم" عندما نصف شيئًا ليس جديدًا؟',
                        'choices' => [
                            ['choice_text' => 'جديد', 'is_correct' => true],
                            ['choice_text' => 'مكسور', 'is_correct' => false],
                            ['choice_text' => 'ثقيل', 'is_correct' => false],
                            ['choice_text' => 'قريب', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة المقابلة لـ"قديم" هي "جديد" عندما نتحدث عن حداثة الشيء.'
                    ],
                    [
                        'question' => 'إذا كان المكان "هادئًا"، أي كلمة تناسبه أكثر؟',
                        'choices' => [
                            ['choice_text' => 'ساكن', 'is_correct' => true],
                            ['choice_text' => 'مزدحم', 'is_correct' => false],
                            ['choice_text' => 'صاخب', 'is_correct' => false],
                            ['choice_text' => 'سريع', 'is_correct' => false],
                        ],
                        'explanation' => 'المكان الهادئ يكون ساكنًا وقليل الضوضاء.'
                    ],
                    [
                        'question' => 'ما عكس كلمة "نظيف"؟',
                        'choices' => [
                            ['choice_text' => 'متسخ', 'is_correct' => true],
                            ['choice_text' => 'مرتب', 'is_correct' => false],
                            ['choice_text' => 'لامع', 'is_correct' => false],
                            ['choice_text' => 'واسع', 'is_correct' => false],
                        ],
                        'explanation' => 'الشيء غير النظيف يوصف بأنه متسخ.'
                    ],
                    [
                        'question' => 'في عبارة "سعر رخيص"، ما الكلمة الأقرب إلى معنى "رخيص"؟',
                        'choices' => [
                            ['choice_text' => 'منخفض', 'is_correct' => true],
                            ['choice_text' => 'مرتفع', 'is_correct' => false],
                            ['choice_text' => 'ثقيل', 'is_correct' => false],
                            ['choice_text' => 'بعيد', 'is_correct' => false],
                        ],
                        'explanation' => 'السعر الرخيص يكون منخفضًا مقارنة بسعر أعلى.'
                    ],
                    [
                        'question' => 'أي زوج يمثل كلمتين متضادتين؟',
                        'choices' => [
                            ['choice_text' => 'قريب / بعيد', 'is_correct' => true],
                            ['choice_text' => 'جميل / حسن', 'is_correct' => false],
                            ['choice_text' => 'سعيد / فرح', 'is_correct' => false],
                            ['choice_text' => 'صغير / قليل', 'is_correct' => false],
                        ],
                        'explanation' => 'القريب والبعيد مفهومان متعاكسان بالنسبة إلى المسافة.'
                    ],
                    [
                        'question' => 'أي كلمة أقرب إلى معنى "ذكي" في جملة "الطالب ذكي"؟',
                        'choices' => [
                            ['choice_text' => 'فطن', 'is_correct' => true],
                            ['choice_text' => 'كسول', 'is_correct' => false],
                            ['choice_text' => 'مريض', 'is_correct' => false],
                            ['choice_text' => 'نائم', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "فطن" تصف شخصًا سريع الفهم والانتباه، ولذلك تقارب معنى "ذكي".'
                    ],
                    [
                        'question' => 'قال الأب: "كان الطريق طويلًا، أما الطريق الجديد فهو قصير." ما العلاقة بين "طويل" و"قصير"؟',
                        'choices' => [
                            ['choice_text' => 'تضاد', 'is_correct' => true],
                            ['choice_text' => 'ترادف', 'is_correct' => false],
                            ['choice_text' => 'جمع', 'is_correct' => false],
                            ['choice_text' => 'اسم ومكان', 'is_correct' => false],
                        ],
                        'explanation' => 'طويل وقصير صفتان متعاكستان عند الحديث عن الامتداد أو المسافة.'
                    ],
                ],
            ],

            [
                'title' => 'Vocabulary in Context',
                'description' => 'Use surrounding words and simple situations to work out the meaning of unfamiliar vocabulary.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "ارتدى يوسف معطفه لأن الجو بارد." ما معنى "معطف" هنا؟',
                        'choices' => [
                            ['choice_text' => 'ملابس للبرد', 'is_correct' => true],
                            ['choice_text' => 'نوع من الطعام', 'is_correct' => false],
                            ['choice_text' => 'أداة للكتابة', 'is_correct' => false],
                            ['choice_text' => 'وسيلة نقل', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق يربط المعطف بالجو البارد، لذلك هو لباس يُستخدم للتدفئة.'
                    ],
                    [
                        'question' => 'في الجملة "أغلقت الباب بإحكام"، ماذا يعني "بإحكام"؟',
                        'choices' => [
                            ['choice_text' => 'بشكل جيد وثابت', 'is_correct' => true],
                            ['choice_text' => 'بسرعة شديدة فقط', 'is_correct' => false],
                            ['choice_text' => 'من دون لمس الباب', 'is_correct' => false],
                            ['choice_text' => 'في الخارج', 'is_correct' => false],
                        ],
                        'explanation' => 'إغلاق الباب بإحكام يعني إغلاقه جيدًا بحيث يبقى ثابتًا ولا يكون مفتوحًا.'
                    ],
                    [
                        'question' => 'قالت سارة: "الماء وفير في هذا المكان." ماذا تفهم من كلمة "وفير"؟',
                        'choices' => [
                            ['choice_text' => 'متوفر بكثرة', 'is_correct' => true],
                            ['choice_text' => 'نادر جدًا', 'is_correct' => false],
                            ['choice_text' => 'غير صالح', 'is_correct' => false],
                            ['choice_text' => 'بارد فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "وفير" تعني موجودًا بكثرة أو بكمية كبيرة.'
                    ],
                    [
                        'question' => 'اقرأ: "كان الطفل مترددًا قبل القفز في الماء." ماذا يدل "مترددًا"؟',
                        'choices' => [
                            ['choice_text' => 'غير حاسم ويحتاج إلى وقت ليقرر', 'is_correct' => true],
                            ['choice_text' => 'سعيد جدًا', 'is_correct' => false],
                            ['choice_text' => 'غاضب من الجميع', 'is_correct' => false],
                            ['choice_text' => 'نائم تمامًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخص المتردد لا يتخذ قراره بسرعة ويشعر بالحيرة قبل أن يختار.'
                    ],
                    [
                        'question' => 'في الجملة "استيقظ باكرًا"، ما معنى "باكرًا"؟',
                        'choices' => [
                            ['choice_text' => 'في وقت مبكر', 'is_correct' => true],
                            ['choice_text' => 'في وقت متأخر', 'is_correct' => false],
                            ['choice_text' => 'بعد منتصف الليل دائمًا', 'is_correct' => false],
                            ['choice_text' => 'مرة واحدة فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"باكرًا" تعني في وقت مبكر، خاصة في بداية اليوم.'
                    ],
                    [
                        'question' => 'قالت المعلمة: "الدرس سهل وواضح." ما معنى "واضح" في هذا السياق؟',
                        'choices' => [
                            ['choice_text' => 'سهل الفهم', 'is_correct' => true],
                            ['choice_text' => 'بعيد عن الطلاب', 'is_correct' => false],
                            ['choice_text' => 'مكتوب بحروف كبيرة فقط', 'is_correct' => false],
                            ['choice_text' => 'صعب جدًا', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف الدرس بأنه واضح يعني أن فكرته مفهومة للطلاب وليست غامضة.'
                    ],
                    [
                        'question' => 'اقرأ: "كانت الحقيبة متينة، لذلك استخدمها خالد سنوات طويلة." ماذا تعني "متينة"؟',
                        'choices' => [
                            ['choice_text' => 'قوية وتتحمل الاستعمال', 'is_correct' => true],
                            ['choice_text' => 'ملونة فقط', 'is_correct' => false],
                            ['choice_text' => 'صغيرة جدًا', 'is_correct' => false],
                            ['choice_text' => 'رخيصة دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف الحقيبة بأنها متينة وذكر استخدامها سنوات طويلة يشير إلى قوتها وتحملها.'
                    ],
                    [
                        'question' => 'في العبارة "عاد المسافر متعبًا لكنه راضٍ"، ماذا نفهم من "راضٍ"؟',
                        'choices' => [
                            ['choice_text' => 'سعيد بما حدث أو غير منزعج منه', 'is_correct' => true],
                            ['choice_text' => 'يشعر بالجوع فقط', 'is_correct' => false],
                            ['choice_text' => 'يريد العودة فورًا', 'is_correct' => false],
                            ['choice_text' => 'غاضب من الرحلة', 'is_correct' => false],
                        ],
                        'explanation' => 'راضٍ تعني أن الشخص يقبل ما حدث ويشعر بالرضا، حتى لو كان متعبًا.'
                    ],
                    [
                        'question' => 'قال المعلم: "هذه الفكرة غير مناسبة لهذا الدرس." ماذا يعني "غير مناسبة"؟',
                        'choices' => [
                            ['choice_text' => 'لا تناسب الموضوع', 'is_correct' => true],
                            ['choice_text' => 'مناسبة جدًا', 'is_correct' => false],
                            ['choice_text' => 'جديدة دائمًا', 'is_correct' => false],
                            ['choice_text' => 'قصيرة فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تدل على أن الفكرة لا تتوافق مع موضوع الدرس أو هدفه.'
                    ],
                    [
                        'question' => 'إذا قرأت جملة فيها كلمة جديدة ولم تعرف معناها، ما أول شيء مفيد يمكنك فعله؟',
                        'choices' => [
                            ['choice_text' => 'النظر إلى الكلمات المحيطة بها ومحاولة فهم السياق', 'is_correct' => true],
                            ['choice_text' => 'تجاهل الجملة كلها دائمًا', 'is_correct' => false],
                            ['choice_text' => 'تغيير الكلمة من نفسك', 'is_correct' => false],
                            ['choice_text' => 'اختيار أي معنى عشوائي', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق المحيط بالكلمة يعطي إشارات مهمة تساعد على تخمين معناها قبل الرجوع إلى المعجم.'
                    ],
                ],
            ],

            [
                'title' => 'Food, Clothes, and Home Vocabulary',
                'description' => 'Expand practical vocabulary for meals, clothing, household objects, and common actions at home.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تنتمي إلى أدوات المائدة؟',
                        'choices' => [
                            ['choice_text' => 'ملعقة', 'is_correct' => true],
                            ['choice_text' => 'وسادة', 'is_correct' => false],
                            ['choice_text' => 'مرآة', 'is_correct' => false],
                            ['choice_text' => 'ستارة', 'is_correct' => false],
                        ],
                        'explanation' => 'الملعقة من الأدوات التي نستخدمها أثناء تناول الطعام.'
                    ],
                    [
                        'question' => 'في الشتاء، أي قطعة ملابس نرتديها للمساعدة على التدفئة؟',
                        'choices' => [
                            ['choice_text' => 'معطف', 'is_correct' => true],
                            ['choice_text' => 'قبعة سباحة', 'is_correct' => false],
                            ['choice_text' => 'نظارة شمسية', 'is_correct' => false],
                            ['choice_text' => 'شبشب فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'المعطف من الملابس التي تساعد على حماية الجسم من البرد.'
                    ],
                    [
                        'question' => 'أي شيء نستخدمه عادةً للنوم؟',
                        'choices' => [
                            ['choice_text' => 'سرير', 'is_correct' => true],
                            ['choice_text' => 'فرن', 'is_correct' => false],
                            ['choice_text' => 'ثلاجة', 'is_correct' => false],
                            ['choice_text' => 'مكتب', 'is_correct' => false],
                        ],
                        'explanation' => 'السرير مخصص للنوم والراحة.'
                    ],
                    [
                        'question' => 'أين نحفظ الطعام البارد في المنزل؟',
                        'choices' => [
                            ['choice_text' => 'الثلاجة', 'is_correct' => true],
                            ['choice_text' => 'الخزانة', 'is_correct' => false],
                            ['choice_text' => 'السجادة', 'is_correct' => false],
                            ['choice_text' => 'الستارة', 'is_correct' => false],
                        ],
                        'explanation' => 'الثلاجة تُستخدم لحفظ الأطعمة والمشروبات في درجة حرارة منخفضة.'
                    ],
                    [
                        'question' => 'أي كلمة مرتبطة بطهي الطعام؟',
                        'choices' => [
                            ['choice_text' => 'فرن', 'is_correct' => true],
                            ['choice_text' => 'مرآة', 'is_correct' => false],
                            ['choice_text' => 'خزانة ملابس', 'is_correct' => false],
                            ['choice_text' => 'وسادة', 'is_correct' => false],
                        ],
                        'explanation' => 'الفرن جهاز يستخدم في طهي أنواع مختلفة من الطعام.'
                    ],
                    [
                        'question' => 'وضعت هند الكتب على رف قريب من مكتبها. ما الشيء الذي يخزن الكتب هنا؟',
                        'choices' => [
                            ['choice_text' => 'رف', 'is_correct' => true],
                            ['choice_text' => 'موقد', 'is_correct' => false],
                            ['choice_text' => 'حوض', 'is_correct' => false],
                            ['choice_text' => 'بطانية', 'is_correct' => false],
                        ],
                        'explanation' => 'الرف مكان مناسب لوضع الكتب وترتيبها.'
                    ],
                    [
                        'question' => 'إذا كان القميص مبللًا، فما الذي يحتاجه قبل ارتدائه؟',
                        'choices' => [
                            ['choice_text' => 'أن يجف', 'is_correct' => true],
                            ['choice_text' => 'أن يتجمد', 'is_correct' => false],
                            ['choice_text' => 'أن يُطبخ', 'is_correct' => false],
                            ['choice_text' => 'أن يُملح', 'is_correct' => false],
                        ],
                        'explanation' => 'الملابس المبللة تحتاج إلى الجفاف قبل استخدامها بشكل مريح.'
                    ],
                    [
                        'question' => 'أي كلمة لا ترتبط عادةً بالمطبخ؟',
                        'choices' => [
                            ['choice_text' => 'طبق', 'is_correct' => false],
                            ['choice_text' => 'كوب', 'is_correct' => false],
                            ['choice_text' => 'وسادة', 'is_correct' => true],
                            ['choice_text' => 'ملعقة', 'is_correct' => false],
                        ],
                        'explanation' => 'الطبق والكوب والملعقة من أدوات المطبخ، أما الوسادة فهي للراحة والنوم.'
                    ],
                    [
                        'question' => 'أثناء تنظيف المنزل، أي كلمة تصف الفعل الذي يزيل الغبار عن الطاولة؟',
                        'choices' => [
                            ['choice_text' => 'يمسح', 'is_correct' => true],
                            ['choice_text' => 'يسبح', 'is_correct' => false],
                            ['choice_text' => 'يركض', 'is_correct' => false],
                            ['choice_text' => 'يزرع', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "يمسح" يستخدم عند تنظيف سطح مثل الطاولة وإزالة الغبار عنه.'
                    ],
                    [
                        'question' => 'قالت الأم: "ضع الأطباق في الخزانة بعد غسلها." ما الفعل المطلوب بعد الغسل؟',
                        'choices' => [
                            ['choice_text' => 'وضع الأطباق في الخزانة', 'is_correct' => true],
                            ['choice_text' => 'كسر الأطباق', 'is_correct' => false],
                            ['choice_text' => 'أخذها إلى الشارع', 'is_correct' => false],
                            ['choice_text' => 'وضعها في السرير', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعطي تعليمًا واضحًا: بعد غسل الأطباق توضع في الخزانة.'
                    ],
                ],
            ],

            [
                'title' => 'Numbers, Time, and Descriptive Vocabulary',
                'description' => 'Practice useful words for quantities, time, size, age, frequency, and simple descriptions.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تعني العدد 3؟',
                        'choices' => [
                            ['choice_text' => 'ثلاثة', 'is_correct' => true],
                            ['choice_text' => 'خمسة', 'is_correct' => false],
                            ['choice_text' => 'سبعة', 'is_correct' => false],
                            ['choice_text' => 'تسعة', 'is_correct' => false],
                        ],
                        'explanation' => 'العدد 3 في العربية هو "ثلاثة".'
                    ],
                    [
                        'question' => 'إذا كانت الساعة 7:00 صباحًا، فما الوصف الصحيح للوقت؟',
                        'choices' => [
                            ['choice_text' => 'السابعة صباحًا', 'is_correct' => true],
                            ['choice_text' => 'السابعة مساءً', 'is_correct' => false],
                            ['choice_text' => 'الثامنة صباحًا', 'is_correct' => false],
                            ['choice_text' => 'السادسة مساءً', 'is_correct' => false],
                        ],
                        'explanation' => 'الساعة 7:00 مع كلمة صباحًا تعني السابعة صباحًا.'
                    ],
                    [
                        'question' => 'ما الكلمة التي تصف شخصًا لا يتحدث كثيرًا؟',
                        'choices' => [
                            ['choice_text' => 'هادئ', 'is_correct' => true],
                            ['choice_text' => 'صاخب', 'is_correct' => false],
                            ['choice_text' => 'سريع', 'is_correct' => false],
                            ['choice_text' => 'طويل', 'is_correct' => false],
                        ],
                        'explanation' => 'الشخص الهادئ لا يرفع صوته ولا يتحدث بكثرة مقارنة بالشخص الصاخب.'
                    ],
                    [
                        'question' => 'إذا كانت السيارة بعيدة، فماذا يعني ذلك بالنسبة للمكان الذي توجد فيه؟',
                        'choices' => [
                            ['choice_text' => 'ليست قريبة', 'is_correct' => true],
                            ['choice_text' => 'داخل البيت', 'is_correct' => false],
                            ['choice_text' => 'خلف الباب دائمًا', 'is_correct' => false],
                            ['choice_text' => 'صغيرة الحجم', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "بعيدة" تتعلق بالمسافة، وتعني أن السيارة ليست قريبة من المتحدث.'
                    ],
                    [
                        'question' => 'أحمد يزور جدته كل يوم جمعة. كم مرة يكرر ذلك عادةً في الأسبوع؟',
                        'choices' => [
                            ['choice_text' => 'مرة واحدة', 'is_correct' => true],
                            ['choice_text' => 'مرتين', 'is_correct' => false],
                            ['choice_text' => 'خمس مرات', 'is_correct' => false],
                            ['choice_text' => 'سبع مرات', 'is_correct' => false],
                        ],
                        'explanation' => 'اليوم المذكور هو الجمعة فقط، لذلك الزيارة الأسبوعية المعتادة تكون مرة واحدة في الأسبوع.'
                    ],
                    [
                        'question' => 'أي كلمة تصف شيئًا حجمه أقل؟',
                        'choices' => [
                            ['choice_text' => 'صغير', 'is_correct' => true],
                            ['choice_text' => 'ضخم', 'is_correct' => false],
                            ['choice_text' => 'واسع', 'is_correct' => false],
                            ['choice_text' => 'مرتفع', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "صغير" تصف حجمًا أقل مقارنة بشيء كبير أو ضخم.'
                    ],
                    [
                        'question' => 'إذا كان خالد أكبر من أخيه بعامين، فأيهما أصغر سنًا؟',
                        'choices' => [
                            ['choice_text' => 'أخوه', 'is_correct' => true],
                            ['choice_text' => 'خالد', 'is_correct' => false],
                            ['choice_text' => 'كلاهما في العمر نفسه', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن معرفة ذلك من الجملة', 'is_correct' => false],
                        ],
                        'explanation' => 'إذا كان خالد أكبر بعامين، فإن أخاه أصغر منه في العمر.'
                    ],
                    [
                        'question' => 'ما الكلمة المناسبة لوصف المطر الذي ينزل بكثرة؟',
                        'choices' => [
                            ['choice_text' => 'غزير', 'is_correct' => true],
                            ['choice_text' => 'خفيف', 'is_correct' => false],
                            ['choice_text' => 'قصير', 'is_correct' => false],
                            ['choice_text' => 'جاف', 'is_correct' => false],
                        ],
                        'explanation' => 'المطر الغزير هو المطر الذي ينزل بكميات كبيرة خلال فترة معينة.'
                    ],
                    [
                        'question' => 'قال المدير: "الحافلة تصل عادةً في الموعد." ماذا تعني كلمة "عادةً"؟',
                        'choices' => [
                            ['choice_text' => 'في معظم المرات', 'is_correct' => true],
                            ['choice_text' => 'مرة واحدة فقط', 'is_correct' => false],
                            ['choice_text' => 'أبدًا', 'is_correct' => false],
                            ['choice_text' => 'بعد سنوات', 'is_correct' => false],
                        ],
                        'explanation' => '"عادةً" تشير إلى ما يحدث بشكل متكرر أو في معظم المرات، وليس في مرة واحدة فقط.'
                    ],
                    [
                        'question' => 'أي كلمة تصف كوبًا ممتلئًا حتى حافته؟',
                        'choices' => [
                            ['choice_text' => 'ممتلئ', 'is_correct' => true],
                            ['choice_text' => 'فارغ', 'is_correct' => false],
                            ['choice_text' => 'مكسور', 'is_correct' => false],
                            ['choice_text' => 'جاف', 'is_correct' => false],
                        ],
                        'explanation' => 'الكوب الذي يحتوي على كمية كبيرة من السائل ويصل إلى حافته يوصف بأنه ممتلئ.'
                    ],
                ],
            ],

            [
                'title' => 'Word Choice and Common Vocabulary Mistakes',
                'description' => 'Choose the word that fits naturally in a sentence and distinguish between commonly confused beginner vocabulary.',
                'questions' => [
                    [
                        'question' => 'اختر الكلمة المناسبة: "ذهبت إلى ___ لشراء الخبز."',
                        'choices' => [
                            ['choice_text' => 'مخبز', 'is_correct' => true],
                            ['choice_text' => 'مستشفى', 'is_correct' => false],
                            ['choice_text' => 'مدرسة', 'is_correct' => false],
                            ['choice_text' => 'ملعب', 'is_correct' => false],
                        ],
                        'explanation' => 'المخبز هو المكان الذي نشتري منه الخبز، لذلك يناسب الجملة.'
                    ],
                    [
                        'question' => 'أي كلمة تناسب الجملة: "وضعت الملابس في ___"؟',
                        'choices' => [
                            ['choice_text' => 'خزانة', 'is_correct' => true],
                            ['choice_text' => 'فرن', 'is_correct' => false],
                            ['choice_text' => 'حوض', 'is_correct' => false],
                            ['choice_text' => 'ثلاجة', 'is_correct' => false],
                        ],
                        'explanation' => 'الخزانة مكان مناسب لحفظ الملابس وترتيبها.'
                    ],
                    [
                        'question' => 'أي زوج من الكلمات يرتبط بالمعنى نفسه تقريبًا؟',
                        'choices' => [
                            ['choice_text' => 'سعيد / فرحان', 'is_correct' => true],
                            ['choice_text' => 'واسع / ضيق', 'is_correct' => false],
                            ['choice_text' => 'طويل / قصير', 'is_correct' => false],
                            ['choice_text' => 'فوق / تحت', 'is_correct' => false],
                        ],
                        'explanation' => 'السعيد والفرحان كلمتان تدلان على حالة من الفرح والسرور.'
                    ],
                    [
                        'question' => 'قال الطالب: "أريد أن أقرأ هذا الكتاب لأنه ___ ومفيد." أي كلمة تناسب أكثر؟',
                        'choices' => [
                            ['choice_text' => 'ممتع', 'is_correct' => true],
                            ['choice_text' => 'مالح', 'is_correct' => false],
                            ['choice_text' => 'مبلل', 'is_correct' => false],
                            ['choice_text' => 'ثقيل الطعم', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتب يمكن وصفها بأنها ممتعة ومفيدة، بينما الخيارات الأخرى لا تناسب هذا السياق.'
                    ],
                    [
                        'question' => 'أي كلمة تعبّر عن مكان نعيش فيه؟',
                        'choices' => [
                            ['choice_text' => 'منزل', 'is_correct' => true],
                            ['choice_text' => 'ملعب', 'is_correct' => false],
                            ['choice_text' => 'مطار', 'is_correct' => false],
                            ['choice_text' => 'محطة', 'is_correct' => false],
                        ],
                        'explanation' => 'المنزل هو المكان الذي يعيش فيه الشخص أو الأسرة عادةً.'
                    ],
                    [
                        'question' => 'أي كلمة لا تناسب الجملة: "___ الباب قبل أن تخرج."',
                        'choices' => [
                            ['choice_text' => 'أغلق', 'is_correct' => false],
                            ['choice_text' => 'افتح', 'is_correct' => true],
                            ['choice_text' => 'أقفل', 'is_correct' => false],
                            ['choice_text' => 'أُحكم إغلاق', 'is_correct' => false],
                        ],
                        'explanation' => 'قبل الخروج يكون المطلوب عادةً إغلاق الباب، لذلك "افتح" لا يناسب المعنى المقصود.'
                    ],
                    [
                        'question' => 'إذا قال شخص: "أنا جائع"، فأي فعل يناسب الموقف أكثر؟',
                        'choices' => [
                            ['choice_text' => 'أتناول الطعام', 'is_correct' => true],
                            ['choice_text' => 'أرتدي معطفًا', 'is_correct' => false],
                            ['choice_text' => 'أفتح النافذة فقط', 'is_correct' => false],
                            ['choice_text' => 'أنام في المكتب', 'is_correct' => false],
                        ],
                        'explanation' => 'الجوع يعني الحاجة إلى الطعام، لذلك تناول الطعام هو التصرف المرتبط مباشرة بالحالة.'
                    ],
                    [
                        'question' => 'أي كلمة يمكن أن تصف غرفة فيها كثير من الأشياء ولا توجد فيها مساحة كافية؟',
                        'choices' => [
                            ['choice_text' => 'مزدحمة', 'is_correct' => true],
                            ['choice_text' => 'فارغة', 'is_correct' => false],
                            ['choice_text' => 'هادئة', 'is_correct' => false],
                            ['choice_text' => 'نظيفة دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الغرفة المزدحمة تحتوي على أشياء أو أشخاص كثيرين مقارنة بالمساحة المتاحة.'
                    ],
                    [
                        'question' => 'أي كلمة تناسب أكثر: "الطريق طويل، لذلك نحتاج إلى ___ وقت."',
                        'choices' => [
                            ['choice_text' => 'مزيد من', 'is_correct' => true],
                            ['choice_text' => 'أقل من', 'is_correct' => false],
                            ['choice_text' => 'صفر من', 'is_correct' => false],
                            ['choice_text' => 'لا شيء من', 'is_correct' => false],
                        ],
                        'explanation' => 'الطريق الطويل يحتاج عادةً إلى وقت أكبر، لذلك "مزيد من الوقت" تناسب المعنى.'
                    ],
                    [
                        'question' => 'ما أفضل كلمة لإكمال الجملة: "كان الطفل ___ عندما سمع الخبر السعيد."',
                        'choices' => [
                            ['choice_text' => 'فرحًا', 'is_correct' => true],
                            ['choice_text' => 'مكسورًا', 'is_correct' => false],
                            ['choice_text' => 'باردًا فقط', 'is_correct' => false],
                            ['choice_text' => 'فارغًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الخبر السعيد يجعل الشخص يشعر بالفرح، لذلك كلمة "فرحًا" هي الأنسب.'
                    ],
                ],
            ],

            [
                'title' => 'Vocabulary Review Through Real Situations',
                'description' => 'Bring together beginner vocabulary through short real-life situations involving shopping, travel, study, work, and home life.',
                'questions' => [
                    [
                        'question' => 'ذهبت ليان إلى السوق ومعها قائمة فيها: تفاح، طماطم، أرز. ماذا كانت على الأرجح تشتري؟',
                        'choices' => [
                            ['choice_text' => 'طعامًا', 'is_correct' => true],
                            ['choice_text' => 'ملابس', 'is_correct' => false],
                            ['choice_text' => 'أدوات مدرسية', 'is_correct' => false],
                            ['choice_text' => 'أثاثًا', 'is_correct' => false],
                        ],
                        'explanation' => 'التفاح والطماطم والأرز كلها من المواد الغذائية، لذلك كانت تشتري طعامًا.'
                    ],
                    [
                        'question' => 'وصل كريم إلى المطار قبل موعد الطائرة بساعتين. ما الكلمة المرتبطة بهذا الموقف أكثر؟',
                        'choices' => [
                            ['choice_text' => 'سفر', 'is_correct' => true],
                            ['choice_text' => 'طبخ', 'is_correct' => false],
                            ['choice_text' => 'نوم', 'is_correct' => false],
                            ['choice_text' => 'تنظيف', 'is_correct' => false],
                        ],
                        'explanation' => 'المطار والطائرة وموعد الوصول كلها كلمات ترتبط بالسفر.'
                    ],
                    [
                        'question' => 'قال المدير لموظف جديد: "احتفظ بهذه الأوراق في الملف." ما الشيء المطلوب وضعه في الملف؟',
                        'choices' => [
                            ['choice_text' => 'الأوراق', 'is_correct' => true],
                            ['choice_text' => 'الطعام', 'is_correct' => false],
                            ['choice_text' => 'الملابس', 'is_correct' => false],
                            ['choice_text' => 'الأحذية', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعطي تعليمًا مباشرًا بوضع الأوراق داخل الملف.'
                    ],
                    [
                        'question' => 'دخل سامي إلى الصيدلية وقال: "أحتاج دواءً للصداع." ما الكلمة الأساسية في طلبه؟',
                        'choices' => [
                            ['choice_text' => 'دواء', 'is_correct' => true],
                            ['choice_text' => 'تذكرة', 'is_correct' => false],
                            ['choice_text' => 'وجبة', 'is_correct' => false],
                            ['choice_text' => 'خريطة', 'is_correct' => false],
                        ],
                        'explanation' => 'سامي في الصيدلية ويطلب علاجًا للصداع، لذلك الكلمة الأساسية هي "دواء".'
                    ],
                    [
                        'question' => 'في الفصل، طلب المعلم من الطلاب فتح الدفاتر وكتابة التاريخ. أي شيء يحتاجه الطالب أولًا للكتابة؟',
                        'choices' => [
                            ['choice_text' => 'قلم', 'is_correct' => true],
                            ['choice_text' => 'معطف', 'is_correct' => false],
                            ['choice_text' => 'كوب', 'is_correct' => false],
                            ['choice_text' => 'مفتاح', 'is_correct' => false],
                        ],
                        'explanation' => 'القلم هو الأداة الأساسية المطلوبة لكتابة التاريخ في الدفتر.'
                    ],
                    [
                        'question' => 'قال الأب: "الجو ممطر، خذ معك مظلتك." أي كلمة تساعدك على فهم سبب أخذ المظلة؟',
                        'choices' => [
                            ['choice_text' => 'ممطر', 'is_correct' => true],
                            ['choice_text' => 'الأب', 'is_correct' => false],
                            ['choice_text' => 'معك', 'is_correct' => false],
                            ['choice_text' => 'خذ', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ممطر" تخبرنا أن هناك مطرًا، وهو السبب الذي يجعل المظلة مفيدة.'
                    ],
                    [
                        'question' => 'نور في المطبخ وتريد إعداد كوب شاي. أي مجموعة من الكلمات تساعدها على المهمة؟',
                        'choices' => [
                            ['choice_text' => 'كوب، ماء، شاي', 'is_correct' => true],
                            ['choice_text' => 'وسادة، بطانية، سرير', 'is_correct' => false],
                            ['choice_text' => 'دفتر، قلم، كتاب', 'is_correct' => false],
                            ['choice_text' => 'حذاء، معطف، قبعة', 'is_correct' => false],
                        ],
                        'explanation' => 'الكوب والماء والشاي عناصر مرتبطة مباشرة بإعداد كوب الشاي.'
                    ],
                    [
                        'question' => 'كان الطريق مزدحمًا فتأخر السائق. ما الذي يعنيه "مزدحم" هنا؟',
                        'choices' => [
                            ['choice_text' => 'فيه سيارات أو أشخاص كثيرون', 'is_correct' => true],
                            ['choice_text' => 'خالٍ تمامًا', 'is_correct' => false],
                            ['choice_text' => 'مغلق بسبب الثلج دائمًا', 'is_correct' => false],
                            ['choice_text' => 'قصير جدًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الطريق المزدحم يحتوي على عدد كبير من السيارات أو المركبات، وهذا قد يسبب التأخير.'
                    ],
                    [
                        'question' => 'قالت هبة: "أريد هدية صغيرة لصديقتي." أي اختيار يناسب كلمة "صغيرة"؟',
                        'choices' => [
                            ['choice_text' => 'ليست كبيرة الحجم', 'is_correct' => true],
                            ['choice_text' => 'غالية جدًا', 'is_correct' => false],
                            ['choice_text' => 'ثقيلة جدًا', 'is_correct' => false],
                            ['choice_text' => 'صالحة للأكل فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "صغيرة" تصف حجم الهدية، ولا تعني بالضرورة سعرها أو نوعها.'
                    ],
                    [
                        'question' => 'أراد يوسف شراء قميص لكنه لم يعرف المقاس المناسب. أي كلمة يحتاج أن يعرف معناها في هذه الحالة؟',
                        'choices' => [
                            ['choice_text' => 'مقاس', 'is_correct' => true],
                            ['choice_text' => 'محطة', 'is_correct' => false],
                            ['choice_text' => 'وصفة', 'is_correct' => false],
                            ['choice_text' => 'مكتبة', 'is_correct' => false],
                        ],
                        'explanation' => 'المقاس يحدد حجم الملابس المناسب للشخص، لذلك هو الكلمة المهمة عند شراء القميص.'
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
