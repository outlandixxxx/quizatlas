<?php

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

        $quizzes = [
            [
                'title' => 'Traduction français → anglais',
                'description' => 'Traduire des phrases françaises simples vers un anglais naturel et correct.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Bonjour, comment allez-vous ? » ?',
                        'choices' => [
                            ['choice_text' => 'Hello, how are you?', 'is_correct' => true],
                            ['choice_text' => 'Hello, where are you?', 'is_correct' => false],
                            ['choice_text' => 'Good night, who are you?', 'is_correct' => false],
                            ['choice_text' => 'Hi, what do you have?', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour, comment allez-vous ? » se traduit naturellement par « Hello, how are you? ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Je suis étudiant » ?',
                        'choices' => [
                            ['choice_text' => 'I am a student.', 'is_correct' => true],
                            ['choice_text' => 'I have a student.', 'is_correct' => false],
                            ['choice_text' => 'I am studying person.', 'is_correct' => false],
                            ['choice_text' => 'I student now.', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, « Je suis étudiant » se traduit par « I am a student. » avec l’article « a » devant le nom comptable singulier.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Nous habitons à Rabat » ?',
                        'choices' => [
                            ['choice_text' => 'We live in Rabat.', 'is_correct' => true],
                            ['choice_text' => 'We are living at Rabat.', 'is_correct' => false],
                            ['choice_text' => 'We stay on Rabat.', 'is_correct' => false],
                            ['choice_text' => 'We have lived Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour parler de son lieu de résidence habituel, « We live in Rabat » est la formulation naturelle.',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Il fait froid aujourd’hui » ?',
                        'choices' => [
                            ['choice_text' => 'It is cold today.', 'is_correct' => true],
                            ['choice_text' => 'He makes cold today.', 'is_correct' => false],
                            ['choice_text' => 'It has cold today.', 'is_correct' => false],
                            ['choice_text' => 'There is cold today.', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, la météo se construit avec « it » : « It is cold today. »',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Où est la gare ? » ?',
                        'choices' => [
                            ['choice_text' => 'Where is the station?', 'is_correct' => true],
                            ['choice_text' => 'Where does the station?', 'is_correct' => false],
                            ['choice_text' => 'What is the station?', 'is_correct' => false],
                            ['choice_text' => 'Where has the station?', 'is_correct' => false],
                        ],
                        'explanation' => '« Où est la gare ? » correspond à « Where is the station? »',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Je voudrais un café, s’il vous plaît » ?',
                        'choices' => [
                            ['choice_text' => 'I would like a coffee, please.', 'is_correct' => true],
                            ['choice_text' => 'I want coffee you please.', 'is_correct' => false],
                            ['choice_text' => 'I like a coffee yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I would want coffee, thank.', 'is_correct' => false],
                        ],
                        'explanation' => '« I would like a coffee, please » est une formulation polie et naturelle pour commander un café.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Elle travaille dans une banque » ?',
                        'choices' => [
                            ['choice_text' => 'She works in a bank.', 'is_correct' => true],
                            ['choice_text' => 'She work in bank.', 'is_correct' => false],
                            ['choice_text' => 'She is work at a bank.', 'is_correct' => false],
                            ['choice_text' => 'She working into bank.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent simple convient pour une activité habituelle : « She works in a bank. »',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Nous avons deux frères » ?',
                        'choices' => [
                            ['choice_text' => 'We have two brothers.', 'is_correct' => true],
                            ['choice_text' => 'We are two brothers.', 'is_correct' => false],
                            ['choice_text' => 'We have two brother.', 'is_correct' => false],
                            ['choice_text' => 'We possess two brother men.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « avoir » correspond ici à « have », et le pluriel de « brother » est « brothers ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Fermez la porte, s’il vous plaît » ?',
                        'choices' => [
                            ['choice_text' => 'Please close the door.', 'is_correct' => true],
                            ['choice_text' => 'Please open the door.', 'is_correct' => false],
                            ['choice_text' => 'Please clean the door.', 'is_correct' => false],
                            ['choice_text' => 'Please touch the door.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impératif « Fermez » devient « close » en anglais dans cette phrase polie.',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Mon téléphone est sur la table » ?',
                        'choices' => [
                            ['choice_text' => 'My phone is on the table.', 'is_correct' => true],
                            ['choice_text' => 'My phone is under the table.', 'is_correct' => false],
                            ['choice_text' => 'My phone is in the table.', 'is_correct' => false],
                            ['choice_text' => 'My phone has the table.', 'is_correct' => false],
                        ],
                        'explanation' => 'La préposition « sur » se traduit ici par « on » : « on the table ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Ils arrivent demain matin » ?',
                        'choices' => [
                            ['choice_text' => 'They are arriving tomorrow morning.', 'is_correct' => true],
                            ['choice_text' => 'They arrived tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'They arrive yesterday morning.', 'is_correct' => false],
                            ['choice_text' => 'They are arrived tomorrow morning.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ils arrivent demain matin » peut naturellement se traduire par « They are arriving tomorrow morning » pour un événement prévu.',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise de « Je ne comprends pas cette question » ?',
                        'choices' => [
                            ['choice_text' => 'I do not understand this question.', 'is_correct' => true],
                            ['choice_text' => 'I am not understand this question.', 'is_correct' => false],
                            ['choice_text' => 'I do not understanding this question.', 'is_correct' => false],
                            ['choice_text' => 'I cannot understood this question.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au présent simple, la négation avec « understand » utilise « do not » : « I do not understand this question. »',
                    ],
                ],
            ],

            [
                'title' => 'Traduction français → arabe',
                'description' => 'Traduire des expressions et phrases françaises courantes vers un arabe naturel.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Bonjour » ?',
                        'choices' => [
                            ['choice_text' => 'مرحبا', 'is_correct' => true],
                            ['choice_text' => 'شكرا', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'تصبح على خير', 'is_correct' => false],
                        ],
                        'explanation' => '« مرحبا » est une traduction courante et naturelle de « Bonjour » dans un contexte général.',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Merci beaucoup » ?',
                        'choices' => [
                            ['choice_text' => 'شكرا جزيلا', 'is_correct' => true],
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => false],
                            ['choice_text' => 'أين أنت؟', 'is_correct' => false],
                        ],
                        'explanation' => '« شكرا جزيلا » signifie littéralement « merci beaucoup ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Comment allez-vous ? » ?',
                        'choices' => [
                            ['choice_text' => 'كيف حالك؟', 'is_correct' => true],
                            ['choice_text' => 'أين منزلك؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا تريد؟', 'is_correct' => false],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                        ],
                        'explanation' => '« كيف حالك؟ » est une expression courante pour demander à quelqu’un comment il va.',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Je suis étudiant » ?',
                        'choices' => [
                            ['choice_text' => 'أنا طالب', 'is_correct' => true],
                            ['choice_text' => 'أنا أستاذ', 'is_correct' => false],
                            ['choice_text' => 'أنا طبيب', 'is_correct' => false],
                            ['choice_text' => 'أنا مهندس', 'is_correct' => false],
                        ],
                        'explanation' => '« أنا طالب » signifie « Je suis étudiant ». Pour une étudiante, on utiliserait « أنا طالبة ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Je ne comprends pas » ?',
                        'choices' => [
                            ['choice_text' => 'لا أفهم', 'is_correct' => true],
                            ['choice_text' => 'لا أريد', 'is_correct' => false],
                            ['choice_text' => 'لا أعرفه', 'is_correct' => false],
                            ['choice_text' => 'لا أستطيع', 'is_correct' => false],
                        ],
                        'explanation' => '« لا أفهم » signifie directement « Je ne comprends pas ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Où est la gare ? » ?',
                        'choices' => [
                            ['choice_text' => 'أين المحطة؟', 'is_correct' => true],
                            ['choice_text' => 'أين المدرسة؟', 'is_correct' => false],
                            ['choice_text' => 'متى تصل؟', 'is_correct' => false],
                            ['choice_text' => 'كم ثمن التذكرة؟', 'is_correct' => false],
                        ],
                        'explanation' => '« أين المحطة؟ » signifie « Où est la gare ? ». Le mot « المحطة » désigne notamment une station ou une gare selon le contexte.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « J’habite à Casablanca » ?',
                        'choices' => [
                            ['choice_text' => 'أعيش في الدار البيضاء', 'is_correct' => true],
                            ['choice_text' => 'أعمل في الدار البيضاء', 'is_correct' => false],
                            ['choice_text' => 'أزور الدار البيضاء', 'is_correct' => false],
                            ['choice_text' => 'أسافر من الدار البيضاء', 'is_correct' => false],
                        ],
                        'explanation' => '« أعيش في الدار البيضاء » signifie « J’habite à Casablanca ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « À demain » ?',
                        'choices' => [
                            ['choice_text' => 'إلى الغد', 'is_correct' => true],
                            ['choice_text' => 'إلى الأبد', 'is_correct' => false],
                            ['choice_text' => 'من فضلك', 'is_correct' => false],
                            ['choice_text' => 'معذرة', 'is_correct' => false],
                        ],
                        'explanation' => '« إلى الغد » correspond littéralement à « à demain ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Fermez la fenêtre » ?',
                        'choices' => [
                            ['choice_text' => 'أغلق النافذة', 'is_correct' => true],
                            ['choice_text' => 'افتح النافذة', 'is_correct' => false],
                            ['choice_text' => 'نظف النافذة', 'is_correct' => false],
                            ['choice_text' => 'اترك النافذة', 'is_correct' => false],
                        ],
                        'explanation' => '« أغلق النافذة » signifie « Fermez la fenêtre ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Il fait froid aujourd’hui » ?',
                        'choices' => [
                            ['choice_text' => 'الجو بارد اليوم', 'is_correct' => true],
                            ['choice_text' => 'الجو حار اليوم', 'is_correct' => false],
                            ['choice_text' => 'الجو ممطر غدا', 'is_correct' => false],
                            ['choice_text' => 'الجو جميل أمس', 'is_correct' => false],
                        ],
                        'explanation' => '« الجو بارد اليوم » signifie « Il fait froid aujourd’hui ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « Je voudrais un verre d’eau » ?',
                        'choices' => [
                            ['choice_text' => 'أريد كوبا من الماء', 'is_correct' => true],
                            ['choice_text' => 'أريد فنجانا من القهوة', 'is_correct' => false],
                            ['choice_text' => 'أشرب كوب الشاي', 'is_correct' => false],
                            ['choice_text' => 'أحضر زجاجة من العصير', 'is_correct' => false],
                        ],
                        'explanation' => '« أريد كوبا من الماء » signifie « Je voudrais un verre d’eau ». La formulation exprime ici la demande du locuteur.',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Nous avons deux enfants » ?',
                        'choices' => [
                            ['choice_text' => 'لدينا طفلان', 'is_correct' => true],
                            ['choice_text' => 'عندنا ثلاثة أطفال', 'is_correct' => false],
                            ['choice_text' => 'نحن طالبان', 'is_correct' => false],
                            ['choice_text' => 'لدينا طفل واحد', 'is_correct' => false],
                        ],
                        'explanation' => '« لدينا طفلان » signifie « Nous avons deux enfants ».',
                    ],
                ],
            ],

            [
                'title' => 'Sens, contexte et faux amis',
                'description' => 'Choisir la traduction qui respecte le sens réel d’une expression et éviter les traductions trop littérales.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « J’ai faim », quelle traduction anglaise est correcte ?',
                        'choices' => [
                            ['choice_text' => 'I am hungry.', 'is_correct' => true],
                            ['choice_text' => 'I have hungry.', 'is_correct' => false],
                            ['choice_text' => 'I make hunger.', 'is_correct' => false],
                            ['choice_text' => 'I am hunger.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression française « avoir faim » correspond à l’adjectif anglais « hungry » avec le verbe « be ».',
                    ],
                    [
                        'question' => 'Quelle traduction anglaise de « Il me manque » est correcte dans le sens de « son absence me fait défaut » ?',
                        'choices' => [
                            ['choice_text' => 'I miss him.', 'is_correct' => true],
                            ['choice_text' => 'He misses me.', 'is_correct' => false],
                            ['choice_text' => 'I lack him.', 'is_correct' => false],
                            ['choice_text' => 'He is missing me there.', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, lorsqu’une personne nous manque, on dit « I miss him », même si la structure française est différente.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « J’ai 20 ans » ?',
                        'choices' => [
                            ['choice_text' => 'I am 20 years old.', 'is_correct' => true],
                            ['choice_text' => 'I have 20 years.', 'is_correct' => false],
                            ['choice_text' => 'I make 20 years.', 'is_correct' => false],
                            ['choice_text' => 'I own 20 years.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’âge s’exprime avec le verbe « be » en anglais : « I am 20 years old. »',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Il est actuellement au travail » ?',
                        'choices' => [
                            ['choice_text' => 'He is currently at work.', 'is_correct' => true],
                            ['choice_text' => 'He is actual at work.', 'is_correct' => false],
                            ['choice_text' => 'He is in the work currently.', 'is_correct' => false],
                            ['choice_text' => 'He currently makes work.', 'is_correct' => false],
                        ],
                        'explanation' => '« Actuellement » se traduit ici par « currently ». Le faux ami « actual » ne signifie pas « actuel » dans ce contexte.',
                    ],
                    [
                        'question' => 'Le mot anglais « library » se traduit par « bibliothèque » ou « librairie » ?',
                        'choices' => [
                            ['choice_text' => 'Bibliothèque', 'is_correct' => true],
                            ['choice_text' => 'Librairie', 'is_correct' => false],
                            ['choice_text' => 'Laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Liberté', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, « library » signifie généralement « bibliothèque ». Une « librairie » est un magasin de livres.',
                    ],
                    [
                        'question' => 'Quelle est la traduction correcte de « I am looking for my keys » ?',
                        'choices' => [
                            ['choice_text' => 'Je cherche mes clés.', 'is_correct' => true],
                            ['choice_text' => 'Je regarde mes clés.', 'is_correct' => false],
                            ['choice_text' => 'Je trouve mes clés.', 'is_correct' => false],
                            ['choice_text' => 'Je perds mes clés.', 'is_correct' => false],
                        ],
                        'explanation' => '« Look for » signifie « chercher ». Il ne faut pas traduire littéralement « looking » par « regarder » dans cette expression.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « She is sensible » selon le sens courant anglais ?',
                        'choices' => [
                            ['choice_text' => 'Elle est raisonnable.', 'is_correct' => true],
                            ['choice_text' => 'Elle est sensible émotionnellement.', 'is_correct' => false],
                            ['choice_text' => 'Elle est sensuelle.', 'is_correct' => false],
                            ['choice_text' => 'Elle est sensitive à tout.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot anglais « sensible » signifie généralement « raisonnable » ou « pragmatique », et non le français « sensible » au sens émotionnel.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction de « I have been here for two hours » ?',
                        'choices' => [
                            ['choice_text' => 'Je suis ici depuis deux heures.', 'is_correct' => true],
                            ['choice_text' => 'J’étais ici pendant deux heures.', 'is_correct' => false],
                            ['choice_text' => 'Je viens ici dans deux heures.', 'is_correct' => false],
                            ['choice_text' => 'Je serai ici depuis deux heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase indique une situation commencée dans le passé et encore vraie maintenant : « Je suis ici depuis deux heures. »',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Il pleut depuis ce matin » ?',
                        'choices' => [
                            ['choice_text' => 'It has been raining since this morning.', 'is_correct' => true],
                            ['choice_text' => 'It is rain since this morning.', 'is_correct' => false],
                            ['choice_text' => 'It rains from this morning.', 'is_correct' => false],
                            ['choice_text' => 'It was raining for this morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’action a commencé dans le passé et continue ; « has been raining since this morning » exprime correctement cette durée.',
                    ],
                    [
                        'question' => 'Quelle est la traduction française correcte de « Actually, I agree » ?',
                        'choices' => [
                            ['choice_text' => 'En fait, je suis d’accord.', 'is_correct' => true],
                            ['choice_text' => 'Actuellement, je suis d’accord.', 'is_correct' => false],
                            ['choice_text' => 'Actualité, je suis d’accord.', 'is_correct' => false],
                            ['choice_text' => 'Actuellement, je suis accordé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot anglais « actually » signifie souvent « en fait » ou « en réalité », et non « actuellement ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Prenez votre temps » ?',
                        'choices' => [
                            ['choice_text' => 'Take your time.', 'is_correct' => true],
                            ['choice_text' => 'Take your hour.', 'is_correct' => false],
                            ['choice_text' => 'Use your time.', 'is_correct' => false],
                            ['choice_text' => 'Catch your time.', 'is_correct' => false],
                        ],
                        'explanation' => '« Take your time » est l’expression idiomatique anglaise correspondant à « Prenez votre temps ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction française correcte de « I look forward to seeing you » ?',
                        'choices' => [
                            ['choice_text' => 'J’ai hâte de vous voir.', 'is_correct' => true],
                            ['choice_text' => 'Je regarde en avant pour vous voir.', 'is_correct' => false],
                            ['choice_text' => 'Je regarde votre visage devant moi.', 'is_correct' => false],
                            ['choice_text' => 'Je cherche à vous regarder.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette expression est idiomatique : « J’ai hâte de vous voir » est une traduction naturelle en français.',
                    ],
                ],
            ],

            [
                'title' => 'Traduction des expressions courantes',
                'description' => 'Reconnaître et traduire correctement des expressions quotidiennes, polies et idiomatiques.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la traduction anglaise naturelle de « Bonne chance ! » ?',
                        'choices' => [
                            ['choice_text' => 'Good luck!', 'is_correct' => true],
                            ['choice_text' => 'Good chance!', 'is_correct' => false],
                            ['choice_text' => 'Nice fortune!', 'is_correct' => false],
                            ['choice_text' => 'Well possibility!', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression anglaise habituelle pour souhaiter bonne chance est « Good luck! ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Bon appétit » ?',
                        'choices' => [
                            ['choice_text' => 'بالهناء والشفاء', 'is_correct' => true],
                            ['choice_text' => 'حظا سعيدا', 'is_correct' => false],
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة', 'is_correct' => false],
                        ],
                        'explanation' => '« بالهناء والشفاء » est une formule arabe courante utilisée avant ou pendant un repas, proche de « Bon appétit ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Ça dépend » ?',
                        'choices' => [
                            ['choice_text' => 'It depends.', 'is_correct' => true],
                            ['choice_text' => 'It depends on.', 'is_correct' => false],
                            ['choice_text' => 'That depends it.', 'is_correct' => false],
                            ['choice_text' => 'It is dependent.', 'is_correct' => false],
                        ],
                        'explanation' => '« It depends » est la formule anglaise standard pour répondre « Ça dépend ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Pas de problème » ?',
                        'choices' => [
                            ['choice_text' => 'لا مشكلة', 'is_correct' => true],
                            ['choice_text' => 'لا أعرف', 'is_correct' => false],
                            ['choice_text' => 'لا وقت', 'is_correct' => false],
                            ['choice_text' => 'لا أحد', 'is_correct' => false],
                        ],
                        'explanation' => '« لا مشكلة » signifie « Pas de problème ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « À bientôt » ?',
                        'choices' => [
                            ['choice_text' => 'See you soon.', 'is_correct' => true],
                            ['choice_text' => 'See you yesterday.', 'is_correct' => false],
                            ['choice_text' => 'See your morning.', 'is_correct' => false],
                            ['choice_text' => 'Meet you soonly.', 'is_correct' => false],
                        ],
                        'explanation' => '« See you soon » est une formule naturelle pour traduire « À bientôt ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Bienvenue » ?',
                        'choices' => [
                            ['choice_text' => 'أهلا وسهلا', 'is_correct' => true],
                            ['choice_text' => 'شكرا جزيلا', 'is_correct' => false],
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => false],
                            ['choice_text' => 'صباح النور', 'is_correct' => false],
                        ],
                        'explanation' => '« أهلا وسهلا » est une formule très courante pour souhaiter la bienvenue.',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise naturelle de « Je suis désolé » ?',
                        'choices' => [
                            ['choice_text' => 'I am sorry.', 'is_correct' => true],
                            ['choice_text' => 'I am sad only.', 'is_correct' => false],
                            ['choice_text' => 'I have sorry.', 'is_correct' => false],
                            ['choice_text' => 'I do sorry.', 'is_correct' => false],
                        ],
                        'explanation' => '« I am sorry » est la formulation anglaise standard pour présenter des excuses ou exprimer un regret.',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Excusez-moi » dans un contexte poli ?',
                        'choices' => [
                            ['choice_text' => 'عذرا', 'is_correct' => true],
                            ['choice_text' => 'شكرا', 'is_correct' => false],
                            ['choice_text' => 'مرحبا', 'is_correct' => false],
                            ['choice_text' => 'مبروك', 'is_correct' => false],
                        ],
                        'explanation' => '« عذرا » est une formule courante pour dire « excusez-moi » ou « pardon » selon le contexte.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Qu’est-ce que tu veux dire ? » ?',
                        'choices' => [
                            ['choice_text' => 'What do you mean?', 'is_correct' => true],
                            ['choice_text' => 'What do you say?', 'is_correct' => false],
                            ['choice_text' => 'What are you meaning?', 'is_correct' => false],
                            ['choice_text' => 'What meaning you want?', 'is_correct' => false],
                        ],
                        'explanation' => '« What do you mean? » est l’expression anglaise naturelle pour demander une clarification.',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Félicitations ! » ?',
                        'choices' => [
                            ['choice_text' => 'مبروك!', 'is_correct' => true],
                            ['choice_text' => 'حسنا!', 'is_correct' => false],
                            ['choice_text' => 'آسف!', 'is_correct' => false],
                            ['choice_text' => 'انتظر!', 'is_correct' => false],
                        ],
                        'explanation' => '« مبروك! » signifie « Félicitations ! » et s’utilise notamment pour célébrer une réussite ou une bonne nouvelle.',
                    ],
                    [
                        'question' => 'Quelle est la traduction anglaise naturelle de « Fais attention ! » ?',
                        'choices' => [
                            ['choice_text' => 'Be careful!', 'is_correct' => true],
                            ['choice_text' => 'Make attention!', 'is_correct' => false],
                            ['choice_text' => 'Do attention!', 'is_correct' => false],
                            ['choice_text' => 'Have carefully!', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression idiomatique anglaise est « Be careful! » et non une traduction mot à mot avec « attention ».',
                    ],
                    [
                        'question' => 'Quelle est la traduction arabe de « Je suis désolé » ?',
                        'choices' => [
                            ['choice_text' => 'أنا آسف', 'is_correct' => true],
                            ['choice_text' => 'أنا سعيد', 'is_correct' => false],
                            ['choice_text' => 'أنا مستعد', 'is_correct' => false],
                            ['choice_text' => 'أنا مشغول', 'is_correct' => false],
                        ],
                        'explanation' => '« أنا آسف » est la traduction courante de « Je suis désolé » pour un locuteur masculin. Une locutrice dira « أنا آسفة ».',
                    ],
                ],
            ],

            [
                'title' => 'Choisir une traduction naturelle',
                'description' => 'Comparer des propositions de traduction et choisir celle qui respecte le sens, la grammaire et le contexte.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle traduction anglaise est la plus naturelle pour « Nous sommes en retard » ?',
                        'choices' => [
                            ['choice_text' => 'We are late.', 'is_correct' => true],
                            ['choice_text' => 'We have late.', 'is_correct' => false],
                            ['choice_text' => 'We are delay.', 'is_correct' => false],
                            ['choice_text' => 'We make late.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adjectif anglais « late » s’emploie avec « be » : « We are late. »',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Je suis fatigué » ?',
                        'choices' => [
                            ['choice_text' => 'أنا متعب', 'is_correct' => true],
                            ['choice_text' => 'أنا جائع', 'is_correct' => false],
                            ['choice_text' => 'أنا خائف', 'is_correct' => false],
                            ['choice_text' => 'أنا مريض', 'is_correct' => false],
                        ],
                        'explanation' => '« أنا متعب » signifie « Je suis fatigué » lorsqu’un homme parle. Une femme peut dire « أنا متعبة ».',
                    ],
                    [
                        'question' => 'Quelle traduction anglaise est correcte pour « Elle peut venir demain » ?',
                        'choices' => [
                            ['choice_text' => 'She can come tomorrow.', 'is_correct' => true],
                            ['choice_text' => 'She can comes tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She cans come tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She is can come tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après le modal « can », le verbe reste à la base verbale : « can come ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Nous allons à l’école » ?',
                        'choices' => [
                            ['choice_text' => 'نحن نذهب إلى المدرسة', 'is_correct' => true],
                            ['choice_text' => 'نحن نعود من المدرسة', 'is_correct' => false],
                            ['choice_text' => 'نحن نعمل في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'نحن نعيش قرب المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => '« نحن نذهب إلى المدرسة » signifie « Nous allons à l’école ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction anglaise de « Il a déjà mangé » ?',
                        'choices' => [
                            ['choice_text' => 'He has already eaten.', 'is_correct' => true],
                            ['choice_text' => 'He already has eat.', 'is_correct' => false],
                            ['choice_text' => 'He has already ate.', 'is_correct' => false],
                            ['choice_text' => 'He already eating.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le present perfect utilise « has » avec le participe passé « eaten » : « He has already eaten. »',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Elle lit un livre » ?',
                        'choices' => [
                            ['choice_text' => 'هي تقرأ كتابا', 'is_correct' => true],
                            ['choice_text' => 'هي تكتب رسالة', 'is_correct' => false],
                            ['choice_text' => 'هي تشتري كتابا', 'is_correct' => false],
                            ['choice_text' => 'هي تحمل حقيبة', 'is_correct' => false],
                        ],
                        'explanation' => '« هي تقرأ كتابا » signifie « Elle lit un livre ».',
                    ],
                    [
                        'question' => 'Quelle traduction anglaise est la plus naturelle pour « Je vais appeler mon ami ce soir » ?',
                        'choices' => [
                            ['choice_text' => 'I am going to call my friend tonight.', 'is_correct' => true],
                            ['choice_text' => 'I am going calling my friend tonight.', 'is_correct' => false],
                            ['choice_text' => 'I go to calling my friend tonight.', 'is_correct' => false],
                            ['choice_text' => 'I am go call my friend tonight.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour exprimer une intention ou un projet proche, « be going to + verbe » est une construction naturelle.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Le livre est sur la table » ?',
                        'choices' => [
                            ['choice_text' => 'الكتاب على الطاولة', 'is_correct' => true],
                            ['choice_text' => 'الكتاب تحت الطاولة', 'is_correct' => false],
                            ['choice_text' => 'الكتاب داخل الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'الكتاب بجانب الباب', 'is_correct' => false],
                        ],
                        'explanation' => '« الكتاب على الطاولة » signifie « Le livre est sur la table ».',
                    ],
                    [
                        'question' => 'Quelle traduction anglaise correspond à « Nous devons partir maintenant » ?',
                        'choices' => [
                            ['choice_text' => 'We must leave now.', 'is_correct' => true],
                            ['choice_text' => 'We must to leave now.', 'is_correct' => false],
                            ['choice_text' => 'We should leaving now.', 'is_correct' => false],
                            ['choice_text' => 'We have must leave now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « must », on emploie directement la base verbale : « must leave ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Ils jouent au football » ?',
                        'choices' => [
                            ['choice_text' => 'هم يلعبون كرة القدم', 'is_correct' => true],
                            ['choice_text' => 'هم يشاهدون كرة القدم', 'is_correct' => false],
                            ['choice_text' => 'هم يدرسون كرة القدم', 'is_correct' => false],
                            ['choice_text' => 'هم يشترون كرة القدم', 'is_correct' => false],
                        ],
                        'explanation' => '« هم يلعبون كرة القدم » signifie « Ils jouent au football ».',
                    ],
                    [
                        'question' => 'Quelle traduction anglaise est correcte pour « Elle ne travaille pas le dimanche » ?',
                        'choices' => [
                            ['choice_text' => 'She does not work on Sunday.', 'is_correct' => true],
                            ['choice_text' => 'She does not works on Sunday.', 'is_correct' => false],
                            ['choice_text' => 'She is not work on Sunday.', 'is_correct' => false],
                            ['choice_text' => 'She not works Sunday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « does not », le verbe principal reste à la base : « does not work ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure traduction arabe de « Je cherche mes lunettes » ?',
                        'choices' => [
                            ['choice_text' => 'أبحث عن نظارتي', 'is_correct' => true],
                            ['choice_text' => 'أرتدي نظارتي', 'is_correct' => false],
                            ['choice_text' => 'أشتري نظارتي', 'is_correct' => false],
                            ['choice_text' => 'أصلح نظارتي', 'is_correct' => false],
                        ],
                        'explanation' => '« أبحث عن نظارتي » signifie « Je cherche mes lunettes ». Le verbe « أبحث عن » correspond à « chercher » dans ce contexte.',
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
