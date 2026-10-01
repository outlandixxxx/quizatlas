<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationArabicEnglishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'translation-arabic-english')->firstOrFail();

        $quizzes = [
            [
                'title' => 'أساسيات الترجمة العربية الإنجليزية',
                'description' => 'ترجمة الجمل اليومية البسيطة بين العربية والإنجليزية مع التركيز على المعنى والتركيب الطبيعي.',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«أنا طالب.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I am a student.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I have a student.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am study.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I do student.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة الإنجليزية الطبيعية تستخدم الفعل be مع الاسم: I am a student.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأنسب لـ«She lives in Rabat.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هي تعيش في الرباط.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هي تذهب إلى الرباط.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي تعمل في الرباط.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي تزور الرباط الآن.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل lives يعني تعيش أو تسكن في هذا السياق، لذلك الترجمة هي «هي تعيش في الرباط».',
                    ],
                    [
                        'question' => 'اختر الترجمة الإنجليزية الصحيحة لـ«هي تحب القراءة.»',
                        'choices' => [
                            [
                                'choice_text' => 'She likes reading.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She is like reading.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She has reading.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She likes read.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'بعد likes يمكن استعمال gerund، لذلك She likes reading ترجمة طبيعية.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب للجملة «We are ready.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'نحن مستعدون.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نحن متعبون.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نحن متأخرون.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نحن غائبون.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'ready تعني مستعد أو جاهز، لذلك We are ready تعني «نحن مستعدون».',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«الكتاب على الطاولة.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'The book is on the table.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The book is in the table.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The book has on the table.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A book is at the table.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'حرف الجر on هو المناسب للتعبير عن وجود الكتاب فوق سطح الطاولة.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«I am looking for my keys.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أبحث عن مفاتيحي.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أجد مفاتيحي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أشتري مفاتيحي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أغلق مفاتيحي.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'look for تعني «يبحث عن»، لذلك المعنى هو «أبحث عن مفاتيحي».',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«نحن ندرس الإنجليزية.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'We study English.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'We studies English.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We are study English.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We have study English.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع we يستخدم الفعل study دون s في المضارع البسيط.',
                    ],
                    [
                        'question' => 'ما المعنى الصحيح لـ«The train arrives at eight o\'clock.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'يصل القطار في الساعة الثامنة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يغادر القطار في الساعة الثامنة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يتوقف القطار لمدة ثماني ساعات.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يقود القطار ثمانية أشخاص.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'arrives تعني يصل، وat eight o\'clock تعني في الساعة الثامنة.',
                    ],
                    [
                        'question' => 'أي ترجمة إنجليزية أنسب لـ«أحتاج إلى مساعدة.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I need some help.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I am need help.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I have need some help.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I need to a help.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التعبير الطبيعي هو I need some help، حيث تأتي need مباشرة مع الاسم.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأنسب لـ«Please close the door.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'من فضلك أغلق الباب.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'من فضلك افتح الباب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'من فضلك نظف الباب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'من فضلك اترك الباب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'close تعني أغلق، وplease تعني من فضلك.',
                    ],
                ],
            ],
            [
                'title' => 'الأزمنة في الترجمة العربية الإنجليزية',
                'description' => 'ترجمة الحاضر والماضي والمستقبل مع الحفاظ على العلاقة الزمنية بين الأحداث.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«سأزور صديقي غدًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I will visit my friend tomorrow.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I visited my friend tomorrow.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I was visiting my friend yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I visit my friend last week.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'سأزور تدل على المستقبل، وwill visit ترجمة مناسبة في هذا السياق.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«I finished my work.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أنهيت عملي.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سأنهي عملي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كنت سأُنهي عملي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا أنهي عملي.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'finished في الماضي البسيط تشير إلى حدث تم وانتهى.',
                    ],
                    [
                        'question' => 'أي ترجمة إنجليزية أنسب لـ«كنت أقرأ عندما اتصل بي أخي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I was reading when my brother called me.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I read when my brother was calling me.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I will read when my brother called me.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am reading when my brother called me.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحدث المستمر في الماضي يُنقل بـ past continuous، بينما الحدث الواقع خلاله يأتي في past simple.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«We will leave after lunch.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'سنغادر بعد الغداء.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'غادرنا قبل الغداء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نغادر أثناء الغداء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كنا نغادر غدًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'will leave تعبر عن المستقبل، لذلك المعنى «سنغادر».',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«كان الجو باردًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'It was cold.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It will be cold.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It is cold yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It has cold.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الوصف لحالة جوية في الماضي يحتاج إلى صيغة الماضي: It was cold.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«She has already eaten.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'لقد أكلت بالفعل.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ستأكل لاحقًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كانت تشتري الطعام.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لم تأكل بعد.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'has already eaten تعني أن الفعل تم بالفعل، وalready تؤكد حدوثه.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«غدًا سأعمل من المنزل.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Tomorrow, I will work from home.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tomorrow, I worked from home.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yesterday, I will work from home.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tomorrow, I was working from home yesterday.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'غدًا وسأعمل يشيران إلى المستقبل، لذلك نستخدم will work.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«It was raining all morning.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'كانت السماء تمطر طوال الصباح.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ستمطر طوال الصباح.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أمطرت غدًا طوال الصباح.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'توقفت الأمطار طوال الصباح.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'was raining تصف حدثًا كان مستمرًا في الماضي، وall morning تعني طوال الصباح.',
                    ],
                    [
                        'question' => 'أي ترجمة أفضل لـ«كنت أنتظر منذ ساعة.» في سياق ماضٍ؟',
                        'choices' => [
                            [
                                'choice_text' => 'I had been waiting for an hour.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I will wait for an hour.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am waiting yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I have wait for an hour last year.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في سياق ماضٍ سابق لنقطة ماضية أخرى، past perfect continuous ينقل استمرار الانتظار.',
                    ],
                    [
                        'question' => 'ما الفرق الأساسي في ترجمة «ذهب» و«كان يذهب» إلى الإنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'الأولى قد تعني حدثًا منجزًا، والثانية قد تعبر عن عادة أو استمرار في الماضي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كلاهما مستقبل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأولى نفي والثانية سؤال.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا فرق زمني بينهما إطلاقًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اختيار الزمن يجب أن يعكس الفرق بين حدث وقع وبين عادة أو حالة كانت مستمرة أو متكررة.',
                    ],
                ],
            ],
            [
                'title' => 'الضمائر والملكية في الترجمة',
                'description' => 'نقل الضمائر وضمائر الملكية والإشارة مع الحفاظ على المرجع والعدد.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«هذا كتابي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'This is my book.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'This are my book.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'These is my book.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'This is mine book.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'This is مفرد، وضمير الملكية المناسب قبل الاسم هو my.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«These are our friends.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هؤلاء أصدقاؤنا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هذا صديقنا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هؤلاء أعداؤنا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تلك معلمتنا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'These are للجمع القريب، وour friends تعني أصدقاءنا.',
                    ],
                    [
                        'question' => 'اختر الترجمة الإنجليزية الصحيحة لـ«أحب سيارتي لأنها مريحة.»',
                        'choices' => [
                            [
                                'choice_text' => 'I love my car because it is comfortable.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I love mine car because he is comfortable.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I loves my car because it are comfortable.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I love my cars because they is comfortable.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'car مفرد، لذلك it، وmy تأتي قبل الاسم car.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«I often talk to her.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أتحدث إليها غالبًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أراها غالبًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أكتب عنها غالبًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أسمعها غالبًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'talk to her تعني «أتحدث إليها»، وher ضمير مفعول للمفرد المؤنث.',
                    ],
                    [
                        'question' => 'في الجملة «Marie took her bag»، إلى ماذا يمكن أن يشير her؟',
                        'choices' => [
                            [
                                'choice_text' => 'إلى ملكية الحقيبة لامرأة أو فتاة بحسب السياق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلى أن الحقيبة جمع.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلى أن ماري رجل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلى أن الحقيبة ملك لعدة أشخاص بالضرورة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'her ضمير ملكية يعود عادةً إلى مؤنث مفرد، بينما bag هو الشيء المملوك.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«هؤلاء الطالبات مجتهدات.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'These students are hardworking.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'This students is hardworking.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'These student is hardworking.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Those student are hardwork.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'These وstudents للجمع، ومع الجمع نستخدم are، وhardworking صفة مناسبة هنا.',
                    ],
                    [
                        'question' => 'ما الفرق الذي يجب الحفاظ عليه عند ترجمة «هذا» و«هؤلاء»؟',
                        'choices' => [
                            [
                                'choice_text' => 'الفرق بين المفرد والجمع في الإشارة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الفرق بين الماضي والمستقبل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الفرق في اسم الكاتب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا يوجد فرق.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'This يشير عادةً إلى مفرد قريب، بينما these تشير إلى جمع قريب.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية لـ«أعطيتها الكتاب.» عندما تكون «ها» لامرأة واحدة؟',
                        'choices' => [
                            [
                                'choice_text' => 'I gave her the book.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I gave them the book.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I gave she the book.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I her gave the book.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'her هي ضمير المفعول للمفرد المؤنث، ولذلك تأتي بعد الفعل gave.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«I know them.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أنا أعرفهم/أعرفهن.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أنا أعرفه.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنا أتحدث إليهم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنا أراها فقط.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'them ضمير مفعول للجمع، ويمكن أن يعود على مذكر أو مؤنث جمع بحسب السياق.',
                    ],
                    [
                        'question' => 'لماذا يجب الانتباه إلى مرجع الضمير في الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن اختيار الضمير الخطأ قد يغيّر من المقصود بالفعل أو الملكية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الضمائر لا تحمل معنى.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن كل الضمائر مترادفة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الضمائر تحدد طول الفقرة فقط.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الضمير يحدد من يقوم بالفعل أو من يقع عليه أو من يملك شيئًا، لذلك قد يغير المعنى.',
                    ],
                ],
            ],
            [
                'title' => 'الصفات والوصف',
                'description' => 'ترجمة الصفات والوصف بين العربية والإنجليزية مع الحفاظ على العدد والتركيب الطبيعي.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«رجل طويل»؟',
                        'choices' => [
                            [
                                'choice_text' => 'a tall man',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'a man tall',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'an tall man',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a tall men',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في الإنجليزية تأتي الصفة غالبًا قبل الاسم: a tall man.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«امرأة ذكية»؟',
                        'choices' => [
                            [
                                'choice_text' => 'a smart woman',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'an smart woman',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a woman smart',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a smart women',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'smart صفة، وwoman مفرد، لذلك a smart woman صحيحة.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«large houses»؟',
                        'choices' => [
                            [
                                'choice_text' => 'بيوت كبيرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'بيت كبير',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بيوت صغيرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بيوت قديمة فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'houses جمع، وlarge تعني كبيرة، لذلك المعنى «بيوت كبيرة».',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«سيارة جديدة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'a new car',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'a newly car',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'an new car',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'new a car',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'new تأتي قبل car، ونستخدم a لأن new تبدأ بصوت ساكن.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«أصدقاء قدامى»؟',
                        'choices' => [
                            [
                                'choice_text' => 'old friends',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'old friend',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'olds friends',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'friend old',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'friends جمع، وold لا تتغير مع العدد في الإنجليزية: old friends.',
                    ],
                    [
                        'question' => 'ماذا يجب أن يراعي المترجم عند نقل وصف عربي إلى الإنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'ترتيب الصفات الطبيعي واستخدام العدد الصحيح للاسم',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نسخ ترتيب العربية حرفيًا دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الصفات كلها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحويل كل صفة إلى فعل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الإنجليزية تضع الصفات عادةً قبل الأسماء، ويجب الانتباه إلى المفرد والجمع.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية لـ«المدن الجميلة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'the beautiful cities',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'the beautiful city',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a beautiful cities',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the beautifully cities',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'cities جمع، والصفة beautiful لا تتغير مع الجمع.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«a small house»؟',
                        'choices' => [
                            [
                                'choice_text' => 'بيت صغير',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'بيوت صغيرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بيت كبير',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'منزل قديم',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'small تعني صغير، وhouse مفرد، لذلك المعنى «بيت صغير».',
                    ],
                    [
                        'question' => 'أي عبارة تشرح لماذا لا ننسخ ترتيب الصفات حرفيًا من العربية إلى الإنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن لكل لغة ترتيبًا طبيعيًا للصفات والأسماء',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الصفات ممنوعة في الإنجليزية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن العربية لا تحتوي صفات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن كل صفة يجب أن تصبح فعلًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الطبيعية تحترم ترتيب اللغة الهدف، فالصفة في الإنجليزية غالبًا تسبق الاسم.',
                    ],
                    [
                        'question' => 'لماذا نترجم «فكرة جيدة» إلى «a good idea»؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن هذا هو التركيب الطبيعي للصفة والاسم في الإنجليزية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن idea فعل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن good تعني سيئ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الإنجليزية لا تستخدم أدوات التنكير',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في الإنجليزية تأتي الصفة good قبل الاسم idea، ونستخدم a لأن idea مفرد معدود.',
                    ],
                ],
            ],
            [
                'title' => 'حروف الجر والتراكيب الشائعة',
                'description' => 'ترجمة حروف الجر والتعبيرات المتلازمة واختيار الصياغة الإنجليزية الطبيعية.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«أعيش في المغرب.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I live in Morocco.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I live on Morocco.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I live at Morocco.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I live by Morocco.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'حرف الجر in هو المناسب مع أسماء البلدان في هذا السياق.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية لـ«أذهب إلى المدرسة كل يوم.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I go to school every day.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I go at school every day.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I go in school every day.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I go for school every day.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التعبير الطبيعي هو go to school للدلالة على الذهاب إلى المدرسة.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«He comes from Paris.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هو يأتي من باريس.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو يذهب إلى باريس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يعيش داخل باريس بالضرورة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يعمل في باريس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'comes from تشير إلى المصدر أو المكان الذي يأتي منه الشخص.',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«على الكرسي»؟',
                        'choices' => [
                            [
                                'choice_text' => 'on the chair',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'in the chair',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at the chair',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'from the chair',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'on يستخدم للتعبير عن الوجود فوق سطح أو على شيء.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«أفكر فيك.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I am thinking of you.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I am thinking on you.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am thinking at you.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am thinking from you.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'thinking of you تعبير إنجليزي طبيعي لمعنى «أفكر فيك».',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«I am talking with my teacher.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أتحدث مع أستاذي.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أتحدث عن أستاذي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أذهب إلى أستاذي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أكتب لأستاذي.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'with تعني «مع»، ولذلك الجملة تشير إلى الحديث برفقة الأستاذ.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الصحيحة لـ«من أجل عائلتي»؟',
                        'choices' => [
                            [
                                'choice_text' => 'for my family',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'from my family',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on my family',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at my family',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'for مناسبة هنا لمعنى «من أجل» أو «لصالح».',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«أعيش مع أخي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I live with my brother.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I live for my brother.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I live on my brother.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I live from my brother.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'with تعني «مع»، وهي المناسبة للتعبير عن العيش برفقة شخص.',
                    ],
                    [
                        'question' => 'لماذا لا يصح ترجمة حروف الجر كلمة بكلمة دائمًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن التراكيب الطبيعية تختلف من لغة إلى أخرى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن حروف الجر بلا معنى.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الإنجليزية لا تستخدم حروف الجر.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن العربية والإنجليزية متطابقتان في كل التراكيب.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الطبيعية تعتمد على التلازم والاستعمال في اللغة الهدف، وقد يختلف حرف الجر بين اللغتين.',
                    ],
                    [
                        'question' => 'أي عبارة تشير إلى ترجمة طبيعية أكثر من ترجمة حرفية؟',
                        'choices' => [
                            [
                                'choice_text' => 'اختيار التعبير الإنجليزي الشائع حتى لو اختلف ترتيب الكلمات',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نسخ كل كلمة في مكانها مهما بدت الجملة غريبة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمات القصيرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إضافة معلومات غير موجودة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المترجم الجيد يبحث عن الصياغة التي تؤدي المعنى نفسه بصورة طبيعية في الإنجليزية.',
                    ],
                ],
            ],
            [
                'title' => 'ترجمة الحوار والمواقف اليومية',
                'description' => 'ترجمة الحوار اليومي مع الحفاظ على مستوى الرسمية والمقصد ونبرة المتحدث.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الإنجليزية الطبيعية لـ«كيف حالك؟» في موقف عادي؟',
                        'choices' => [
                            [
                                'choice_text' => 'How are you?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'How you are?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'How do you?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'What are you?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'How are you? هي الصيغة الشائعة للسؤال عن الحال.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«I would like a coffee, please.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أود قهوة، من فضلك.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أكره القهوة، من فضلك.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شربت قهوة أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا أريد قهوة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'I would like صيغة مهذبة تعني «أود» أو «أرغب في».',
                    ],
                    [
                        'question' => 'في حوار، قال شخص: «Excuse me, where is the station?» ما المعنى؟',
                        'choices' => [
                            [
                                'choice_text' => 'عذرًا، أين المحطة؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'شكرًا، أين الفندق؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عذرًا، متى يصل القطار؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'من فضلك، أين المطار؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'station تعني المحطة، وwhere is تسأل عن المكان.',
                    ],
                    [
                        'question' => 'ما الذي يجب الحفاظ عليه عند ترجمة طلب مهذب؟',
                        'choices' => [
                            [
                                'choice_text' => 'درجة الأدب ونبرة الطلب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ترتيب الكلمات العربية حرفيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف عبارات المجاملة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المعنى التداولي جزء من الرسالة؛ يجب ألا تتحول عبارة مهذبة إلى أمر قاسٍ.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الطبيعية لـ«لا تقلق!» لصديق؟',
                        'choices' => [
                            [
                                'choice_text' => 'Don\'t worry!',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'No worry you!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Don\'t to worry!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Not worry!',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Don\'t worry! هي صيغة الأمر المنفي الطبيعية للتعبير عن عدم القلق.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«See you later!»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أراك لاحقًا!',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلى الأبد!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'صباح الخير!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شكرًا لك!',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'See you later تعني «أراك لاحقًا» وتستخدم عادة عند الوداع.',
                    ],
                    [
                        'question' => 'إذا قال شخص «Thank you very much»، فما الرد الطبيعي؟',
                        'choices' => [
                            [
                                'choice_text' => 'You\'re welcome.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Goodbye very much.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Please thank.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Never welcome.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'You\'re welcome هي من أشهر الردود على Thank you.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية المهذبة لـ«هل يمكنك مساعدتي؟»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Could you help me?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Could you helping me?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Can you to help me?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Could helping you me?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'بعد could يأتي الفعل في صورته الأساسية: Could you help me?',
                    ],
                    [
                        'question' => 'لماذا قد تكون الترجمة الحرفية للحوار مشكلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن التعبير الطبيعي والنبرة قد يحتاجان إلى صياغة مختلفة في اللغة الهدف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الحوار لا يحمل معنى.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن جميع الحوارات يجب أن تصبح رسمية.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن المترجم يجب أن يحذف المتحدثين.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحوار ينقل المعنى والعلاقة والنبرة، وليس الكلمات منفصلة فقط.',
                    ],
                    [
                        'question' => 'إذا كان الشخص غاضبًا ويستخدم عبارة حادة، ماذا يجب أن يراعي المترجم؟',
                        'choices' => [
                            [
                                'choice_text' => 'الحفاظ على درجة القوة والانفعال بصورة طبيعية في الإنجليزية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تحويل العبارة تلقائيًا إلى أسلوب لطيف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمات العاطفية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إضافة كلمات قاسية غير موجودة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المطلوب نقل النبرة كما هي قدر الإمكان دون اختلاق معنى جديد.',
                    ],
                ],
            ],
            [
                'title' => 'السياق والتلازم اللفظي',
                'description' => 'اختيار المعنى والمقابل الطبيعي للكلمات والتعبيرات اعتمادًا على السياق.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'لماذا قد يكون للكلمة العربية الواحدة أكثر من ترجمة إنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن معناها يتحدد بحسب السياق والاستعمال',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن كل الكلمات بلا معنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الإنجليزية لا تحتوي مرادفات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن المترجم يختار عشوائيًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق يحدد المعنى المقصود، لذلك قد تختلف الترجمة بحسب المجال والجملة.',
                    ],
                    [
                        'question' => 'إذا وردت كلمة «عين» في سياق جسم الإنسان، فما ترجمتها الأقرب؟',
                        'choices' => [
                            [
                                'choice_text' => 'eye',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'spring',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'source',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'watch',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في سياق جسم الإنسان، «عين» تعني eye.',
                    ],
                    [
                        'question' => 'كيف تترجم «عين الماء» بصورة طبيعية؟',
                        'choices' => [
                            [
                                'choice_text' => 'water spring',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'water eye',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'spring eye',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'water watch',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في هذا السياق تشير «عين الماء» إلى نبع، لذلك spring هو المقابل الأساسي.',
                    ],
                    [
                        'question' => 'ما أهمية السياق في اختيار معنى الكلمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'يساعد على تحديد المقصود بدل اختيار معنى قاموسي عشوائي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يلغي أهمية القواعد',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يجعل كل الكلمات مترادفة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يمنع قراءة الجملة كاملة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'القاموس يقدم احتمالات، لكن السياق هو الذي يحدد أي معنى يناسب النص.',
                    ],
                    [
                        'question' => 'إذا كانت العبارة العربية مجازية، فما الخطوة الأولى الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'فهم المقصود ثم البحث عن تعبير طبيعي يؤدي الوظيفة نفسها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ترجمة كل كلمة حرفيًا دون نظر إلى المعنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف المجاز دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إضافة تفسير طويل مهما كان السياق',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المجاز قد يحتاج إلى مقابل اصطلاحي أو صياغة مختلفة للحفاظ على الأثر والمعنى.',
                    ],
                    [
                        'question' => 'ما المشكلة في ترجمة «اتخذ قرارًا» إلى «took a decision» في كل السياقات؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد تكون هناك صياغة إنجليزية أكثر شيوعًا مثل made a decision',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن decision تعني مشكلة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الإنجليزية لا تستخدم take',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن العربية لا تستخدم الفعل اتخذ',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التلازم اللفظي يختلف بين اللغات، وmade a decision هو التعبير الشائع في كثير من السياقات.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الطبيعية لـ«اتخذ قرارًا مهمًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'He made an important decision.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'He did an important decision.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He built an important decision.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He found an important decision.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'made a decision هو التلازم اللفظي الطبيعي في الإنجليزية.',
                    ],
                    [
                        'question' => 'إذا أعطت ترجمتان المعنى نفسه تقريبًا لكن إحداهما أكثر شيوعًا في الإنجليزية، ماذا تفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'الصياغة الطبيعية المناسبة للسياق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الأطول دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأكثر حرفية مهما بدت غريبة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأصعب فهمًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الطبيعية توازن بين الأمانة للمعنى والاستعمال المألوف في اللغة الهدف.',
                    ],
                    [
                        'question' => 'ما الذي يساعد على اختيار معنى الكلمة إذا كان لها عدة احتمالات؟',
                        'choices' => [
                            [
                                'choice_text' => 'النص المحيط والموقف والموضوع العام',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد حروف الكلمة فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أول معنى في القاموس دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المعنى المحلي قد يتحدد من الجملة، بينما قد يحسم الموضوع العام الاختيار.',
                    ],
                    [
                        'question' => 'إذا كانت الجملة الإنجليزية صحيحة نحويًا لكنها تبدو غريبة، ما المشكلة المحتملة؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد تكون صحيحة نحويًا لكنها غير طبيعية من حيث التلازم أو الاستعمال',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هذا يعني أن الإنجليزية بلا قواعد',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يجب حذف الفعل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'العربية والإنجليزية متطابقتان تمامًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الطلاقة لا تعتمد على القواعد وحدها، بل على اختيار الكلمات والتراكيب الطبيعية.',
                    ],
                ],
            ],
            [
                'title' => 'ترجمة النصوص القصيرة',
                'description' => 'تطبيق الترجمة على فقرات قصيرة مترابطة مع الحفاظ على الاتساق والمرجع والزمن.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'إذا بدأت فقرة بـ«في صباح يوم الاثنين ذهب سامي إلى السوق»، فما الأفضل عند ترجمة بقية الفقرة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الحفاظ على مرجع «سامي» والزمن والعلاقة بين الأحداث',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تغيير اسم سامي في كل جملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير الزمن عشوائيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ترجمة كل جملة بمعزل عن الفقرة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة النصية تتطلب اتساقًا بين الجمل، وليس ترجمة منفصلة تجعل الشخصيات أو الأزمنة غير متسقة.',
                    ],
                    [
                        'question' => 'إذا استخدم النص العربي اسمًا مختصرًا ثم ضميرًا يعود عليه، ماذا يجب الحفاظ عليه؟',
                        'choices' => [
                            [
                                'choice_text' => 'وضوح المرجع واستمرار الإحالة عبر الفقرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الكلمات في كل جملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التقسيم نفسه مهما كان غير طبيعي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف جميع الضمائر',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الجيدة تحافظ على وضوح من يعود إليه الضمير حتى بعد تغيير تركيب الجملة.',
                    ],
                    [
                        'question' => 'في فقرة سردية، إذا كان الفعل الرئيسي في الماضي، ما الذي يجب مراقبته عند الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'اتساق الأزمنة والعلاقة بين الأحداث',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'استخدام الحاضر دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف العبارات الزمنية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير ترتيب الأحداث بلا سبب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اتساق الأزمنة يمنع القارئ من فهم التسلسل الزمني بصورة خاطئة.',
                    ],
                    [
                        'question' => 'إذا كان في النص «هذا القرار»، ثم جاء في الجملة التالية «ذلك القرار»، ماذا يجب مراعاته؟',
                        'choices' => [
                            [
                                'choice_text' => 'الحفاظ على العلاقة الإشارية والسياق بين الجمل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ترجمة الكلمتين بالطريقة نفسها دائمًا دون سياق',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف أسماء الإشارة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحويل القرار إلى فعل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'أسماء الإشارة قد تؤدي دورًا في تماسك النص، لذلك يجب فهم علاقتها بما سبق.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«وصلت مريم إلى المكتب ثم بدأت عملها.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Mary arrived at the office and then started her work.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Mary arrives at the office and then starts her work yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mary was arrive at the office and starts her work.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mary arrived the office and then begin her work.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'النص يروي حدثين منجزين في الماضي، ويمكن ربطهما طبيعيًا بـ arrived ثم started.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأقرب لـ«After he finished the report, he sent it to his manager.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'بعد أن أنهى التقرير، أرسله إلى مديره.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'قبل أن يبدأ التقرير، أرسله إلى مديره.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أثناء كتابة التقرير، لم يرسله.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنهى المدير التقرير بدلًا منه.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'After يبين أن إنهاء التقرير حدث أولًا، ثم أرسلَه بعد ذلك.',
                    ],
                    [
                        'question' => 'إذا كرر النص كلمة «رحلة» عدة مرات، هل يجب حذف بعضها في الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'ليس تلقائيًا؛ يجب فهم وظيفة التكرار أولًا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نعم دائمًا لتحسين الأسلوب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نعم لأن التكرار لا معنى له',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يجب استبدالها بمعلومة جديدة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التكرار قد يكون جزءًا من التماسك أو التأكيد، لذلك ينبغي فهم وظيفته قبل حذفه.',
                    ],
                    [
                        'question' => 'ما الذي يجعل ترجمة فقرة أفضل من ترجمة جمل منفصلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الاهتمام بالترابط والإحالات والنبرة العامة للفقرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'حذف الروابط بين الجمل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير المعنى في كل جملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التركيز على أطول كلمة فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفقرة وحدة مترابطة، لذلك يجب أن تكون الجمل المترجمة متناسقة في المرجع والمنطق والنبرة.',
                    ],
                    [
                        'question' => 'إذا كانت الجملة الأولى تشير إلى «المشروع» ثم تستخدم الثانية «it»، ماذا يجب التأكد منه؟',
                        'choices' => [
                            [
                                'choice_text' => 'أن الضمير it يعود بوضوح إلى المشروع',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أن it تعود إلى أي اسم عشوائي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن الضمير يصبح جمعًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن نحذف it دائمًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تماسك الإحالة مهم جدًا، ويجب ألا يصبح الضمير غامض المرجع في النص المترجم.',
                    ],
                    [
                        'question' => 'بعد ترجمة فقرة كاملة، ما أفضل خطوة مراجعة أخيرة؟',
                        'choices' => [
                            [
                                'choice_text' => 'قراءتها كأنها نص إنجليزي مستقل للتأكد من سلاستها واتساقها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'مقارنة عدد الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إعادة ترتيب الجمل عشوائيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف جميع الروابط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'قراءة النص الهدف مستقلًا تكشف الجمل الغريبة وعدم الاتساق الذي قد لا يظهر عند مقارنة كلمة بكلمة.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة شاملة في الترجمة العربية الإنجليزية',
                'description' => 'اختبار شامل يجمع الأزمنة والضمائر وحروف الجر والحوار والسياق والترجمة الطبيعية.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'اختر الترجمة الإنجليزية الأنسب لـ«سأرسل لك الرسالة مساءً.»',
                        'choices' => [
                            [
                                'choice_text' => 'I will send you the message this evening.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I sent you the message tomorrow evening.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I was send you the message this evening.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I will sending you message this evening.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'will send يعبر عن المستقبل، وthis evening تنقل «مساءً» في هذا السياق.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«We have met our new neighbors.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'لقد التقينا بجيراننا الجدد.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سنلتقي بجيراننا القدامى.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نعيش مع جيراننا الجدد.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عرفنا معلمينا الجدد.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'have met تعبر عن حدوث اللقاء، وour new neighbors تعني جيراننا الجدد.',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«هذه الرسالة مهمة جدًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'This message is very important.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'These message are very important.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'This messages is very importantly.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'That message are very importance.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'This مفرد، وmessage مفرد، والصفة المناسبة هي important.',
                    ],
                    [
                        'question' => 'ما الترجمة الطبيعية لـ«لا أعرف أين محطة القطار.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I don\'t know where the train station is.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I don\'t know where is the train station.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I not know where the train station.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I don\'t know the train station where is.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في السؤال غير المباشر يكون ترتيب الجملة خبريًا: where the train station is.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الأنسب لـ«من فضلك، انتظرني هنا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Please wait for me here.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Please wait me here.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Please waiting for me here.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Please wait to me here.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل wait يحتاج for قبل الشخص في هذا الاستخدام: wait for me.',
                    ],
                    [
                        'question' => 'إذا كان النص العربي رسميًا، فما الذي يجب الحفاظ عليه في الإنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'مستوى الرسمية ونبرة النص',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تحويله دائمًا إلى لغة عامية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف عبارات الاحترام',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استخدام أقصر الكلمات فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المستوى الأسلوبي جزء من معنى النص، لذلك ينبغي أن تبقى الترجمة رسمية إذا كان المصدر رسميًا.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الطبيعية لـ«He needs some rest.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هو يحتاج إلى بعض الراحة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو يصنع بعض الراحة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو في بعض الراحة يحتاج.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يحب الراحة بالضرورة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'needs some rest تعني أنه يحتاج إلى بعض الراحة.',
                    ],
                    [
                        'question' => 'ما أفضل وصف للترجمة الجيدة بين العربية والإنجليزية؟',
                        'choices' => [
                            [
                                'choice_text' => 'تنقل المعنى والمقصد والنبرة بصياغة طبيعية في اللغة الهدف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تطابق ترتيب الكلمات حرفيًا دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تضيف أفكارًا غير موجودة لتحسين النص',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تهتم بالقواعد وتترك المعنى',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الجيدة تجمع بين الأمانة للمعنى وحسن الصياغة في اللغة الهدف.',
                    ],
                    [
                        'question' => 'إذا وجدت كلمة لا تعرف ترجمتها الدقيقة، فما الخطوة الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'فحص السياق أولًا قبل اختيار المقابل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اختيار أول معنى قاموسي دون قراءة الجملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمة فورًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استبدالها بكلمة عشوائية',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق قد يغير المعنى المقصود، لذلك لا يكفي اختيار أول معنى في القاموس.',
                    ],
                    [
                        'question' => 'بعد إنهاء الترجمة، ما المراجعة الأكثر فائدة؟',
                        'choices' => [
                            [
                                'choice_text' => 'مراجعة المعنى ثم القواعد ثم طبيعية الأسلوب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عد الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير كل الأفعال بلا سبب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'مقارنة طول الجمل فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المراجعة الشاملة تتأكد أولًا من سلامة المعنى، ثم صحة اللغة، ثم سلاسة النص المترجم.',
                    ],
                ],
            ],
            [
                'title' => 'المراجعة والتدقيق في الترجمة',
                'description' => 'مراجعة الترجمة العربية الإنجليزية واكتشاف أخطاء المعنى والقواعد والطبيعية والأسلوب.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما أول سؤال ينبغي طرحه عند مراجعة ترجمة جملة؟',
                        'choices' => [
                            [
                                'choice_text' => 'هل نُقل المعنى المقصود بصورة صحيحة؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هل أصبحت الجملة أطول؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل عدد الكلمات مطابق؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل كل كلمة لها ترجمة حرفية؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'صحة المعنى هي الأولوية؛ فقد تكون الجملة سليمة نحويًا لكنها تنقل معنى مختلفًا.',
                    ],
                    [
                        'question' => 'أي مثال يمثل خطأ في المعنى رغم أن الجملة الإنجليزية تبدو سليمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'ترجمة «أنا عندي عشر سنوات» إلى I have ten years.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ترجمة «أنا أعمل هنا» إلى I work here.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ترجمة «هي في البيت» إلى She is at home.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ترجمة «وصل القطار» إلى The train arrived.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'I have ten years ليست الصياغة الإنجليزية الصحيحة للعمر في هذا السياق؛ المعنى الطبيعي هو I am ten years old.',
                    ],
                    [
                        'question' => 'ما الترجمة الإنجليزية الطبيعية لـ«عمري عشرون سنة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'I am twenty years old.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I have twenty years.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am having twenty years.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I make twenty years.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العمر في الإنجليزية يُعبّر عنه عادةً بالتركيب I am ... years old.',
                    ],
                    [
                        'question' => 'إذا كانت الترجمة تحتوي على فعل لا ينسجم مع الفاعل، ماذا يجب فحصه؟',
                        'choices' => [
                            [
                                'choice_text' => 'اتفاق الفعل مع الفاعل والزمن المستخدم',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لون الصفحة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عدد علامات الاقتباس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عنوان المصدر فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المراجعة النحوية تتأكد من الفاعل والزمن وتصريف الفعل المناسب.',
                    ],
                    [
                        'question' => 'أي صياغة أفضل لـ«هو يستمتع بقراءة الكتب»؟',
                        'choices' => [
                            [
                                'choice_text' => 'He enjoys reading books.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'He enjoys to read books.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He enjoy reading books.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He is enjoy reading books.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'بعد enjoys يأتي gerund في هذا التركيب، ومع he نستخدم enjoys.',
                    ],
                    [
                        'question' => 'إذا كانت ترجمة الجملة حرفية لكنها تبدو غريبة لمتحدث إنجليزي، ما الإجراء الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'إعادة صياغتها بتعبير إنجليزي طبيعي مع الحفاظ على المعنى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الإبقاء عليها لأنها حرفية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف نصف الجملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إضافة معلومات جديدة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الهدف من الترجمة ليس مطابقة ترتيب الكلمات، بل إنتاج نص طبيعي يحافظ على المعنى.',
                    ],
                    [
                        'question' => 'ما أهمية مراجعة علامات الترقيم في النص المترجم؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأنها تساعد على وضوح العلاقات والمعنى والنبرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأنها تحدد موضوع النص دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأنها أهم من المعنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأنها تجعل كل الجمل متساوية الطول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'علامات الترقيم قد تغير الوقف والعلاقة بين الأفكار، لذلك ينبغي مراجعتها مع النص النهائي.',
                    ],
                    [
                        'question' => 'إذا كانت الكلمة الإنجليزية المختارة صحيحة في القاموس لكنها غير مناسبة للمجال، فما المشكلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'اختيار معنى أو لفظ غير ملائم للسياق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'خطأ في حجم الخط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'خطأ في ترتيب الصفحات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عدم وجود أي مشكلة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الكلمات لها استعمالات ودرجات رسمية مختلفة، وقد يكون اللفظ القاموسي غير مناسب للمجال المحدد.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لمراجعة ترجمة قصيرة بعد الانتهاء منها؟',
                        'choices' => [
                            [
                                'choice_text' => 'قراءة الترجمة كاملة ثم مقارنتها بالمصدر بحثًا عن المعنى والاتساق والطبيعية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدّ الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قراءة أول كلمة وآخر كلمة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'مقارنة علامات الترقيم فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المراجعة الشاملة تجمع بين فحص المصدر والنص الهدف بدل التركيز على عنصر واحد.',
                    ],
                    [
                        'question' => 'ما الهدف النهائي من التدقيق في الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'إنتاج نص إنجليزي دقيق وواضح وطبيعي ويحافظ على مقصد المصدر',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'جعل النص أطول من الأصل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'زيادة عدد الكلمات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير أسلوب الكاتب بالكامل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التدقيق الجيد يحسن الدقة والوضوح والطبيعية دون تغيير الرسالة الأصلية بلا سبب.',
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
