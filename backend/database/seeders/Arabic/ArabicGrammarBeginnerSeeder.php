<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-grammar')->firstOrFail();

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
                'title' => 'Nouns, Verbs, and Particles',
                'description' => 'Identify the three basic word types in Arabic and use them naturally in short sentences.',
                'questions' => [
                    [
                        'question' => 'في الجملة "ذهبَ عليٌّ إلى المدرسةِ"، أي كلمة هي الفعل؟',
                        'choices' => [
                            ['choice_text' => 'عليٌّ', 'is_correct' => false],
                            ['choice_text' => 'ذهبَ', 'is_correct' => true],
                            ['choice_text' => 'المدرسةِ', 'is_correct' => false],
                            ['choice_text' => 'إلى', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ذهبَ" تدل على حدث وقع، لذلك فهي فعل ماضٍ.'
                    ],
                    [
                        'question' => 'أي كلمة من الآتي اسم؟',
                        'choices' => [
                            ['choice_text' => 'يكتبُ', 'is_correct' => false],
                            ['choice_text' => 'من', 'is_correct' => false],
                            ['choice_text' => 'نافذةٌ', 'is_correct' => true],
                            ['choice_text' => 'اكتبْ', 'is_correct' => false],
                        ],
                        'explanation' => '"نافذةٌ" اسم لشيء، بينما "يكتبُ" و"اكتبْ" فعلان، و"من" حرف جر.'
                    ],
                    [
                        'question' => 'ما نوع كلمة "في" في الجملة: "الكتابُ في الحقيبةِ"؟',
                        'choices' => [
                            ['choice_text' => 'اسم', 'is_correct' => false],
                            ['choice_text' => 'فعل', 'is_correct' => false],
                            ['choice_text' => 'حرف جر', 'is_correct' => true],
                            ['choice_text' => 'صفة', 'is_correct' => false],
                        ],
                        'explanation' => '"في" حرف جر، ويدل هنا على مكان وجود الكتاب.'
                    ],
                    [
                        'question' => 'أي جملة تبدأ بفعل؟',
                        'choices' => [
                            ['choice_text' => 'الطفلُ ينامُ مبكرًا.', 'is_correct' => false],
                            ['choice_text' => 'في البيتِ طفلٌ.', 'is_correct' => false],
                            ['choice_text' => 'يقرأُ سامرٌ القصةَ.', 'is_correct' => true],
                            ['choice_text' => 'الحديقةُ واسعةٌ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الثالثة تبدأ بالفعل "يقرأُ"، ولذلك فهي جملة فعلية.'
                    ],
                    [
                        'question' => 'اختر الكلمة التي يمكن أن تسبق "البيت" للدلالة على المكان: "أعودُ ___ البيتِ".',
                        'choices' => [
                            ['choice_text' => 'إلى', 'is_correct' => true],
                            ['choice_text' => 'هو', 'is_correct' => false],
                            ['choice_text' => 'كتب', 'is_correct' => false],
                            ['choice_text' => 'جميل', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "أعودُ" يحتاج هنا إلى حرف الجر "إلى" للدلالة على الجهة أو المكان المقصود.'
                    ],
                    [
                        'question' => 'في الجملة "البنتُ تضحكُ"، ما الكلمة التي تدل على صاحب الفعل؟',
                        'choices' => [
                            ['choice_text' => 'تضحكُ', 'is_correct' => false],
                            ['choice_text' => 'البنتُ', 'is_correct' => true],
                            ['choice_text' => 'لا توجد كلمة', 'is_correct' => false],
                            ['choice_text' => 'ُ فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"البنتُ" هي التي تقوم بالفعل، ولذلك فهي الفاعل في الجملة.'
                    ],
                    [
                        'question' => 'أي اختيار يكوّن جملة مفيدة من الكلمات: "الولد / في / الحديقة / يلعب"؟',
                        'choices' => [
                            ['choice_text' => 'الولد في الحديقة يلعب.', 'is_correct' => true],
                            ['choice_text' => 'في الولد يلعب الحديقة.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة الولد في يلعب.', 'is_correct' => false],
                            ['choice_text' => 'يلعب في الحديقة الولد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مرتبة بشكل طبيعي وتوصل المعنى بوضوح: الولد يلعب في الحديقة.'
                    ],
                    [
                        'question' => 'أي كلمة في الجملة "هذا كتابٌ جديدٌ" تصف الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'هذا', 'is_correct' => false],
                            ['choice_text' => 'كتابٌ', 'is_correct' => false],
                            ['choice_text' => 'جديدٌ', 'is_correct' => true],
                            ['choice_text' => 'لا توجد صفة', 'is_correct' => false],
                        ],
                        'explanation' => '"جديدٌ" تصف الكتاب وتبيّن حالته، لذلك فهي صفة.'
                    ],
                    [
                        'question' => 'في العبارة "على الطاولةِ"، ما إعراب "الطاولة" من حيث العلامة الأساسية للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'مجرورة', 'is_correct' => true],
                            ['choice_text' => 'منصوبة', 'is_correct' => false],
                            ['choice_text' => 'مرفوعة', 'is_correct' => false],
                            ['choice_text' => 'فعل', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم الذي يأتي بعد حرف الجر "على" يكون مجرورًا، لذلك نقول: الطاولةِ.'
                    ],
                    [
                        'question' => 'أي عبارة تحتوي على اسم وفعل وحرف؟',
                        'choices' => [
                            ['choice_text' => 'الولدُ يذهبُ إلى المدرسةِ.', 'is_correct' => true],
                            ['choice_text' => 'الولدُ والمدرسةُ.', 'is_correct' => false],
                            ['choice_text' => 'يكتبُ ويقرأُ.', 'is_correct' => false],
                            ['choice_text' => 'في البيتِ.', 'is_correct' => false],
                        ],
                        'explanation' => 'في الجملة الأولى نجد الاسم "الولد"، والفعل "يذهب"، وحرف الجر "إلى".'
                    ],
                ],
            ],

            [
                'title' => 'Gender and Number in Arabic',
                'description' => 'Practice masculine and feminine forms, singular and plural nouns, and matching words correctly.',
                'questions' => [
                    [
                        'question' => 'أي كلمة مؤنثة؟',
                        'choices' => [
                            ['choice_text' => 'ولد', 'is_correct' => false],
                            ['choice_text' => 'طالبة', 'is_correct' => true],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'قلم', 'is_correct' => false],
                        ],
                        'explanation' => '"طالبة" اسم مؤنث، وتظهر علامة التأنيث في التاء المربوطة.'
                    ],
                    [
                        'question' => 'ما المثنى المناسب لكلمة "معلم"؟',
                        'choices' => [
                            ['choice_text' => 'معلمون', 'is_correct' => false],
                            ['choice_text' => 'معلمين', 'is_correct' => false],
                            ['choice_text' => 'معلمان', 'is_correct' => true],
                            ['choice_text' => 'معلمات', 'is_correct' => false],
                        ],
                        'explanation' => 'عند رفع المثنى المذكر نقول "معلمان"، أي معلم واحد صار اثنين.'
                    ],
                    [
                        'question' => 'اختر الجمع الصحيح لكلمة "بنت".',
                        'choices' => [
                            ['choice_text' => 'بنات', 'is_correct' => true],
                            ['choice_text' => 'بنون', 'is_correct' => false],
                            ['choice_text' => 'بنتان', 'is_correct' => false],
                            ['choice_text' => 'بنوت', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمع الشائع لكلمة "بنت" هو "بنات".'
                    ],
                    [
                        'question' => 'أي جملة فيها مطابقة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'ولدٌ مجتهدةٌ.', 'is_correct' => false],
                            ['choice_text' => 'بنتٌ مجتهدةٌ.', 'is_correct' => true],
                            ['choice_text' => 'طالباتٌ مجتهدٌ.', 'is_correct' => false],
                            ['choice_text' => 'معلمانِ مجتهدةٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"بنت" مؤنث مفرد، لذلك جاءت الصفة "مجتهدة" مؤنثة مفردة أيضًا.'
                    ],
                    [
                        'question' => 'أكمل: "الطلابُ ___ في الفصل."',
                        'choices' => [
                            ['choice_text' => 'مجتهدات', 'is_correct' => false],
                            ['choice_text' => 'مجتهد', 'is_correct' => false],
                            ['choice_text' => 'مجتهدون', 'is_correct' => true],
                            ['choice_text' => 'مجتهدان', 'is_correct' => false],
                        ],
                        'explanation' => '"الطلاب" جمع مذكر، والصفة المناسبة له هنا هي "مجتهدون".'
                    ],
                    [
                        'question' => 'أي كلمة تدل على اثنين؟',
                        'choices' => [
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'كتابان', 'is_correct' => true],
                            ['choice_text' => 'كتب', 'is_correct' => false],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                        ],
                        'explanation' => '"كتابان" تدل على اثنين، وهي صيغة المثنى.'
                    ],
                    [
                        'question' => 'سارة وأختها طالبتان. أي ضمير يناسبهما؟',
                        'choices' => [
                            ['choice_text' => 'هما', 'is_correct' => true],
                            ['choice_text' => 'هم', 'is_correct' => false],
                            ['choice_text' => 'هنّ', 'is_correct' => false],
                            ['choice_text' => 'هي', 'is_correct' => false],
                        ],
                        'explanation' => 'عندما نتحدث عن اثنتين نستخدم الضمير "هما".'
                    ],
                    [
                        'question' => 'اختر الكلمة المناسبة: "هذانِ ___ جديدانِ."',
                        'choices' => [
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'كتابان', 'is_correct' => true],
                            ['choice_text' => 'كتب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                        ],
                        'explanation' => 'الإشارة "هذان" للمثنى المذكر، لذلك يناسبها الاسم "كتابان".'
                    ],
                    [
                        'question' => 'أي صيغة صحيحة عند الحديث عن ثلاث معلمات؟',
                        'choices' => [
                            ['choice_text' => 'ثلاث معلمون', 'is_correct' => false],
                            ['choice_text' => 'ثلاثة معلمات', 'is_correct' => false],
                            ['choice_text' => 'ثلاث معلمات', 'is_correct' => true],
                            ['choice_text' => 'ثلاثان معلمات', 'is_correct' => false],
                        ],
                        'explanation' => 'مع كلمة "معلمات" المؤنثة نستخدم هنا العدد "ثلاث" في هذا التركيب.'
                    ],
                    [
                        'question' => 'أكمل الجملة: "الطالبتانِ ___ الدرسَ."',
                        'choices' => [
                            ['choice_text' => 'يكتبون', 'is_correct' => false],
                            ['choice_text' => 'تكتبان', 'is_correct' => true],
                            ['choice_text' => 'تكتبن', 'is_correct' => false],
                            ['choice_text' => 'يكتبان', 'is_correct' => false],
                        ],
                        'explanation' => 'الطالبتان مثنى مؤنث، لذلك نقول: "تكتبان".'
                    ],
                ],
            ],

            [
                'title' => 'Pronouns and Demonstratives',
                'description' => 'Use personal pronouns and common demonstratives such as هذا، هذه، هؤلاء، and ذلك in simple contexts.',
                'questions' => [
                    [
                        'question' => 'أي ضمير يناسب الجملة: "___ أتعلم العربية كل يوم."؟',
                        'choices' => [
                            ['choice_text' => 'أنا', 'is_correct' => true],
                            ['choice_text' => 'هو', 'is_correct' => false],
                            ['choice_text' => 'هم', 'is_correct' => false],
                            ['choice_text' => 'هي', 'is_correct' => false],
                        ],
                        'explanation' => 'المتكلم عن نفسه يستخدم الضمير "أنا".'
                    ],
                    [
                        'question' => 'أكمل: "مريم طالبة. ___ مجتهدة."',
                        'choices' => [
                            ['choice_text' => 'هو', 'is_correct' => false],
                            ['choice_text' => 'هي', 'is_correct' => true],
                            ['choice_text' => 'هم', 'is_correct' => false],
                            ['choice_text' => 'نحن', 'is_correct' => false],
                        ],
                        'explanation' => 'مريم مفرد مؤنث، ولذلك نستخدم الضمير "هي".'
                    ],
                    [
                        'question' => 'أنت وأخوك طالبان. ما الضمير المناسب؟',
                        'choices' => [
                            ['choice_text' => 'أنتم', 'is_correct' => false],
                            ['choice_text' => 'أنتما', 'is_correct' => true],
                            ['choice_text' => 'هما', 'is_correct' => false],
                            ['choice_text' => 'نحن', 'is_correct' => false],
                        ],
                        'explanation' => 'عند مخاطبة اثنين نستخدم "أنتما".'
                    ],
                    [
                        'question' => 'أي جملة تستخدم "هذه" استعمالًا صحيحًا؟',
                        'choices' => [
                            ['choice_text' => 'هذه كتابٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذه سيارةٌ.', 'is_correct' => true],
                            ['choice_text' => 'هذه قلمٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذه ولدٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"هذه" اسم إشارة للمفرد المؤنث، و"سيارة" اسم مؤنث.'
                    ],
                    [
                        'question' => 'أي اختيار مناسب: "___ رجلٌ عند الباب."',
                        'choices' => [
                            ['choice_text' => 'هذه', 'is_correct' => false],
                            ['choice_text' => 'هؤلاء', 'is_correct' => false],
                            ['choice_text' => 'هذا', 'is_correct' => true],
                            ['choice_text' => 'هتان', 'is_correct' => false],
                        ],
                        'explanation' => '"رجل" مفرد مذكر قريب، لذلك نستخدم اسم الإشارة "هذا".'
                    ],
                    [
                        'question' => 'أين يناسب اسم الإشارة "هؤلاء"؟',
                        'choices' => [
                            ['choice_text' => 'مع طالب واحد', 'is_correct' => false],
                            ['choice_text' => 'مع امرأة واحدة', 'is_correct' => false],
                            ['choice_text' => 'مع مجموعة من الأشخاص', 'is_correct' => true],
                            ['choice_text' => 'مع شيء واحد بعيد', 'is_correct' => false],
                        ],
                        'explanation' => '"هؤلاء" تُستخدم للإشارة إلى جمع من الأشخاص القريبين.'
                    ],
                    [
                        'question' => 'أكمل: "الطلاب في الفصل. ___ يستمعون إلى المعلم."',
                        'choices' => [
                            ['choice_text' => 'هي', 'is_correct' => false],
                            ['choice_text' => 'هم', 'is_correct' => true],
                            ['choice_text' => 'أنت', 'is_correct' => false],
                            ['choice_text' => 'هو', 'is_correct' => false],
                        ],
                        'explanation' => '"الطلاب" جمع مذكر، والضمير العائد عليهم هو "هم".'
                    ],
                    [
                        'question' => 'إذا كان الشيء بعيدًا ومفردًا مذكرًا، فأي اسم إشارة أنسب؟',
                        'choices' => [
                            ['choice_text' => 'هذا', 'is_correct' => false],
                            ['choice_text' => 'هذه', 'is_correct' => false],
                            ['choice_text' => 'ذلك', 'is_correct' => true],
                            ['choice_text' => 'هؤلاء', 'is_correct' => false],
                        ],
                        'explanation' => '"ذلك" تستخدم للإشارة إلى المفرد المذكر البعيد.'
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'هذانِ بنتانِ.', 'is_correct' => false],
                            ['choice_text' => 'هاتانِ بنتانِ.', 'is_correct' => true],
                            ['choice_text' => 'هؤلاء بنتٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذا بنتٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"هاتان" للمثنى المؤنث، لذلك تناسب "بنتان".'
                    ],
                    [
                        'question' => 'قالت المعلمة: "أنا أشرح الدرس، وأنتم تستمعون." من الذي يستمع؟',
                        'choices' => [
                            ['choice_text' => 'المعلمة فقط', 'is_correct' => false],
                            ['choice_text' => 'الطلاب المخاطبون', 'is_correct' => true],
                            ['choice_text' => 'شخص بعيد', 'is_correct' => false],
                            ['choice_text' => 'لا أحد', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمير "أنتم" يشير إلى المخاطبين الذين يستمعون إلى المعلمة.'
                    ],
                ],
            ],

            [
                'title' => 'Nominal Sentences and Adjectives',
                'description' => 'Build simple nominal sentences and match nouns with suitable adjectives in gender and number.',
                'questions' => [
                    [
                        'question' => 'ما المبتدأ في الجملة "السماءُ صافيةٌ"؟',
                        'choices' => [
                            ['choice_text' => 'السماءُ', 'is_correct' => true],
                            ['choice_text' => 'صافيةٌ', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد مبتدأ', 'is_correct' => false],
                            ['choice_text' => 'السماء صافية معًا', 'is_correct' => false],
                        ],
                        'explanation' => 'المبتدأ هو الاسم الذي تبدأ به الجملة الاسمية هنا، وهو "السماءُ".'
                    ],
                    [
                        'question' => 'في "البيتُ كبيرٌ"، ما الخبر؟',
                        'choices' => [
                            ['choice_text' => 'البيتُ', 'is_correct' => false],
                            ['choice_text' => 'كبيرٌ', 'is_correct' => true],
                            ['choice_text' => 'البيتُ كبيرٌ', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد خبر', 'is_correct' => false],
                        ],
                        'explanation' => '"كبيرٌ" تخبرنا عن البيت وتصفه، ولذلك فهي الخبر.'
                    ],
                    [
                        'question' => 'اختر الصفة الصحيحة: "حديقةٌ ___".',
                        'choices' => [
                            ['choice_text' => 'جميلٌ', 'is_correct' => false],
                            ['choice_text' => 'جميلةٌ', 'is_correct' => true],
                            ['choice_text' => 'جميلانِ', 'is_correct' => false],
                            ['choice_text' => 'جميلاتٌ', 'is_correct' => false],
                        ],
                        'explanation' => '"حديقة" اسم مؤنث مفرد، لذلك تناسبه الصفة "جميلةٌ".'
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'الكتابُ مفيدةٌ.', 'is_correct' => false],
                            ['choice_text' => 'الكتابُ مفيدٌ.', 'is_correct' => true],
                            ['choice_text' => 'الكتابُ مفيدانِ.', 'is_correct' => false],
                            ['choice_text' => 'الكتابُ مفيداتٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"الكتاب" اسم مذكر مفرد، لذلك يكون الوصف المناسب "مفيدٌ".'
                    ],
                    [
                        'question' => 'أكمل: "المعلمتانِ ___ في المدرسة."',
                        'choices' => [
                            ['choice_text' => 'نشطٌ', 'is_correct' => false],
                            ['choice_text' => 'نشطتانِ', 'is_correct' => true],
                            ['choice_text' => 'نشاط', 'is_correct' => false],
                            ['choice_text' => 'نشطون', 'is_correct' => false],
                        ],
                        'explanation' => '"المعلمتان" مثنى مؤنث، لذلك تناسبهما الصفة "نشطتانِ".'
                    ],
                    [
                        'question' => 'أي جملة تحتوي على خبر شبه جملة؟',
                        'choices' => [
                            ['choice_text' => 'الكتابُ مفيدٌ.', 'is_correct' => false],
                            ['choice_text' => 'الكتابُ على الطاولةِ.', 'is_correct' => true],
                            ['choice_text' => 'يقرأُ الطالبُ.', 'is_correct' => false],
                            ['choice_text' => 'كتبَ الطالبُ.', 'is_correct' => false],
                        ],
                        'explanation' => 'في "الكتاب على الطاولة" جاءت عبارة الجر والمجرور "على الطاولة" في محل خبر.'
                    ],
                    [
                        'question' => 'ما الأنسب لإكمال: "الوردةُ ___"؟',
                        'choices' => [
                            ['choice_text' => 'حمراءُ', 'is_correct' => true],
                            ['choice_text' => 'أحمرُ', 'is_correct' => false],
                            ['choice_text' => 'حمرانِ', 'is_correct' => false],
                            ['choice_text' => 'حمرٌ', 'is_correct' => false],
                        ],
                        'explanation' => '"الوردة" مؤنثة مفردة، لذلك نقول "حمراء".'
                    ],
                    [
                        'question' => 'في الجملة "هذه شجرةٌ طويلةٌ"، أي اختيار يمثل جملة كاملة وليس كلمة واحدة؟',
                        'choices' => [
                            ['choice_text' => 'هذه', 'is_correct' => false],
                            ['choice_text' => 'شجرةٌ', 'is_correct' => false],
                            ['choice_text' => 'طويلةٌ', 'is_correct' => false],
                            ['choice_text' => 'هذه شجرةٌ طويلةٌ', 'is_correct' => true],
                        ],
                        'explanation' => 'الاختيار الأخير جملة كاملة وليس كلمة واحدة، لذلك لا يمكن تصنيفه كاسم مفرد.'
                    ],
                    [
                        'question' => 'إذا قلت "الطالبانِ مجتهدانِ"، ماذا تصف كلمة "مجتهدانِ"؟',
                        'choices' => [
                            ['choice_text' => 'فعلًا', 'is_correct' => false],
                            ['choice_text' => 'صفة وخبرًا للطالبين', 'is_correct' => true],
                            ['choice_text' => 'حرف جر', 'is_correct' => false],
                            ['choice_text' => 'اسم إشارة', 'is_correct' => false],
                        ],
                        'explanation' => '"مجتهدانِ" تخبر عن الطالبين وتصفهما، فهي خبر، وهي أيضًا صفة من حيث المعنى.'
                    ],
                    [
                        'question' => 'أي جملة تحافظ على المطابقة الصحيحة بين الاسم والصفة؟',
                        'choices' => [
                            ['choice_text' => 'شوارعُ واسعٌ.', 'is_correct' => false],
                            ['choice_text' => 'شوارعُ واسعانِ.', 'is_correct' => false],
                            ['choice_text' => 'شوارعُ واسعةٌ.', 'is_correct' => true],
                            ['choice_text' => 'شوارعُ واسعتانِ.', 'is_correct' => false],
                        ],
                        'explanation' => 'في هذا المستوى نتعامل مع "شوارع" على أنها جمع غير عاقل، ولذلك تأتي صفتها مفردًا مؤنثًا: "واسعة".'
                    ],
                ],
            ],

            [
                'title' => 'Verbal Sentences and Subject-Verb Agreement',
                'description' => 'Practice recognizing the subject and choosing verb forms that fit simple Arabic sentences.',
                'questions' => [
                    [
                        'question' => 'أي جملة فعلية صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'كتبَ الطالبُ الواجبَ.', 'is_correct' => true],
                            ['choice_text' => 'كتبَ الطالباتُ الواجبَ.', 'is_correct' => false],
                            ['choice_text' => 'كتبتَ الطالبُ الواجبَ.', 'is_correct' => false],
                            ['choice_text' => 'يكتبُ أمسِ الطالبُ.', 'is_correct' => false],
                        ],
                        'explanation' => 'في الجملة الأولى الفعل الماضي "كتب" يناسب الفاعل "الطالب"، والجملة كاملة المعنى.'
                    ],
                    [
                        'question' => 'أكمل: "تذهبُ ___ إلى الجامعةِ."',
                        'choices' => [
                            ['choice_text' => 'الطالبُ', 'is_correct' => false],
                            ['choice_text' => 'الطالبةُ', 'is_correct' => true],
                            ['choice_text' => 'الطلابُ', 'is_correct' => false],
                            ['choice_text' => 'الطالبانِ', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "تذهب" هنا يناسب فاعلًا مؤنثًا مفردًا مثل "الطالبة".'
                    ],
                    [
                        'question' => 'في الجملة "قرأَ محمدٌ القصةَ"، من الذي قام بالقراءة؟',
                        'choices' => [
                            ['choice_text' => 'القصة', 'is_correct' => false],
                            ['choice_text' => 'محمد', 'is_correct' => true],
                            ['choice_text' => 'لا نعرف', 'is_correct' => false],
                            ['choice_text' => 'القراءة', 'is_correct' => false],
                        ],
                        'explanation' => 'محمد هو الذي قام بالفعل "قرأ"، ولذلك فهو الفاعل.'
                    ],
                    [
                        'question' => 'أي فعل يناسب "البنتانِ"؟',
                        'choices' => [
                            ['choice_text' => 'تقرأانِ', 'is_correct' => true],
                            ['choice_text' => 'يقرآنِ', 'is_correct' => false],
                            ['choice_text' => 'يقرؤون', 'is_correct' => false],
                            ['choice_text' => 'تقرأنَ', 'is_correct' => false],
                        ],
                        'explanation' => '"البنتان" مثنى مؤنث، لذلك الفعل المضارع المناسب هو "تقرآن".'
                    ],
                    [
                        'question' => 'في الجملة "شربَ الطفلُ الحليبَ"، ما المفعول به؟',
                        'choices' => [
                            ['choice_text' => 'شربَ', 'is_correct' => false],
                            ['choice_text' => 'الطفلُ', 'is_correct' => false],
                            ['choice_text' => 'الحليبَ', 'is_correct' => true],
                            ['choice_text' => 'لا يوجد', 'is_correct' => false],
                        ],
                        'explanation' => '"الحليب" هو الشيء الذي وقع عليه فعل الشرب، لذلك فهو المفعول به.'
                    ],
                    [
                        'question' => 'حوّل "الولدُ يكتبُ الرسالةَ" إلى المثنى المذكر.',
                        'choices' => [
                            ['choice_text' => 'الولدانِ يكتبانِ الرسالةَ.', 'is_correct' => true],
                            ['choice_text' => 'الولدونَ يكتبونَ الرسالةَ.', 'is_correct' => false],
                            ['choice_text' => 'الولدانِ يكتبنَ الرسالةَ.', 'is_correct' => false],
                            ['choice_text' => 'الولدَينِ يكتبُ الرسالةَ.', 'is_correct' => false],
                        ],
                        'explanation' => 'عند التحويل إلى المثنى المذكر يصبح الاسم "الولدان" والفعل "يكتبان".'
                    ],
                    [
                        'question' => 'أي جملة تستخدم الفعل الماضي مع جمع المؤنث؟',
                        'choices' => [
                            ['choice_text' => 'الطالباتُ كتبنَ الدرسَ.', 'is_correct' => true],
                            ['choice_text' => 'الطالباتُ كتبوا الدرسَ.', 'is_correct' => false],
                            ['choice_text' => 'الطالباتُ كتبَ الدرسَ.', 'is_correct' => false],
                            ['choice_text' => 'الطالباتُ كتبتانِ الدرسَ.', 'is_correct' => false],
                        ],
                        'explanation' => 'مع جمع المؤنث نستخدم في الماضي صيغة "كتبنَ".'
                    ],
                    [
                        'question' => 'ما الفعل المناسب: "أنتِ ___ العربية جيدًا."',
                        'choices' => [
                            ['choice_text' => 'تتكلمين', 'is_correct' => true],
                            ['choice_text' => 'يتكلم', 'is_correct' => false],
                            ['choice_text' => 'تتكلمان', 'is_correct' => false],
                            ['choice_text' => 'أتكلم', 'is_correct' => false],
                        ],
                        'explanation' => 'مع "أنتِ" المفردة المؤنثة نقول "تتكلمين".'
                    ],
                    [
                        'question' => 'إذا كان الفاعل "المعلمون"، فأي فعل مضارع يناسبه؟',
                        'choices' => [
                            ['choice_text' => 'يشرحون', 'is_correct' => true],
                            ['choice_text' => 'تشرح', 'is_correct' => false],
                            ['choice_text' => 'يشرحان', 'is_correct' => false],
                            ['choice_text' => 'أشرح', 'is_correct' => false],
                        ],
                        'explanation' => '"المعلمون" جمع مذكر، وصيغة الفعل المناسبة هي "يشرحون".'
                    ],
                    [
                        'question' => 'قالت المعلمة: "تفتحُ الطالباتُ كتبَهنَّ." لماذا جاء الفعل "تفتحُ" بصيغة المفرد؟',
                        'choices' => [
                            ['choice_text' => 'لأن الجملة لا تحتوي على فاعل', 'is_correct' => false],
                            ['choice_text' => 'لأن الفاعل جاء بعد الفعل في هذه الجملة', 'is_correct' => true],
                            ['choice_text' => 'لأن الطالبات مفرد', 'is_correct' => false],
                            ['choice_text' => 'لأن الفعل للماضي', 'is_correct' => false],
                        ],
                        'explanation' => 'في هذا التركيب الفعل جاء أولًا ثم ظهر الفاعل "الطالبات"، وهي صيغة شائعة في الجملة الفعلية.'
                    ],
                ],
            ],

            [
                'title' => 'Definite, Indefinite, and Prepositional Phrases',
                'description' => 'Work with ال التعريف, tanween, prepositions, and simple noun phrases used in everyday Arabic.',
                'questions' => [
                    [
                        'question' => 'أي كلمة معرفة بـ "ال"؟',
                        'choices' => [
                            ['choice_text' => 'كتابٌ', 'is_correct' => false],
                            ['choice_text' => 'الكتابُ', 'is_correct' => true],
                            ['choice_text' => 'كتابًا', 'is_correct' => false],
                            ['choice_text' => 'كتابٍ', 'is_correct' => false],
                        ],
                        'explanation' => 'إضافة "ال" إلى بداية الاسم تجعله معرفة: "الكتاب".'
                    ],
                    [
                        'question' => 'أي كلمة نكرة؟',
                        'choices' => [
                            ['choice_text' => 'البيت', 'is_correct' => false],
                            ['choice_text' => 'هذا البيت', 'is_correct' => false],
                            ['choice_text' => 'بيتٌ', 'is_correct' => true],
                            ['choice_text' => 'بيتُ أحمد', 'is_correct' => false],
                        ],
                        'explanation' => '"بيتٌ" نكرة لأنه لا يحتوي على "ال" وليس مضافًا إلى اسم معرفة.'
                    ],
                    [
                        'question' => 'ما علامة الجر في كلمة "المدرسةِ" بعد "في"؟',
                        'choices' => [
                            ['choice_text' => 'الضمة', 'is_correct' => false],
                            ['choice_text' => 'الفتحة', 'is_correct' => false],
                            ['choice_text' => 'الكسرة', 'is_correct' => true],
                            ['choice_text' => 'السكون', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم المفرد المجرور تكون علامته الأساسية الكسرة، فنقول: في المدرسةِ.'
                    ],
                    [
                        'question' => 'اختر حرف الجر المناسب: "ذهبتُ ___ الطبيبِ."',
                        'choices' => [
                            ['choice_text' => 'إلى', 'is_correct' => true],
                            ['choice_text' => 'هو', 'is_correct' => false],
                            ['choice_text' => 'سوف', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                        ],
                        'explanation' => 'نستخدم "إلى" للدلالة على الاتجاه نحو الطبيب.'
                    ],
                    [
                        'question' => 'أي تركيب صحيح؟',
                        'choices' => [
                            ['choice_text' => 'كتابُ الطالبِ', 'is_correct' => true],
                            ['choice_text' => 'الكتابُ طالبٍ', 'is_correct' => false],
                            ['choice_text' => 'كتابٌ الطالبِ', 'is_correct' => false],
                            ['choice_text' => 'كتابَ الطالبُ', 'is_correct' => false],
                        ],
                        'explanation' => 'في الإضافة نقول "كتابُ الطالبِ"؛ المضاف لا يأخذ التنوين، والمضاف إليه يكون مجرورًا.'
                    ],
                    [
                        'question' => 'في عبارة "بابُ البيتِ"، ما الكلمة المضاف إليها؟',
                        'choices' => [
                            ['choice_text' => 'بابُ', 'is_correct' => false],
                            ['choice_text' => 'البيتِ', 'is_correct' => true],
                            ['choice_text' => 'بابُ البيتِ معًا', 'is_correct' => false],
                            ['choice_text' => 'لا توجد إضافة', 'is_correct' => false],
                        ],
                        'explanation' => 'في الإضافة يكون الاسم الثاني هو المضاف إليه، وهنا هو "البيتِ".'
                    ],
                    [
                        'question' => 'أي جملة صحيحة بعد حرف الجر "من"؟',
                        'choices' => [
                            ['choice_text' => 'جئتُ من المدرسةِ.', 'is_correct' => true],
                            ['choice_text' => 'جئتُ من المدرسةُ.', 'is_correct' => false],
                            ['choice_text' => 'جئتُ من المدرسةَ.', 'is_correct' => false],
                            ['choice_text' => 'جئتُ من المدرسةانِ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم بعد "من" مجرور، لذلك نقول "من المدرسةِ".'
                    ],
                    [
                        'question' => 'ما الفرق البسيط بين "كتابٌ" و"الكتابُ"؟',
                        'choices' => [
                            ['choice_text' => 'الأول نكرة والثاني معرفة', 'is_correct' => true],
                            ['choice_text' => 'الأول فعل والثاني اسم', 'is_correct' => false],
                            ['choice_text' => 'الأول جمع والثاني مثنى', 'is_correct' => false],
                            ['choice_text' => 'لا فرق بينهما', 'is_correct' => false],
                        ],
                        'explanation' => '"كتابٌ" غير محدد، بينما "الكتابُ" اسم محدد بـ"ال".'
                    ],
                    [
                        'question' => 'أكمل: "جلستُ ___ الكرسيِ."',
                        'choices' => [
                            ['choice_text' => 'على', 'is_correct' => true],
                            ['choice_text' => 'هو', 'is_correct' => false],
                            ['choice_text' => 'أن', 'is_correct' => false],
                            ['choice_text' => 'سوف', 'is_correct' => false],
                        ],
                        'explanation' => 'حرف الجر المناسب للدلالة على مكان الجلوس هنا هو "على".'
                    ],
                    [
                        'question' => 'أي عبارة فيها إضافة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'مفتاحُ السيارةِ', 'is_correct' => true],
                            ['choice_text' => 'مفتاحٌ السيارةِ', 'is_correct' => false],
                            ['choice_text' => 'المفتاحُ سيارةٍ', 'is_correct' => false],
                            ['choice_text' => 'مفتاحَ السيارةُ', 'is_correct' => false],
                        ],
                        'explanation' => '"مفتاح" مضاف و"السيارة" مضاف إليه مجرور، لذلك يكون التركيب "مفتاحُ السيارةِ".'
                    ],
                ],
            ],

            [
                'title' => 'Questions, Negation, and Commands',
                'description' => 'Use common question words, simple negation, and basic imperative forms in short practical sentences.',
                'questions' => [
                    [
                        'question' => 'أي كلمة نستخدمها للسؤال عن المكان؟',
                        'choices' => [
                            ['choice_text' => 'متى', 'is_correct' => false],
                            ['choice_text' => 'أين', 'is_correct' => true],
                            ['choice_text' => 'من', 'is_correct' => false],
                            ['choice_text' => 'كم', 'is_correct' => false],
                        ],
                        'explanation' => '"أين" تُستخدم عندما نريد معرفة المكان.'
                    ],
                    [
                        'question' => 'اختر أداة السؤال المناسبة: "___ تسكن؟"',
                        'choices' => [
                            ['choice_text' => 'أين', 'is_correct' => true],
                            ['choice_text' => 'لماذا', 'is_correct' => false],
                            ['choice_text' => 'متى', 'is_correct' => false],
                            ['choice_text' => 'كم', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن مكان السكن، لذلك نستخدم "أين".'
                    ],
                    [
                        'question' => 'أي جملة سؤال صحيح؟',
                        'choices' => [
                            ['choice_text' => 'هل تحب القراءة؟', 'is_correct' => true],
                            ['choice_text' => 'هل القراءة يحب؟', 'is_correct' => false],
                            ['choice_text' => 'تحب هل القراءة.', 'is_correct' => false],
                            ['choice_text' => 'هل تحب إلى القراءة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تبدأ بأداة الاستفهام "هل" ثم تأتي الجملة بصورة سليمة.'
                    ],
                    [
                        'question' => 'كيف ننفي الجملة "هو يدرسُ" في المضارع بطريقة بسيطة؟',
                        'choices' => [
                            ['choice_text' => 'هو لا يدرسُ.', 'is_correct' => true],
                            ['choice_text' => 'هو ما يدرسَ.', 'is_correct' => false],
                            ['choice_text' => 'هو لن يدرسُ أمسِ.', 'is_correct' => false],
                            ['choice_text' => 'هو ليس يدرسُ.', 'is_correct' => false],
                        ],
                        'explanation' => 'مع الفعل المضارع في النفي البسيط نستخدم "لا": هو لا يدرس.'
                    ],
                    [
                        'question' => 'اختر النفي المناسب: "___ أحمدُ في البيتِ."',
                        'choices' => [
                            ['choice_text' => 'ليس', 'is_correct' => true],
                            ['choice_text' => 'أين', 'is_correct' => false],
                            ['choice_text' => 'هل', 'is_correct' => false],
                            ['choice_text' => 'من', 'is_correct' => false],
                        ],
                        'explanation' => 'في الجملة الاسمية البسيطة "أحمد في البيت" يمكن نفيها بـ"ليس": أحمد ليس في البيت.'
                    ],
                    [
                        'question' => 'أي صيغة أمر تناسب مخاطبة شخص واحد؟',
                        'choices' => [
                            ['choice_text' => 'اكتبْ الدرسَ.', 'is_correct' => true],
                            ['choice_text' => 'يكتبُ الدرسَ.', 'is_correct' => false],
                            ['choice_text' => 'كتبَ الدرسَ.', 'is_correct' => false],
                            ['choice_text' => 'أكتبُ الدرسَ.', 'is_correct' => false],
                        ],
                        'explanation' => '"اكتب" فعل أمر يُستخدم لطلب القيام بالفعل من المخاطب.'
                    ],
                    [
                        'question' => 'ماذا تسأل عنه كلمة "متى"؟',
                        'choices' => [
                            ['choice_text' => 'المكان', 'is_correct' => false],
                            ['choice_text' => 'الشخص', 'is_correct' => false],
                            ['choice_text' => 'الزمان', 'is_correct' => true],
                            ['choice_text' => 'العدد', 'is_correct' => false],
                        ],
                        'explanation' => '"متى" تُستخدم للسؤال عن وقت وقوع الشيء.'
                    ],
                    [
                        'question' => 'أكمل السؤال: "___ كتابًا قرأتَ؟"',
                        'choices' => [
                            ['choice_text' => 'كم', 'is_correct' => true],
                            ['choice_text' => 'أين', 'is_correct' => false],
                            ['choice_text' => 'من', 'is_correct' => false],
                            ['choice_text' => 'كيف', 'is_correct' => false],
                        ],
                        'explanation' => '"كم" تسأل عن العدد، لذلك تناسب السؤال عن عدد الكتب.'
                    ],
                    [
                        'question' => 'أي سؤال يسأل عن السبب؟',
                        'choices' => [
                            ['choice_text' => 'أين ذهبت؟', 'is_correct' => false],
                            ['choice_text' => 'متى وصلت؟', 'is_correct' => false],
                            ['choice_text' => 'لماذا تأخرت؟', 'is_correct' => true],
                            ['choice_text' => 'كم كتابًا لديك؟', 'is_correct' => false],
                        ],
                        'explanation' => '"لماذا" تستخدم لطلب السبب، وهنا تسأل عن سبب التأخر.'
                    ],
                    [
                        'question' => 'قال المعلم للطلاب: "لا تتحدثوا أثناء الدرس." ماذا يفعل المعلم هنا؟',
                        'choices' => [
                            ['choice_text' => 'يسأل عن المكان', 'is_correct' => false],
                            ['choice_text' => 'ينفي وقوع الكلام في الماضي', 'is_correct' => false],
                            ['choice_text' => 'يطلب منهم عدم القيام بالفعل', 'is_correct' => true],
                            ['choice_text' => 'يصف الطلاب فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"لا تتحدثوا" هنا نهي؛ أي طلب من الطلاب ألا يتحدثوا أثناء الدرس.'
                    ],
                ],
            ],

            [
                'title' => 'Integrated Arabic Grammar Practice',
                'description' => 'Bring together beginner grammar skills through short realistic sentences, corrections, and simple context-based choices.',
                'questions' => [
                    [
                        'question' => 'اختر الجملة السليمة: ',
                        'choices' => [
                            ['choice_text' => 'هذه ولدٌ صغيرٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذا ولدٌ صغيرٌ.', 'is_correct' => true],
                            ['choice_text' => 'هذا بنتٌ صغيرٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذه ولدٌ صغيرةٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"ولد" مذكر مفرد، لذلك نستخدم "هذا" ونسند إليه الصفة المذكرة "صغير".'
                    ],
                    [
                        'question' => 'أي جملة تحتوي على اسم مجرور بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'ذهبتُ إلى المدرسةُ.', 'is_correct' => false],
                            ['choice_text' => 'ذهبتُ إلى المدرسةَ.', 'is_correct' => false],
                            ['choice_text' => 'ذهبتُ إلى المدرسةِ.', 'is_correct' => true],
                            ['choice_text' => 'ذهبتُ إلى المدرسةٌ.', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد حرف الجر "إلى" يكون الاسم مجرورًا، لذلك نقول "المدرسةِ".'
                    ],
                    [
                        'question' => 'قالت نور: "أنا أحب القهوة، لكن أخي يحب الشاي." كم شخصًا تتحدث عنه الجملة؟',
                        'choices' => [
                            ['choice_text' => 'شخص واحد', 'is_correct' => false],
                            ['choice_text' => 'شخصان', 'is_correct' => true],
                            ['choice_text' => 'ثلاثة أشخاص', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن معرفة ذلك', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تتحدث عن نور وأخيها، أي شخصين.'
                    ],
                    [
                        'question' => 'أكمل: "المهندساتُ ___ المشروعَ."',
                        'choices' => [
                            ['choice_text' => 'يعملنَ على', 'is_correct' => true],
                            ['choice_text' => 'يعملونَ على', 'is_correct' => false],
                            ['choice_text' => 'يعملانِ على', 'is_correct' => false],
                            ['choice_text' => 'أعملُ على', 'is_correct' => false],
                        ],
                        'explanation' => '"المهندسات" جمع مؤنث، لذلك يناسبه الفعل "يعملن".'
                    ],
                    [
                        'question' => 'أي جملة فيها إضافة صحيحة ومعنى واضح؟',
                        'choices' => [
                            ['choice_text' => 'لونُ السيارةِ جميلٌ.', 'is_correct' => true],
                            ['choice_text' => 'لونٌ السيارةِ جميلٌ.', 'is_correct' => false],
                            ['choice_text' => 'لونُ السيارةُ جميلٌ.', 'is_correct' => false],
                            ['choice_text' => 'اللونُ سيارةِ جميلٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"لون" مضاف و"السيارة" مضاف إليه مجرور، ثم جاء الخبر "جميل".'
                    ],
                    [
                        'question' => 'إذا كان المطلوب السؤال عن سبب غياب الطالب، فما السؤال الأنسب؟',
                        'choices' => [
                            ['choice_text' => 'أين غاب الطالب؟', 'is_correct' => false],
                            ['choice_text' => 'متى غاب الطالب؟', 'is_correct' => false],
                            ['choice_text' => 'لماذا غاب الطالب؟', 'is_correct' => true],
                            ['choice_text' => 'كم غاب الطالب؟', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "لماذا" هي أداة السؤال عن السبب.'
                    ],
                    [
                        'question' => 'طالبة كتبت: "الولدُ مجتهدةٌ". ما التصحيح؟',
                        'choices' => [
                            ['choice_text' => 'الولدُ مجتهدٌ.', 'is_correct' => true],
                            ['choice_text' => 'الولدُ مجتهدتانِ.', 'is_correct' => false],
                            ['choice_text' => 'الولدُ مجتهداتٌ.', 'is_correct' => false],
                            ['choice_text' => 'الولدُ اجتهادٌ.', 'is_correct' => false],
                        ],
                        'explanation' => '"الولد" مذكر مفرد، ولذلك يجب أن تكون الصفة "مجتهد" مذكرًا مفردًا.'
                    ],
                    [
                        'question' => 'أي جملة تجمع فعلًا وفاعلًا ومفعولًا به؟',
                        'choices' => [
                            ['choice_text' => 'الكتابُ على الطاولةِ.', 'is_correct' => false],
                            ['choice_text' => 'قرأَ الطفلُ القصةَ.', 'is_correct' => true],
                            ['choice_text' => 'الحديقةُ جميلةٌ.', 'is_correct' => false],
                            ['choice_text' => 'في الفصلِ طلابٌ.', 'is_correct' => false],
                        ],
                        'explanation' => 'في "قرأ الطفل القصة" نجد الفعل "قرأ"، والفاعل "الطفل"، والمفعول به "القصة".'
                    ],
                    [
                        'question' => 'أي عبارة صحيحة للتحدث عن اثنتين من الطالبات؟',
                        'choices' => [
                            ['choice_text' => 'هاتانِ طالبتانِ مجتهدتانِ.', 'is_correct' => true],
                            ['choice_text' => 'هذانِ طالبتانِ مجتهدون.', 'is_correct' => false],
                            ['choice_text' => 'هؤلاء طالبتانِ مجتهدةٌ.', 'is_correct' => false],
                            ['choice_text' => 'هذا طالبتانِ مجتهدتانِ.', 'is_correct' => false],
                        ],
                        'explanation' => 'المشار إليهما مؤنثتان مثنى، لذلك نستخدم "هاتان" و"طالبتان" و"مجتهدتان".'
                    ],
                    [
                        'question' => 'في نهاية جملة: "هل وصلتَ إلى البيت___"، ما العلامة الأنسب؟',
                        'choices' => [
                            ['choice_text' => '؟', 'is_correct' => true],
                            ['choice_text' => '،', 'is_correct' => false],
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة سؤال، لذلك تنتهي بعلامة الاستفهام "؟".'
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
