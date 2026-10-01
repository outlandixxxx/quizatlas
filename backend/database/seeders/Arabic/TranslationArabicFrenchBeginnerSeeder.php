<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationArabicFrenchBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'translation-arabic-french')->firstOrFail();

        $quizzes = [
            [
                'title' => 'أساسيات الترجمة العربية الفرنسية',
                'description' => 'مبادئ ترجمة الجمل البسيطة بين العربية والفرنسية مع التركيز على المعنى والسياق.',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب للجملة العربية: «أنا طالب.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je suis étudiant.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'ai étudiant.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je fais étudiant.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je suis étudier.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة الفرنسية الصحيحة تستعمل الفعل être مع الصفة أو الاسم الوصفي: Je suis étudiant.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأنسب للجملة الفرنسية: «Il habite à Rabat.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هو يسكن في الرباط.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو يذهب إلى الرباط.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يعمل في الرباط.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يحب الرباط.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل habiter يعني يسكن، لذلك فالمعنى هو أنه يسكن في الرباط.',
                    ],
                    [
                        'question' => 'اختر الترجمة الفرنسية الصحيحة لـ«هي تحب القراءة.»',
                        'choices' => [
                            [
                                'choice_text' => 'Elle aime la lecture.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle aime lire le.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est la lecture.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle a la lecture.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في الفرنسية يمكن ترجمة «تحب القراءة» بـ Elle aime la lecture، حيث la lecture اسم بمعنى القراءة.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب للجملة الفرنسية: «Nous sommes prêts.»؟',
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
                                'choice_text' => 'نحن خائفون.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'prêts تعني مستعدين، والجملة تعني «نحن مستعدون».',
                    ],
                    [
                        'question' => 'اختر الترجمة الفرنسية الأنسب لـ«الكتاب على الطاولة.»',
                        'choices' => [
                            [
                                'choice_text' => 'Le livre est sur la table.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le livre a sur la table.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le livre est dans la table.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La livre est sur le table.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'sur تعني «على»، ويجب استعمال le livre و la table وفق جنس الاسمين.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأقرب لـ«Je cherche mes clés.»؟',
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
                                'choice_text' => 'أصل إلى مفاتيحي.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل chercher يعني «يبحث عن»، وmes clés تعني «مفاتيحي».',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«نحن ندرس الفرنسية.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Nous étudions le français.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Nous étudions la française.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nous sommes étudier français.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nous avons étudions le français.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل étudier مع nous يصبح étudions، واسم اللغة الفرنسية هو le français.',
                    ],
                    [
                        'question' => 'ما المعنى الصحيح لـ«Le train arrive à huit heures.»؟',
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
                        'explanation' => 'arrive تعني يصل، وà huit heures تعني في الساعة الثامنة.',
                    ],
                    [
                        'question' => 'أي ترجمة فرنسية أنسب لـ«أحتاج إلى مساعدة.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'J\'ai besoin d\'aide.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je besoin de aide.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je suis besoin d\'aide.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'ai aide besoin.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التعبير الفرنسي الثابت هو avoir besoin de، لذلك نقول J\'ai besoin d\'aide.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأنسب لـ«Fermez la porte, s\'il vous plaît.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أغلقوا الباب، من فضلكم.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'افتحوا الباب، من فضلكم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نظفوا الباب، من فضلكم.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ارسموا الباب، من فضلكم.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Fermez هو فعل الأمر من fermer بمعنى أغلق، وs\'il vous plaît تعني من فضلكم.',
                    ],
                ],
            ],
            [
                'title' => 'الأزمنة في الترجمة',
                'description' => 'التدرب على نقل الزمن والمعنى في الحاضر والماضي والمستقبل بين العربية والفرنسية.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«سأزور صديقي غدًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je visiterai mon ami demain.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je visitais mon ami demain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'ai visité mon ami demain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je visite mon ami hier.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '«سأزور» تدل على المستقبل، ولذلك يناسبها هنا futur simple: Je visiterai.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«J\'ai fini mon travail.»؟',
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
                                'choice_text' => 'كنت أنهي عملي.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا أنهي عملي.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'J\'ai fini هو passé composé ويعبر هنا عن حدث تم إنجازه: أنهيت عملي.',
                    ],
                    [
                        'question' => 'أي ترجمة فرنسية أنسب لـ«كنت أقرأ عندما اتصل بي أخي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je lisais quand mon frère m\'a appelé.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'ai lu quand mon frère m\'appelait.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je lirai quand mon frère m\'a appelé.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je lis quand mon frère m\'appellera.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحدث المستمر في الماضي يُنقل هنا بـ imparfait: Je lisais، بينما الحدث الواقع يقطع الاستمرار بصيغة passé composé.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الأنسب لـ«Nous partirons après le déjeuner.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'سنغادر بعد الغداء.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'غادرنا بعد الغداء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نغادر أثناء الغداء.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كنا نغادر قبل الغداء.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'partirons صيغة مستقبل، لذلك تعني «سنغادر».',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«كان الجو باردًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Il faisait froid.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il fera froid.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il a fait froid demain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il fait froid hier.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'للوصف المستمر لحالة الطقس في الماضي نستعمل imparfait: Il faisait froid.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«Elle a déjà mangé.»؟',
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
                                'choice_text' => 'كانت ستأكل.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا تريد الأكل.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'déjà تعني بالفعل، وa mangé تشير إلى فعل تم في الماضي.',
                    ],
                    [
                        'question' => 'أي ترجمة فرنسية صحيحة لـ«غدًا سأعمل من المنزل.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Demain, je travaillerai de chez moi.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Demain, je travaillais de chez moi.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hier, je travaillerai de chez moi.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Demain, j\'ai travaillé de chez moi.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'وجود «غدًا» يقتضي معنى مستقبليًا، لذلك يناسبها travaillerai.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Il pleuvait toute la matinée.»؟',
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
                        'explanation' => 'pleuvait بصيغة imparfait تدل على حالة مستمرة في الماضي، وtoute la matinée تعني طوال الصباح.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«لقد كنت أنتظر ساعة.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'J\'attendais depuis une heure.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'attendrai une heure hier.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'ai attendu depuis demain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je vais attendre depuis une heure.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق يدل على استمرار الانتظار في الماضي، وdepuis une heure تنقل مدة الاستمرار حتى نقطة مرجعية.',
                    ],
                    [
                        'question' => 'ما الفرق الأساسي الذي يجب الحفاظ عليه عند ترجمة «ذهب» و«كان يذهب»؟',
                        'choices' => [
                            [
                                'choice_text' => 'الأولى قد تشير إلى حدث مكتمل، والثانية إلى عادة أو استمرار في الماضي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا فرق بينهما أبدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كلاهما مستقبل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الأولى تعني نفي الفعل والثانية تعني أمرًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اختيار الزمن جزء من المعنى؛ الترجمة الجيدة تميز بين الحدث المنجز والوصف أو العادة المستمرة.',
                    ],
                ],
            ],
            [
                'title' => 'الضمائر والمرجع',
                'description' => 'ترجمة الضمائر والملكية والإشارة بدقة مع الحفاظ على مرجعها في الجملة.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«هذا كتابي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'C\'est mon livre.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'C\'est ma livre.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ce sont mon livre.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est mon livre.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'livre مذكر، لذلك نستخدم mon، والتعبير الطبيعي هنا هو C\'est mon livre.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Ce sont nos amis.»؟',
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
                                'choice_text' => 'هم معلمونا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Ce sont تستخدم مع الجمع، وnos amis تعني أصدقاءنا.',
                    ],
                    [
                        'question' => 'اختر الترجمة الفرنسية الصحيحة لـ«أحب سيارتي لأنها مريحة.»',
                        'choices' => [
                            [
                                'choice_text' => 'J\'aime ma voiture parce qu\'elle est confortable.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'aime mon voiture parce qu\'il est confortable.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je aime ma voiture parce qu\'elle confortable.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'aime mes voiture parce qu\'elles est confortable.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'voiture مؤنث مفرد، لذلك ma، والضمير المناسب لها elle.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Je lui parle souvent.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أتحدث إليه/إليها كثيرًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أراه كثيرًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أكتب عنه كثيرًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أسمعه كثيرًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل parler à يأخذ ضمير المفعول غير المباشر lui بمعنى إليه أو إليها.',
                    ],
                    [
                        'question' => 'في «Marie prend son sac», إلى ماذا يشير son غالبًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'إلى ملكية الحقيبة لشخص قد يكون مذكرًا أو مؤنثًا بحسب السياق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلى أن الحقيبة جمع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلى أن ماري رجل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلى أن الحقيبة مؤنث في شكل الضمير',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'son يتحدد هنا بحسب جنس الاسم sac المذكر، وليس بحسب جنس المالك؛ قد يكون المالك رجلًا أو امرأة.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«هؤلاء الطالبات مجتهدات.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Ces étudiantes sont sérieuses.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ce étudiantes est sérieuse.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ces étudiants est sérieux.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cette étudiantes sont sérieuses.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'للجمع نستخدم ces، وétudiantes وsérieuses توافقان الجمع المؤنث.',
                    ],
                    [
                        'question' => 'ما الفرق الذي يجب الحفاظ عليه بين «هذا» و«هذه» عند الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'نوع الاسم في العربية وعلاقته بصيغة الإشارة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الجمل فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'زمن الفعل فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اسم الكاتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'أسماء الإشارة مرتبطة بنوع الاسم وعدده، ويجب نقل هذه العلاقة إلى الصيغة المناسبة في اللغة الهدف.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأقرب لـ«أعطيتُها الكتاب.» عندما تكون «ها» لشخص واحد؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je lui ai donné le livre.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je les ai donné le livre.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je lui suis donné le livre.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'ai lui donné le livre.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفعل donner à يحتاج ضميرًا غير مباشرًا، و«لها» تصبح lui.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Je les connais.»؟',
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
                        'explanation' => 'les ضمير مفعول مباشر للجمع، ويمكن أن يعود على مذكر أو مؤنث جمع بحسب السياق.',
                    ],
                    [
                        'question' => 'لماذا يجب الانتباه إلى مرجع الضمير عند الترجمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن الضمير قد يصبح غامضًا أو يغير معنى الجملة إذا أُسند إلى مرجع خاطئ',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الضمائر لا تحمل أي معنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن كل الضمائر تترجم بالطريقة نفسها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الضمير يحدد طول النص',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المرجع الصحيح ضروري لفهم من يقوم بالفعل أو من يقع عليه، خصوصًا عندما تحتوي الجملة على أكثر من شخص أو شيء.',
                    ],
                ],
            ],
            [
                'title' => 'الصفات والاتفاق',
                'description' => 'التدرب على ترجمة الصفات مع مراعاة الجنس والعدد وترتيبها الطبيعي في الفرنسية.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«رجل طويل»؟',
                        'choices' => [
                            [
                                'choice_text' => 'un homme grand',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une homme grande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un homme grande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une homme grand',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'homme مذكر مفرد، والصفة grand توافقه: un homme grand.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«امرأة ذكية»؟',
                        'choices' => [
                            [
                                'choice_text' => 'une femme intelligente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un femme intelligent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une femme intelligent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un femme intelligente',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'femme مؤنث مفرد، والصفة intelligente تأخذ صيغة المؤنث.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«de grandes maisons»؟',
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
                        'explanation' => 'maisons جمع مؤنث، وgrandes تعني كبيرة وتوافق الجمع المؤنث.',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«سيارة جديدة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'une nouvelle voiture',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un nouveau voiture',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une nouveau voiture',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un nouvelle voiture',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'voiture مؤنث، وصيغة الصفة المناسبة للمؤنث هي nouvelle.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«أصدقاء قدامى»؟',
                        'choices' => [
                            [
                                'choice_text' => 'de vieux amis',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'des vieille amis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'de vieille ami',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un vieux amis',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'amis جمع مذكر، وvieux هي صيغة الجمع المناسبة لـ vieux، كما تستعمل de مع هذه البنية هنا.',
                    ],
                    [
                        'question' => 'ماذا يجب أن يراعي المترجم عند نقل صفة عربية إلى الفرنسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'الجنس والعدد وموقع الصفة الطبيعي في الفرنسية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الحروف فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لون الصفحة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'زمن كتابة النص فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفرنسية تعتمد على اتفاق الصفة مع الاسم، كما أن ترتيب الصفة قد يختلف عن العربية.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«المدن الجميلة»؟',
                        'choices' => [
                            [
                                'choice_text' => 'les belles villes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les beaux villes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la belles ville',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les belle ville',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'villes جمع مؤنث، لذلك belles، ويأتي التعريف الجمع les.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«une petite maison»؟',
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
                        'explanation' => 'petite تعني صغيرة، وmaison مفرد، لذلك المعنى هو بيت صغير.',
                    ],
                    [
                        'question' => 'أي خيار يوضح أن الصفة في الترجمة لا يجب أن تكون ترجمتها الحرفية دائمًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'اختيار ترتيب وصيغة الصفة وفق الاستعمال الطبيعي في اللغة الفرنسية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نسخ ترتيب العربية حرفيًا في كل جملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف جميع الصفات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحويل كل صفة إلى فعل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الجيدة تحافظ على المعنى لكنها تحترم القواعد والتراكيب الطبيعية في اللغة الهدف.',
                    ],
                    [
                        'question' => 'لماذا لا نترجم «une bonne idée» حرفيًا كلمة بكلمة مع تجاهل ترتيب الفرنسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن الترجمة تهدف إلى نقل المعنى في تركيب طبيعي، لا نسخ ترتيب الكلمات فقط',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن idée فعل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن bonne تعني سيئ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الفرنسية لا تستخدم الصفات',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة تتطلب فهم التركيب الطبيعي؛ هنا المعنى هو «فكرة جيدة» مع وضع الصفة قبل الاسم في الفرنسية.',
                    ],
                ],
            ],
            [
                'title' => 'حروف الجر والتراكيب الشائعة',
                'description' => 'اختيار حروف الجر والتعبيرات الفرنسية المناسبة عند الترجمة من العربية وإليها.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«أعيش في المغرب.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'J\'habite au Maroc.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'habite à Maroc.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'habite en Maroc.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'habite sur Maroc.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع اسم البلد Maroc المذكر نستخدم au: au Maroc.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية لـ«أذهب إلى فرنسا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je vais en France.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je vais au France.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je vais à France.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je vais de France.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'France بلد مؤنث، ويقال en France عند التعبير عن الذهاب إليها.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«Il vient de Paris.»؟',
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
                                'choice_text' => 'هو يسكن داخل باريس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يعمل في باريس.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'de مع venir تدل على المصدر أو المكان الذي يأتي منه الشخص.',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«على الكرسي»؟',
                        'choices' => [
                            [
                                'choice_text' => 'sur la chaise',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'dans la chaise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'à la chaise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'de la chaise',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'sur تعني «على» عندما يكون الشيء فوق سطح أو عليه.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«أفكر فيك.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je pense à toi.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je pense de toi.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je pense sur toi.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je pense pour toi.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التركيب الفرنسي الصحيح هو penser à، لذلك نقول Je pense à toi.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Je parle avec mon professeur.»؟',
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
                        'explanation' => 'avec تعني «مع»، ولذلك تدل الجملة على الحديث مع الأستاذ.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الصحيحة لـ«من أجل عائلتي»؟',
                        'choices' => [
                            [
                                'choice_text' => 'pour ma famille',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'de ma famille',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sur ma famille',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'chez ma famille',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'pour تُستخدم لمعنى «من أجل» أو «لصالح» في هذا السياق.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«أعيش مع أخي.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'J\'habite avec mon frère.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'J\'habite pour mon frère.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'habite sur mon frère.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'J\'habite de mon frère.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'avec تعني «مع»، وهي المناسبة للتعبير عن العيش برفقة شخص.',
                    ],
                    [
                        'question' => 'لماذا لا يصح ترجمة حروف الجر كلمة بكلمة دائمًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن اللغات تبني التراكيب والتلازم اللفظي بطرق مختلفة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن حروف الجر لا معنى لها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الفرنسية لا تستعمل حروف الجر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن العربية والفرنسية متطابقتان في التراكيب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'حرف الجر المناسب تحدده بنية اللغة والاستعمال الطبيعي، وقد يختلف عن الحرف الموجود في اللغة المصدر.',
                    ],
                    [
                        'question' => 'أي عبارة تشير إلى ترجمة طبيعية أكثر من ترجمة حرفية؟',
                        'choices' => [
                            [
                                'choice_text' => 'اختيار التعبير الفرنسي المستعمل فعليًا حتى لو اختلف ترتيب الكلمات',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نسخ كل كلمة في مكانها مهما كان المعنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمات القصيرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إضافة كلمات غير موجودة بلا سبب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الطبيعية تبحث عن التعبير الذي يؤدي المعنى نفسه وفق عادات اللغة الهدف.',
                    ],
                ],
            ],
            [
                'title' => 'ترجمة الحوار والمواقف اليومية',
                'description' => 'ترجمة العبارات اليومية والحوار مع الحفاظ على النبرة والمقصد والسياق.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الترجمة الفرنسية الطبيعية لـ«كيف حالك؟» في موقف عادي؟',
                        'choices' => [
                            [
                                'choice_text' => 'Comment vas-tu ?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Comment es-tu vas ?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Comment as-tu ?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Quelle vas-tu ?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Comment vas-tu ? تعبير شائع للسؤال عن الحال في المخاطبة غير الرسمية.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Je voudrais un café, s\'il vous plaît.»؟',
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
                                'choice_text' => 'اشتريت قهوة أمس.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا أريد شيئًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Je voudrais تعني «أود/أرغب في»، وهي صيغة مهذبة للطلب.',
                    ],
                    [
                        'question' => 'في حوار، قال شخص: «Excusez-moi, où est la gare ?» ما المعنى؟',
                        'choices' => [
                            [
                                'choice_text' => 'عذرًا، أين محطة القطار؟',
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
                        'explanation' => 'la gare تعني محطة القطار، وoù est تسأل عن المكان.',
                    ],
                    [
                        'question' => 'ما الفرق في الترجمة بين «tu» و«vous» في الحوار؟',
                        'choices' => [
                            [
                                'choice_text' => 'يجب مراعاة درجة الرسمية والعلاقة بين المتحدثين',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا فرق أبدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tu للجمع دائمًا وvous للمفرد دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كلاهما للماضي',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'tu تستخدم عادة للمفرد غير الرسمي، بينما vous قد تكون للجمع أو للمخاطبة الرسمية للمفرد.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأنسب لـ«لا تقلق!» لصديق؟',
                        'choices' => [
                            [
                                'choice_text' => 'Ne t\'inquiète pas !',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ne vous inquiétez pas tous.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'N\'inquiète pas toi.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tu ne pas inquiéter.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع صديق واحد نستعمل صيغة الأمر غير الرسمية: Ne t\'inquiète pas !',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لـ«À tout à l\'heure !»؟',
                        'choices' => [
                            [
                                'choice_text' => 'أراك لاحقًا!',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'صباح الخير!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلى الأبد!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شكرًا لك!',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'À tout à l\'heure تعني «أراك لاحقًا» خلال اليوم عادةً.',
                    ],
                    [
                        'question' => 'إذا قال شخص «Merci beaucoup»، فما الرد الطبيعي؟',
                        'choices' => [
                            [
                                'choice_text' => 'De rien.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pardon beaucoup.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bonjour beaucoup.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Jamais de merci.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'De rien هي من أكثر الردود شيوعًا على Merci، ومعناها «العفو/لا شكر على واجب».',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الطبيعية لـ«هل يمكنك مساعدتي؟»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Pouvez-vous m\'aider ?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Vous pouvez aider je ?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Est-ce que vous pouvoir m\'aider ?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pouvez-vous aider moi-même ?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pouvez-vous m\'aider ? تركيب صحيح للسؤال المهذب عن إمكانية المساعدة.',
                    ],
                    [
                        'question' => 'ما الذي يجب الحفاظ عليه عند ترجمة حوار مهذب؟',
                        'choices' => [
                            [
                                'choice_text' => 'درجة الرسمية ونبرة الطلب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ترتيب الكلمات العربية حرفيًا دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف عبارات المجاملة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحوار لا ينقل المعنى المعجمي فقط؛ بل ينقل أيضًا علاقة المتحدثين ومستوى الأدب والنبرة.',
                    ],
                    [
                        'question' => 'إذا كان المتحدث غاضبًا، فلماذا قد تكون الترجمة الحرفية غير كافية؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن المقصد والنبرة قد يحتاجان إلى صياغة طبيعية في اللغة الهدف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن الغضب لا يمكن ترجمته',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الجمل الغاضبة يجب أن تصبح مهذبة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن كل الكلمات يجب حذفها',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المترجم يحتاج إلى الحفاظ على قوة الكلام ونبرته دون أن يجعل العبارة غريبة في اللغة الهدف.',
                    ],
                ],
            ],
            [
                'title' => 'المعنى والسياق والترجمة الطبيعية',
                'description' => 'التعامل مع الغموض والتلازم اللفظي والعبارات التي تحتاج إلى ترجمة حسب السياق.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'لماذا قد تكون للكلمة العربية الواحدة أكثر من ترجمة فرنسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن معناها قد يتغير بحسب السياق والاستعمال',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن كل الكلمات بلا معنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الفرنسية لا تحتوي مرادفات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن المترجم يجب أن يخمن دائمًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق يحدد المعنى المقصود، ولذلك قد تحتاج الكلمة إلى ترجمات مختلفة بحسب الجملة.',
                    ],
                    [
                        'question' => 'إذا وردت كلمة «عين» في جملة عن جسم الإنسان، أي معنى أقرب؟',
                        'choices' => [
                            [
                                'choice_text' => 'œil',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'source',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ressort',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'objectif',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في سياق جسم الإنسان، «عين» تعني œil، بينما توجد معانٍ أخرى للكلمة العربية في سياقات مختلفة.',
                    ],
                    [
                        'question' => 'كيف تترجم «عين الماء» بصورة طبيعية؟',
                        'choices' => [
                            [
                                'choice_text' => 'source d\'eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'œil d\'eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'regard d\'eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'œil de source',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'في هذا السياق «عين» تعني نبعًا أو مصدر ماء، وليس عضو البصر، لذلك source d\'eau أنسب.',
                    ],
                    [
                        'question' => 'ما أهمية السياق في ترجمة عبارة متعددة المعاني؟',
                        'choices' => [
                            [
                                'choice_text' => 'يساعد على اختيار المعنى المقصود والصياغة المناسبة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يجعل القواعد غير ضرورية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يلغي الحاجة إلى فهم الجملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يضمن ترجمة كلمة بكلمة فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المترجم لا يترجم الكلمات في عزلة، بل يحدد معناها من خلال الجملة والموقف والنص.',
                    ],
                    [
                        'question' => 'إذا كانت عبارة عربية مجازية شائعة، ماذا ينبغي أن يفعل المترجم أولًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'يبحث عن المعنى المقصود وأقرب تعبير طبيعي في الفرنسية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يترجم كل كلمة حرفيًا مهما كانت النتيجة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يحذف المجاز',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يضيف شرحًا طويلًا في كل مرة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المجاز قد يحتاج إلى تعبير مقابل في اللغة الهدف يحافظ على الوظيفة والمعنى بدل نسخ الصور حرفيًا.',
                    ],
                    [
                        'question' => 'ما الخطأ في ترجمة «prendre une décision» إلى «يأخذ قرارًا» في كل سياق دون مراجعة؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد تكون هناك صياغة عربية أكثر طبيعية بحسب السياق مثل «يتخذ قرارًا»',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن prendre تعني دائمًا يأكل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن décision تعني سؤال',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن العربية لا تستخدم الأفعال',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التلازم اللفظي يختلف بين اللغات؛ «يتخذ قرارًا» هو التعبير العربي الطبيعي في هذا السياق.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الطبيعية لـ«Il a pris une décision importante.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'اتخذ قرارًا مهمًا.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أخذ قرارًا مهمًا حرفيًا دائمًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'صنع قرارًا مهمًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وجد قرارًا مهمًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الطبيعية العربية تحافظ على معنى التعبير وتستخدم التلازم العربي الشائع: اتخذ قرارًا.',
                    ],
                    [
                        'question' => 'إذا أعطت ترجمتان المعنى نفسه لكن إحداهما أكثر شيوعًا وطبيعية، ماذا يفضل المترجم عادة؟',
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
                                'choice_text' => 'الصياغة الأصعب فهمًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'جودة الترجمة ترتبط بالوضوح والطبيعية مع الحفاظ على المعنى، لا بمجرد مطابقة ترتيب الكلمات.',
                    ],
                    [
                        'question' => 'ما الذي يساعد على اختيار معنى الكلمة عند وجود أكثر من احتمال؟',
                        'choices' => [
                            [
                                'choice_text' => 'الجملة السابقة واللاحقة والموقف العام للنص',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد حروف الكلمة فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الترجمة الأولى في الذاكرة دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمة من الترجمة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق الواسع قد يوضح المقصود، خاصة عندما يكون للكلمة أكثر من معنى محتمل.',
                    ],
                    [
                        'question' => 'إذا بدت الترجمة الفرنسية صحيحة نحويًا لكنها غريبة على متحدث فرنسي، فما المشكلة المحتملة؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد تكون صحيحة القواعد لكنها غير طبيعية من حيث الاستعمال أو التلازم',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هذا يعني أن الفرنسية لا تملك قواعد',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هذا يثبت أن العربية والفرنسية متطابقتان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يجب حذف الفعل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الترجمة الجيدة تحتاج إلى القواعد وإلى الاستعمال الطبيعي، وقد تكشف مراجعة المتلازمات عن مشكلة لا تظهر نحويًا فقط.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة شاملة في الترجمة العربية الفرنسية',
                'description' => 'اختبار شامل يدمج الأزمنة والضمائر وحروف الجر والسياق والحوار والترجمة الطبيعية.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'اختر الترجمة الفرنسية الأنسب لـ«سأرسل لك الرسالة مساءً.»',
                        'choices' => [
                            [
                                'choice_text' => 'Je t\'enverrai le message ce soir.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je t\'envoyais le message hier soir.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je t\'ai envoyé le message demain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je te envoyerai le message soir.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المستقبل «سأرسل» يُنقل بـ enverrai، و«لك» مع المخاطب غير الرسمي هي te.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية لـ«Nous avons rencontré nos nouveaux voisins.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'التقينا بجيراننا الجدد.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'سنلتقي بجيراننا القدامى.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نحن نسكن وحدنا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قابلنا معلمينا الجدد.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'avons rencontré تعني التقينا، وnos nouveaux voisins تعني جيراننا الجدد.',
                    ],
                    [
                        'question' => 'أي ترجمة صحيحة لـ«هذه الرسالة مهمة جدًا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Cette lettre est très importante.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ce lettre est très important.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cette lettres sont très importantes.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cet lettre est très important.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'lettre مؤنث مفرد، لذلك cette وimportante.',
                    ],
                    [
                        'question' => 'ما الترجمة الأنسب لـ«لا أعرف أين محطة القطار.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'Je ne sais pas où est la gare.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Je ne connais pas où est la gare.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je ne sais pas où la gare est-elle.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Je ne pas sais où est le gare.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التركيب الطبيعي هو Je ne sais pas + جملة استفهام غير مباشرة: où est la gare.',
                    ],
                    [
                        'question' => 'ما الترجمة الفرنسية الأقرب لـ«من فضلك، انتظرني هنا.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'S\'il te plaît, attends-moi ici.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'S\'il vous plaît, attends-moi ici.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'S\'il te plaît, attend-moi ici.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'S\'il te plaît, attends me ici.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مع tu يكون الأمر attends، والضمير المفعول me يتصل به في attends-moi.',
                    ],
                    [
                        'question' => 'إذا كان النص العربي رسميًا، فما الذي يجب الانتباه إليه عند نقله إلى الفرنسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'اختيار مفردات وتراكيب تحافظ على المستوى الرسمي للنص',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تحويله إلى لغة عامية دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف عبارات المجاملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استخدام أقصر كلمات ممكنة مهما كان السياق',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مستوى اللغة جزء من الرسالة؛ الترجمة يجب أن تحافظ على درجة الرسمية والنبرة ما لم يطلب السياق غير ذلك.',
                    ],
                    [
                        'question' => 'ما الترجمة العربية الطبيعية لـ«Il a besoin de repos.»؟',
                        'choices' => [
                            [
                                'choice_text' => 'هو يحتاج إلى الراحة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو يصنع الراحة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو في راحة يحتاج.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هو يحب الراحة بالضرورة.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'avoir besoin de تعني «يحتاج إلى»، وrepos تعني الراحة.',
                    ],
                    [
                        'question' => 'ما أفضل وصف للترجمة الجيدة بين العربية والفرنسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'تنقل المعنى والمقصد والنبرة بصياغة طبيعية في اللغة الهدف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تنقل ترتيب الكلمات حرفيًا في كل الحالات',
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
                        'explanation' => 'الترجمة المتوازنة تحافظ على المعنى والمقصد والأسلوب مع احترام بنية اللغة الهدف.',
                    ],
                    [
                        'question' => 'إذا وجدت كلمة لا تعرف ترجمتها الدقيقة، فما الخطوة الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'فحص السياق أولًا قبل اختيار المقابل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اختيار أول معنى في القاموس دون قراءة الجملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذف الكلمة مباشرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استبدالها بكلمة عشوائية',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق يساعد على تحديد المعنى المقصود، خاصة عندما يكون للكلمة أكثر من استعمال.',
                    ],
                    [
                        'question' => 'بعد إنهاء الترجمة، ما المراجعة التي تكشف أخطاء مهمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'مراجعة المعنى ثم القواعد ثم طبيعية الأسلوب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدّ الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغيير كل الأفعال عشوائيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التأكد من أن كل كلمة لها العدد نفسه من الحروف',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المراجعة الجيدة تبدأ بسلامة المعنى ثم صحة اللغة ثم سلاسة النص في اللغة الهدف.',
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
