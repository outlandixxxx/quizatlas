<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verbs-conjugation')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 15, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Present Tense: Everyday Actions',
                'description' => 'Practice common Arabic present-tense verbs and match simple actions with the right subject.',
                'questions' => [
                    [
                        'question' => 'أي فعل يدل على عمل يحدث الآن أو يتكرر عادة؟',
                        'choices' => [
                            [
                                'choice_text' => 'كتب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يكتب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كتبَ أمس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سيكتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل «يكتب» هو المضارع، ويستعمل لما يحدث الآن أو لما يتكرر عادة.',
                    ],
                    [
                        'question' => 'أكمل: «أنا ___ العربية كل صباح.»',
                        'choices' => [
                            [
                                'choice_text' => 'يدرس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أدرس',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تدرس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ندرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع الضمير «أنا» نقول «أدرس»، لأن الفعل يتكلم عن المتكلم المفرد.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            [
                                'choice_text' => 'هو يقرأ كتابًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو أقرأ كتابًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو نقرأ كتابًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يقرآن كتابًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الضمير «هو» يأخذ هنا صيغة المضارع «يقرأ».',
                    ],
                    [
                        'question' => 'سلمى ___ إلى الجامعة بالحافلة كل يوم.',
                        'choices' => [
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سلمى» مفرد مؤنث، ولذلك يناسبها الفعل «تذهب».',
                    ],
                    [
                        'question' => 'اختر الصيغة المناسبة: «نحن ___ في البيت مساءً.»',
                        'choices' => [
                            [
                                'choice_text' => 'أجلس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تجلس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يجلس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نجلس',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'مع «نحن» يكون الفعل «نجلس» في المضارع.',
                    ],
                    [
                        'question' => 'أي فعل يناسب «الطلاب»؟',
                        'choices' => [
                            [
                                'choice_text' => 'يقرأ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يقرؤون',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تقرأين',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أقرأ',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«الطلاب» جمع مذكر، والصيغة المناسبة هي «يقرؤون».',
                    ],
                    [
                        'question' => 'لاحظ الجملة: «مريم تكتب رسالة كل مساء». ماذا يخبرنا الفعل «تكتب»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أن مريم قامت بالكتابة أمس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن مريم تكتب عادة أو الآن',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أن مريم ستكتب فقط غدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن مريم لا تكتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المضارع «تكتب» يمكن أن يدل على فعل يحدث الآن أو يتكرر في الحاضر بحسب السياق.',
                    ],
                    [
                        'question' => 'قال أحمد: «أنا أعمل من الاثنين إلى الجمعة». ما الذي نفهمه؟',
                        'choices' => [
                            [
                                'choice_text' => 'العمل حدث مرة واحدة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'العمل عادة متكررة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'العمل سيبدأ بعد سنة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أحمد توقف عن العمل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'عبارة «من الاثنين إلى الجمعة» مع المضارع تدل على عادة أو نشاط متكرر.',
                    ],
                    [
                        'question' => 'أي جملة تحتاج إلى تغيير الفعل لأن الفاعل جمع مؤنث؟',
                        'choices' => [
                            [
                                'choice_text' => 'البنات يكتبن الواجب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الطالبات يقرأن النص.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'المعلمات يشرحن الدرس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الطالبات يقرأون النص.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'جمع المؤنث «الطالبات» يناسبه «يقرأن»، وليس «يقرأون» الذي يستعمل مع جمع المذكر.',
                    ],
                    [
                        'question' => 'اختر الجملة التي تستخدم المضارع بطريقة طبيعية لوصف روتين يومي.',
                        'choices' => [
                            [
                                'choice_text' => 'أستيقظ مبكرًا وأتناول الفطور.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'استيقظت غدًا وأتناول أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأستيقظ أمس وأتناول الفطور.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استيقظت الآن كل يوم.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة الأولى تجمع أفعالًا في المضارع لوصف روتين يتكرر يوميًا.',
                    ],
                ],
            ],
            [
                'title' => 'Past Tense: Talking About What Happened',
                'description' => 'Learn to recognize and use common Arabic past-tense forms in short everyday situations.',
                'questions' => [
                    [
                        'question' => 'أي فعل من الآتي في الماضي؟',
                        'choices' => [
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سيذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«ذهب» فعل ماضٍ؛ فهو يدل على حدث وقع وانتهى.',
                    ],
                    [
                        'question' => 'أكمل: «أنا ___ إلى السوق أمس.»',
                        'choices' => [
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبت',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'كلمة «أمس» تدل على الماضي، ومع «أنا» نقول «ذهبت».',
                    ],
                    [
                        'question' => 'أي جملة تتحدث عن حدث انتهى؟',
                        'choices' => [
                            [
                                'choice_text' => 'أقرأ الكتاب كل يوم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأقرأ الكتاب غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قرأت الكتاب أمس.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اقرأ الكتاب الآن.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«قرأت» مع «أمس» يوضح أن فعل القراءة وقع في الماضي وانتهى.',
                    ],
                    [
                        'question' => 'فاطمة ___ الطعام قبل أن تخرج.',
                        'choices' => [
                            [
                                'choice_text' => 'أكلت',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تأكل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تأكلين',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ستأكل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'لأن الحدث وقع قبل الخروج، والصيغة المطلوبة للمفرد المؤنث في الماضي هي «أكلت».',
                    ],
                    [
                        'question' => 'أي صيغة تناسب «نحن» في الماضي؟',
                        'choices' => [
                            [
                                'choice_text' => 'ذهبنا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ذهبوا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبتُ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبتما',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'ضمير «نحن» يقابله في الماضي «ذهبنا».',
                    ],
                    [
                        'question' => 'أي فعل يناسب «هم»؟',
                        'choices' => [
                            [
                                'choice_text' => 'قرأوا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'قرأتِ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قرأنا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قرأتما',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هم» جمع مذكر، وصيغة الماضي المناسبة هي «قرأوا».',
                    ],
                    [
                        'question' => 'قالت ليلى: «شربتُ الماء ثم خرجتُ». ماذا حدث أولًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'خرجت ليلى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شربت ليلى الماء',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'حدث الأمران في المستقبل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لم تشرب ليلى',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'النص يذكر شرب الماء أولًا ثم الخروج، لذلك كان الشرب هو الحدث الأول.',
                    ],
                    [
                        'question' => 'إذا قال خالد «زرتُ جدتي أمس»، فما الزمن المقصود؟',
                        'choices' => [
                            [
                                'choice_text' => 'الماضي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الحاضر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'المستقبل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأمر',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل «زرت» مع «أمس» يدل بوضوح على حدث وقع في الماضي.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة مع الضمير «هي» في الماضي؟',
                        'choices' => [
                            [
                                'choice_text' => 'هي ذهب إلى المدرسة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي ذهبت إلى المدرسة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هي ذهبنا إلى المدرسة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي ذهبوا إلى المدرسة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هي» مفرد مؤنث، وصيغة الماضي الصحيحة هي «ذهبت».',
                    ],
                    [
                        'question' => 'حوّل «هو يقرأ الكتاب» إلى الماضي.',
                        'choices' => [
                            [
                                'choice_text' => 'هو قرأ الكتاب.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو يقرأ الكتاب أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو سيقرأ الكتاب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو اقرأ الكتاب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'صيغة الماضي من «يقرأ» مع «هو» هي «قرأ».',
                    ],
                ],
            ],
            [
                'title' => 'Future Tense and Future Markers',
                'description' => 'Practice simple ways of talking about plans and events that have not happened yet.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تساعد على التعبير عن المستقبل؟',
                        'choices' => [
                            [
                                'choice_text' => 'أمس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'غدًا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الآن',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أمس الأول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«غدًا» تشير إلى وقت قادم، ولذلك ترتبط كثيرًا بأحداث المستقبل.',
                    ],
                    [
                        'question' => 'أكمل: «سوف ___ غدًا.»',
                        'choices' => [
                            [
                                'choice_text' => 'سافر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يسافر',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سافرت',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سافروا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'بعد «سوف» يأتي الفعل المضارع، لذلك نقول «سوف يسافر».',
                    ],
                    [
                        'question' => 'أي جملة تتحدث عن خطة قادمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'ذهبت إلى الطبيب أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أذهب إلى الطبيب الآن.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأذهب إلى الطبيب غدًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اذهب إلى الطبيب!',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سأذهب» و«غدًا» علامتان واضحتان على المستقبل.',
                    ],
                    [
                        'question' => 'قالت نورة: «سأدرس بعد العشاء». متى ستدرس؟',
                        'choices' => [
                            [
                                'choice_text' => 'قبل الفطور',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بعد العشاء',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أمس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'في وقت المدرسة أمس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة تحدد وقت الدراسة بعد العشاء مباشرة.',
                    ],
                    [
                        'question' => 'اختر الجملة الصحيحة.',
                        'choices' => [
                            [
                                'choice_text' => 'سوف أقرأ الكتاب الليلة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سوف قرأت الكتاب الليلة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف يقرأ أنا الكتاب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف اقرأت الكتاب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'بعد «سوف» نستخدم المضارع، ومع «أنا» تكون الصيغة «أقرأ».',
                    ],
                    [
                        'question' => 'ما الفرق البسيط بين «أدرس» و«سأدرس»؟',
                        'choices' => [
                            [
                                'choice_text' => 'لا يوجد أي فرق',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأولى للحاضر أو العادة والثانية للمستقبل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الأولى للماضي والثانية للحاضر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأولى أمر والثانية نهي',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أدرس» مضارع للحاضر أو العادة، بينما «سأدرس» تشير إلى فعل سيحدث لاحقًا.',
                    ],
                    [
                        'question' => 'يقول يوسف: «غدًا سنزور المتحف». ماذا نفهم من «سنزور»؟',
                        'choices' => [
                            [
                                'choice_text' => 'الزيارة حدثت أمس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الزيارة تحدث الآن',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الزيارة مخططة للمستقبل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الزيارة أمر موجّه لشخص واحد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السين في «سنزور» تجعل الفعل متجهًا إلى المستقبل.',
                    ],
                    [
                        'question' => 'أي جملة لا تنسجم مع كلمة «غدًا»؟',
                        'choices' => [
                            [
                                'choice_text' => 'سأسافر غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأبدأ الدرس غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبت إلى العمل غدًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سأزور صديقي غدًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«ذهبت» فعل ماضٍ، لذلك لا يناسب عادة كلمة «غدًا» التي تشير إلى المستقبل.',
                    ],
                    [
                        'question' => 'إذا كانت مريم تقول: «سوف أطبخ العشاء»، فما الفعل الأساسي الذي يدل على الطبخ؟',
                        'choices' => [
                            [
                                'choice_text' => 'أطبخ',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سوف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'العشاء',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أطبخ» هو الفعل، أما «سوف» فهي أداة تساعد على التعبير عن المستقبل.',
                    ],
                    [
                        'question' => 'اختر الجملة التي تجمع بين علامة مستقبل وصيغة فعل صحيحة.',
                        'choices' => [
                            [
                                'choice_text' => 'سأكتب الرسالة مساءً.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سأكتب الرسالة أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف كتبت الرسالة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سيكتب أنا الرسالة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سأكتب» صيغة صحيحة للمستقبل مع المتكلم، ويمكن أن تتبعها كلمة زمن مثل «مساءً».',
                    ],
                ],
            ],
            [
                'title' => 'Conjugating Verbs with Pronouns',
                'description' => 'Match common verbs with أنا، أنت، هو، هي، نحن، أنتم، هم، and use each form naturally.',
                'questions' => [
                    [
                        'question' => 'أكمل: «أنا ___ القهوة.»',
                        'choices' => [
                            [
                                'choice_text' => 'أشرب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تشرب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يشرب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نشرب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع «أنا» نستخدم «أشرب».',
                    ],
                    [
                        'question' => 'أكمل: «أنتَ ___ العربية.»',
                        'choices' => [
                            [
                                'choice_text' => 'أدرس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يدرس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرس',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ندرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أنتَ» مفرد مخاطب مذكر، والصيغة المناسبة هي «تدرس».',
                    ],
                    [
                        'question' => 'أكمل: «أنتِ ___ الرسالة.»',
                        'choices' => [
                            [
                                'choice_text' => 'تكتبين',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يكتب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تكتبون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أكتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع «أنتِ» نستخدم صيغة المضارع التي تنتهي بـ«ين» في كثير من الأفعال: «تكتبين».',
                    ],
                    [
                        'question' => 'أكمل: «هو ___ في المستشفى.»',
                        'choices' => [
                            [
                                'choice_text' => 'أعمل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تعمل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يعمل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نعمل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هو» يأخذ هنا صيغة الغائب المذكر «يعمل».',
                    ],
                    [
                        'question' => 'أكمل: «هي ___ كتابًا.»',
                        'choices' => [
                            [
                                'choice_text' => 'أقرأ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تقرأ',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يقرأ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نقرأ',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هي» مفرد مؤنث، والفعل المناسب هو «تقرأ».',
                    ],
                    [
                        'question' => 'أكمل: «نحن ___ إلى المدرسة.»',
                        'choices' => [
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تذهبون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع «نحن» تكون الصيغة «نذهب».',
                    ],
                    [
                        'question' => 'أي اختيار يناسب «أنتم ___ الدرس»؟',
                        'choices' => [
                            [
                                'choice_text' => 'تدرسون',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يدرسون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرسين',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ندرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أنتم» جمع مذكر مخاطب، لذلك نقول «تدرسون».',
                    ],
                    [
                        'question' => 'أي اختيار يناسب «أنتنّ ___ الطعام»؟',
                        'choices' => [
                            [
                                'choice_text' => 'تطبخون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يطبخن',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تطبخن',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نطبخ',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أنتنّ» جمع مؤنث مخاطب، والصيغة المناسبة هي «تطبخن».',
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            [
                                'choice_text' => 'هم يذهبون إلى العمل.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هم تذهبون إلى العمل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم أذهبون إلى العمل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم يذهبن إلى العمل.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هم» جمع مذكر غائب، وصيغة المضارع المناسبة هي «يذهبون».',
                    ],
                    [
                        'question' => 'لديك جملة «نحن نقرأ القصة». ماذا يحدث إذا استبدلنا «نحن» بـ«هم»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هم نقرأ القصة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم يقرأون القصة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هم تقرأ القصة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم أقرأ القصة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'عند تغيير الفاعل إلى «هم» يجب تغيير الفعل إلى صيغة الجمع المذكر «يقرأون».',
                    ],
                ],
            ],
            [
                'title' => 'Gender and Number in Verb Forms',
                'description' => 'Learn how Arabic verb forms change with masculine, feminine, singular, dual, and plural subjects.',
                'questions' => [
                    [
                        'question' => 'أي فعل يناسب «الفتاة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يذهبون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«الفتاة» مفرد مؤنث، ولذلك نقول «تذهب».',
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الولد تلعب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'البنت يلعب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'البنت تلعب.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الولد تلعبان.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«البنت» مفرد مؤنث، والفعل المضارع المناسب هو «تلعب».',
                    ],
                    [
                        'question' => 'اختر الفعل المناسب: «الطفلان ___ في الحديقة.»',
                        'choices' => [
                            [
                                'choice_text' => 'يلعبان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يلعب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تلعبان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يلعبون',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المثنى المذكر «الطفلان» يناسبه الفعل «يلعبان».',
                    ],
                    [
                        'question' => 'أكمل: «البنتان ___ إلى المدرسة.»',
                        'choices' => [
                            [
                                'choice_text' => 'تذهبان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يذهبان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يذهبون',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«البنتان» مثنى مؤنث، وصيغة الفعل المناسبة هي «تذهبان».',
                    ],
                    [
                        'question' => 'أي صيغة تناسب «المعلمان»؟',
                        'choices' => [
                            [
                                'choice_text' => 'يدرسان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تدرسان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يدرسون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يدرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«المعلمان» مثنى مذكر، لذلك نستخدم «يدرسان».',
                    ],
                    [
                        'question' => 'أي صيغة تناسب «المعلمتان»؟',
                        'choices' => [
                            [
                                'choice_text' => 'يدرسان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرسان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تدرسون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«المعلمتان» مثنى مؤنث، والصيغة الصحيحة هي «تدرسان».',
                    ],
                    [
                        'question' => 'قالت سارة: «أنا أكتب». كيف تقول فتاة أخرى عن نفسها بالطريقة نفسها؟',
                        'choices' => [
                            [
                                'choice_text' => 'أنا أكتب.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أنا يكتب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنا تكتبين.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنا نكتب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'صيغة المتكلم المفرد لا تتغير بحسب جنس المتكلم في هذا الفعل: «أنا أكتب».',
                    ],
                    [
                        'question' => 'أي جملة تناسب مجموعة من البنات؟',
                        'choices' => [
                            [
                                'choice_text' => 'البنات يكتبون الواجب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'البنات تكتبن الواجب.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'البنات يكتب الواجب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'البنات أكتب الواجب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«البنات» جمع مؤنث، وصيغة المضارع المناسبة هي «تكتبن».',
                    ],
                    [
                        'question' => 'أيهما صحيح؟',
                        'choices' => [
                            [
                                'choice_text' => 'الطلاب تدرسون الدرس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الطلاب يدرسون الدرس.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الطلاب يدرسان الدرس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الطلاب أدرس الدرس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«الطلاب» جمع مذكر، لذلك نقول «يدرسون».',
                    ],
                    [
                        'question' => 'لاحظ: «الولدان يلعبان، والبنات يلعبن». ما الفكرة التي يوضحها المثال؟',
                        'choices' => [
                            [
                                'choice_text' => 'الفعل لا يتغير أبدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الفعل يتأثر بعدد الفاعل ونوعه',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الأسماء لا تؤثر في الفعل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كل الأفعال للمستقبل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المثال يبين أن صيغة الفعل تتغير بحسب كون الفاعل مثنى مذكرًا أو جمعًا مؤنثًا.',
                    ],
                ],
            ],
            [
                'title' => 'Commands and Negative Forms',
                'description' => 'Practice simple commands and beginner negation using لا، لم and common everyday verbs.',
                'questions' => [
                    [
                        'question' => 'أي جملة أمر مناسبة لشخص واحد مذكر؟',
                        'choices' => [
                            [
                                'choice_text' => 'اكتب الدرس.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تكتب الدرس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يكتب الدرس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كتب الدرس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«اكتب» فعل أمر للمفرد المذكر.',
                    ],
                    [
                        'question' => 'كيف تقول لبنت واحدة: «اكتب» بصيغة الأمر؟',
                        'choices' => [
                            [
                                'choice_text' => 'اكتبْ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اكتبي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اكتبوا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أكتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الأمر للمفردة المؤنثة هو «اكتبي».',
                    ],
                    [
                        'question' => 'أي كلمة تستخدم لنفي فعل مضارع في جملة بسيطة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سوف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لا» تستخدم لنفي الفعل المضارع في أمثلة مثل «لا أذهب».',
                    ],
                    [
                        'question' => 'أكمل: «أنا ___ أشرب القهوة ليلًا.»',
                        'choices' => [
                            [
                                'choice_text' => 'لا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لا أشرب» تنفي حدوث الفعل في الحاضر أو العادة.',
                    ],
                    [
                        'question' => 'أي جملة أمر صحيحة لجمع من الأشخاص؟',
                        'choices' => [
                            [
                                'choice_text' => 'اكتبوا واجبكم.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اكتبن واجبكم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يكتبون واجبكم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نكتبوا واجبكم.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«اكتبوا» هي صيغة الأمر لجمع المذكر المخاطب.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لتقديم نصيحة مباشرة؟',
                        'choices' => [
                            [
                                'choice_text' => 'اشرب الماء.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'شرب الماء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يشرب الماء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأشرب الماء.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«اشرب الماء» فعل أمر، ويمكن استخدامه لإعطاء نصيحة مباشرة.',
                    ],
                    [
                        'question' => 'ما معنى «لا تفتح الباب»؟',
                        'choices' => [
                            [
                                'choice_text' => 'افتح الباب الآن',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا تقم بفتح الباب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'فتحت الباب سابقًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأفتح الباب غدًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لا تفتح» نهي، أي طلب عدم القيام بالفعل.',
                    ],
                    [
                        'question' => 'اختر الجملة التي تنفي عادة يومية بشكل طبيعي.',
                        'choices' => [
                            [
                                'choice_text' => 'لا أستيقظ متأخرًا عادةً.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لم أستيقظ غدًا عادةً.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا استيقظت أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف لا استيقظ.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لا أستيقظ» صيغة طبيعية لنفي عادة أو سلوك في الحاضر.',
                    ],
                    [
                        'question' => 'أي صيغة تناسب: «يا أحمد، ___ الباب من فضلك.»',
                        'choices' => [
                            [
                                'choice_text' => 'أغلق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يغلق',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أغلقْت',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سنغلق',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة توجّه طلبًا إلى أحمد، ولذلك نستخدم فعل الأمر «أغلق».',
                    ],
                    [
                        'question' => 'أي جملة تجمع بين النفي والماضي بطريقة مناسبة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لم أذهب إلى السوق أمس.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا ذهبت إلى السوق أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سوف ذهبت أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لم أذهب غدًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لم» تُستخدم مع المضارع لنفي حدث وقع في الماضي: «لم أذهب».',
                    ],
                ],
            ],
            [
                'title' => 'Common Arabic Verb Pairs in Context',
                'description' => 'Use familiar verbs such as ذهب، جاء، أخذ، أعطى، أكل and شرب in short situations rather than memorizing isolated forms.',
                'questions' => [
                    [
                        'question' => 'اختر الكلمة التي تكمل الجملة: «أمس ___ أحمد إلى العمل.»',
                        'choices' => [
                            [
                                'choice_text' => 'ذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سيذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'كلمة «أمس» تجعل الماضي مناسبًا، لذلك نقول «ذهب».',
                    ],
                    [
                        'question' => '«جاءت مريم إلى البيت». من الذي جاء؟',
                        'choices' => [
                            [
                                'choice_text' => 'أحمد',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'مريم',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الطلاب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأولاد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل «جاءت» هنا يعود إلى مريم، وهي مفرد مؤنث.',
                    ],
                    [
                        'question' => 'أكمل: «الطفل ___ الماء لأنه عطشان.»',
                        'choices' => [
                            [
                                'choice_text' => 'يشرب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يكتب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يقرأ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ينام',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العطش يفسر اختيار الفعل «يشرب».',
                    ],
                    [
                        'question' => 'أمينة كانت جائعة، لذلك ___ وجبة صغيرة.',
                        'choices' => [
                            [
                                'choice_text' => 'أكلت',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'قرأت',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'غسلت',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'رسمت',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجوع يرتبط بالأكل، والجملة تتحدث عن حدث وقع، لذلك «أكلت» مناسبة.',
                    ],
                    [
                        'question' => '«أعطى المعلم الطالب كتابًا». ما الذي أعطاه المعلم؟',
                        'choices' => [
                            [
                                'choice_text' => 'قلمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كتابًا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كرسيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حقيبة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المفعول به المذكور في الجملة هو «كتابًا».',
                    ],
                    [
                        'question' => 'اختر الجملة التي تستعمل «أخذ» بشكل طبيعي.',
                        'choices' => [
                            [
                                'choice_text' => 'أخذت سارة الكتاب من الطاولة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أخذت سارة تنام إلى المدرسة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أخذت سارة جميلة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أخذت سارة أمس غدًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«أخذت الكتاب» تعبير طبيعي يدل على أن سارة أخذت الكتاب من مكانه.',
                    ],
                    [
                        'question' => 'قال علي: «سأعود بعد ساعة». ماذا يفهم من «سأعود»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أنه عاد بالفعل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنه سيعود في المستقبل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أنه لا يريد العودة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنه يعود كل يوم بالضرورة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السين مع المضارع في «سأعود» تشير إلى حدث سيقع لاحقًا.',
                    ],
                    [
                        'question' => 'أي جملة توضح أن شخصًا وصل بالفعل؟',
                        'choices' => [
                            [
                                'choice_text' => 'يصل خالد الآن.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سيصل خالد غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وصل خالد قبل قليل.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'صلْ يا خالد.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«وصل» فعل ماضٍ، و«قبل قليل» يؤكد أن الحدث تم بالفعل.',
                    ],
                    [
                        'question' => 'إذا قال المعلم «افتحوا كتبكم»، فكم شخصًا يُخاطب؟',
                        'choices' => [
                            [
                                'choice_text' => 'شخصًا واحدًا مذكرًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شخصًا واحدًا مؤنثًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'مجموعة من المخاطبين',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نفسه',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«افتحوا» صيغة أمر للجمع، لذلك الخطاب موجّه إلى أكثر من شخص.',
                    ],
                    [
                        'question' => 'أي اختيار يحافظ على المعنى عند تحويل «هو شرب الماء» إلى «هم»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هم شرب الماء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم شربوا الماء.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هم تشرب الماء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم نشرب الماء.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع «هم» تصبح صيغة الماضي «شربوا»، فيبقى معنى الجملة نفسه مع تغيير الفاعل.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Beginner Verb Practice',
                'description' => 'Combine tense, pronouns, number, negation and everyday context in a final beginner-level review.',
                'questions' => [
                    [
                        'question' => 'اختر الجملة الصحيحة: «أنا ___ إلى المكتبة أمس.»',
                        'choices' => [
                            [
                                'choice_text' => 'ذهبت',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يذهب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'وجود «أمس» يدل على الماضي، ومع «أنا» تكون الصيغة «ذهبت».',
                    ],
                    [
                        'question' => 'اختر الجملة الصحيحة: «هي ___ إلى المدرسة كل يوم.»',
                        'choices' => [
                            [
                                'choice_text' => 'تذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يذهبون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبن',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«هي» مفرد مؤنث، ومع عبارة «كل يوم» نستخدم المضارع «تذهب».',
                    ],
                    [
                        'question' => 'أي جملة تعبّر عن المستقبل؟',
                        'choices' => [
                            [
                                'choice_text' => 'نقرأ الدرس الآن.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قرأنا الدرس أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سنقرأ الدرس غدًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اقرأ الدرس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سنقرأ» مع «غدًا» يعبّران بوضوح عن حدث مستقبلي.',
                    ],
                    [
                        'question' => 'أكمل: «الطالبتان ___ الدرس الآن.»',
                        'choices' => [
                            [
                                'choice_text' => 'تدرسان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يدرسون',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرسين',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تدرس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«الطالبتان» مثنى مؤنث، لذلك نقول «تدرسان».',
                    ],
                    [
                        'question' => 'أي جملة تنفي فعلًا يحدث في الحاضر؟',
                        'choices' => [
                            [
                                'choice_text' => 'لم أذهب أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا أذهب الآن.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سأذهب غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذهبت أمس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«لا أذهب» تنفي الفعل في الحاضر، بينما «لم أذهب» تشير إلى نفي حدث ماضٍ.',
                    ],
                    [
                        'question' => 'قالت ليلى: «سأكتب الرسالة بعد الغداء». ما الفعل وما دلالته؟',
                        'choices' => [
                            [
                                'choice_text' => 'أكتب، ويدل على الماضي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأكتب، ويدل على المستقبل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الرسالة، وتدل على المستقبل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الغداء، وهو الفعل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سأكتب» هو الفعل، والسين مع المضارع تجعل دلالته مستقبلية.',
                    ],
                    [
                        'question' => 'حوّل «هم يدرسون العربية» إلى الماضي.',
                        'choices' => [
                            [
                                'choice_text' => 'هم درسوا العربية.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هم يدرسون العربية أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم سيدرسون العربية أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم ادرسوا العربية.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الماضي من «يدرسون» مع «هم» هو «درسوا».',
                    ],
                    [
                        'question' => 'أي اختيار يناسب النص: «رجع سامي متعبًا، ___ إلى النوم مباشرة.»',
                        'choices' => [
                            [
                                'choice_text' => 'فذهب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'فسيذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'فاذهب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'فاذهبوا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحدثان وقعا في الماضي، لذلك «فذهب» هي الصيغة المناسبة.',
                    ],
                    [
                        'question' => 'في الجملة «يا طالبات، اقرأن النص ببطء»، لماذا جاءت «اقرأن» بهذه الصورة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن المخاطبات جمع مؤنث',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الخطاب لشخص واحد مذكر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الفعل في الماضي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الجملة في المستقبل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«طالبات» جمع مؤنث مخاطب، وصيغة الأمر المناسبة هي «اقرأن».',
                    ],
                    [
                        'question' => 'أي سلسلة تحافظ على ترتيب الزمن: ماضٍ ثم حاضر ثم مستقبل؟',
                        'choices' => [
                            [
                                'choice_text' => 'ذهبت أمس، أدرس الآن، سأرتاح غدًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أدرس الآن، ذهبت أمس، سأرتاح غدًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'سأذهب غدًا، ذهبت أمس، أدرس الآن.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أدرس أمس، ذهبت الآن، سأرتاح أمس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السلسلة الأولى مرتبة زمنيًا بوضوح: حدث ماضٍ، ثم فعل حاضر، ثم خطة مستقبلية.',
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