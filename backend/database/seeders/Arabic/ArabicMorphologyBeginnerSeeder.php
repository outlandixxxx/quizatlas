<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicMorphologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-morphology')->firstOrFail();

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
                'title' => 'Arabic Roots: Finding the Core of a Word',
                'description' => 'Learn how common Arabic words share three-letter roots and use those roots to connect related meanings.',
                'questions' => [
                    [
                        'question' => 'ما الجذر المشترك بين الكلمات: كتب، كاتب، مكتوب؟',
                        'choices' => [
                            ['choice_text' => 'ك ت ب', 'is_correct' => true],
                            ['choice_text' => 'ت ب ك', 'is_correct' => false],
                            ['choice_text' => 'ك و ب', 'is_correct' => false],
                            ['choice_text' => 'ب ت ك', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات الثلاث تدور حول معنى الكتابة، وحروفها الأصلية هي كاف وتاء وباء.'
                    ],
                    [
                        'question' => 'كلمات مثل "درس" و"مدرسة" و"مدرّس" ترتبط غالبًا بأي جذر؟',
                        'choices' => [
                            ['choice_text' => 'د ر س', 'is_correct' => true],
                            ['choice_text' => 'ر س د', 'is_correct' => false],
                            ['choice_text' => 'د س م', 'is_correct' => false],
                            ['choice_text' => 'م د ر', 'is_correct' => false],
                        ],
                        'explanation' => 'المعاني المرتبطة بالدراسة والتعليم في هذه الكلمات تعود إلى الجذر د ر س.'
                    ],
                    [
                        'question' => 'إذا عرفت أن الجذر ع ل م يرتبط بالعلم، فأي كلمة من الآتي تنتمي إليه؟',
                        'choices' => [
                            ['choice_text' => 'معلومة', 'is_correct' => true],
                            ['choice_text' => 'ملعقة', 'is_correct' => false],
                            ['choice_text' => 'عالمية', 'is_correct' => false],
                            ['choice_text' => 'علامة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "معلومة" مشتقة من الجذر ع ل م، وترتبط بما يعرفه الإنسان من علم.'
                    ],
                    [
                        'question' => 'أي مجموعة تنتمي إلى الجذر ق ر أ؟',
                        'choices' => [
                            ['choice_text' => 'قرأ، قارئ، قراءة', 'is_correct' => true],
                            ['choice_text' => 'قرر، قرار، مقرر', 'is_correct' => false],
                            ['choice_text' => 'قرب، قريب، قرابة', 'is_correct' => false],
                            ['choice_text' => 'قاد، قائد، قيادة', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات الثلاث الأولى كلها تدور حول فعل القراءة، ولذلك تشترك في الجذر ق ر أ.'
                    ],
                    [
                        'question' => 'عندما يبحث متعلم عن الجذر، ما الذي يبحث عنه أولًا؟',
                        'choices' => [
                            ['choice_text' => 'الحروف الأصلية التي تحمل المعنى الأساسي', 'is_correct' => true],
                            ['choice_text' => 'آخر حرف فقط', 'is_correct' => false],
                            ['choice_text' => 'عدد مقاطع الكلمة', 'is_correct' => false],
                            ['choice_text' => 'علامة الترقيم بعد الكلمة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجذر هو مجموعة الحروف الأصلية التي تمثل المعنى العام الذي ترتبط به الكلمات المشتقة.'
                    ],
                    [
                        'question' => 'كلمة "كاتب" وكلمة "كتابة" مختلفتان في الشكل. ما الذي يجمعهما؟',
                        'choices' => [
                            ['choice_text' => 'الجذر نفسه، ك ت ب', 'is_correct' => true],
                            ['choice_text' => 'الوزن نفسه دائمًا', 'is_correct' => false],
                            ['choice_text' => 'عدد الحروف نفسه', 'is_correct' => false],
                            ['choice_text' => 'المعنى نفسه تمامًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمتان مشتقتان من الجذر ك ت ب، لكن لكل واحدة منهما صيغة ومعنى صرفي خاص.'
                    ],
                    [
                        'question' => 'أي كلمة ليست من عائلة الجذر ف ت ح؟',
                        'choices' => [
                            ['choice_text' => 'فاتح', 'is_correct' => false],
                            ['choice_text' => 'مفتوح', 'is_correct' => false],
                            ['choice_text' => 'تفاحة', 'is_correct' => true],
                            ['choice_text' => 'فتح', 'is_correct' => false],
                        ],
                        'explanation' => '"تفاحة" ترتبط بجذر ت ف ح، أما الكلمات الأخرى فتعود إلى ف ت ح.'
                    ],
                    [
                        'question' => 'إذا وجدت الكلمات: لعب، لاعب، ملعب، فما الفكرة الصرفية الواضحة بينها؟',
                        'choices' => [
                            ['choice_text' => 'كلها مشتقة من جذر واحد بصيغ مختلفة', 'is_correct' => true],
                            ['choice_text' => 'كلها أفعال ماضية', 'is_correct' => false],
                            ['choice_text' => 'كلها أسماء أماكن', 'is_correct' => false],
                            ['choice_text' => 'لا توجد علاقة بينها', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات الثلاث من الجذر ل ع ب، لكن الصيغة تغيّرت لتؤدي معاني مختلفة.'
                    ],
                    [
                        'question' => 'قال الطالب: "وجدت الحروف ك ت ب داخل كلمات كثيرة، إذن هذه الكلمات لها علاقة بالكتابة." ما الذي فهمه بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'أن الجذر يمكن أن يربط كلمات في عائلة واحدة', 'is_correct' => true],
                            ['choice_text' => 'أن كل كلمة عربية يجب أن تكون من حرفين', 'is_correct' => false],
                            ['choice_text' => 'أن كل الكلمات لها الوزن نفسه', 'is_correct' => false],
                            ['choice_text' => 'أن المعنى لا يتغير مع الصيغة', 'is_correct' => false],
                        ],
                        'explanation' => 'معرفة الجذر تساعد المتعلم على رؤية العلاقة بين الكلمات المشتقة من أصل واحد.'
                    ],
                    [
                        'question' => 'أي كلمة تنتمي إلى الجذر س م ع؟',
                        'choices' => [
                            ['choice_text' => 'سامع', 'is_correct' => true],
                            ['choice_text' => 'مسافر', 'is_correct' => false],
                            ['choice_text' => 'سائل', 'is_correct' => false],
                            ['choice_text' => 'شارع', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "سامع" مشتقة من الجذر س م ع، وترتبط بمعنى السماع والاستماع.'
                    ],
                ],
            ],
            [
                'title' => 'Common Arabic Patterns and Forms',
                'description' => 'Recognize familiar word patterns and see how changing the pattern can change the role or meaning of a word.',
                'questions' => [
                    [
                        'question' => 'أي كلمة على وزن "فاعل"؟',
                        'choices' => [
                            ['choice_text' => 'كاتب', 'is_correct' => true],
                            ['choice_text' => 'مكتوب', 'is_correct' => false],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                        ],
                        'explanation' => '"كاتب" يطابق وزن فاعل، وهو من الأوزان الشائعة لاسم الفاعل من الفعل الثلاثي.'
                    ],
                    [
                        'question' => 'أي كلمة على وزن "مفعول"؟',
                        'choices' => [
                            ['choice_text' => 'مكتوب', 'is_correct' => true],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                            ['choice_text' => 'مكتب', 'is_correct' => false],
                        ],
                        'explanation' => '"مكتوب" على وزن مفعول، وهو وزن معروف لاسم المفعول من كثير من الأفعال الثلاثية.'
                    ],
                    [
                        'question' => 'في كلمة "كاتب"، ماذا أضاف وزن "فاعل" إلى المعنى الأساسي لـ"كتب"؟',
                        'choices' => [
                            ['choice_text' => 'دلّ على الشخص الذي يقوم بالفعل', 'is_correct' => true],
                            ['choice_text' => 'دلّ على مكان الكتابة', 'is_correct' => false],
                            ['choice_text' => 'دلّ على الشيء المكتوب فقط', 'is_correct' => false],
                            ['choice_text' => 'حوّل الكلمة إلى حرف', 'is_correct' => false],
                        ],
                        'explanation' => 'صيغة "فاعل" في مثل "كاتب" تعطي معنى الشخص الذي يقوم بالفعل، أي الشخص الذي يكتب.'
                    ],
                    [
                        'question' => 'إذا كان "حارس" هو الشخص الذي يحرس، فما الكلمة التي تدل على الشيء المحروس؟',
                        'choices' => [
                            ['choice_text' => 'محروس', 'is_correct' => true],
                            ['choice_text' => 'حراسة', 'is_correct' => false],
                            ['choice_text' => 'حارس', 'is_correct' => false],
                            ['choice_text' => 'يحرس', 'is_correct' => false],
                        ],
                        'explanation' => '"محروس" يدل على الشيء الذي وقع عليه الحرس، وهو من معنى اسم المفعول.'
                    ],
                    [
                        'question' => 'أي كلمة تعبّر عن المكان المرتبط بالفعل "كتب"؟',
                        'choices' => [
                            ['choice_text' => 'مكتب', 'is_correct' => true],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'مكتوب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                        ],
                        'explanation' => '"مكتب" يمكن أن يدل على المكان الذي تتم فيه الكتابة أو العمل المكتبي.'
                    ],
                    [
                        'question' => 'ما العلاقة بين "مجلس" و"جلس"؟',
                        'choices' => [
                            ['choice_text' => 'مجلس كلمة مشتقة من الجذر نفسه وتشير إلى مكان أو موضع الجلوس', 'is_correct' => true],
                            ['choice_text' => 'لا توجد علاقة بينهما', 'is_correct' => false],
                            ['choice_text' => 'مجلس هو فعل ماضٍ', 'is_correct' => false],
                            ['choice_text' => 'جلس اسم فاعل من مجلس', 'is_correct' => false],
                        ],
                        'explanation' => 'الجذر ج ل س ظاهر في الكلمتين، و"مجلس" يرتبط بالجلوس والمكان الذي يجلس فيه الناس.'
                    ],
                    [
                        'question' => 'أي كلمة أقرب إلى وزن "فعّال"؟',
                        'choices' => [
                            ['choice_text' => 'غفّار', 'is_correct' => true],
                            ['choice_text' => 'مكتوب', 'is_correct' => false],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "غفّار" تحتوي على الشدة وتطابق وزن فعّال، وهو وزن معروف في العربية.'
                    ],
                    [
                        'question' => 'عندما نقارن "كاتب" و"مكتوب"، أي عبارة أدق؟',
                        'choices' => [
                            ['choice_text' => 'الأول يدل على من قام بالفعل، والثاني على ما وقع عليه الفعل', 'is_correct' => true],
                            ['choice_text' => 'كلاهما يدل على المكان', 'is_correct' => false],
                            ['choice_text' => 'كلاهما فعل ماضٍ', 'is_correct' => false],
                            ['choice_text' => 'الأول يدل على المفعول والثاني على الفاعل', 'is_correct' => false],
                        ],
                        'explanation' => '"كاتب" اسم فاعل، بينما "مكتوب" اسم مفعول، ولذلك تختلف وظيفتهما في المعنى.'
                    ],
                    [
                        'question' => 'أي كلمة تغير فيها الوزن مع بقاء الجذر هو ك ت ب؟',
                        'choices' => [
                            ['choice_text' => 'مكتبة', 'is_correct' => true],
                            ['choice_text' => 'مدينة', 'is_correct' => false],
                            ['choice_text' => 'مدرسة', 'is_correct' => false],
                            ['choice_text' => 'نافذة', 'is_correct' => false],
                        ],
                        'explanation' => '"مكتبة" مشتقة من الجذر ك ت ب ولكنها تأتي بصيغة مختلفة لتدل على مكان مرتبط بالكتب.'
                    ],
                    [
                        'question' => 'لماذا يحتاج المتعلم إلى معرفة الأوزان؟',
                        'choices' => [
                            ['choice_text' => 'لأنها تساعده على فهم وظيفة الكلمة ومعناها المشتق', 'is_correct' => true],
                            ['choice_text' => 'لأنها تلغي الحاجة إلى معرفة الجذر', 'is_correct' => false],
                            ['choice_text' => 'لأنها تحدد عدد كلمات الجملة فقط', 'is_correct' => false],
                            ['choice_text' => 'لأنها تجعل كل الكلمات متساوية في المعنى', 'is_correct' => false],
                        ],
                        'explanation' => 'معرفة الوزن مع الجذر تعطي المتعلم فكرة عن معنى الكلمة ودورها الصرفي.'
                    ],
                ],
            ],
            [
                'title' => 'Masdar: Naming the Action',
                'description' => 'Practice recognizing common Arabic verbal nouns and distinguish the action itself from the person or object involved.',
                'questions' => [
                    [
                        'question' => 'ما المصدر الشائع للفعل "كتب"؟',
                        'choices' => [
                            ['choice_text' => 'كتابة', 'is_correct' => true],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'مكتوب', 'is_correct' => false],
                            ['choice_text' => 'مكتب', 'is_correct' => false],
                        ],
                        'explanation' => '"كتابة" اسم للحدث نفسه، ولذلك فهو مصدر الفعل "كتب".'
                    ],
                    [
                        'question' => 'أي كلمة تمثل المصدر من الفعل "جلس"؟',
                        'choices' => [
                            ['choice_text' => 'جلوس', 'is_correct' => true],
                            ['choice_text' => 'جالس', 'is_correct' => false],
                            ['choice_text' => 'مجلس', 'is_correct' => false],
                            ['choice_text' => 'مجلوس', 'is_correct' => false],
                        ],
                        'explanation' => '"جلوس" تسمية لفعل الجلوس نفسه، لذلك هي المصدر هنا.'
                    ],
                    [
                        'question' => 'في الجملة "أحب القراءة قبل النوم"، ماذا تعبّر كلمة "القراءة"؟',
                        'choices' => [
                            ['choice_text' => 'عن الفعل أو الحدث نفسه دون تحديد فاعل', 'is_correct' => true],
                            ['choice_text' => 'عن الشخص الذي يقرأ', 'is_correct' => false],
                            ['choice_text' => 'عن الكتاب الذي يُقرأ', 'is_correct' => false],
                            ['choice_text' => 'عن مكان القراءة', 'is_correct' => false],
                        ],
                        'explanation' => '"القراءة" لا تدل على شخص معين، بل تسمي الحدث أو الفعل نفسه.'
                    ],
                    [
                        'question' => 'أي زوج يجمع فعلًا ومصدره؟',
                        'choices' => [
                            ['choice_text' => 'نجح — نجاح', 'is_correct' => true],
                            ['choice_text' => 'نجح — ناجح', 'is_correct' => false],
                            ['choice_text' => 'شرب — مشروب', 'is_correct' => false],
                            ['choice_text' => 'كتب — كاتب', 'is_correct' => false],
                        ],
                        'explanation' => '"نجاح" هو اسم الحدث الناتج من الفعل "نجح"، ولذلك هو مصدره.'
                    ],
                    [
                        'question' => 'أراد المعلم تحويل "تعلّم" إلى اسم يدل على عملية التعلم. أي كلمة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'تعلّم', 'is_correct' => true],
                            ['choice_text' => 'متعلّم', 'is_correct' => false],
                            ['choice_text' => 'معلّم', 'is_correct' => false],
                            ['choice_text' => 'تعليم', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "تعلّم" نفسها مصدر شائع يدل على عملية اكتساب المعرفة أو المهارة.'
                    ],
                    [
                        'question' => 'في عبارة "بعد السفر، احتاج سامي إلى الراحة"، ما الكلمة التي تسمي حدثًا؟',
                        'choices' => [
                            ['choice_text' => 'السفر', 'is_correct' => true],
                            ['choice_text' => 'سامي', 'is_correct' => false],
                            ['choice_text' => 'الراحة فقط بوصفها شخصًا', 'is_correct' => false],
                            ['choice_text' => 'بعد', 'is_correct' => false],
                        ],
                        'explanation' => '"السفر" مصدر يدل على حدث السفر، وليس على الشخص الذي قام به.'
                    ],
                    [
                        'question' => 'أي كلمة ليست مصدرًا؟',
                        'choices' => [
                            ['choice_text' => 'لاعب', 'is_correct' => true],
                            ['choice_text' => 'لعب', 'is_correct' => false],
                            ['choice_text' => 'قراءة', 'is_correct' => false],
                            ['choice_text' => 'جلوس', 'is_correct' => false],
                        ],
                        'explanation' => '"لاعب" يدل على الشخص الذي يلعب، بينما "لعب" و"قراءة" و"جلوس" تستخدم هنا للدلالة على الحدث أو المصدر.'
                    ],
                    [
                        'question' => 'ما الفرق البسيط بين "كاتب" و"كتابة"؟',
                        'choices' => [
                            ['choice_text' => 'كاتب شخص، وكتابة اسم للحدث', 'is_correct' => true],
                            ['choice_text' => 'كلاهما اسم للمكان', 'is_correct' => false],
                            ['choice_text' => 'كاتب مصدر وكتابة فعل', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد فرق', 'is_correct' => false],
                        ],
                        'explanation' => '"كاتب" يدل على الشخص الذي يكتب، بينما "كتابة" تسمي فعل الكتابة نفسه.'
                    ],
                    [
                        'question' => 'إذا قال شخص: "أحب السباحة"، فما الذي يحبه تحديدًا؟',
                        'choices' => [
                            ['choice_text' => 'نشاط السباحة نفسه', 'is_correct' => true],
                            ['choice_text' => 'سبّاحًا معينًا', 'is_correct' => false],
                            ['choice_text' => 'مكانًا فقط', 'is_correct' => false],
                            ['choice_text' => 'أداة للسباحة', 'is_correct' => false],
                        ],
                        'explanation' => '"السباحة" مصدر، أي اسم للنشاط أو الحدث نفسه.'
                    ],
                    [
                        'question' => 'أثناء الدراسة، كتب الطالب: "القراءة اليومية مفيدة". لماذا استُخدمت "القراءة" بدل "قارئ"؟',
                        'choices' => [
                            ['choice_text' => 'لأن الجملة تتحدث عن النشاط لا عن الشخص', 'is_correct' => true],
                            ['choice_text' => 'لأن قارئ اسم مكان', 'is_correct' => false],
                            ['choice_text' => 'لأن القراءة فعل ماضٍ', 'is_correct' => false],
                            ['choice_text' => 'لأن قارئ لا علاقة له بالقراءة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تتحدث عن قيمة النشاط نفسه، لذلك يناسبها المصدر "القراءة".'
                    ],
                ],
            ],
            [
                'title' => 'Active and Passive Participles',
                'description' => 'Understand the beginner-level difference between the doer of an action and the thing affected by the action.',
                'questions' => [
                    [
                        'question' => 'ما اسم الفاعل من الفعل "كتب"؟',
                        'choices' => [
                            ['choice_text' => 'كاتب', 'is_correct' => true],
                            ['choice_text' => 'مكتوب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                            ['choice_text' => 'مكتب', 'is_correct' => false],
                        ],
                        'explanation' => 'اسم الفاعل من الفعل الثلاثي "كتب" هو "كاتب"، أي الشخص الذي يكتب.'
                    ],
                    [
                        'question' => 'ما اسم المفعول من الفعل "كتب"؟',
                        'choices' => [
                            ['choice_text' => 'مكتوب', 'is_correct' => true],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'كتابة', 'is_correct' => false],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                        ],
                        'explanation' => '"مكتوب" يدل على الشيء الذي وقع عليه فعل الكتابة.'
                    ],
                    [
                        'question' => 'في الجملة "الطالب قارئٌ جيد"، ما الكلمة التي تدل على من يقوم بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'قارئ', 'is_correct' => true],
                            ['choice_text' => 'الطالب فقط', 'is_correct' => false],
                            ['choice_text' => 'جيد', 'is_correct' => false],
                            ['choice_text' => 'الجملة كلها', 'is_correct' => false],
                        ],
                        'explanation' => '"قارئ" اسم فاعل يصف الطالب بأنه الشخص الذي يقوم بالقراءة.'
                    ],
                    [
                        'question' => 'قال المعلم: "الدرس مفهوم". ما الذي تصفه كلمة "مفهوم"؟',
                        'choices' => [
                            ['choice_text' => 'الدرس الذي وقع عليه الفهم', 'is_correct' => true],
                            ['choice_text' => 'الشخص الذي يشرح الدرس', 'is_correct' => false],
                            ['choice_text' => 'وقت الدرس', 'is_correct' => false],
                            ['choice_text' => 'مكان الدرس', 'is_correct' => false],
                        ],
                        'explanation' => '"مفهوم" يدل على أن الدرس قد تم فهمه، لذلك فهو اسم مفعول.'
                    ],
                    [
                        'question' => 'أي زوج صحيح؟',
                        'choices' => [
                            ['choice_text' => 'فتح — فاتح', 'is_correct' => true],
                            ['choice_text' => 'فتح — مفتاح', 'is_correct' => false],
                            ['choice_text' => 'قرأ — مقروء', 'is_correct' => false],
                            ['choice_text' => 'لعب — ملعب', 'is_correct' => false],
                        ],
                        'explanation' => '"فاتح" اسم فاعل من الفعل "فتح"، أي الشخص الذي يقوم بالفتح.'
                    ],
                    [
                        'question' => 'أي كلمة تدل على الشيء الذي وقع عليه الفعل "شرب"؟',
                        'choices' => [
                            ['choice_text' => 'مشروب', 'is_correct' => true],
                            ['choice_text' => 'شارب', 'is_correct' => false],
                            ['choice_text' => 'شرب', 'is_correct' => false],
                            ['choice_text' => 'شرابًا بوصفه فعلًا', 'is_correct' => false],
                        ],
                        'explanation' => '"مشروب" يدل على الشيء الذي شُرب أو جُهّز للشرب، وهو على معنى اسم المفعول.'
                    ],
                    [
                        'question' => 'لو كان "لاعب" هو الشخص الذي يلعب، فأي كلمة تشير إلى مكان اللعب؟',
                        'choices' => [
                            ['choice_text' => 'ملعب', 'is_correct' => true],
                            ['choice_text' => 'لاعب', 'is_correct' => false],
                            ['choice_text' => 'لعب', 'is_correct' => false],
                            ['choice_text' => 'ملاعب فقط كفعل', 'is_correct' => false],
                        ],
                        'explanation' => '"ملعب" اسم مكان مرتبط بالفعل لعب، ويشير إلى المكان الذي تتم فيه ممارسة اللعب.'
                    ],
                    [
                        'question' => 'أي عبارة تشرح الفرق بين اسم الفاعل واسم المفعول؟',
                        'choices' => [
                            ['choice_text' => 'الأول يدل على من قام بالفعل، والثاني على من أو ما وقع عليه', 'is_correct' => true],
                            ['choice_text' => 'الأول يدل على الزمن والثاني على المكان', 'is_correct' => false],
                            ['choice_text' => 'كلاهما يدل على الفاعل', 'is_correct' => false],
                            ['choice_text' => 'كلاهما يدل على مصدر الفعل', 'is_correct' => false],
                        ],
                        'explanation' => 'الفرق الأساسي للمبتدئ هو أن اسم الفاعل يربط الاسم بصاحب الفعل، واسم المفعول بما وقع عليه الفعل.'
                    ],
                    [
                        'question' => 'في الجملة "النافذة مفتوحة"، ماذا تفهم من كلمة "مفتوحة"؟',
                        'choices' => [
                            ['choice_text' => 'أن النافذة وقع عليها فعل الفتح وأصبحت مفتوحة', 'is_correct' => true],
                            ['choice_text' => 'أن النافذة هي التي فتحت شيئًا', 'is_correct' => false],
                            ['choice_text' => 'أن شخصًا اسمه مفتوحة', 'is_correct' => false],
                            ['choice_text' => 'أن النافذة مكان للفتح', 'is_correct' => false],
                        ],
                        'explanation' => '"مفتوحة" تصف النافذة باعتبارها الشيء الذي وقع عليه الفتح، وهي مؤنث "مفتوح".'
                    ],
                    [
                        'question' => 'أراد طالب وصف رجل يصلح السيارات. أي كلمة أنسب؟',
                        'choices' => [
                            ['choice_text' => 'مصلح', 'is_correct' => true],
                            ['choice_text' => 'مصلوح', 'is_correct' => false],
                            ['choice_text' => 'إصلاح', 'is_correct' => false],
                            ['choice_text' => 'مصلحة', 'is_correct' => false],
                        ],
                        'explanation' => 'الرجل الذي يقوم بالإصلاح يمكن وصفه بـ"مصلح" لأنه اسم فاعل.'
                    ],
                ],
            ],
            [
                'title' => 'Derivation and Word Families',
                'description' => 'Use related words to understand how Arabic builds nouns, professions, places, tools, and meanings from common roots.',
                'questions' => [
                    [
                        'question' => 'من الفعل "خبز"، أي كلمة تدل على الشخص الذي يقوم بالخبز؟',
                        'choices' => [
                            ['choice_text' => 'خبّاز', 'is_correct' => true],
                            ['choice_text' => 'مخبوز', 'is_correct' => false],
                            ['choice_text' => 'خبز', 'is_correct' => false],
                            ['choice_text' => 'مخبز', 'is_correct' => false],
                        ],
                        'explanation' => '"خبّاز" تدل على صاحب المهنة الذي يخبز، وهي من الكلمات المشتقة من الجذر نفسه.'
                    ],
                    [
                        'question' => 'أي كلمة تدل على مكان مرتبط بالفعل "سبح"؟',
                        'choices' => [
                            ['choice_text' => 'مسبح', 'is_correct' => true],
                            ['choice_text' => 'سبّاح', 'is_correct' => false],
                            ['choice_text' => 'سباحة', 'is_correct' => false],
                            ['choice_text' => 'مسبيح', 'is_correct' => false],
                        ],
                        'explanation' => '"مسبح" اسم مكان، ويشير عادة إلى المكان المخصص للسباحة.'
                    ],
                    [
                        'question' => 'أكمل عائلة الكلمات: علم، معلّم، ___',
                        'choices' => [
                            ['choice_text' => 'متعلّم', 'is_correct' => true],
                            ['choice_text' => 'ملعقة', 'is_correct' => false],
                            ['choice_text' => 'ملعب', 'is_correct' => false],
                            ['choice_text' => 'منزل', 'is_correct' => false],
                        ],
                        'explanation' => '"متعلّم" يرتبط بالجذر ع ل م وبمجال التعلم والتعليم، لذلك يناسب العائلة.'
                    ],
                    [
                        'question' => 'أي زوج يوضح كلمة تدل على شخص ومكان من جذر واحد؟',
                        'choices' => [
                            ['choice_text' => 'لاعب — ملعب', 'is_correct' => true],
                            ['choice_text' => 'كاتب — سيارة', 'is_correct' => false],
                            ['choice_text' => 'قارئ — نافذة', 'is_correct' => false],
                            ['choice_text' => 'طالب — كتاب', 'is_correct' => false],
                        ],
                        'explanation' => '"لاعب" و"ملعب" من الجذر ل ع ب، الأول للشخص والثاني للمكان المرتبط باللعب.'
                    ],
                    [
                        'question' => 'ما الكلمة التي تدل على الأداة في عائلة "فتح"؟',
                        'choices' => [
                            ['choice_text' => 'مفتاح', 'is_correct' => true],
                            ['choice_text' => 'فاتح', 'is_correct' => false],
                            ['choice_text' => 'مفتوح', 'is_correct' => false],
                            ['choice_text' => 'فتحة', 'is_correct' => false],
                        ],
                        'explanation' => '"مفتاح" اسم أداة مرتبطة بالفتح، وهو مثال شائع على اسم الآلة.'
                    ],
                    [
                        'question' => 'إذا قال طفل: "هذه مكتبة وليست مكتبًا"، ما الفرق الذي يمكن أن نفهمه صرفيًا؟',
                        'choices' => [
                            ['choice_text' => 'الصيغة مختلفة رغم اشتراك الكلمتين في الجذر', 'is_correct' => true],
                            ['choice_text' => 'الكلمتان من جذرين لا علاقة بينهما', 'is_correct' => false],
                            ['choice_text' => 'مكتبة فعل ومكتب حرف', 'is_correct' => false],
                            ['choice_text' => 'كلتاهما تعني الشيء نفسه دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمتان مرتبطتان بالجذر ك ت ب، لكن الصيغة والمعنى والاستعمال يختلفان.'
                    ],
                    [
                        'question' => 'أي كلمة تشير إلى من يعمل في النجارة؟',
                        'choices' => [
                            ['choice_text' => 'نجّار', 'is_correct' => true],
                            ['choice_text' => 'منشار', 'is_correct' => false],
                            ['choice_text' => 'نجارة', 'is_correct' => false],
                            ['choice_text' => 'منجور', 'is_correct' => false],
                        ],
                        'explanation' => '"نجّار" اسم للشخص الذي يمارس مهنة النجارة.'
                    ],
                    [
                        'question' => 'أي كلمة من الآتي تدل على أداة؟',
                        'choices' => [
                            ['choice_text' => 'مكنسة', 'is_correct' => true],
                            ['choice_text' => 'منظّف', 'is_correct' => false],
                            ['choice_text' => 'تنظيف', 'is_correct' => false],
                            ['choice_text' => 'نظيف', 'is_correct' => false],
                        ],
                        'explanation' => '"مكنسة" اسم أداة تستخدم في التنظيف، بينما الكلمات الأخرى تدل على شخص أو فعل أو صفة.'
                    ],
                    [
                        'question' => 'في مجموعة الكلمات "درس، دارس، مدروس"، أي كلمة تدل على من يقوم بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'دارس', 'is_correct' => true],
                            ['choice_text' => 'مدروس', 'is_correct' => false],
                            ['choice_text' => 'درس', 'is_correct' => false],
                            ['choice_text' => 'المجموعة كلها بالمعنى نفسه', 'is_correct' => false],
                        ],
                        'explanation' => '"دارس" اسم فاعل، أي الشخص الذي يقوم بالدراسة.'
                    ],
                    [
                        'question' => 'عندما يكوّن الطالب عائلة من كلمات الجذر "ع م ل"، أي كلمة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'عامل', 'is_correct' => true],
                            ['choice_text' => 'نافذة', 'is_correct' => false],
                            ['choice_text' => 'حديقة', 'is_correct' => false],
                            ['choice_text' => 'مدرسة', 'is_correct' => false],
                        ],
                        'explanation' => '"عامل" مشتقة من الجذر ع م ل وترتبط بالعمل، ولذلك هي جزء مناسب من العائلة.'
                    ],
                ],
            ],
            [
                'title' => 'Plural Forms and Morphological Change',
                'description' => 'Build confidence with common plural patterns and notice how Arabic changes word forms to express number.',
                'questions' => [
                    [
                        'question' => 'ما جمع كلمة "كتاب"؟',
                        'choices' => [
                            ['choice_text' => 'كتب', 'is_correct' => true],
                            ['choice_text' => 'كتابان', 'is_correct' => false],
                            ['choice_text' => 'كاتب', 'is_correct' => false],
                            ['choice_text' => 'مكتبة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمع الشائع لكلمة "كتاب" هو "كتب"، وهو جمع تكسير.'
                    ],
                    [
                        'question' => 'ما جمع كلمة "طالب"؟',
                        'choices' => [
                            ['choice_text' => 'طلاب', 'is_correct' => true],
                            ['choice_text' => 'طالبة', 'is_correct' => false],
                            ['choice_text' => 'مطلوب', 'is_correct' => false],
                            ['choice_text' => 'طلبةً فقط في كل سياق', 'is_correct' => false],
                        ],
                        'explanation' => '"طلاب" جمع شائع لكلمة "طالب"، وهو مثال على جمع التكسير.'
                    ],
                    [
                        'question' => 'أي كلمة تمثل جمع مؤنث سالمًا؟',
                        'choices' => [
                            ['choice_text' => 'معلّمات', 'is_correct' => true],
                            ['choice_text' => 'رجال', 'is_correct' => false],
                            ['choice_text' => 'كتب', 'is_correct' => false],
                            ['choice_text' => 'أطفال', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "معلّمات" تجمع المفرد المؤنث بإضافة ات، ولذلك هي جمع مؤنث سالم.'
                    ],
                    [
                        'question' => 'أي مجموعة تحتوي على مفرد ثم جمعه؟',
                        'choices' => [
                            ['choice_text' => 'مدينة — مدن', 'is_correct' => true],
                            ['choice_text' => 'كتاب — كاتب', 'is_correct' => false],
                            ['choice_text' => 'معلّم — تعلّم', 'is_correct' => false],
                            ['choice_text' => 'شارع — شارب', 'is_correct' => false],
                        ],
                        'explanation' => '"مدينة" مفرد، و"مدن" جمعها المعروف.'
                    ],
                    [
                        'question' => 'ما الذي تغير في "معلّمة → معلّمات"؟',
                        'choices' => [
                            ['choice_text' => 'أضيفت علامة الجمع للمؤنث', 'is_correct' => true],
                            ['choice_text' => 'تغير الجذر بالكامل', 'is_correct' => false],
                            ['choice_text' => 'تحولت الكلمة إلى فعل', 'is_correct' => false],
                            ['choice_text' => 'حُذفت كل الحروف الأصلية', 'is_correct' => false],
                        ],
                        'explanation' => 'في جمع المؤنث السالم تبقى بنية الكلمة الأساسية مع إضافة علامة الجمع المناسبة.'
                    ],
                    [
                        'question' => 'أي جمع هو جمع تكسير؟',
                        'choices' => [
                            ['choice_text' => 'قلم — أقلام', 'is_correct' => true],
                            ['choice_text' => 'مهندس — مهندسون', 'is_correct' => false],
                            ['choice_text' => 'طالبة — طالبات', 'is_correct' => false],
                            ['choice_text' => 'معلمة — معلمات', 'is_correct' => false],
                        ],
                        'explanation' => 'في "أقلام" تغيّر بناء المفرد "قلم"، لذلك يسمى جمع تكسير.'
                    ],
                    [
                        'question' => 'إذا قال طفل: "معلمون" بدل "معلمات" عن مجموعة من النساء، فما الذي اختلط عليه؟',
                        'choices' => [
                            ['choice_text' => 'نوع الجمع والجنس في الكلمة', 'is_correct' => true],
                            ['choice_text' => 'زمن الفعل', 'is_correct' => false],
                            ['choice_text' => 'نوع الجذر', 'is_correct' => false],
                            ['choice_text' => 'معنى المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => '"معلمون" جمع مذكر سالم، بينما "معلمات" جمع مؤنث سالم لمجموعة من النساء.'
                    ],
                    [
                        'question' => 'أي كلمة تمثل جمعًا لكلمة "مهندس"؟',
                        'choices' => [
                            ['choice_text' => 'مهندسون', 'is_correct' => true],
                            ['choice_text' => 'هندسة', 'is_correct' => false],
                            ['choice_text' => 'مهندسة', 'is_correct' => false],
                            ['choice_text' => 'مهدوس', 'is_correct' => false],
                        ],
                        'explanation' => '"مهندسون" جمع مذكر سالم لكلمة "مهندس" في حالة الرفع.'
                    ],
                    [
                        'question' => 'أي عبارة تشرح جمع التكسير بصورة مبسطة؟',
                        'choices' => [
                            ['choice_text' => 'جمع يتغير فيه شكل المفرد غالبًا', 'is_correct' => true],
                            ['choice_text' => 'جمع يضيف ات دائمًا', 'is_correct' => false],
                            ['choice_text' => 'جمع خاص بالأفعال الماضية', 'is_correct' => false],
                            ['choice_text' => 'جمع لا يغير الكلمة أبدًا', 'is_correct' => false],
                        ],
                        'explanation' => 'جمع التكسير يسمى كذلك لأن بنية المفرد تتغير عند الانتقال إلى الجمع، مثل كتاب ← كتب.'
                    ],
                    [
                        'question' => 'سمع أحمد كلمة "أقلام" ولم يعرف مفردها. أي مفرد مناسب؟',
                        'choices' => [
                            ['choice_text' => 'قلم', 'is_correct' => true],
                            ['choice_text' => 'قالم', 'is_correct' => false],
                            ['choice_text' => 'قلمون', 'is_correct' => false],
                            ['choice_text' => 'مقلم', 'is_correct' => false],
                        ],
                        'explanation' => 'المفرد الصحيح لـ"أقلام" هو "قلم".'
                    ],
                ],
            ],
            [
                'title' => 'Derivation in Real-Life Arabic',
                'description' => 'Apply morphology to familiar situations involving jobs, places, tools, and people so the patterns become easier to recognize.',
                'questions' => [
                    [
                        'question' => 'في متجر، يعمل شخص في بيع الكتب. أي كلمة يمكن أن تصفه إذا كان هو البائع؟',
                        'choices' => [
                            ['choice_text' => 'بائع', 'is_correct' => true],
                            ['choice_text' => 'مبيع', 'is_correct' => false],
                            ['choice_text' => 'بيع', 'is_correct' => false],
                            ['choice_text' => 'مباع', 'is_correct' => false],
                        ],
                        'explanation' => '"بائع" اسم فاعل يدل على الشخص الذي يقوم بالبيع.'
                    ],
                    [
                        'question' => 'في مطبخ البيت، ما الكلمة التي تدل على الأداة المستخدمة في الكنس؟',
                        'choices' => [
                            ['choice_text' => 'مكنسة', 'is_correct' => true],
                            ['choice_text' => 'كانس', 'is_correct' => false],
                            ['choice_text' => 'كنس', 'is_correct' => false],
                            ['choice_text' => 'مكنوس', 'is_correct' => false],
                        ],
                        'explanation' => '"مكنسة" اسم أداة، أما "كانس" فيدل على الشخص الذي يكنس.'
                    ],
                    [
                        'question' => 'قالت سارة: "الماء مغلي". ماذا تعني الكلمة "مغلي" هنا؟',
                        'choices' => [
                            ['choice_text' => 'الماء وقع عليه فعل الغلي', 'is_correct' => true],
                            ['choice_text' => 'الماء هو الذي يغلي شيئًا آخر', 'is_correct' => false],
                            ['choice_text' => 'الماء مكان الغلي', 'is_correct' => false],
                            ['choice_text' => 'الماء مصدر الفعل فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"مغلي" تصف الماء بأنه الشيء الذي وقع عليه فعل الغلي، لذلك تحمل معنى اسم المفعول.'
                    ],
                    [
                        'question' => 'أراد متجر تسمية المكان الذي يبيع فيه الخبز. أي كلمة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'مخبز', 'is_correct' => true],
                            ['choice_text' => 'خبّاز', 'is_correct' => false],
                            ['choice_text' => 'مخبوز', 'is_correct' => false],
                            ['choice_text' => 'خبز', 'is_correct' => false],
                        ],
                        'explanation' => '"مخبز" يدل على المكان الذي يُصنع أو يُباع فيه الخبز، بينما "خبّاز" يدل على الشخص.'
                    ],
                    [
                        'question' => 'في جملة "الطبيب معالج للمرضى"، ما الكلمة التي تصف الشخص الذي يقوم بالفعل؟',
                        'choices' => [
                            ['choice_text' => 'معالج', 'is_correct' => true],
                            ['choice_text' => 'علاج', 'is_correct' => false],
                            ['choice_text' => 'معالَج', 'is_correct' => false],
                            ['choice_text' => 'مرض', 'is_correct' => false],
                        ],
                        'explanation' => '"معالج" يدل على الشخص الذي يقوم بالمعالجة، ولذلك يحمل معنى اسم الفاعل.'
                    ],
                    [
                        'question' => 'أي كلمة تصف شخصًا يعمل في التصوير؟',
                        'choices' => [
                            ['choice_text' => 'مصوّر', 'is_correct' => true],
                            ['choice_text' => 'مصوَّر', 'is_correct' => false],
                            ['choice_text' => 'تصوير', 'is_correct' => false],
                            ['choice_text' => 'صورة', 'is_correct' => false],
                        ],
                        'explanation' => '"مصوّر" تدل على الشخص الذي يقوم بالتصوير، بينما "مصوَّر" يدل على ما وقع عليه التصوير.'
                    ],
                    [
                        'question' => 'في عبارة "هذه صورة مصوّرة حديثًا"، ما الذي تصفه كلمة "مصوّرة"؟',
                        'choices' => [
                            ['choice_text' => 'الصورة التي وقع عليها التصوير', 'is_correct' => true],
                            ['choice_text' => 'الشخص الذي التقط الصورة', 'is_correct' => false],
                            ['choice_text' => 'مكان التصوير', 'is_correct' => false],
                            ['choice_text' => 'زمن التصوير فقط', 'is_correct' => false],
                        ],
                        'explanation' => '"مصوّرة" هنا تصف الصورة نفسها باعتبارها الشيء الذي تم تصويره.'
                    ],
                    [
                        'question' => 'إذا أرادت الأسرة الذهاب إلى مكان للسباحة، فأي كلمة تبحث عنها؟',
                        'choices' => [
                            ['choice_text' => 'مسبح', 'is_correct' => true],
                            ['choice_text' => 'سبّاح', 'is_correct' => false],
                            ['choice_text' => 'سباحة', 'is_correct' => false],
                            ['choice_text' => 'مسبّح', 'is_correct' => false],
                        ],
                        'explanation' => '"مسبح" اسم مكان، وهو الأنسب في هذا السياق.'
                    ],
                    [
                        'question' => 'أي خيار يحتوي على شخص ثم فعلًا أو حدثًا مرتبطًا به؟',
                        'choices' => [
                            ['choice_text' => 'قارئ — قراءة', 'is_correct' => true],
                            ['choice_text' => 'كتاب — مكتبة', 'is_correct' => false],
                            ['choice_text' => 'مدرسة — طالب', 'is_correct' => false],
                            ['choice_text' => 'منزل — باب', 'is_correct' => false],
                        ],
                        'explanation' => '"قارئ" يدل على الشخص، و"قراءة" تسمّي الحدث الذي يقوم به.'
                    ],
                    [
                        'question' => 'لاحظت المعلمة أن تلميذة تفهم كلمة جديدة أسرع عندما تربطها بكلمات من الجذر نفسه. ما فائدة ذلك؟',
                        'choices' => [
                            ['choice_text' => 'يساعدها على ملاحظة العلاقات بين الكلمات ومعانيها', 'is_correct' => true],
                            ['choice_text' => 'يجعل جميع الكلمات متطابقة في المعنى', 'is_correct' => false],
                            ['choice_text' => 'يلغي الحاجة إلى القراءة', 'is_correct' => false],
                            ['choice_text' => 'يمنع استعمال القواميس', 'is_correct' => false],
                        ],
                        'explanation' => 'ربط الكلمات بجذر مشترك يساعد المتعلم على توقع العلاقة العامة بين معانيها وصيغها.'
                    ],
                ],
            ],
            [
                'title' => 'Morphology Review and Word Analysis',
                'description' => 'Bring together roots, patterns, verbal nouns, participles, and common derivations in a final beginner review.',
                'questions' => [
                    [
                        'question' => 'حلّل الكلمة "مكتوب" على مستوى المبتدئ. أي عبارة أنسب؟',
                        'choices' => [
                            ['choice_text' => 'جذرها ك ت ب، وهي اسم مفعول', 'is_correct' => true],
                            ['choice_text' => 'جذرها م ك ت، وهي فعل ماضٍ', 'is_correct' => false],
                            ['choice_text' => 'جذرها ك ت ب، وهي اسم فاعل', 'is_correct' => false],
                            ['choice_text' => 'لا ترتبط بجذر عربي', 'is_correct' => false],
                        ],
                        'explanation' => '"مكتوب" مشتقة من ك ت ب، وصيغتها تدل على الشيء الذي وقع عليه فعل الكتابة.'
                    ],
                    [
                        'question' => 'أي كلمة تمثل اسم فاعل من "قرأ"؟',
                        'choices' => [
                            ['choice_text' => 'قارئ', 'is_correct' => true],
                            ['choice_text' => 'مقروء', 'is_correct' => false],
                            ['choice_text' => 'قراءة', 'is_correct' => false],
                            ['choice_text' => 'مقرأ', 'is_correct' => false],
                        ],
                        'explanation' => '"قارئ" يدل على الشخص الذي يقوم بالقراءة، ولذلك فهو اسم فاعل.'
                    ],
                    [
                        'question' => 'أي كلمة هي المصدر في هذه المجموعة؟',
                        'choices' => [
                            ['choice_text' => 'سفر', 'is_correct' => true],
                            ['choice_text' => 'مسافر', 'is_correct' => false],
                            ['choice_text' => 'مسفور', 'is_correct' => false],
                            ['choice_text' => 'مطار', 'is_correct' => false],
                        ],
                        'explanation' => '"سفر" هنا تسمية للحدث نفسه، أما "مسافر" فيدل على الشخص.'
                    ],
                    [
                        'question' => 'أي زوج يجمع جذرًا واحدًا مع صيغة مختلفة؟',
                        'choices' => [
                            ['choice_text' => 'عامل — معمل', 'is_correct' => true],
                            ['choice_text' => 'مدرسة — مكتبة', 'is_correct' => false],
                            ['choice_text' => 'شجرة — شارع', 'is_correct' => false],
                            ['choice_text' => 'بيت — باب', 'is_correct' => false],
                        ],
                        'explanation' => '"عامل" و"معمل" من الجذر ع م ل، مع اختلاف الصيغة والمعنى التفصيلي.'
                    ],
                    [
                        'question' => 'إذا كان "معلّم" شخصًا يعلّم، فأي كلمة تدل على من يتلقى التعليم؟',
                        'choices' => [
                            ['choice_text' => 'متعلّم', 'is_correct' => true],
                            ['choice_text' => 'تعليم', 'is_correct' => false],
                            ['choice_text' => 'معلومة', 'is_correct' => false],
                            ['choice_text' => 'عالم', 'is_correct' => false],
                        ],
                        'explanation' => '"متعلّم" يدل على الشخص الذي يتلقى التعلم، وهو مرتبط بالفعل تعلّم.'
                    ],
                    [
                        'question' => 'أي عبارة تشرح الجذر والوزن بشكل مبسط؟',
                        'choices' => [
                            ['choice_text' => 'الجذر يحمل المعنى الأساسي، والوزن يساعد على تحديد الصيغة', 'is_correct' => true],
                            ['choice_text' => 'الجذر والوزن شيء واحد دائمًا', 'is_correct' => false],
                            ['choice_text' => 'الوزن يحدد عدد الجمل فقط', 'is_correct' => false],
                            ['choice_text' => 'الجذر هو علامة الترقيم الأخيرة', 'is_correct' => false],
                        ],
                        'explanation' => 'في دراسة الصرف يساعد الجذر على معرفة الأصل الدلالي، بينما يبين الوزن كيف صيغت الكلمة.'
                    ],
                    [
                        'question' => 'طالب يريد معرفة معنى كلمة جديدة، فوجد أنها من الجذر "ع م ل" ووزنها يدل على الشخص. ما توقعه المعقول؟',
                        'choices' => [
                            ['choice_text' => 'أنها قد تدل على شخص يقوم بالعمل', 'is_correct' => true],
                            ['choice_text' => 'أنها لا علاقة لها بالعمل', 'is_correct' => false],
                            ['choice_text' => 'أنها لا يمكن أن تكون اسمًا', 'is_correct' => false],
                            ['choice_text' => 'أنها تعني مكانًا مهما كان الوزن', 'is_correct' => false],
                        ],
                        'explanation' => 'إذا دل الجذر على العمل وأعطى الوزن معنى الشخص الذي يقوم بالفعل، فمن المنطقي توقع معنى قريب من "عامل".'
                    ],
                    [
                        'question' => 'في كلمة "مفتوح"، ماذا نلاحظ؟',
                        'choices' => [
                            ['choice_text' => 'الميم جزء من الصيغة، والجذر هو ف ت ح', 'is_correct' => true],
                            ['choice_text' => 'الميم هي أحد حروف الجذر الأصلي', 'is_correct' => false],
                            ['choice_text' => 'الجذر هو م ف ت', 'is_correct' => false],
                            ['choice_text' => 'الكلمة ليست مشتقة', 'is_correct' => false],
                        ],
                        'explanation' => 'الميم هنا من حروف الصيغة، بينما الحروف الأصلية المرتبطة بالفعل هي ف ت ح.'
                    ],
                    [
                        'question' => 'أي خيار يربط الكلمة بوظيفتها الصرفية بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'كاتب — اسم فاعل', 'is_correct' => true],
                            ['choice_text' => 'مكتوب — مصدر', 'is_correct' => false],
                            ['choice_text' => 'كتابة — اسم فاعل', 'is_correct' => false],
                            ['choice_text' => 'قارئ — اسم مفعول', 'is_correct' => false],
                        ],
                        'explanation' => '"كاتب" اسم فاعل لأنه يدل على الشخص الذي يكتب، بينما الخيارات الأخرى تربط الكلمات بوظائف غير صحيحة.'
                    ],
                    [
                        'question' => 'عند تحليل كلمة عربية لأول مرة، ما التسلسل المفيد للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'البحث عن الجذر ثم ملاحظة الصيغة والمعنى الذي تعطيه', 'is_correct' => true],
                            ['choice_text' => 'عدّ علامات الترقيم أولًا', 'is_correct' => false],
                            ['choice_text' => 'تجاهل حروف الكلمة والبحث عن آخرها فقط', 'is_correct' => false],
                            ['choice_text' => 'افتراض أن كل الكلمات من الوزن نفسه', 'is_correct' => false],
                        ],
                        'explanation' => 'البدء بالجذر ثم النظر إلى الصيغة يساعد المبتدئ على فهم العلاقة بين الأصل والمعنى الصرفي.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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
