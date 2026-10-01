<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-arabic')->firstOrFail();

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
                'title' => 'Reading Short Arabic Words',
                'description' => 'Build confidence reading familiar two-, three-, and four-letter Arabic words and noticing the sounds represented by the letters.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تُقرأ هكذا: "بَيْت"؟',
                        'choices' => [
                            ['choice_text' => 'بيت', 'is_correct' => true],
                            ['choice_text' => 'بنت', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                            ['choice_text' => 'بيئة', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة التي تحتوي على الباء والياء والتاء هي "بيت"، وتُقرأ بَيْت.',
                    ],
                    [
                        'question' => 'ما الكلمة التي تعني "ماء"؟',
                        'choices' => [
                            ['choice_text' => 'ماء', 'is_correct' => true],
                            ['choice_text' => 'ملح', 'is_correct' => false],
                            ['choice_text' => 'خبز', 'is_correct' => false],
                            ['choice_text' => 'نار', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ماء" تُستخدم للشراب وللدلالة على الماء المعروف.',
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بحرف الميم؟',
                        'choices' => [
                            ['choice_text' => 'موز', 'is_correct' => true],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                            ['choice_text' => 'ولد', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "موز" تبدأ بحرف الميم، أما الكلمات الأخرى فتبدأ بحروف مختلفة.',
                    ],
                    [
                        'question' => 'اقرأ الكلمات: "باب، كتاب، قلم". أيها يبدأ بحرف القاف؟',
                        'choices' => [
                            ['choice_text' => 'قلم', 'is_correct' => true],
                            ['choice_text' => 'باب', 'is_correct' => false],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'كلها', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "قلم" تبدأ بحرف القاف، وهو الحرف الذي نبحث عنه.',
                    ],
                    [
                        'question' => 'أي كلمة فيها حرف الشين؟',
                        'choices' => [
                            ['choice_text' => 'شمس', 'is_correct' => true],
                            ['choice_text' => 'قمر', 'is_correct' => false],
                            ['choice_text' => 'نهر', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                        ],
                        'explanation' => 'حرف الشين ظاهر في بداية كلمة "شمس".',
                    ],
                    [
                        'question' => 'سألت المعلمة: "أين القلم؟" وأجاب الطالب: "على الطاولة." ماذا عرفنا من الجواب؟',
                        'choices' => [
                            ['choice_text' => 'مكان القلم', 'is_correct' => true],
                            ['choice_text' => 'لون القلم', 'is_correct' => false],
                            ['choice_text' => 'سعر القلم', 'is_correct' => false],
                            ['choice_text' => 'صاحب القلم', 'is_correct' => false],
                        ],
                        'explanation' => 'الجواب "على الطاولة" يحدد مكان القلم.',
                    ],
                    [
                        'question' => 'أي كلمة أطول من كلمتي "باب" و"نار"؟',
                        'choices' => [
                            ['choice_text' => 'مدرسة', 'is_correct' => true],
                            ['choice_text' => 'قلم', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                            ['choice_text' => 'يد', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مدرسة" تتكون من عدد أكبر من الحروف مقارنة بالكلمات القصيرة المذكورة.',
                    ],
                    [
                        'question' => 'إذا وجدت كلمة "ولد" في نص، بأي حرف تبدأ عند القراءة؟',
                        'choices' => [
                            ['choice_text' => 'و', 'is_correct' => true],
                            ['choice_text' => 'ل', 'is_correct' => false],
                            ['choice_text' => 'د', 'is_correct' => false],
                            ['choice_text' => 'ت', 'is_correct' => false],
                        ],
                        'explanation' => 'العربية تُقرأ من اليمين إلى اليسار، ولذلك نبدأ كلمة "ولد" بحرف الواو.',
                    ],
                    [
                        'question' => 'أي زوج من الكلمات يبدأ بالحرف نفسه؟',
                        'choices' => [
                            ['choice_text' => 'كتاب وكرسي', 'is_correct' => true],
                            ['choice_text' => 'باب وموز', 'is_correct' => false],
                            ['choice_text' => 'شمس وبيت', 'is_correct' => false],
                            ['choice_text' => 'قلم ونهر', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمتا "كتاب" و"كرسي" تبدآن بحرف الكاف.',
                    ],
                    [
                        'question' => 'اقرأ: "باب البيت مفتوح." ما الشيء المذكور في بداية الجملة؟',
                        'choices' => [
                            ['choice_text' => 'الباب', 'is_correct' => true],
                            ['choice_text' => 'البيت', 'is_correct' => false],
                            ['choice_text' => 'النافذة', 'is_correct' => false],
                            ['choice_text' => 'الشارع', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تبدأ بقولنا "باب البيت"، والمذكور أولًا هو الباب.',
                    ],
                ],
            ],
            [
                'title' => 'Vowels, Long Sounds, and Diacritics',
                'description' => 'Practice reading short vowels, long vowels, and simple words with Arabic diacritics.',
                'questions' => [
                    [
                        'question' => 'أي حركة تعطي صوت الفتحة؟',
                        'choices' => [
                            ['choice_text' => 'ـَ', 'is_correct' => true],
                            ['choice_text' => 'ـِ', 'is_correct' => false],
                            ['choice_text' => 'ـُ', 'is_correct' => false],
                            ['choice_text' => 'ـْ', 'is_correct' => false],
                        ],
                        'explanation' => 'الفتحة تُكتب فوق الحرف بهذا الشكل: ـَ.',
                    ],
                    [
                        'question' => 'أي حركة تعطي صوت الكسرة؟',
                        'choices' => [
                            ['choice_text' => 'ـِ', 'is_correct' => true],
                            ['choice_text' => 'ـَ', 'is_correct' => false],
                            ['choice_text' => 'ـُ', 'is_correct' => false],
                            ['choice_text' => 'ـّ', 'is_correct' => false],
                        ],
                        'explanation' => 'الكسرة تُكتب تحت الحرف: ـِ.',
                    ],
                    [
                        'question' => 'أي حركة تعطي صوت الضمة؟',
                        'choices' => [
                            ['choice_text' => 'ـُ', 'is_correct' => true],
                            ['choice_text' => 'ـَ', 'is_correct' => false],
                            ['choice_text' => 'ـِ', 'is_correct' => false],
                            ['choice_text' => 'ـْ', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمة تُكتب فوق الحرف على هيئة واو صغيرة: ـُ.',
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على مد بالألف؟',
                        'choices' => [
                            ['choice_text' => 'قال', 'is_correct' => true],
                            ['choice_text' => 'قيل', 'is_correct' => false],
                            ['choice_text' => 'قل', 'is_correct' => false],
                            ['choice_text' => 'قُل', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "قال" يأتي الألف بعد الفتحة ليمد الصوت: قَا.',
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالياء؟',
                        'choices' => [
                            ['choice_text' => 'قيل', 'is_correct' => true],
                            ['choice_text' => 'قال', 'is_correct' => false],
                            ['choice_text' => 'قُل', 'is_correct' => false],
                            ['choice_text' => 'كتب', 'is_correct' => false],
                        ],
                        'explanation' => 'في "قيل" يأتي الياء بعد الكسرة ليعطي صوت المد الطويل.',
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالواو؟',
                        'choices' => [
                            ['choice_text' => 'يقول', 'is_correct' => true],
                            ['choice_text' => 'قال', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                            ['choice_text' => 'جلس', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "يقول" يأتي الواو بعد الضمة في المقطع "قو".',
                    ],
                    [
                        'question' => 'قرأ خالد كلمة "مُعَلِّم". ماذا تخبرنا الشدة على اللام؟',
                        'choices' => [
                            ['choice_text' => 'أن الحرف مشدد ويُنطق بقوة أو مرتين في الأصل', 'is_correct' => true],
                            ['choice_text' => 'أن الحرف ساكن دائمًا', 'is_correct' => false],
                            ['choice_text' => 'أن الحرف يجب حذفه', 'is_correct' => false],
                            ['choice_text' => 'أن الكلمة انتهت', 'is_correct' => false],
                        ],
                        'explanation' => 'الشدة تدل على تضعيف الحرف، لذلك تُنطق اللام مشددة.',
                    ],
                    [
                        'question' => 'في كلمة "كِتاب"، ما الحركة على الكاف؟',
                        'choices' => [
                            ['choice_text' => 'الكسرة', 'is_correct' => true],
                            ['choice_text' => 'الفتحة', 'is_correct' => false],
                            ['choice_text' => 'الضمة', 'is_correct' => false],
                            ['choice_text' => 'السكون', 'is_correct' => false],
                        ],
                        'explanation' => 'الكاف في "كِتاب" تحتها كسرة، وصوتها يكون "كِـ".',
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بصوت "مَ"؟',
                        'choices' => [
                            ['choice_text' => 'مَدرسة', 'is_correct' => true],
                            ['choice_text' => 'مِفتاح', 'is_correct' => false],
                            ['choice_text' => 'مُعلم', 'is_correct' => false],
                            ['choice_text' => 'مْنزل', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مَدرسة" تبدأ بالميم المفتوحة، أي مَ.',
                    ],
                    [
                        'question' => 'إذا رأيت سكونًا على حرف، ماذا يعني في القراءة للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'أن الحرف لا يحمل حركة قصيرة بعده', 'is_correct' => true],
                            ['choice_text' => 'أن الحرف يجب أن يمد بالألف', 'is_correct' => false],
                            ['choice_text' => 'أن الحرف يُنطق مرتين', 'is_correct' => false],
                            ['choice_text' => 'أن الكلمة تصبح جمعًا', 'is_correct' => false],
                        ],
                        'explanation' => 'السكون يدل على أن الحرف غير متحرك بحركة قصيرة مثل الفتحة أو الكسرة أو الضمة.',
                    ],
                ],
            ],
            [
                'title' => 'Reading Simple Sentences',
                'description' => 'Read short everyday sentences and identify who, what, where, and when from the text.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "سليم يشرب الماء." ماذا يفعل سليم؟',
                        'choices' => [
                            ['choice_text' => 'يشرب الماء', 'is_correct' => true],
                            ['choice_text' => 'يكتب رسالة', 'is_correct' => false],
                            ['choice_text' => 'يقرأ كتابًا', 'is_correct' => false],
                            ['choice_text' => 'ينام', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل المذكور هو "يشرب"، والمفعول هو الماء.',
                    ],
                    [
                        'question' => 'اقرأ: "تجلس مريم في الفصل." أين تجلس مريم؟',
                        'choices' => [
                            ['choice_text' => 'في الفصل', 'is_correct' => true],
                            ['choice_text' => 'في البيت', 'is_correct' => false],
                            ['choice_text' => 'في السوق', 'is_correct' => false],
                            ['choice_text' => 'في الحديقة', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "في الفصل" تحدد مكان جلوس مريم.',
                    ],
                    [
                        'question' => 'اقرأ: "يعود الأب مساءً." متى يعود الأب؟',
                        'choices' => [
                            ['choice_text' => 'مساءً', 'is_correct' => true],
                            ['choice_text' => 'صباحًا', 'is_correct' => false],
                            ['choice_text' => 'ظهرًا', 'is_correct' => false],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مساءً" تحدد وقت العودة.',
                    ],
                    [
                        'question' => 'اقرأ: "الكتاب على الطاولة." أين الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'على الطاولة', 'is_correct' => true],
                            ['choice_text' => 'تحت الكرسي', 'is_correct' => false],
                            ['choice_text' => 'في الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'في المطبخ', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر مباشرة أن الكتاب على الطاولة.',
                    ],
                    [
                        'question' => 'في جملة "ذهبت ليلى إلى السوق لشراء الخبز"، لماذا ذهبت ليلى إلى السوق؟',
                        'choices' => [
                            ['choice_text' => 'لشراء الخبز', 'is_correct' => true],
                            ['choice_text' => 'للدراسة', 'is_correct' => false],
                            ['choice_text' => 'لزيارة الطبيب', 'is_correct' => false],
                            ['choice_text' => 'لرؤية صديقتها', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "لشراء الخبز" تذكر سبب الذهاب إلى السوق.',
                    ],
                    [
                        'question' => 'اقرأ: "فتح عمر النافذة لأن الغرفة كانت حارة." لماذا فتح النافذة؟',
                        'choices' => [
                            ['choice_text' => 'لأن الغرفة كانت حارة', 'is_correct' => true],
                            ['choice_text' => 'لأنه أراد النوم', 'is_correct' => false],
                            ['choice_text' => 'لأنه يبحث عن كتاب', 'is_correct' => false],
                            ['choice_text' => 'لأن الجو كان باردًا', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب مذكور بوضوح في نهاية الجملة: الغرفة كانت حارة.',
                    ],
                    [
                        'question' => 'أي جملة تقول إن الحدث يحدث الآن؟',
                        'choices' => [
                            ['choice_text' => 'أحمد يقرأ الآن.', 'is_correct' => true],
                            ['choice_text' => 'أحمد قرأ أمس.', 'is_correct' => false],
                            ['choice_text' => 'أحمد سيقرأ غدًا.', 'is_correct' => false],
                            ['choice_text' => 'أحمد قرأ الأسبوع الماضي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل المضارع مع كلمة "الآن" يدل على شيء يحدث في الوقت الحالي.',
                    ],
                    [
                        'question' => 'أين يذهب الطفل في الجملة: "يذهب الطفل إلى المدرسة كل صباح"؟',
                        'choices' => [
                            ['choice_text' => 'إلى المدرسة', 'is_correct' => true],
                            ['choice_text' => 'إلى المكتبة', 'is_correct' => false],
                            ['choice_text' => 'إلى المستشفى', 'is_correct' => false],
                            ['choice_text' => 'إلى السوق', 'is_correct' => false],
                        ],
                        'explanation' => 'الجار والمجرور "إلى المدرسة" يحدد وجهة الطفل.',
                    ],
                    [
                        'question' => 'اقرأ: "أحضر الأب تفاحة وابنه حمل الحقيبة." من حمل الحقيبة؟',
                        'choices' => [
                            ['choice_text' => 'الابن', 'is_correct' => true],
                            ['choice_text' => 'الأب', 'is_correct' => false],
                            ['choice_text' => 'الأم', 'is_correct' => false],
                            ['choice_text' => 'المعلم', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تنسب حمل الحقيبة إلى الابن.',
                    ],
                    [
                        'question' => 'اقرأ: "أنهى الطالب واجبه ثم خرج للعب." ماذا فعل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'أنهى واجبه', 'is_correct' => true],
                            ['choice_text' => 'خرج للعب', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى المدرسة', 'is_correct' => false],
                            ['choice_text' => 'نام', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ثم" توضّح أن إنهاء الواجب حدث قبل الخروج للعب.',
                    ],
                ],
            ],
            [
                'title' => 'Reading Signs and Everyday Instructions',
                'description' => 'Practice reading short signs, notices, labels, and simple instructions found in daily life.',
                'questions' => [
                    [
                        'question' => 'على باب غرفة كُتب: "ممنوع الدخول". ماذا تعني العبارة؟',
                        'choices' => [
                            ['choice_text' => 'لا يسمح بالدخول', 'is_correct' => true],
                            ['choice_text' => 'الدخول مجاني', 'is_correct' => false],
                            ['choice_text' => 'الباب مفتوح للجميع', 'is_correct' => false],
                            ['choice_text' => 'يجب تنظيف الغرفة', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "ممنوع الدخول" تعني أن الأشخاص لا ينبغي لهم الدخول.',
                    ],
                    [
                        'question' => 'في حافلة كُتب: "للسيدات فقط". لمن هذا المقعد أو المكان؟',
                        'choices' => [
                            ['choice_text' => 'للسيدات', 'is_correct' => true],
                            ['choice_text' => 'للأطفال فقط', 'is_correct' => false],
                            ['choice_text' => 'للسائق', 'is_correct' => false],
                            ['choice_text' => 'للجميع دون استثناء', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "فقط" تحصر المكان في الفئة المذكورة، وهي السيدات.',
                    ],
                    [
                        'question' => 'إذا قرأت لافتة "مخرج"، ماذا تبحث عنها؟',
                        'choices' => [
                            ['choice_text' => 'مكان الخروج', 'is_correct' => true],
                            ['choice_text' => 'مكان بيع الطعام', 'is_correct' => false],
                            ['choice_text' => 'مكان النوم', 'is_correct' => false],
                            ['choice_text' => 'مكان تسجيل الطلاب', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مخرج" تشير إلى الطريق أو المكان الذي يخرج منه الناس.',
                    ],
                    [
                        'question' => 'تعليمات تقول: "اغسل يديك قبل الأكل." ماذا يجب أن تفعل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'تغسل يديك', 'is_correct' => true],
                            ['choice_text' => 'تأكل مباشرة', 'is_correct' => false],
                            ['choice_text' => 'تنظف الطاولة فقط', 'is_correct' => false],
                            ['choice_text' => 'تشرب الماء', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة "قبل" تخبرنا أن غسل اليدين يسبق الأكل.',
                    ],
                    [
                        'question' => 'في متجر كُتبت عبارة "مفتوح حتى الساعة 8 مساءً". ماذا تعني؟',
                        'choices' => [
                            ['choice_text' => 'يمكن للمتجر أن يستقبل الزبائن حتى الثامنة مساءً', 'is_correct' => true],
                            ['choice_text' => 'المتجر يغلق عند الظهر', 'is_correct' => false],
                            ['choice_text' => 'المتجر يفتح الساعة الثامنة صباحًا فقط', 'is_correct' => false],
                            ['choice_text' => 'المتجر مغلق طوال اليوم', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تحدد أن وقت الإغلاق هو الساعة الثامنة مساءً.',
                    ],
                    [
                        'question' => 'على علبة دواء كُتب: "يحفظ بعيدًا عن الأطفال". ما النصيحة هنا؟',
                        'choices' => [
                            ['choice_text' => 'وضع الدواء في مكان لا يصل إليه الأطفال', 'is_correct' => true],
                            ['choice_text' => 'إعطاء الدواء للأطفال دون سؤال', 'is_correct' => false],
                            ['choice_text' => 'ترك الدواء على الأرض', 'is_correct' => false],
                            ['choice_text' => 'فتح العلبة دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تحذر من وصول الأطفال إلى الدواء، لذلك يجب وضعه في مكان آمن.',
                    ],
                    [
                        'question' => 'في المدرسة لافتة: "الرجاء الهدوء". ماذا يُطلب من الطلاب؟',
                        'choices' => [
                            ['choice_text' => 'خفض أصواتهم', 'is_correct' => true],
                            ['choice_text' => 'الجري في الممر', 'is_correct' => false],
                            ['choice_text' => 'فتح النوافذ كلها', 'is_correct' => false],
                            ['choice_text' => 'الخروج من المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "الهدوء" تعني تقليل الضوضاء والأصوات المرتفعة.',
                    ],
                    [
                        'question' => 'وجد أحمد ورقة مكتوبًا عليها: "من فضلك اكتب اسمك هنا." أين يكتب؟',
                        'choices' => [
                            ['choice_text' => 'في المكان المشار إليه في الورقة', 'is_correct' => true],
                            ['choice_text' => 'على الباب', 'is_correct' => false],
                            ['choice_text' => 'على الكتاب', 'is_correct' => false],
                            ['choice_text' => 'في الشارع', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "هنا" تشير إلى المكان المحدد في الورقة التي أمامه.',
                    ],
                    [
                        'question' => 'ماذا تتوقع أن تجد في مكان كُتب عليه "المكتبة"؟',
                        'choices' => [
                            ['choice_text' => 'كتبًا ومواد للقراءة', 'is_correct' => true],
                            ['choice_text' => 'سيارات للإيجار', 'is_correct' => false],
                            ['choice_text' => 'أطعمة ساخنة فقط', 'is_correct' => false],
                            ['choice_text' => 'ملابس رياضية فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'المكتبة مكان ترتبط وظيفته بالكتب والقراءة.',
                    ],
                    [
                        'question' => 'تعليمات تقول: "انتظر دورك ثم ادخل." أي ترتيب صحيح؟',
                        'choices' => [
                            ['choice_text' => 'الانتظار ثم الدخول', 'is_correct' => true],
                            ['choice_text' => 'الدخول ثم الانتظار', 'is_correct' => false],
                            ['choice_text' => 'المغادرة ثم الانتظار', 'is_correct' => false],
                            ['choice_text' => 'الركض ثم الدخول', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ثم" توضّح أن الانتظار يأتي أولًا، وبعده الدخول.',
                    ],
                ],
            ],
            [
                'title' => 'Reading Short Dialogues',
                'description' => 'Read simple conversations and identify speakers, requests, answers, and everyday intentions.',
                'questions' => [
                    [
                        'question' => 'قالت سارة: "أين حقيبتي؟" أجاب أخوها: "إنها بجانب الباب." أين الحقيبة؟',
                        'choices' => [
                            ['choice_text' => 'بجانب الباب', 'is_correct' => true],
                            ['choice_text' => 'تحت السرير', 'is_correct' => false],
                            ['choice_text' => 'في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'على الطاولة', 'is_correct' => false],
                        ],
                        'explanation' => 'الأخ أجاب بمكان واضح: الحقيبة بجانب الباب.',
                    ],
                    [
                        'question' => 'قال البائع: "ماذا تريد؟" فقال علي: "أريد خبزًا، من فضلك." ماذا يريد علي؟',
                        'choices' => [
                            ['choice_text' => 'خبزًا', 'is_correct' => true],
                            ['choice_text' => 'حليبًا', 'is_correct' => false],
                            ['choice_text' => 'كتابًا', 'is_correct' => false],
                            ['choice_text' => 'دواءً', 'is_correct' => false],
                        ],
                        'explanation' => 'علي قال مباشرة إنه يريد خبزًا.',
                    ],
                    [
                        'question' => 'قالت المعلمة: "هل أنهيتم الواجب؟" أجاب الطلاب: "نعم." ماذا نفهم؟',
                        'choices' => [
                            ['choice_text' => 'أنهم أنهوا الواجب', 'is_correct' => true],
                            ['choice_text' => 'أنهم لم يبدأوا الدرس', 'is_correct' => false],
                            ['choice_text' => 'أنهم غادروا المدرسة', 'is_correct' => false],
                            ['choice_text' => 'أنهم نسوا الكتب', 'is_correct' => false],
                        ],
                        'explanation' => 'الإجابة "نعم" تؤكد أنهم أنهوا الواجب.',
                    ],
                    [
                        'question' => 'قال سامي: "سأزور جدتي غدًا." متى سيزور سامي جدته؟',
                        'choices' => [
                            ['choice_text' => 'غدًا', 'is_correct' => true],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                            ['choice_text' => 'الآن', 'is_correct' => false],
                            ['choice_text' => 'في الأسبوع الماضي', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "غدًا" تدل على اليوم الذي يلي اليوم الحالي.',
                    ],
                    [
                        'question' => 'سأل الطبيب: "أين تشعر بالألم؟" قال المريض: "في رأسي." أين الألم؟',
                        'choices' => [
                            ['choice_text' => 'في الرأس', 'is_correct' => true],
                            ['choice_text' => 'في اليد', 'is_correct' => false],
                            ['choice_text' => 'في القدم', 'is_correct' => false],
                            ['choice_text' => 'في الظهر', 'is_correct' => false],
                        ],
                        'explanation' => 'المريض حدد مكان الألم بوضوح: الرأس.',
                    ],
                    [
                        'question' => 'قالت الأم: "الجو بارد، خذ معطفك." ماذا تريد الأم من ابنها؟',
                        'choices' => [
                            ['choice_text' => 'أن يأخذ معطفه', 'is_correct' => true],
                            ['choice_text' => 'أن يفتح النافذة', 'is_correct' => false],
                            ['choice_text' => 'أن يذهب إلى البحر', 'is_correct' => false],
                            ['choice_text' => 'أن يخلع حذاءه', 'is_correct' => false],
                        ],
                        'explanation' => 'الأمر المباشر في الحوار هو أخذ المعطف بسبب برودة الجو.',
                    ],
                    [
                        'question' => 'قال الموظف: "هل لديك موعد؟" أجابت هناء: "نعم، الساعة العاشرة." ما المعلومة الجديدة؟',
                        'choices' => [
                            ['choice_text' => 'لديها موعد في العاشرة', 'is_correct' => true],
                            ['choice_text' => 'ليس لديها موعد', 'is_correct' => false],
                            ['choice_text' => 'موعدها في الظهر', 'is_correct' => false],
                            ['choice_text' => 'هي تعمل في المكان', 'is_correct' => false],
                        ],
                        'explanation' => 'إجابة هناء تحدد وجود موعد في الساعة العاشرة.',
                    ],
                    [
                        'question' => 'قال الأب: "من أخذ مفاتيح السيارة؟" قال الابن: "أنا أخذتها." من أخذ المفاتيح؟',
                        'choices' => [
                            ['choice_text' => 'الابن', 'is_correct' => true],
                            ['choice_text' => 'الأب', 'is_correct' => false],
                            ['choice_text' => 'الأخت', 'is_correct' => false],
                            ['choice_text' => 'الجار', 'is_correct' => false],
                        ],
                        'explanation' => 'الابن قال "أنا أخذتها"، ولذلك هو الشخص الذي أخذ المفاتيح.',
                    ],
                    [
                        'question' => 'قالت ليلى لصديقتها: "سأرسل لك الرسالة مساءً." ماذا ستفعل ليلى؟',
                        'choices' => [
                            ['choice_text' => 'سترسل رسالة', 'is_correct' => true],
                            ['choice_text' => 'ستشتري رسالة', 'is_correct' => false],
                            ['choice_text' => 'ستقرأ كتابًا فقط', 'is_correct' => false],
                            ['choice_text' => 'ستزور المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "سأرسل" يدل على أنها ستبعث رسالة في وقت لاحق.',
                    ],
                    [
                        'question' => 'سأل أحمد: "هل الحافلة وصلت؟" أجاب السائق: "ليس بعد." ماذا نفهم؟',
                        'choices' => [
                            ['choice_text' => 'الحافلة لم تصل حتى الآن', 'is_correct' => true],
                            ['choice_text' => 'الحافلة وصلت منذ ساعة', 'is_correct' => false],
                            ['choice_text' => 'الحافلة أُلغيت بالتأكيد', 'is_correct' => false],
                            ['choice_text' => 'السائق غادر المكان', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "ليس بعد" تعني أن الحدث لم يحدث إلى هذه اللحظة.',
                    ],
                ],
            ],
            [
                'title' => 'Finding Details in Short Texts',
                'description' => 'Read short passages and locate names, numbers, places, times, and small but important details.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "يعيش نادر في مدينة صغيرة مع والديه وأخته مريم." مع من يعيش نادر؟',
                        'choices' => [
                            ['choice_text' => 'مع والديه وأخته مريم', 'is_correct' => true],
                            ['choice_text' => 'مع صديقه فقط', 'is_correct' => false],
                            ['choice_text' => 'مع معلمه', 'is_correct' => false],
                            ['choice_text' => 'وحده', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر والديه وأخته مريم بوصفهم أفراد أسرته الذين يعيش معهم.',
                    ],
                    [
                        'question' => 'اقرأ: "تبدأ الحصة الساعة التاسعة وتنتهي الساعة العاشرة." متى تنتهي الحصة؟',
                        'choices' => [
                            ['choice_text' => 'الساعة العاشرة', 'is_correct' => true],
                            ['choice_text' => 'الساعة الثامنة', 'is_correct' => false],
                            ['choice_text' => 'الساعة التاسعة', 'is_correct' => false],
                            ['choice_text' => 'الساعة الحادية عشرة', 'is_correct' => false],
                        ],
                        'explanation' => 'وقت النهاية مذكور صراحة: الساعة العاشرة.',
                    ],
                    [
                        'question' => 'اقرأ: "اشترت هدى ثلاثة أقلام ودفترًا واحدًا." كم قلمًا اشترت هدى؟',
                        'choices' => [
                            ['choice_text' => 'ثلاثة أقلام', 'is_correct' => true],
                            ['choice_text' => 'قلمان', 'is_correct' => false],
                            ['choice_text' => 'قلمًا واحدًا', 'is_correct' => false],
                            ['choice_text' => 'أربعة أقلام', 'is_correct' => false],
                        ],
                        'explanation' => 'العدد "ثلاثة" مرتبط بالأقلام، لذلك اشترت ثلاثة أقلام.',
                    ],
                    [
                        'question' => 'اقرأ: "ذهب يوسف إلى الحديقة يوم الجمعة." إلى أين ذهب يوسف؟',
                        'choices' => [
                            ['choice_text' => 'إلى الحديقة', 'is_correct' => true],
                            ['choice_text' => 'إلى السوق', 'is_correct' => false],
                            ['choice_text' => 'إلى المدرسة', 'is_correct' => false],
                            ['choice_text' => 'إلى المستشفى', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر وجهته مباشرة: الحديقة.',
                    ],
                    [
                        'question' => 'اقرأ: "تضع ريم مفاتيحها عادة في درج صغير قرب الباب." أين تضع ريم مفاتيحها؟',
                        'choices' => [
                            ['choice_text' => 'في درج صغير قرب الباب', 'is_correct' => true],
                            ['choice_text' => 'في حقيبتها دائمًا', 'is_correct' => false],
                            ['choice_text' => 'تحت السرير', 'is_correct' => false],
                            ['choice_text' => 'في المطبخ', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه هي العادة المذكورة في الجملة نفسها.',
                    ],
                    [
                        'question' => 'اقرأ: "كان الطريق هادئًا صباحًا، لكنه أصبح مزدحمًا بعد الظهر." متى أصبح الطريق مزدحمًا؟',
                        'choices' => [
                            ['choice_text' => 'بعد الظهر', 'is_correct' => true],
                            ['choice_text' => 'قبل الفجر', 'is_correct' => false],
                            ['choice_text' => 'ليلًا', 'is_correct' => false],
                            ['choice_text' => 'في الصباح', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يقارن بين الصباح وبعد الظهر، ويذكر أن الازدحام ظهر بعد الظهر.',
                    ],
                    [
                        'question' => 'اقرأ: "يحب فادي الشاي، لكن أخته تفضل العصير." ماذا تفضل أخته؟',
                        'choices' => [
                            ['choice_text' => 'العصير', 'is_correct' => true],
                            ['choice_text' => 'الشاي', 'is_correct' => false],
                            ['choice_text' => 'القهوة', 'is_correct' => false],
                            ['choice_text' => 'الحليب', 'is_correct' => false],
                        ],
                        'explanation' => 'أخته تفضل العصير بحسب الجملة.',
                    ],
                    [
                        'question' => 'اقرأ: "وضعت المعلمة الكتب على الرف العلوي، والدفاتر على الرف السفلي." أين الدفاتر؟',
                        'choices' => [
                            ['choice_text' => 'على الرف السفلي', 'is_correct' => true],
                            ['choice_text' => 'على الرف العلوي', 'is_correct' => false],
                            ['choice_text' => 'في الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'على المكتب', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد مكان الدفاتر بأنه الرف السفلي.',
                    ],
                    [
                        'question' => 'اقرأ: "زار كريم المتحف يوم السبت مع صديقه عمر." من رافق كريم؟',
                        'choices' => [
                            ['choice_text' => 'عمر', 'is_correct' => true],
                            ['choice_text' => 'أخوه', 'is_correct' => false],
                            ['choice_text' => 'والده', 'is_correct' => false],
                            ['choice_text' => 'معلمه', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تقول إن كريم ذهب مع صديقه عمر.',
                    ],
                    [
                        'question' => 'اقرأ: "تحتاج النبتة إلى الماء، لذلك سقتها أميرة قبل أن تخرج." ماذا فعلت أميرة؟',
                        'choices' => [
                            ['choice_text' => 'سقت النبتة', 'is_correct' => true],
                            ['choice_text' => 'قلعت النبتة', 'is_correct' => false],
                            ['choice_text' => 'وضعتها في الشمس فقط', 'is_correct' => false],
                            ['choice_text' => 'باعت النبتة', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "سقتها" يعود على النبتة ويعني أنها أعطتها الماء.',
                    ],
                ],
            ],
            [
                'title' => 'Sequence and Simple Inference While Reading',
                'description' => 'Go beyond finding one word: follow the order of events, connect reasons with results, and make simple conclusions from short passages.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "استيقظت هبة، غسلت وجهها، تناولت الفطور، ثم خرجت إلى المدرسة." ماذا فعلت هبة قبل الخروج إلى المدرسة مباشرة؟',
                        'choices' => [
                            ['choice_text' => 'تناولت الفطور', 'is_correct' => true],
                            ['choice_text' => 'غسلت وجهها', 'is_correct' => false],
                            ['choice_text' => 'استيقظت', 'is_correct' => false],
                            ['choice_text' => 'نامت', 'is_correct' => false],
                        ],
                        'explanation' => 'تناول الفطور جاء بعد غسل الوجه مباشرة وقبل الخروج إلى المدرسة.',
                    ],
                    [
                        'question' => 'اقرأ: "نسي مازن مظلته، وعندما خرج بدأ المطر." ما المشكلة التي واجهها مازن؟',
                        'choices' => [
                            ['choice_text' => 'خرج من دون مظلة أثناء المطر', 'is_correct' => true],
                            ['choice_text' => 'نسي حقيبته في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'وصل إلى المنزل متأخرًا بسبب الحافلة', 'is_correct' => false],
                            ['choice_text' => 'لم يجد المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة الواضحة هي أنه خرج من دون مظلة ثم بدأ المطر.',
                    ],
                    [
                        'question' => 'اقرأ: "كانت سعاد جائعة. فتحت الثلاجة ووجدت تفاحة، فأكلتها." لماذا أكلت سعاد التفاحة؟',
                        'choices' => [
                            ['choice_text' => 'لأنها كانت جائعة', 'is_correct' => true],
                            ['choice_text' => 'لأن التفاحة كانت حمراء فقط', 'is_correct' => false],
                            ['choice_text' => 'لأنها ذاهبة إلى المدرسة', 'is_correct' => false],
                            ['choice_text' => 'لأن الثلاجة كانت فارغة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجوع هو السبب الذي دفع سعاد إلى البحث عن الطعام ثم أكل التفاحة.',
                    ],
                    [
                        'question' => 'اقرأ: "درس خالد جيدًا قبل الاختبار، وفي اليوم التالي أجاب عن الأسئلة بثقة." ما العلاقة بين الحدثين؟',
                        'choices' => [
                            ['choice_text' => 'الدراسة ساعدته على الاستعداد للاختبار', 'is_correct' => true],
                            ['choice_text' => 'الدراسة منعته من دخول الاختبار', 'is_correct' => false],
                            ['choice_text' => 'الاختبار حدث قبل الدراسة', 'is_correct' => false],
                            ['choice_text' => 'لا توجد علاقة بينهما', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يربط بين المذاكرة الجيدة والاستعداد الأفضل للإجابة في الاختبار.',
                    ],
                    [
                        'question' => 'اقرأ: "وصلت الحافلة متأخرة عشر دقائق، لذلك انتظر الركاب طويلًا." ماذا حدث أولًا؟',
                        'choices' => [
                            ['choice_text' => 'تأخرت الحافلة', 'is_correct' => true],
                            ['choice_text' => 'غادر الركاب', 'is_correct' => false],
                            ['choice_text' => 'بدأت الرحلة', 'is_correct' => false],
                            ['choice_text' => 'وصل الركاب إلى منازلهم', 'is_correct' => false],
                        ],
                        'explanation' => 'تأخر الحافلة هو الحدث الذي سبب طول الانتظار.',
                    ],
                    [
                        'question' => 'اقرأ: "أغلق يوسف النافذة لأن الرياح كانت قوية." ماذا يمكن أن نستنتج؟',
                        'choices' => [
                            ['choice_text' => 'كان يوسف يحاول منع دخول الهواء القوي', 'is_correct' => true],
                            ['choice_text' => 'كان يريد زيادة صوت الرياح', 'is_correct' => false],
                            ['choice_text' => 'كان الجو شديد الحرارة بسبب الشمس', 'is_correct' => false],
                            ['choice_text' => 'كان يبحث عن مفتاح الباب', 'is_correct' => false],
                        ],
                        'explanation' => 'إغلاق النافذة مع وجود رياح قوية يدل على محاولة تقليل دخول الهواء.',
                    ],
                    [
                        'question' => 'اقرأ: "وضعت نور الكتب في الحقيبة، ثم ارتدت معطفها، ثم خرجت." ما آخر حدث؟',
                        'choices' => [
                            ['choice_text' => 'خرجت', 'is_correct' => true],
                            ['choice_text' => 'وضعت الكتب في الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'ارتدت المعطف', 'is_correct' => false],
                            ['choice_text' => 'جلست للقراءة', 'is_correct' => false],
                        ],
                        'explanation' => 'النص ينتهي بالفعل "خرجت"، فهو آخر حدث في التسلسل.',
                    ],
                    [
                        'question' => 'اقرأ: "رأى سامر الضوء في غرفة أخيه، فطرق الباب قبل أن يدخل." ماذا نفهم؟',
                        'choices' => [
                            ['choice_text' => 'كان أخوه على الأرجح في الغرفة', 'is_correct' => true],
                            ['choice_text' => 'الغرفة كانت خالية بالتأكيد', 'is_correct' => false],
                            ['choice_text' => 'سامر كان في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'الباب كان مكسورًا', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود الضوء دفع سامر إلى الاعتقاد بأن أحدًا في الغرفة، لذلك طرق الباب.',
                    ],
                    [
                        'question' => 'اقرأ: "لم يجد الطالب قلمه، فاستعار قلمًا من زميله." ماذا حدث بسبب فقدان القلم؟',
                        'choices' => [
                            ['choice_text' => 'استعار قلمًا من زميله', 'is_correct' => true],
                            ['choice_text' => 'غادر المدرسة', 'is_correct' => false],
                            ['choice_text' => 'كتب من دون قلم', 'is_correct' => false],
                            ['choice_text' => 'اشترى حقيبة جديدة', 'is_correct' => false],
                        ],
                        'explanation' => 'فقدان القلم أدى إلى حل بسيط: استعارة قلم من زميله.',
                    ],
                    [
                        'question' => 'اقرأ: "أرادت منى قراءة الكتاب في الليل، لكن الإضاءة كانت ضعيفة، فشغلت المصباح." لماذا شغلت المصباح؟',
                        'choices' => [
                            ['choice_text' => 'لتتمكن من القراءة بوضوح', 'is_correct' => true],
                            ['choice_text' => 'لأنها أرادت النوم', 'is_correct' => false],
                            ['choice_text' => 'لأن الكتاب كان مبللًا', 'is_correct' => false],
                            ['choice_text' => 'لأن الغرفة كانت فارغة', 'is_correct' => false],
                        ],
                        'explanation' => 'الإضاءة الضعيفة كانت المشكلة، والمصباح حلّها وساعد على القراءة.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Beginner Arabic Reading',
                'description' => 'Combine word recognition, sentence reading, detail finding, sequence, and simple inference in one final beginner review.',
                'questions' => [
                    [
                        'question' => 'اقرأ: "في صباح الجمعة، ذهب ياسر مع أخته إلى السوق. اشترى خبزًا وحليبًا، ثم عادا إلى المنزل." متى ذهب ياسر إلى السوق؟',
                        'choices' => [
                            ['choice_text' => 'في صباح الجمعة', 'is_correct' => true],
                            ['choice_text' => 'في مساء السبت', 'is_correct' => false],
                            ['choice_text' => 'يوم الأحد', 'is_correct' => false],
                            ['choice_text' => 'بعد منتصف الليل', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد الوقت بعبارة "في صباح الجمعة".',
                    ],
                    [
                        'question' => 'أي كلمة في الجملة "قرأت سارة قصة قصيرة قبل النوم" تدل على فعل القراءة؟',
                        'choices' => [
                            ['choice_text' => 'قرأت', 'is_correct' => true],
                            ['choice_text' => 'سارة', 'is_correct' => false],
                            ['choice_text' => 'قصة', 'is_correct' => false],
                            ['choice_text' => 'النوم', 'is_correct' => false],
                        ],
                        'explanation' => '"قرأت" هو الفعل الذي يعبّر عن القراءة.',
                    ],
                    [
                        'question' => 'اقرأ: "وضع الطفل الحذاء قرب الباب قبل الخروج." أين وضع الحذاء؟',
                        'choices' => [
                            ['choice_text' => 'قرب الباب', 'is_correct' => true],
                            ['choice_text' => 'في الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'على السرير', 'is_correct' => false],
                            ['choice_text' => 'تحت الطاولة', 'is_correct' => false],
                        ],
                        'explanation' => 'المكان مذكور صراحة: قرب الباب.',
                    ],
                    [
                        'question' => 'قال الأب: "أحضر لي كتابك من الغرفة." ماذا طُلب من الطفل؟',
                        'choices' => [
                            ['choice_text' => 'إحضار الكتاب', 'is_correct' => true],
                            ['choice_text' => 'إغلاق النافذة', 'is_correct' => false],
                            ['choice_text' => 'تنظيف الغرفة', 'is_correct' => false],
                            ['choice_text' => 'إحضار الماء', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "أحضر" يوضح المطلوب: جلب الكتاب من الغرفة.',
                    ],
                    [
                        'question' => 'اقرأ: "كان الطريق مزدحمًا، لذلك وصل فؤاد متأخرًا إلى العمل." ما سبب التأخر؟',
                        'choices' => [
                            ['choice_text' => 'ازدحام الطريق', 'is_correct' => true],
                            ['choice_text' => 'نسيان الهاتف', 'is_correct' => false],
                            ['choice_text' => 'المطر الخفيف', 'is_correct' => false],
                            ['choice_text' => 'طول وقت الغداء', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يستخدم "لذلك" لربط ازدحام الطريق بالتأخر.',
                    ],
                    [
                        'question' => 'أي جملة تدل على المستقبل؟',
                        'choices' => [
                            ['choice_text' => 'سأزور صديقي غدًا.', 'is_correct' => true],
                            ['choice_text' => 'زرت صديقي أمس.', 'is_correct' => false],
                            ['choice_text' => 'أزور صديقي الآن.', 'is_correct' => false],
                            ['choice_text' => 'أزور صديقي كل يوم.', 'is_correct' => false],
                        ],
                        'explanation' => '"سأزور" و"غدًا" يدلان بوضوح على حدث مستقبلي.',
                    ],
                    [
                        'question' => 'اقرأ: "اشترت هناء ثلاث تفاحات، ثم أعطت واحدة لأختها." كم تفاحة بقيت معها؟',
                        'choices' => [
                            ['choice_text' => 'تفاحتان', 'is_correct' => true],
                            ['choice_text' => 'ثلاث تفاحات', 'is_correct' => false],
                            ['choice_text' => 'تفاحة واحدة', 'is_correct' => false],
                            ['choice_text' => 'أربع تفاحات', 'is_correct' => false],
                        ],
                        'explanation' => 'كان معها ثلاث تفاحات، وأعطت واحدة، فبقيت تفاحتان.',
                    ],
                    [
                        'question' => 'اقرأ: "نظر كريم إلى السماء، فرأى غيومًا داكنة. أخذ مظلته قبل أن يخرج." لماذا أخذ مظلته؟',
                        'choices' => [
                            ['choice_text' => 'لأنه توقع احتمال المطر', 'is_correct' => true],
                            ['choice_text' => 'لأنه أراد شراء طعام', 'is_correct' => false],
                            ['choice_text' => 'لأن الحقيبة كانت ثقيلة', 'is_correct' => false],
                            ['choice_text' => 'لأنه كان ذاهبًا للنوم', 'is_correct' => false],
                        ],
                        'explanation' => 'الغيوم الداكنة قد تشير إلى المطر، ولذلك أخذ كريم مظلته احتياطًا.',
                    ],
                    [
                        'question' => 'أي ترتيب يطابق النص: "غسل علي يديه، تناول الطعام، ثم شرب الماء"؟',
                        'choices' => [
                            ['choice_text' => 'غسل يديه ← تناول الطعام ← شرب الماء', 'is_correct' => true],
                            ['choice_text' => 'شرب الماء ← غسل يديه ← تناول الطعام', 'is_correct' => false],
                            ['choice_text' => 'تناول الطعام ← غسل يديه ← شرب الماء', 'is_correct' => false],
                            ['choice_text' => 'غسل يديه ← شرب الماء ← تناول الطعام', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يقدم الأحداث بهذا الترتيب نفسه، وكلمة "ثم" توضح التسلسل.',
                    ],
                    [
                        'question' => 'اقرأ: "تحب ريم القراءة، وتزور المكتبة كل أسبوع، وتستعير كتابًا جديدًا." ما أفضل استنتاج؟',
                        'choices' => [
                            ['choice_text' => 'القراءة جزء منتظم من اهتمامات ريم', 'is_correct' => true],
                            ['choice_text' => 'ريم لا تحب الكتب', 'is_correct' => false],
                            ['choice_text' => 'ريم تزور المكتبة مرة واحدة فقط', 'is_correct' => false],
                            ['choice_text' => 'ريم تعمل في المكتبة', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار زيارة المكتبة كل أسبوع واستعارة الكتب يشير إلى أن القراءة عادة واهتمام منتظم لديها.',
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
