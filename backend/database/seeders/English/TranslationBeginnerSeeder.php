<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'translation')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday English Translation',
                'description' => 'Translate common everyday English sentences into natural French and Arabic equivalents.',
                'questions' => [
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I am hungry.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai faim. — أنا جائع.', 'is_correct' => true],
                            ['choice_text' => 'Je suis fatigué. — أنا متعب.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai soif. — أنا عطشان.', 'is_correct' => false],
                            ['choice_text' => 'Je suis en retard. — أنا متأخر.', 'is_correct' => false],
                        ],
                        'explanation' => "The English sentence expresses hunger, so the correct translation is 'J\'ai faim. — أنا جائع.'",
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'She is at home.'",
                        'choices' => [
                            ['choice_text' => 'Elle est à la maison. — هي في المنزل.', 'is_correct' => true],
                            ['choice_text' => 'Elle est au travail. — هي في العمل.', 'is_correct' => false],
                            ['choice_text' => 'Elle est à l\'école. — هي في المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'Elle est dans la voiture. — هي في السيارة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives her location as home, so the correct choice must express that exact location.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I need some water.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai besoin d\'eau. — أحتاج إلى بعض الماء.', 'is_correct' => true],
                            ['choice_text' => 'Je veux du pain. — أريد بعض الخبز.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai besoin d\'un café. — أحتاج إلى قهوة.', 'is_correct' => false],
                            ['choice_text' => 'Je prends de l\'eau. — سآخذ الماء.', 'is_correct' => false],
                        ],
                        'explanation' => "The key idea is 'need', naturally expressed in French with 'avoir besoin de'.",
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'We are ready.'",
                        'choices' => [
                            ['choice_text' => 'Nous sommes prêts. — نحن مستعدون.', 'is_correct' => true],
                            ['choice_text' => 'Nous sommes occupés. — نحن مشغولون.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes fatigués. — نحن متعبون.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes en retard. — نحن متأخرون.', 'is_correct' => false],
                        ],
                        'explanation' => "The English adjective 'ready' corresponds to 'prêts', meaning 'مستعدون'.",
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'He works in a hospital.'",
                        'choices' => [
                            ['choice_text' => 'Il travaille dans un hôpital. — هو يعمل في مستشفى.', 'is_correct' => true],
                            ['choice_text' => 'Il habite dans un hôpital. — هو يسكن في مستشفى.', 'is_correct' => false],
                            ['choice_text' => 'Il visite un hôpital. — هو يزور مستشفى.', 'is_correct' => false],
                            ['choice_text' => 'Il étudie à l\'hôpital. — هو يدرس في المستشفى.', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb is about employment, so the French verb must be "travaille".',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'My sister likes coffee.'",
                        'choices' => [
                            ['choice_text' => 'Ma sœur aime le café. — أختي تحب القهوة.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur déteste le café. — أختي تكره القهوة.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur prépare le café. — أختي تحضر القهوة.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur boit du thé. — أختي تشرب الشاي.', 'is_correct' => false],
                        ],
                        'explanation' => "The sentence expresses a positive preference: she likes coffee.",
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Please close the door.'",
                        'choices' => [
                            ['choice_text' => 'Fermez la porte, s\'il vous plaît. — من فضلك أغلق الباب.', 'is_correct' => true],
                            ['choice_text' => 'Ouvrez la fenêtre, s\'il vous plaît. — من فضلك افتح النافذة.', 'is_correct' => false],
                            ['choice_text' => 'Fermez la fenêtre, s\'il vous plaît. — من فضلك أغلق النافذة.', 'is_correct' => false],
                            ['choice_text' => 'Entrez dans la pièce, s\'il vous plaît. — من فضلك ادخل الغرفة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The request is specifically to close the door, not the window or to enter the room.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I live with my parents.'",
                        'choices' => [
                            ['choice_text' => 'J\'habite avec mes parents. — أعيش مع والديّ.', 'is_correct' => true],
                            ['choice_text' => 'Je travaille avec mes parents. — أعمل مع والديّ.', 'is_correct' => false],
                            ['choice_text' => 'Je rends visite à mes parents. — أزور والديّ.', 'is_correct' => false],
                            ['choice_text' => 'Je vis sans mes parents. — أعيش بدون والديّ.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence is about living with the parents, not working with or visiting them.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Can you help me?'",
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous m\'aider ? — هل يمكنك مساعدتي؟', 'is_correct' => true],
                            ['choice_text' => 'Pouvez-vous attendre ? — هل يمكنك الانتظار؟', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous me suivre ? — هل يمكنك اتباعي؟', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous m\'appeler ? — هل يمكنك الاتصال بي؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The English verb is "help", so the correct choice is the one about assistance.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I don\'t understand.'",
                        'choices' => [
                            ['choice_text' => 'Je ne comprends pas. — أنا لا أفهم.', 'is_correct' => true],
                            ['choice_text' => 'Je ne sais pas. — أنا لا أعرف.', 'is_correct' => false],
                            ['choice_text' => 'Je ne me souviens pas. — أنا لا أتذكر.', 'is_correct' => false],
                            ['choice_text' => 'Je n\'entends pas. — أنا لا أسمع.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence expresses a lack of understanding, not lack of knowledge, memory, or hearing.',
                    ],
                ],
            ],
            [
                'title' => 'Present and Past Translation',
                'description' => 'Translate English sentences about routines, current actions, and completed past events.',
                'questions' => [
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I work every day.'",
                        'choices' => [
                            ['choice_text' => 'Je travaille tous les jours. — أعمل كل يوم.', 'is_correct' => true],
                            ['choice_text' => 'Je travaille hier. — أعمل أمس.', 'is_correct' => false],
                            ['choice_text' => 'Je voyage chaque mois. — أسافر كل شهر.', 'is_correct' => false],
                            ['choice_text' => 'Je dors tous les jours. — أنام كل يوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence describes a regular daily routine involving work.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'She is reading a book now.'",
                        'choices' => [
                            ['choice_text' => 'Elle lit un livre maintenant. — هي تقرأ كتابًا الآن.', 'is_correct' => true],
                            ['choice_text' => 'Elle écrit un livre maintenant. — هي تكتب كتابًا الآن.', 'is_correct' => false],
                            ['choice_text' => 'Elle a lu un livre hier. — لقد قرأت كتابًا أمس.', 'is_correct' => false],
                            ['choice_text' => 'Elle regarde un film maintenant. — هي تشاهد فيلمًا الآن.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action is reading a book and it is happening now.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'They visited us yesterday.'",
                        'choices' => [
                            ['choice_text' => 'Ils nous ont rendu visite hier. — لقد زارونا أمس.', 'is_correct' => true],
                            ['choice_text' => 'Ils nous rendent visite demain. — سيزوروننا غدًا.', 'is_correct' => false],
                            ['choice_text' => 'Ils vivent avec nous. — يعيشون معنا.', 'is_correct' => false],
                            ['choice_text' => 'Ils nous ont appelés aujourd\'hui. — اتصلوا بنا اليوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes a completed visit that happened yesterday.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'He usually takes the bus.'",
                        'choices' => [
                            ['choice_text' => 'Il prend habituellement le bus. — هو عادةً يستقل الحافلة.', 'is_correct' => true],
                            ['choice_text' => 'Il conduit habituellement une voiture. — هو عادةً يقود سيارة.', 'is_correct' => false],
                            ['choice_text' => 'Il a pris le bus hier. — لقد استقل الحافلة أمس.', 'is_correct' => false],
                            ['choice_text' => 'Il prend le train demain. — سيستقل القطار غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence describes a regular habit involving the bus.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'We watched a movie last night.'",
                        'choices' => [
                            ['choice_text' => 'Nous avons regardé un film hier soir. — شاهدنا فيلمًا الليلة الماضية.', 'is_correct' => true],
                            ['choice_text' => 'Nous regardons un film ce soir. — سنشاهد فيلمًا هذا المساء.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons lu un livre hier soir. — قرأنا كتابًا الليلة الماضية.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons regardé un match demain. — سنشاهد مباراة غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes a completed action involving a movie last night.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'My father cooks on Sundays.'",
                        'choices' => [
                            ['choice_text' => 'Mon père cuisine le dimanche. — أبي يطبخ يوم الأحد.', 'is_correct' => true],
                            ['choice_text' => 'Ma mère cuisine le dimanche. — أمي تطبخ يوم الأحد.', 'is_correct' => false],
                            ['choice_text' => 'Mon père travaille le dimanche. — أبي يعمل يوم الأحد.', 'is_correct' => false],
                            ['choice_text' => 'Mon père a cuisiné dimanche dernier. — أبي طبخ الأحد الماضي.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence refers to the father and a repeated Sunday activity.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I called you this morning.'",
                        'choices' => [
                            ['choice_text' => 'Je t\'ai appelé ce matin. — اتصلت بك هذا الصباح.', 'is_correct' => true],
                            ['choice_text' => 'Je t\'ai écrit ce matin. — كتبت لك هذا الصباح.', 'is_correct' => false],
                            ['choice_text' => 'Je t\'appelle demain matin. — سأتصل بك غدًا صباحًا.', 'is_correct' => false],
                            ['choice_text' => 'Je t\'ai appelé hier soir. — اتصلت بك الليلة الماضية.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action is a phone call completed this morning.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Are they waiting for the bus?'",
                        'choices' => [
                            ['choice_text' => 'Est-ce qu\'ils attendent le bus ? — هل ينتظرون الحافلة؟', 'is_correct' => true],
                            ['choice_text' => 'Est-ce qu\'ils prennent le bus ? — هل يستقلون الحافلة؟', 'is_correct' => false],
                            ['choice_text' => 'Est-ce qu\'ils attendent le train ? — هل ينتظرون القطار؟', 'is_correct' => false],
                            ['choice_text' => 'Est-ce qu\'ils conduisent le bus ? — هل يقودون الحافلة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The English asks about waiting for a bus, so both the verb and object must match.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'She did not go to work yesterday.'",
                        'choices' => [
                            ['choice_text' => 'Elle n\'est pas allée au travail hier. — لم تذهب إلى العمل أمس.', 'is_correct' => true],
                            ['choice_text' => 'Elle n\'est pas restée au travail hier. — لم تبقَ في العمل أمس.', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'est pas allée à l\'école hier. — لم تذهب إلى المدرسة أمس.', 'is_correct' => false],
                            ['choice_text' => 'Elle est allée au travail aujourd\'hui. — ذهبت إلى العمل اليوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence is negative, in the past, and specifically about going to work.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'We are having lunch now.'",
                        'choices' => [
                            ['choice_text' => 'Nous déjeunons maintenant. — نحن نتناول الغداء الآن.', 'is_correct' => true],
                            ['choice_text' => 'Nous préparons le dîner maintenant. — نحن نحضر العشاء الآن.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons déjeuné hier. — تناولنا الغداء أمس.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons déjeuner demain. — سنتناول الغداء غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action is happening now and concerns lunch.',
                    ],
                ],
            ],
            [
                'title' => 'People, Work, and Study',
                'description' => 'Translate useful English about school, work, colleagues, study, and everyday responsibilities.',
                'questions' => [
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'My teacher explains things clearly.'",
                        'choices' => [
                            ['choice_text' => 'Mon professeur explique les choses clairement. — أستاذي يشرح الأمور بوضوح.', 'is_correct' => true],
                            ['choice_text' => 'Mon professeur écoute attentivement. — أستاذي يستمع بانتباه.', 'is_correct' => false],
                            ['choice_text' => 'Mon professeur écrit lentement. — أستاذي يكتب ببطء.', 'is_correct' => false],
                            ['choice_text' => 'Mon professeur apprend rapidement. — أستاذي يتعلم بسرعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence is about explaining things clearly.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I have an exam next week.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai un examen la semaine prochaine. — لدي امتحان الأسبوع المقبل.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai eu un examen la semaine dernière. — كان لدي امتحان الأسبوع الماضي.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai un devoir demain. — لدي واجب غدًا.', 'is_correct' => false],
                            ['choice_text' => 'Je prépare un cours aujourd\'hui. — أحضر درسًا اليوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence refers specifically to an exam next week.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'She works from home on Fridays.'",
                        'choices' => [
                            ['choice_text' => 'Elle travaille à domicile le vendredi. — هي تعمل من المنزل يوم الجمعة.', 'is_correct' => true],
                            ['choice_text' => 'Elle travaille au bureau le vendredi. — هي تعمل في المكتب يوم الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille à domicile le lundi. — هي تعمل من المنزل يوم الاثنين.', 'is_correct' => false],
                            ['choice_text' => 'Elle étudie à domicile le vendredi. — هي تدرس من المنزل يوم الجمعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both the place of work and the day have to match the English sentence.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Our manager is in a meeting.'",
                        'choices' => [
                            ['choice_text' => 'Notre responsable est en réunion. — مديرنا في اجتماع.', 'is_correct' => true],
                            ['choice_text' => 'Notre collègue est en réunion. — زميلنا في اجتماع.', 'is_correct' => false],
                            ['choice_text' => 'Notre responsable est en vacances. — مديرنا في إجازة.', 'is_correct' => false],
                            ['choice_text' => 'Notre responsable travaille à la maison. — مديرنا يعمل من المنزل.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is the manager and the current situation is a meeting.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I need to finish this report today.'",
                        'choices' => [
                            ['choice_text' => 'Je dois terminer ce rapport aujourd\'hui. — يجب أن أنهي هذا التقرير اليوم.', 'is_correct' => true],
                            ['choice_text' => 'Je peux terminer ce rapport aujourd\'hui. — يمكنني إنهاء هذا التقرير اليوم.', 'is_correct' => false],
                            ['choice_text' => 'Je dois lire ce rapport demain. — يجب أن أقرأ هذا التقرير غدًا.', 'is_correct' => false],
                            ['choice_text' => 'Je veux commencer ce rapport demain. — أريد أن أبدأ هذا التقرير غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'Need to expresses necessity, so French uses "je dois" here.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Can you send me the file?'",
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous m\'envoyer le fichier ? — هل يمكنك إرسال الملف إليّ؟', 'is_correct' => true],
                            ['choice_text' => 'Pouvez-vous ouvrir le fichier ? — هل يمكنك فتح الملف؟', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous me téléphoner ? — هل يمكنك الاتصال بي؟', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous imprimer le document ? — هل يمكنك طباعة الوثيقة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The requested action is sending the file, not opening, calling, or printing.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'The students are working together.'",
                        'choices' => [
                            ['choice_text' => 'Les étudiants travaillent ensemble. — الطلاب يعملون معًا.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiants étudient seuls. — الطلاب يدرسون وحدهم.', 'is_correct' => false],
                            ['choice_text' => 'Les professeurs travaillent ensemble. — الأساتذة يعملون معًا.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants arrivent demain. — سيصل الطلاب غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence focuses on students working together.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'My colleague helped me yesterday.'",
                        'choices' => [
                            ['choice_text' => 'Mon collègue m\'a aidé hier. — ساعدني زميلي أمس.', 'is_correct' => true],
                            ['choice_text' => 'Mon collègue m\'appelle aujourd\'hui. — يتصل بي زميلي اليوم.', 'is_correct' => false],
                            ['choice_text' => 'Mon professeur m\'a aidé hier. — ساعدني أستاذي أمس.', 'is_correct' => false],
                            ['choice_text' => 'Mon collègue m\'a demandé de l\'aide hier. — طلب مني زميلي المساعدة أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is the colleague and the action is helping the speaker yesterday.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'We have a meeting at nine.'",
                        'choices' => [
                            ['choice_text' => 'Nous avons une réunion à neuf heures. — لدينا اجتماع في التاسعة.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons un cours à dix heures. — لدينا درس في العاشرة.', 'is_correct' => false],
                            ['choice_text' => 'Nous avions une réunion hier. — كان لدينا اجتماع أمس.', 'is_correct' => false],
                            ['choice_text' => 'Nous organisons un déjeuner à neuf heures. — ننظم غداءً في التاسعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence is specifically about a meeting at nine.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Please check your email.'",
                        'choices' => [
                            ['choice_text' => 'Veuillez vérifier votre e-mail. — من فضلك تحقق من بريدك الإلكتروني.', 'is_correct' => true],
                            ['choice_text' => 'Veuillez envoyer votre e-mail. — من فضلك أرسل بريدك الإلكتروني.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez supprimer votre e-mail. — من فضلك احذف بريدك الإلكتروني.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez lire le document. — من فضلك اقرأ الوثيقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English instruction is to check the email.',
                    ],
                ],
            ],
            [
                'title' => 'Travel, Shopping, and Requests',
                'description' => 'Translate practical English used in travel, shopping, restaurants, directions, and polite requests.',
                'questions' => [
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Where is the train station?'",
                        'choices' => [
                            ['choice_text' => 'Où est la gare ? — أين محطة القطار؟', 'is_correct' => true],
                            ['choice_text' => 'Où est l\'aéroport ? — أين المطار؟', 'is_correct' => false],
                            ['choice_text' => 'Où est l\'hôtel ? — أين الفندق؟', 'is_correct' => false],
                            ['choice_text' => 'Quand part le train ? — متى يغادر القطار؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks for the location of the train station.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'How much does this cost?'",
                        'choices' => [
                            ['choice_text' => 'Combien ça coûte ? — كم يكلف هذا؟', 'is_correct' => true],
                            ['choice_text' => 'Combien de temps faut-il ? — كم من الوقت يلزم؟', 'is_correct' => false],
                            ['choice_text' => 'Où puis-je acheter ça ? — أين يمكنني شراء هذا؟', 'is_correct' => false],
                            ['choice_text' => 'Quel est le prix du billet ? — ما سعر التذكرة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The English question asks for the price of an item.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I\'d like a coffee, please.'",
                        'choices' => [
                            ['choice_text' => 'Je voudrais un café, s\'il vous plaît. — أود قهوة، من فضلك.', 'is_correct' => true],
                            ['choice_text' => 'Je voudrais un thé, s\'il vous plaît. — أود شايًا، من فضلك.', 'is_correct' => false],
                            ['choice_text' => 'Je veux acheter du café. — أريد شراء القهوة.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai pris un café hier. — تناولت قهوة أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is politely ordering a coffee.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Can I pay by card?'",
                        'choices' => [
                            ['choice_text' => 'Puis-je payer par carte ? — هل يمكنني الدفع بالبطاقة؟', 'is_correct' => true],
                            ['choice_text' => 'Puis-je retirer de l\'argent ? — هل يمكنني سحب المال؟', 'is_correct' => false],
                            ['choice_text' => 'Puis-je payer en espèces ? — هل يمكنني الدفع نقدًا؟', 'is_correct' => false],
                            ['choice_text' => 'Puis-je commander une carte ? — هل يمكنني طلب بطاقة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The question specifically asks about paying by card.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I have a reservation for tonight.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai une réservation pour ce soir. — لدي حجز لهذا المساء.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai une chambre pour demain. — لدي غرفة للغد.', 'is_correct' => false],
                            ['choice_text' => 'Je cherche une réservation pour ce soir. — أبحث عن حجز لهذا المساء.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai annulé ma réservation hier. — ألغيت حجزي أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker already has a reservation and it is for tonight.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Could you speak more slowly?'",
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous parler plus lentement ? — هل يمكنك التحدث ببطء أكثر؟', 'is_correct' => true],
                            ['choice_text' => 'Pourriez-vous parler plus fort ? — هل يمكنك التحدث بصوت أعلى؟', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous répéter cela ? — هل يمكنك تكرار ذلك؟', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous attendre ici ? — هل يمكنك الانتظار هنا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The request concerns the speed of speaking, not volume or repetition.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I need a taxi to the airport.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai besoin d\'un taxi pour l\'aéroport. — أحتاج إلى سيارة أجرة إلى المطار.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai besoin d\'un hôtel près de l\'aéroport. — أحتاج إلى فندق قرب المطار.', 'is_correct' => false],
                            ['choice_text' => 'Je cherche la gare routière. — أبحث عن محطة الحافلات.', 'is_correct' => false],
                            ['choice_text' => 'Je prends un train pour l\'aéroport. — أستقل قطارًا إلى المطار.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English sentence asks for a taxi going to the airport.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'What time does the shop open?'",
                        'choices' => [
                            ['choice_text' => 'À quelle heure le magasin ouvre-t-il ? — في أي ساعة يفتح المتجر؟', 'is_correct' => true],
                            ['choice_text' => 'À quelle heure ferme le magasin ? — في أي ساعة يغلق المتجر؟', 'is_correct' => false],
                            ['choice_text' => 'Où est le magasin ? — أين المتجر؟', 'is_correct' => false],
                            ['choice_text' => 'Quand le magasin a-t-il ouvert hier ? — متى فتح المتجر أمس؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about the opening time of the shop.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Please show me the way.'",
                        'choices' => [
                            ['choice_text' => 'Montrez-moi le chemin, s\'il vous plaît. — من فضلك أرني الطريق.', 'is_correct' => true],
                            ['choice_text' => 'Donnez-moi l\'adresse, s\'il vous plaît. — من فضلك أعطني العنوان.', 'is_correct' => false],
                            ['choice_text' => 'Montrez-moi le billet, s\'il vous plaît. — من فضلك أرني التذكرة.', 'is_correct' => false],
                            ['choice_text' => 'Indiquez-moi l\'hôtel, s\'il vous plaît. — من فضلك دلّني على الفندق.', 'is_correct' => false],
                        ],
                        'explanation' => 'The request is specifically for directions or the way.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Is there a pharmacy nearby?'",
                        'choices' => [
                            ['choice_text' => 'Y a-t-il une pharmacie près d\'ici ? — هل توجد صيدلية قريبة من هنا؟', 'is_correct' => true],
                            ['choice_text' => 'Y a-t-il un hôpital près d\'ici ? — هل يوجد مستشفى قريب من هنا؟', 'is_correct' => false],
                            ['choice_text' => 'La pharmacie est-elle fermée ? — هل الصيدلية مغلقة؟', 'is_correct' => false],
                            ['choice_text' => 'Où est la pharmacie principale ? — أين الصيدلية الرئيسية؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The English asks whether a pharmacy is nearby.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed English-to-French-and-Arabic Translation',
                'description' => 'Review translation of plans, advice, comparisons, common expressions, and practical English in context.',
                'questions' => [
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'If it rains, we will stay at home.'",
                        'choices' => [
                            ['choice_text' => 'S\'il pleut, nous resterons à la maison. — إذا أمطرت، سنبقى في المنزل.', 'is_correct' => true],
                            ['choice_text' => 'S\'il fait chaud, nous sortirons. — إذا كان الجو حارًا، سنخرج.', 'is_correct' => false],
                            ['choice_text' => 'S\'il pleut, nous sommes à l\'hôtel. — إذا أمطرت، نحن في الفندق.', 'is_correct' => false],
                            ['choice_text' => 'Quand il a plu, nous sommes restés dehors. — عندما أمطرت، بقينا في الخارج.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence expresses a future condition and result.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I have already finished my homework.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai déjà terminé mes devoirs. — لقد أنهيت واجبي بالفعل.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai oublié mes devoirs. — نسيت واجبي.', 'is_correct' => false],
                            ['choice_text' => 'Je vais commencer mes devoirs. — سأبدأ واجبي.', 'is_correct' => false],
                            ['choice_text' => 'Je fais mes devoirs demain. — سأقوم بواجبي غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The key ideas are completed homework and the adverb "already".',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Could you tell me where the bank is?'",
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me dire où se trouve la banque ? — هل يمكنك أن تخبرني أين يوجد البنك؟', 'is_correct' => true],
                            ['choice_text' => 'Pouvez-vous me dire quand la banque ouvre ? — هل يمكنك أن تخبرني متى يفتح البنك؟', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me montrer l\'hôtel ? — هل يمكنك أن تريني الفندق؟', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous aller à la banque ? — هل يمكنك الذهاب إلى البنك؟', 'is_correct' => false],
                        ],
                        'explanation' => 'The request asks for the location of the bank, not its opening time or a visit to it.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I think this is a good idea.'",
                        'choices' => [
                            ['choice_text' => 'Je pense que c\'est une bonne idée. — أعتقد أن هذه فكرة جيدة.', 'is_correct' => true],
                            ['choice_text' => 'Je pense que c\'est un problème. — أعتقد أن هذه مشكلة.', 'is_correct' => false],
                            ['choice_text' => 'Je sais que c\'est une mauvaise idée. — أعلم أن هذه فكرة سيئة.', 'is_correct' => false],
                            ['choice_text' => 'Je veux une nouvelle idée. — أريد فكرة جديدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence expresses a positive opinion about an idea.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'You should get some rest.'",
                        'choices' => [
                            ['choice_text' => 'Tu devrais te reposer un peu. — ينبغي أن ترتاح قليلًا.', 'is_correct' => true],
                            ['choice_text' => 'Tu dois travailler davantage. — يجب أن تعمل أكثر.', 'is_correct' => false],
                            ['choice_text' => 'Tu peux sortir maintenant. — يمكنك الخروج الآن.', 'is_correct' => false],
                            ['choice_text' => 'Tu devrais dormir toute la journée. — ينبغي أن تنام طوال اليوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'Should expresses advice, so the correct choice uses "devrais".',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'We have been waiting for an hour.'",
                        'choices' => [
                            ['choice_text' => 'Nous attendons depuis une heure. — نحن ننتظر منذ ساعة.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons attendu hier. — انتظرنا أمس.', 'is_correct' => false],
                            ['choice_text' => 'Nous attendrons pendant une heure. — سننتظر لمدة ساعة.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes arrivés il y a une heure. — وصلنا قبل ساعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action started earlier and is still continuing, which is naturally expressed with "depuis une heure".',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'Don't forget to call me.'",
                        'choices' => [
                            ['choice_text' => 'N\'oublie pas de m\'appeler. — لا تنسَ الاتصال بي.', 'is_correct' => true],
                            ['choice_text' => 'N\'oublie pas de m\'écrire. — لا تنسَ الكتابة لي.', 'is_correct' => false],
                            ['choice_text' => 'N\'appelle pas mon frère. — لا تتصل بأخي.', 'is_correct' => false],
                            ['choice_text' => 'N\'oublie pas de venir demain. — لا تنسَ المجيء غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The negative instruction specifically concerns calling the speaker.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'This book is more interesting than that one.'",
                        'choices' => [
                            ['choice_text' => 'Ce livre est plus intéressant que celui-là. — هذا الكتاب أكثر إثارة للاهتمام من ذلك.', 'is_correct' => true],
                            ['choice_text' => 'Ce livre est moins intéressant que celui-là. — هذا الكتاب أقل إثارة للاهتمام من ذلك.', 'is_correct' => false],
                            ['choice_text' => 'Ce livre est aussi intéressant que celui-là. — هذا الكتاب ممتع مثل ذلك.', 'is_correct' => false],
                            ['choice_text' => 'Ce livre est le plus intéressant ici. — هذا الكتاب هو الأكثر إثارة للاهتمام هنا.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English comparison is "more interesting than", so the French needs "plus intéressant que".',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'I am looking forward to seeing you.'",
                        'choices' => [
                            ['choice_text' => 'J\'ai hâte de te voir. — أتطلع إلى رؤيتك.', 'is_correct' => true],
                            ['choice_text' => 'Je suis content de t\'avoir vu. — أنا سعيد لأنني رأيتك.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai peur de te voir. — أخاف من رؤيتك.', 'is_correct' => false],
                            ['choice_text' => 'Je vais te chercher. — سأبحث عنك.', 'is_correct' => false],
                        ],
                        'explanation' => 'The English expression shows positive anticipation about seeing someone in the future.',
                    ],
                    [
                        'question' => "Choose the correct French — Arabic translation of: 'It was nice talking to you.'",
                        'choices' => [
                            ['choice_text' => 'C\'était agréable de parler avec vous. — كان من الجميل التحدث معك.', 'is_correct' => true],
                            ['choice_text' => 'C\'était difficile de vous comprendre. — كان من الصعب فهمك.', 'is_correct' => false],
                            ['choice_text' => 'Je veux parler avec vous demain. — أريد التحدث معك غدًا.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime parler au téléphone. — أحب التحدث عبر الهاتف.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite closing expression after a pleasant conversation.',
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

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $questionIndex + 1,
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
