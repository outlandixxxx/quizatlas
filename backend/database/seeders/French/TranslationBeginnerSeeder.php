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

        $quizzes = [
            [
                'title' => 'Traduction français → anglais',
                'description' => 'Traduire des phrases françaises simples vers un anglais naturel et correct.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Vous accueillez un client anglais avec « Bonjour, comment allez-vous ? ». Comment le dites-vous en anglais ?',
                        'choices' => [
                            ['choice_text' => 'Hello, how you are?', 'is_correct' => false],
                            ['choice_text' => 'Hello, how is you?', 'is_correct' => false],
                            ['choice_text' => 'Hello, how are you?', 'is_correct' => true],
                            ['choice_text' => 'Hello, how are you doing it?', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, la question prend l’ordre « how + are + you » : « Hello, how are you? ».',
                    ],
                    [
                        'question' => 'Karim se présente à un camarade anglais : « Je suis étudiant. » Que dit-il ?',
                        'choices' => [
                            ['choice_text' => 'I am a student.', 'is_correct' => true],
                            ['choice_text' => 'I am student.', 'is_correct' => false],
                            ['choice_text' => 'I have a student.', 'is_correct' => false],
                            ['choice_text' => 'I am the students.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un métier ou un statut prend l’article « a » devant le nom singulier : « I am a student. »',
                    ],
                    [
                        'question' => 'Votre cousin anglais demande où vous vivez. Vous répondez : « Nous habitons à Rabat. » Quelle est la phrase anglaise ?',
                        'choices' => [
                            ['choice_text' => 'We are living at Rabat.', 'is_correct' => false],
                            ['choice_text' => 'We live in Rabat.', 'is_correct' => true],
                            ['choice_text' => 'We stay on Rabat.', 'is_correct' => false],
                            ['choice_text' => 'We have lived Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour le lieu de résidence habituel, on emploie le présent simple et « in » devant une ville : « We live in Rabat. »',
                    ],
                    [
                        'question' => 'Vous écrivez à un ami anglais : « Il fait froid aujourd’hui. » Quelle est la phrase anglaise ?',
                        'choices' => [
                            ['choice_text' => 'He makes cold today.', 'is_correct' => false],
                            ['choice_text' => 'It has cold today.', 'is_correct' => false],
                            ['choice_text' => 'It is cold today.', 'is_correct' => true],
                            ['choice_text' => 'There is cold today.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anglais n’emploie ni « faire » ni « avoir » pour la météo : il utilise « it is ».',
                    ],
                    [
                        'question' => 'Perdu à Londres, vous demandez « Où est la gare ? ». Quelle est la phrase anglaise ?',
                        'choices' => [
                            ['choice_text' => 'Where the station is?', 'is_correct' => false],
                            ['choice_text' => 'Where are the station?', 'is_correct' => false],
                            ['choice_text' => 'Which is the station?', 'is_correct' => false],
                            ['choice_text' => 'Where is the station?', 'is_correct' => true],
                        ],
                        'explanation' => 'La question prend l’ordre « where + is + sujet » : « Where is the station? »',
                    ],
                    [
                        'question' => 'Au café, vous commandez : « Je voudrais un café, s’il vous plaît. » Que dites-vous au serveur anglais ?',
                        'choices' => [
                            ['choice_text' => 'I would to have a coffee, please.', 'is_correct' => false],
                            ['choice_text' => 'I will liking a coffee, please.', 'is_correct' => false],
                            ['choice_text' => 'I would like one coffee, you please.', 'is_correct' => false],
                            ['choice_text' => 'I would like a coffee, please.', 'is_correct' => true],
                        ],
                        'explanation' => '« Would like » est la forme polie pour commander ; « please » termine la demande.',
                    ],
                    [
                        'question' => 'Samira parle de sa mère : « Elle travaille dans une banque. » Comment le dit-elle en anglais ?',
                        'choices' => [
                            ['choice_text' => 'She work in a bank.', 'is_correct' => false],
                            ['choice_text' => 'She works in a bank.', 'is_correct' => true],
                            ['choice_text' => 'She works in bank.', 'is_correct' => false],
                            ['choice_text' => 'She is work in a bank.', 'is_correct' => false],
                        ],
                        'explanation' => 'À la troisième personne du singulier, le présent simple prend un « s » : « works ».',
                    ],
                    [
                        'question' => 'Vous présentez votre famille en anglais : « Nous avons deux frères. » Quelle phrase choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'We have two brothers.', 'is_correct' => true],
                            ['choice_text' => 'We are two brothers.', 'is_correct' => false],
                            ['choice_text' => 'We have two brother.', 'is_correct' => false],
                            ['choice_text' => 'We has two brothers.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avoir » donne « have » ici, et le pluriel de « brother » prend un « s ».',
                    ],
                    [
                        'question' => 'Dans un bureau, vous dites à un collègue anglais : « Fermez la porte, s’il vous plaît. » Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Please close the door.', 'is_correct' => true],
                            ['choice_text' => 'Please open the door.', 'is_correct' => false],
                            ['choice_text' => 'Please clean the door.', 'is_correct' => false],
                            ['choice_text' => 'Please touch the door.', 'is_correct' => false],
                        ],
                        'explanation' => '« Fermer » se dit « close » ; les autres verbes changent complètement l’action demandée.',
                    ],
                    [
                        'question' => 'Karim dit à son ami anglais : « Mon téléphone est sur la table. » Quelle est la version anglaise ?',
                        'choices' => [
                            ['choice_text' => 'My phone is near the table.', 'is_correct' => false],
                            ['choice_text' => 'My phone is on the table.', 'is_correct' => true],
                            ['choice_text' => 'My phone is under the table.', 'is_correct' => false],
                            ['choice_text' => 'My phone is in the table.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sur » se traduit par « on » quand un objet est posé sur une surface.',
                    ],
                    [
                        'question' => 'Pour annoncer la visite de vos cousins, vous écrivez : « Ils arrivent demain matin. » Quelle phrase anglaise convient ?',
                        'choices' => [
                            ['choice_text' => 'They arrived tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'They have arrived tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'They are arriving tomorrow morning.', 'is_correct' => true],
                            ['choice_text' => 'They are arrived tomorrow morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une arrivée prévue, on utilise « be + -ing » : « They are arriving tomorrow morning ».',
                    ],
                    [
                        'question' => 'Pendant un oral d’anglais, vous dites : « Je ne comprends pas cette question. » Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'I am not understand this question.', 'is_correct' => false],
                            ['choice_text' => 'I do not understanding this question.', 'is_correct' => false],
                            ['choice_text' => 'I do not understands this question.', 'is_correct' => false],
                            ['choice_text' => 'I do not understand this question.', 'is_correct' => true],
                        ],
                        'explanation' => 'La négation au présent simple se forme avec « do not » suivi du verbe de base : « do not understand ».',
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
                        'question' => 'Vous saluez un voisin marocain en arabe standard : « Bonjour. » Quel mot choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'مرحبا', 'is_correct' => true],
                            ['choice_text' => 'شكرا', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'تصبح على خير', 'is_correct' => false],
                        ],
                        'explanation' => '« مرحبا » est un salut courant, utilisable à toute heure. Les autres mots expriment un remerciement ou un adieu.',
                    ],
                    [
                        'question' => 'On vous offre un cadeau et vous dites en arabe « Merci beaucoup ». Quelle expression employez-vous ?',
                        'choices' => [
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'شكرا جزيلا', 'is_correct' => true],
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => false],
                            ['choice_text' => 'عفوا', 'is_correct' => false],
                        ],
                        'explanation' => '« شكرا » signifie « merci » et « جزيلا » ajoute « beaucoup ».',
                    ],
                    [
                        'question' => 'Vous demandez à un monsieur : « Comment allez-vous ? » Quelle phrase arabe utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'كيف حالك؟', 'is_correct' => true],
                            ['choice_text' => 'أين منزلك؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا تريد؟', 'is_correct' => false],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                        ],
                        'explanation' => '« كيف حالك؟ » s’adresse à une personne. À une femme, on prononce « كيف حالكِ ».',
                    ],
                    [
                        'question' => 'Yassine se présente à un camarade en arabe : « Je suis étudiant. » Que dit-il ?',
                        'choices' => [
                            ['choice_text' => 'أنا أستاذ', 'is_correct' => false],
                            ['choice_text' => 'أنا طبيب', 'is_correct' => false],
                            ['choice_text' => 'أنا مهندس', 'is_correct' => false],
                            ['choice_text' => 'أنا طالب', 'is_correct' => true],
                        ],
                        'explanation' => '« أنا » veut dire « je » et « طالب » « étudiant ». Une étudiante dirait « أنا طالبة ».',
                    ],
                    [
                        'question' => 'Un professeur parle trop vite en arabe. Vous voulez dire : « Je ne comprends pas. » Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'لا أريد', 'is_correct' => false],
                            ['choice_text' => 'لا أفهم', 'is_correct' => true],
                            ['choice_text' => 'لا أعرفه', 'is_correct' => false],
                            ['choice_text' => 'لا أستطيع', 'is_correct' => false],
                        ],
                        'explanation' => '« لا » nie le verbe « أفهم », « je comprends ». Les autres verbes changent le sens.',
                    ],
                    [
                        'question' => 'À Casablanca, vous cherchez la gare et demandez en arabe : « Où est la gare ? » Quelle phrase dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'أين المدرسة؟', 'is_correct' => false],
                            ['choice_text' => 'متى تصل؟', 'is_correct' => false],
                            ['choice_text' => 'كم ثمن التذكرة؟', 'is_correct' => false],
                            ['choice_text' => 'أين المحطة؟', 'is_correct' => true],
                        ],
                        'explanation' => '« أين » veut dire « où » et « المحطة » désigne la gare ou la station.',
                    ],
                    [
                        'question' => 'Un ami vous demande où vous vivez. Vous répondez : « J’habite à Casablanca. » Quelle phrase arabe correspond ?',
                        'choices' => [
                            ['choice_text' => 'أعمل في الدار البيضاء', 'is_correct' => false],
                            ['choice_text' => 'أزور الدار البيضاء', 'is_correct' => false],
                            ['choice_text' => 'أعيش في الدار البيضاء', 'is_correct' => true],
                            ['choice_text' => 'أسافر من الدار البيضاء', 'is_correct' => false],
                        ],
                        'explanation' => '« أعيش » signifie « je vis » et « في » « à, dans ».',
                    ],
                    [
                        'question' => 'Vous quittez un collègue qui revient demain. Comment lui dire « À demain » en arabe ?',
                        'choices' => [
                            ['choice_text' => 'أراك قريبا', 'is_correct' => false],
                            ['choice_text' => 'أراك بعد أسبوع', 'is_correct' => false],
                            ['choice_text' => 'أراك غدا', 'is_correct' => true],
                            ['choice_text' => 'أراك مساء اليوم', 'is_correct' => false],
                        ],
                        'explanation' => '« أراك غدا » veut dire littéralement « je te verrai demain » : l’arabe emploie le présent pour un futur proche.',
                    ],
                    [
                        'question' => 'Un camarade de classe, un garçon, a laissé la fenêtre ouverte. Vous lui dites en arabe : « Ferme la fenêtre. » Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'أغلق النافذة', 'is_correct' => true],
                            ['choice_text' => 'افتح النافذة', 'is_correct' => false],
                            ['choice_text' => 'نظف النافذة', 'is_correct' => false],
                            ['choice_text' => 'اترك النافذة', 'is_correct' => false],
                        ],
                        'explanation' => '« أغلق » est l’impératif de « fermer » adressé à un homme ; « افتح » veut dire « ouvre ».',
                    ],
                    [
                        'question' => 'Il fait un temps glacial et vous le dites en arabe : « Il fait froid aujourd’hui. » Quelle phrase choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'الجو حار اليوم', 'is_correct' => false],
                            ['choice_text' => 'الجو ممطر غدا', 'is_correct' => false],
                            ['choice_text' => 'الجو جميل أمس', 'is_correct' => false],
                            ['choice_text' => 'الجو بارد اليوم', 'is_correct' => true],
                        ],
                        'explanation' => '« الجو » désigne le temps qu’il fait, « بارد » le froid et « اليوم » aujourd’hui.',
                    ],
                    [
                        'question' => 'Au restaurant, vous demandez en arabe : « Je voudrais un verre d’eau. » Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'أريد فنجانا من القهوة', 'is_correct' => false],
                            ['choice_text' => 'أريد كوبا من الماء', 'is_correct' => true],
                            ['choice_text' => 'أشرب كوب الشاي', 'is_correct' => false],
                            ['choice_text' => 'أحضر زجاجة من العصير', 'is_correct' => false],
                        ],
                        'explanation' => '« كوب » désigne un verre et « من الماء » indique son contenu : de l’eau.',
                    ],
                    [
                        'question' => 'Vous présentez votre famille : « Nous avons deux enfants. » Quelle phrase arabe correspond ?',
                        'choices' => [
                            ['choice_text' => 'عندنا ثلاثة أطفال', 'is_correct' => false],
                            ['choice_text' => 'نحن طالبان', 'is_correct' => false],
                            ['choice_text' => 'لدينا طفلان', 'is_correct' => true],
                            ['choice_text' => 'لدينا طفل واحد', 'is_correct' => false],
                        ],
                        'explanation' => '« طفلان » est le duel de « طفل » : il désigne exactement deux enfants.',
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
                        'question' => 'À midi, Nadia dit à son collègue anglais « J’ai faim ». Quelle phrase anglaise est correcte ?',
                        'choices' => [
                            ['choice_text' => 'I have hungry.', 'is_correct' => false],
                            ['choice_text' => 'I am hungry.', 'is_correct' => true],
                            ['choice_text' => 'I have hunger.', 'is_correct' => false],
                            ['choice_text' => 'I am hunger.', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, la faim se dit avec « be » et l’adjectif « hungry ».',
                    ],
                    [
                        'question' => 'Sara parle de son frère parti à l’étranger : « Il me manque. » Que dit-elle en anglais ?',
                        'choices' => [
                            ['choice_text' => 'He misses me.', 'is_correct' => false],
                            ['choice_text' => 'I lack him.', 'is_correct' => false],
                            ['choice_text' => 'I miss to him.', 'is_correct' => false],
                            ['choice_text' => 'I miss him.', 'is_correct' => true],
                        ],
                        'explanation' => 'Celui qui ressent le manque est le sujet de « miss » : Sara ressent l’absence de son frère, donc « I miss him ».',
                    ],
                    [
                        'question' => 'Un ami anglais vous demande votre âge. Vous répondez « J’ai 20 ans ». Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'I am 20 years old.', 'is_correct' => true],
                            ['choice_text' => 'I have 20 years.', 'is_correct' => false],
                            ['choice_text' => 'I make 20 years.', 'is_correct' => false],
                            ['choice_text' => 'I have 20 years old.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’âge s’exprime avec le verbe « be » : « I am 20 years old ».',
                    ],
                    [
                        'question' => 'Au téléphone, vous annoncez que votre père est actuellement au travail. Quelle phrase anglaise convient ?',
                        'choices' => [
                            ['choice_text' => 'He is currently at work.', 'is_correct' => true],
                            ['choice_text' => 'He is actual at work.', 'is_correct' => false],
                            ['choice_text' => 'He is at the work currently.', 'is_correct' => false],
                            ['choice_text' => 'He is currently on work.', 'is_correct' => false],
                        ],
                        'explanation' => '« Actuellement » se dit « currently ». « Actual » est un faux ami : il veut dire « réel ».',
                    ],
                    [
                        'question' => 'Sur un panneau à Londres, vous lisez « library ». Quel mot français correspond ?',
                        'choices' => [
                            ['choice_text' => 'Librairie', 'is_correct' => false],
                            ['choice_text' => 'Papeterie', 'is_correct' => false],
                            ['choice_text' => 'Bibliothèque', 'is_correct' => true],
                            ['choice_text' => 'Imprimerie', 'is_correct' => false],
                        ],
                        'explanation' => '« Library » est une bibliothèque, où l’on emprunte des livres. La « librairie », où l’on en achète, se dit « bookshop ».',
                    ],
                    [
                        'question' => 'Un ami anglais dit « I am looking for my keys ». Quelle traduction française est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je regarde mes clés.', 'is_correct' => false],
                            ['choice_text' => 'Je trouve mes clés.', 'is_correct' => false],
                            ['choice_text' => 'Je cherche mes clés.', 'is_correct' => true],
                            ['choice_text' => 'Je perds mes clés.', 'is_correct' => false],
                        ],
                        'explanation' => '« Look for » signifie « chercher » ; « look at » signifierait « regarder ».',
                    ],
                    [
                        'question' => 'Un collègue anglais dit de sa directrice : « She is sensible. » Que veut-il dire ?',
                        'choices' => [
                            ['choice_text' => 'Elle est raisonnable.', 'is_correct' => true],
                            ['choice_text' => 'Elle est sensible.', 'is_correct' => false],
                            ['choice_text' => 'Elle est susceptible.', 'is_correct' => false],
                            ['choice_text' => 'Elle est émotive.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sensible » est un faux ami : en anglais, il décrit quelqu’un de raisonnable. Pour « sensible », on dit « sensitive ».',
                    ],
                    [
                        'question' => 'Votre collègue anglais écrit « I will attend the meeting tomorrow ». Quelle traduction française est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’attendrai la réunion demain.', 'is_correct' => false],
                            ['choice_text' => 'J’aiderai la réunion demain.', 'is_correct' => false],
                            ['choice_text' => 'Je suis attendu à la réunion demain.', 'is_correct' => false],
                            ['choice_text' => 'J’assisterai à la réunion demain.', 'is_correct' => true],
                        ],
                        'explanation' => '« Attend » est un faux ami : il veut dire « assister à », alors qu’« attendre » se dit « wait for ».',
                    ],
                    [
                        'question' => 'Vous regardez par la fenêtre et dites : « Il pleut depuis ce matin. » Quelle phrase anglaise est correcte ?',
                        'choices' => [
                            ['choice_text' => 'It is raining since this morning.', 'is_correct' => false],
                            ['choice_text' => 'It has been raining since this morning.', 'is_correct' => true],
                            ['choice_text' => 'It rains since this morning.', 'is_correct' => false],
                            ['choice_text' => 'It was raining for this morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une action commencée dans le passé et toujours en cours se dit « has been raining » avec « since ».',
                    ],
                    [
                        'question' => 'Un ami anglais dit « I want to ask a question ». Quelle traduction française est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je veux demander une question.', 'is_correct' => false],
                            ['choice_text' => 'Je veux faire une question.', 'is_correct' => false],
                            ['choice_text' => 'Je veux poser une question.', 'is_correct' => true],
                            ['choice_text' => 'Je veux répondre une question.', 'is_correct' => false],
                        ],
                        'explanation' => 'On « pose » une question en français ; « demander » ne s’emploie pas avec « question » dans ce sens.',
                    ],
                    [
                        'question' => 'Un client hésite devant le menu. Le serveur lui dit en français « Prenez votre temps ». Quelle est la version anglaise ?',
                        'choices' => [
                            ['choice_text' => 'Take your hour.', 'is_correct' => false],
                            ['choice_text' => 'Use your time.', 'is_correct' => false],
                            ['choice_text' => 'Make your time.', 'is_correct' => false],
                            ['choice_text' => 'Take your time.', 'is_correct' => true],
                        ],
                        'explanation' => 'En anglais, on dit « take your time » : le verbe « take » est idiomatique.',
                    ],
                    [
                        'question' => 'À la fin d’un e-mail, un collègue anglais écrit « I look forward to seeing you ». Quelle traduction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je regarde en avant pour vous voir.', 'is_correct' => false],
                            ['choice_text' => 'J’ai hâte de vous voir.', 'is_correct' => true],
                            ['choice_text' => 'J’ai besoin de vous voir.', 'is_correct' => false],
                            ['choice_text' => 'J’ai l’habitude de vous voir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Look forward to » est une expression figée qui veut dire « avoir hâte de ».',
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
                        'question' => 'Votre ami passe un examen demain et vous lui dites « Bonne chance ! ». Comment le dire en anglais ?',
                        'choices' => [
                            ['choice_text' => 'Good luck!', 'is_correct' => true],
                            ['choice_text' => 'Good chance!', 'is_correct' => false],
                            ['choice_text' => 'Bad luck!', 'is_correct' => false],
                            ['choice_text' => 'Good lucky!', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, on souhaite « good luck ». « Chance » est un faux ami : il veut dire « possibilité ».',
                    ],
                    [
                        'question' => 'Avant d’aller dormir, vous dites « Bonne nuit » à votre ami marocain en arabe. Quelle expression utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'تصبح على خير', 'is_correct' => true],
                            ['choice_text' => 'شكرا جزيلا', 'is_correct' => false],
                        ],
                        'explanation' => '« تصبح على خير » se dit le soir avant d’aller dormir. À une femme, on dit « تصبحين على خير ».',
                    ],
                    [
                        'question' => 'On vous demande si vous venez à la fête. Vous répondez « Ça dépend. » Que dites-vous en anglais ?',
                        'choices' => [
                            ['choice_text' => 'It depend.', 'is_correct' => false],
                            ['choice_text' => 'It depends of.', 'is_correct' => false],
                            ['choice_text' => 'It depends.', 'is_correct' => true],
                            ['choice_text' => 'It is depending.', 'is_correct' => false],
                        ],
                        'explanation' => '« Depend » est un verbe régulier : à la troisième personne, il devient « depends ».',
                    ],
                    [
                        'question' => 'Un ami s’excuse pour son retard et vous répondez en arabe : « Pas de problème. » Quelle expression employez-vous ?',
                        'choices' => [
                            ['choice_text' => 'لا أعرف', 'is_correct' => false],
                            ['choice_text' => 'لا وقت', 'is_correct' => false],
                            ['choice_text' => 'لا أحد', 'is_correct' => false],
                            ['choice_text' => 'لا مشكلة', 'is_correct' => true],
                        ],
                        'explanation' => '« لا » est la négation et « مشكلة » veut dire « problème ».',
                    ],
                    [
                        'question' => 'Vous quittez des collègues anglais que vous reverrez dans quelques jours : « À bientôt. » Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'See you tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Look you soon.', 'is_correct' => false],
                            ['choice_text' => 'See you before.', 'is_correct' => false],
                            ['choice_text' => 'See you soon.', 'is_correct' => true],
                        ],
                        'explanation' => '« À bientôt » se dit « see you soon » ; « tomorrow » précise un jour précis.',
                    ],
                    [
                        'question' => 'Des invités arrivent chez vous et vous les accueillez en arabe : « Bienvenue ! » Quelle expression choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'أهلا وسهلا', 'is_correct' => true],
                            ['choice_text' => 'شكرا جزيلا', 'is_correct' => false],
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => false],
                            ['choice_text' => 'صباح النور', 'is_correct' => false],
                        ],
                        'explanation' => '« أهلا وسهلا » est la formule d’accueil la plus répandue. « صباح النور » répond à « bonjour ».',
                    ],
                    [
                        'question' => 'Vous avez marché sur le pied d’un passant et vous dites en anglais « Je suis désolé ». Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'I am desolate.', 'is_correct' => false],
                            ['choice_text' => 'I am sorry.', 'is_correct' => true],
                            ['choice_text' => 'I have sorry.', 'is_correct' => false],
                            ['choice_text' => 'I am sorrow.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sorry » est un adjectif qui se construit avec « be ». « Desolate » veut dire « désert, triste ».',
                    ],
                    [
                        'question' => 'Vous bousculez quelqu’un dans le bus et vous vous excusez en arabe : « Excusez-moi. » Quel mot employez-vous ?',
                        'choices' => [
                            ['choice_text' => 'شكرا', 'is_correct' => false],
                            ['choice_text' => 'عذرا', 'is_correct' => true],
                            ['choice_text' => 'مرحبا', 'is_correct' => false],
                            ['choice_text' => 'مبروك', 'is_correct' => false],
                        ],
                        'explanation' => '« عذرا » présente des excuses polies. « مبروك » sert à féliciter.',
                    ],
                    [
                        'question' => 'Un ami anglais dit quelque chose d’étrange et vous demandez : « Qu’est-ce que tu veux dire ? » Quelle question anglaise convient ?',
                        'choices' => [
                            ['choice_text' => 'What do you say?', 'is_correct' => false],
                            ['choice_text' => 'What are you meaning?', 'is_correct' => false],
                            ['choice_text' => 'What you mean?', 'is_correct' => false],
                            ['choice_text' => 'What do you mean?', 'is_correct' => true],
                        ],
                        'explanation' => 'La question se forme avec « do » : « What do you mean? ».',
                    ],
                    [
                        'question' => 'Votre cousin réussit son permis de conduire. Comment lui dire « Félicitations ! » en arabe ?',
                        'choices' => [
                            ['choice_text' => 'حسنا!', 'is_correct' => false],
                            ['choice_text' => 'آسف!', 'is_correct' => false],
                            ['choice_text' => 'مبروك!', 'is_correct' => true],
                            ['choice_text' => 'انتظر!', 'is_correct' => false],
                        ],
                        'explanation' => '« مبروك » se dit pour un succès, un mariage ou une naissance.',
                    ],
                    [
                        'question' => 'Un enfant court près de la route et vous crie « Fais attention ! ». Quelle exclamation anglaise convient ?',
                        'choices' => [
                            ['choice_text' => 'Make attention!', 'is_correct' => false],
                            ['choice_text' => 'Be careful!', 'is_correct' => true],
                            ['choice_text' => 'Do attention!', 'is_correct' => false],
                            ['choice_text' => 'Be carefully!', 'is_correct' => false],
                        ],
                        'explanation' => 'En anglais, on dit « be careful » avec l’adjectif « careful ».',
                    ],
                    [
                        'question' => 'Un homme accueille un invité et lui dit en arabe : « Je suis heureux de vous voir. » Quelle phrase prononce-t-il ?',
                        'choices' => [
                            ['choice_text' => 'أنا سعيد برؤيتك', 'is_correct' => true],
                            ['choice_text' => 'أنا آسف لرؤيتك', 'is_correct' => false],
                            ['choice_text' => 'أنا قلق من رؤيتك', 'is_correct' => false],
                            ['choice_text' => 'أنا مشغول عن رؤيتك', 'is_correct' => false],
                        ],
                        'explanation' => '« سعيد » veut dire « heureux » et « برؤيتك » « de vous voir ». Une femme dira « أنا سعيدة ».',
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
                        'question' => 'Vous écrivez à vos amis anglais que vous êtes en retard : « Nous sommes en retard. » Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'We have late.', 'is_correct' => false],
                            ['choice_text' => 'We are delay.', 'is_correct' => false],
                            ['choice_text' => 'We are lately.', 'is_correct' => false],
                            ['choice_text' => 'We are late.', 'is_correct' => true],
                        ],
                        'explanation' => '« Late » est un adjectif : il s’emploie avec le verbe « be ».',
                    ],
                    [
                        'question' => 'Après une longue journée, Omar dit en arabe : « Je suis fatigué. » Quelle phrase prononce-t-il ?',
                        'choices' => [
                            ['choice_text' => 'أنا متعب', 'is_correct' => true],
                            ['choice_text' => 'أنا جائع', 'is_correct' => false],
                            ['choice_text' => 'أنا خائف', 'is_correct' => false],
                            ['choice_text' => 'أنا مريض', 'is_correct' => false],
                        ],
                        'explanation' => '« متعب » veut dire « fatigué ». Une femme dirait « أنا متعبة ».',
                    ],
                    [
                        'question' => 'Vous dites à un collègue anglais, au sujet de votre amie Lina : « Elle peut venir demain. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'She can comes tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She can come tomorrow.', 'is_correct' => true],
                            ['choice_text' => 'She cans come tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She can to come tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après le modal « can », le verbe reste à la forme de base : « can come ».',
                    ],
                    [
                        'question' => 'Des élèves parlent de leur matin en arabe : « Nous allons à l’école. » Quelle phrase correspond ?',
                        'choices' => [
                            ['choice_text' => 'نحن نعود من المدرسة', 'is_correct' => false],
                            ['choice_text' => 'نحن نعمل في المدرسة', 'is_correct' => false],
                            ['choice_text' => 'نحن نذهب إلى المدرسة', 'is_correct' => true],
                            ['choice_text' => 'نحن نعيش قرب المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => '« نذهب » veut dire « nous allons » et « إلى » indique la destination.',
                    ],
                    [
                        'question' => 'Sami a terminé son repas, et vous dites à un ami anglais : « Il a déjà mangé. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'He already has eat.', 'is_correct' => false],
                            ['choice_text' => 'He has already ate.', 'is_correct' => false],
                            ['choice_text' => 'He has already eaten.', 'is_correct' => true],
                            ['choice_text' => 'He have already eaten.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le present perfect se forme avec « has » et le participe passé « eaten ».',
                    ],
                    [
                        'question' => 'Dans le salon, vous dites en arabe : « Elle lit un livre. » Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'هي تقرأ كتابا', 'is_correct' => true],
                            ['choice_text' => 'هي تكتب رسالة', 'is_correct' => false],
                            ['choice_text' => 'هي تشتري كتابا', 'is_correct' => false],
                            ['choice_text' => 'هي تحمل حقيبة', 'is_correct' => false],
                        ],
                        'explanation' => '« تقرأ » est le verbe « lire » à la troisième personne du féminin singulier.',
                    ],
                    [
                        'question' => 'Vous annoncez un projet pour ce soir à un collègue anglais : « Je vais appeler mon ami ce soir. » Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'I am going to calling my friend tonight.', 'is_correct' => false],
                            ['choice_text' => 'I will to call my friend tonight.', 'is_correct' => false],
                            ['choice_text' => 'I am going to call my friend tonight.', 'is_correct' => true],
                            ['choice_text' => 'I am going call my friend tonight.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un projet proche se dit « be going to » suivi du verbe de base.',
                    ],
                    [
                        'question' => 'Vous cherchez votre manuel et un ami vous répond en arabe : « Le livre est sur la table. » Quelle phrase a-t-il dite ?',
                        'choices' => [
                            ['choice_text' => 'الكتاب تحت الطاولة', 'is_correct' => false],
                            ['choice_text' => 'الكتاب على الطاولة', 'is_correct' => true],
                            ['choice_text' => 'الكتاب داخل الحقيبة', 'is_correct' => false],
                            ['choice_text' => 'الكتاب بجانب الباب', 'is_correct' => false],
                        ],
                        'explanation' => '« على » signifie « sur » : le livre est posé sur la table.',
                    ],
                    [
                        'question' => 'Il est tard et vous dites à un ami anglais : « Nous devons partir maintenant. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'We must leave now.', 'is_correct' => true],
                            ['choice_text' => 'We must to leave now.', 'is_correct' => false],
                            ['choice_text' => 'We must leaving now.', 'is_correct' => false],
                            ['choice_text' => 'We have must leave now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « must », le verbe reste à la forme de base et sans « to ».',
                    ],
                    [
                        'question' => 'Des enfants sont dans la cour et vous dites en arabe : « Ils jouent au football. » Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'هم يشاهدون كرة القدم', 'is_correct' => false],
                            ['choice_text' => 'هم يلعبون كرة القدم', 'is_correct' => true],
                            ['choice_text' => 'هم يدرسون كرة القدم', 'is_correct' => false],
                            ['choice_text' => 'هم يشترون كرة القدم', 'is_correct' => false],
                        ],
                        'explanation' => '« يلعبون » veut dire « ils jouent » : c’est le verbe qui s’emploie pour un sport.',
                    ],
                    [
                        'question' => 'Vous expliquez à un collègue anglais : « Elle ne travaille pas le dimanche. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'She does not works on Sundays.', 'is_correct' => false],
                            ['choice_text' => 'She is not work on Sundays.', 'is_correct' => false],
                            ['choice_text' => 'She do not work on Sundays.', 'is_correct' => false],
                            ['choice_text' => 'She does not work on Sundays.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « does not », le verbe principal garde sa forme de base : « work ».',
                    ],
                    [
                        'question' => 'Nada ne retrouve plus ses lunettes et dit en arabe : « Je cherche mes lunettes. » Quelle phrase prononce-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'أرتدي نظارتي', 'is_correct' => false],
                            ['choice_text' => 'أشتري نظارتي', 'is_correct' => false],
                            ['choice_text' => 'أصلح نظارتي', 'is_correct' => false],
                            ['choice_text' => 'أبحث عن نظارتي', 'is_correct' => true],
                        ],
                        'explanation' => '« أبحث عن » veut dire « je cherche » et « نظارتي » « mes lunettes ».',
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
