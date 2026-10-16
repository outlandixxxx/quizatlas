<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-fundamentals')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => 'Salutations et présentations',
                'description' => 'Les formules de politesse du quotidien : saluer, se présenter, remercier et prendre congé en arabe.',
                'questions' => [
                    [
                        'q' => 'Vous croisez un voisin le matin. Quelle salutation convient ?',
                        'c' => ['تصبح على خير', 'إلى اللقاء', 'صباح الخير', 'مع السلامة'],
                        'a' => 2,
                        'e' => 'صباح الخير est la formule du matin. تصبح على خير se dit le soir, avant d’aller dormir.',
                    ],
                    [
                        'q' => 'Quelle est la réponse habituelle à « السلام عليكم » ?',
                        'c' => ['شكرًا فقط', 'وعليكم السلام', 'إلى الغد', 'تصبح على خير'],
                        'a' => 1,
                        'e' => 'On répond à « السلام عليكم » par « وعليكم السلام ».',
                    ],
                    [
                        'q' => 'Comment demander son prénom à quelqu’un ?',
                        'c' => ['ما اسمك؟', 'أين بيتك؟', 'كم عمرك؟', 'ماذا تريد؟'],
                        'a' => 0,
                        'e' => '« ما اسمك؟ » signifie « Comment t’appelles-tu ? ».',
                    ],
                    [
                        'q' => 'Comment dit-on « Je m’appelle Ahmed » ?',
                        'c' => ['أنا اسمه أحمد.', 'اسمي أحمد.', 'اسمك أحمد.', 'أحمد اسمي هو.'],
                        'a' => 1,
                        'e' => 'اسمي (« mon nom ») suivi du prénom est la formule naturelle.',
                    ],
                    [
                        'q' => 'On vous demande « كيف حالك؟ » et vous allez bien. Que répondez-vous ?',
                        'c' => ['أنا في المدرسة.', 'اسمي محمد.', 'إلى اللقاء.', 'أنا بخير، شكرًا.'],
                        'a' => 3,
                        'e' => 'La question porte sur votre état : on répond « أنا بخير، شكرًا ».',
                    ],
                    [
                        'q' => 'Quelle expression emploie-t-on pour prendre congé ?',
                        'c' => ['أهلاً وسهلاً', 'إلى اللقاء', 'صباح الخير', 'ما اسمك؟'],
                        'a' => 1,
                        'e' => 'إلى اللقاء signifie « à bientôt / au revoir ». Les autres servent à accueillir ou à questionner.',
                    ],
                    [
                        'q' => 'Que signifie « أهلاً وسهلاً » ?',
                        'c' => ['Merci beaucoup', 'Je ne comprends pas', 'Bienvenue', 'Au revoir'],
                        'a' => 2,
                        'e' => 'أهلاً وسهلاً est une formule d’accueil : « bienvenue ».',
                    ],
                    [
                        'q' => 'Une amie vous dit « شكرًا على مساعدتك ». Que répondez-vous ?',
                        'c' => ['عفوًا', 'صباح الخير', 'ما اسمك؟', 'تصبح على خير'],
                        'a' => 0,
                        'e' => 'عفوًا est la réponse courante à un remerciement (« de rien »).',
                    ],
                    [
                        'q' => 'Quelle phrase convient pour se présenter lors d’une première rencontre ?',
                        'c' => ['أنا صباح الخير.', 'أنا إلى اللقاء.', 'أنا خالد، سعيد بلقائك.', 'شكرًا، اسمي أين.'],
                        'a' => 2,
                        'e' => 'Elle donne le prénom puis une formule polie : « Je suis Khaled, enchanté de te rencontrer ».',
                    ],
                    [
                        'q' => 'Pour terminer poliment un appel téléphonique, on dit :',
                        'c' => ['صباح الخير', 'كم عمرك؟', 'من أين أنت؟', 'مع السلامة'],
                        'a' => 3,
                        'e' => 'مع السلامة est une formule d’adieu courante, aussi bien au téléphone qu’en face à face.',
                    ],
                ],
            ],
            [
                'title' => 'Nombres, heure et jours',
                'description' => 'Les nombres, l’âge, l’heure et les jours de la semaine en arabe, avec des expressions simples.',
                'questions' => [
                    [
                        'q' => 'Quel nombre désigne le mot « ثلاثة » ?',
                        'c' => ['4', '3', '5', '2'],
                        'a' => 1,
                        'e' => 'ثلاثة = 3.',
                    ],
                    [
                        'q' => 'Quelle réponse convient à la question « كم عمرك؟ » ?',
                        'c' => ['اسمي عشرون.', 'بيتي عشرون.', 'أنا غدًا.', 'عمري عشرون سنة.'],
                        'a' => 3,
                        'e' => 'Pour donner son âge : عمري + nombre + سنة.',
                    ],
                    [
                        'q' => 'Quel mot arabe correspond au nombre 10 ?',
                        'c' => ['ثمانية', 'ستة', 'عشرة', 'اثنا عشر'],
                        'a' => 2,
                        'e' => 'عشرة = 10. اثنا عشر vaut 12, ثمانية 8 et ستة 6.',
                    ],
                    [
                        'q' => 'Il est 7 h. Comment le dit-on en arabe ?',
                        'c' => ['الساعة الخامسة', 'الساعة السابعة', 'الساعة التاسعة', 'الساعة الثانية'],
                        'a' => 1,
                        'e' => '7 h se dit « الساعة السابعة ».',
                    ],
                    [
                        'q' => 'Quel jour vient juste après lundi (الاثنين) ?',
                        'c' => ['الأحد', 'الخميس', 'الجمعة', 'الثلاثاء'],
                        'a' => 3,
                        'e' => 'L’ordre est : الاثنين puis الثلاثاء.',
                    ],
                    [
                        'q' => 'Quel nombre désigne « خمسة عشر » ?',
                        'c' => ['15', '50', '5', '25'],
                        'a' => 0,
                        'e' => 'خمسة عشر = cinq + dix = 15.',
                    ],
                    [
                        'q' => 'Samir dit « سأزورك غدًا ». Nous sommes dimanche : quand viendra-t-il ?',
                        'c' => ['السبت', 'الثلاثاء', 'الأحد', 'الاثنين'],
                        'a' => 3,
                        'e' => 'غدًا = demain. Le lendemain du dimanche (الأحد) est le lundi (الاثنين).',
                    ],
                    [
                        'q' => 'Quelle expression signifie « dans deux jours » ?',
                        'c' => ['أمس', 'اليوم', 'بعد يومين', 'الآن'],
                        'a' => 2,
                        'e' => 'بعد يومين = « dans deux jours ». أمس veut dire « hier ».',
                    ],
                    [
                        'q' => 'Dans « السبت، الساعة الثالثة مساءً », quel mot indique le moment de la journée ?',
                        'c' => ['الثالثة', 'مساءً', 'السبت', 'الساعة'],
                        'a' => 1,
                        'e' => 'مساءً = « le soir ». السبت donne le jour et الثالثة l’heure.',
                    ],
                    [
                        'q' => 'Quel mot arabe correspond à « huit » ?',
                        'c' => ['ثمانية', 'سبعة', 'تسعة', 'ستة'],
                        'a' => 0,
                        'e' => 'ثمانية = 8, سبعة = 7, تسعة = 9, ستة = 6.',
                    ],
                ],
            ],
            [
                'title' => 'La famille et les proches',
                'description' => 'Le vocabulaire des membres de la famille et quelques phrases simples pour parler de ses proches.',
                'questions' => [
                    [
                        'q' => 'Quel mot signifie « mère » ?',
                        'c' => ['أخت', 'أم', 'عمة', 'ابنة'],
                        'a' => 1,
                        'e' => 'أم = mère. أخت veut dire « sœur », عمة « tante paternelle », ابنة « fille ».',
                    ],
                    [
                        'q' => 'Que signifie le mot « أخ » ?',
                        'c' => ['Sœur', 'Grand-mère', 'Frère', 'Fils du fils'],
                        'a' => 2,
                        'e' => 'أخ = frère.',
                    ],
                    [
                        'q' => 'Ahmed a un frère et une sœur. Combien a-t-il de frères et sœurs en tout ?',
                        'c' => ['Un', 'Deux', 'Trois', 'Quatre'],
                        'a' => 1,
                        'e' => 'Un frère + une sœur = deux frères et sœurs.',
                    ],
                    [
                        'q' => 'Leïla dit « هذا أبي ». De qui parle-t-elle ?',
                        'c' => ['Son frère', 'Son fils', 'Son oncle', 'Son père'],
                        'a' => 3,
                        'e' => 'أبي = mon père.',
                    ],
                    [
                        'q' => 'Quel mot désigne la sœur du père ?',
                        'c' => ['عمة', 'خالة', 'جدة', 'ابنة'],
                        'a' => 0,
                        'e' => 'La sœur du père est la عمة ; la sœur de la mère est la خالة.',
                    ],
                    [
                        'q' => 'Comment appelle-t-on la mère de votre mère ?',
                        'c' => ['عمتك', 'جدتك', 'أختك', 'ابنتك'],
                        'a' => 1,
                        'e' => 'C’est votre grand-mère : جدتك.',
                    ],
                    [
                        'q' => 'Quel mot désigne le frère du père ?',
                        'c' => ['خال', 'جد', 'ابن العم', 'عم'],
                        'a' => 3,
                        'e' => 'عم = oncle paternel ; خال = oncle maternel.',
                    ],
                    [
                        'q' => 'Quelle phrase correcte signifie « Ma famille compte cinq personnes » ?',
                        'c' => ['أسرتي خمسة إلى.', 'تتكون أفراد خمسة.', 'تتكون أسرتي من خمسة أفراد.', 'خمسة أفراد أسرتي من تتكون.'],
                        'a' => 2,
                        'e' => 'Seule la troisième phrase est bien construite (verbe + sujet + من + complément).',
                    ],
                    [
                        'q' => 'Mahmoud vit avec ses parents et sa sœur (« يعيش مع والديه وأخته »). Qui vit avec lui ?',
                        'c' => ['Son frère seulement', 'Son père, sa mère et sa sœur', 'Son oncle et sa grand-mère', 'Son cousin seulement'],
                        'a' => 1,
                        'e' => 'والديه = ses parents ; أخته = sa sœur.',
                    ],
                    [
                        'q' => 'Comment présenter sa sœur Sara à un ami ?',
                        'c' => ['هذه أختي اسمك سارة.', 'هذه سارة أختك أنا.', 'هي أختي اسمها أنا.', 'هذه أختي، اسمها سارة.'],
                        'a' => 3,
                        'e' => 'On désigne la personne, on dit le lien de parenté, puis le prénom : « Voici ma sœur, elle s’appelle Sara ».',
                    ],
                ],
            ],
            [
                'title' => 'Nourriture, boissons et achats',
                'description' => 'Le vocabulaire utile pour commander, demander un prix et faire ses courses en arabe.',
                'questions' => [
                    [
                        'q' => 'Quel mot arabe signifie « pain » ?',
                        'c' => ['أرز', 'حليب', 'تفاح', 'خبز'],
                        'a' => 3,
                        'e' => 'خبز = pain ; أرز = riz ; حليب = lait ; تفاح = pommes.',
                    ],
                    [
                        'q' => 'Au restaurant, vous voulez de l’eau. Que demandez-vous ?',
                        'c' => ['أريد خبزًا، من فضلك.', 'أريد ماءً، من فضلك.', 'أريد شايًا، من فضلك.', 'أريد عصيرًا، من فضلك.'],
                        'a' => 1,
                        'e' => 'ماء = eau. « من فضلك » ajoute la politesse.',
                    ],
                    [
                        'q' => 'Lequel de ces mots désigne un fruit ?',
                        'c' => ['تفاحة', 'ملعقة', 'كرسي', 'كوب'],
                        'a' => 0,
                        'e' => 'تفاحة = une pomme. ملعقة (cuillère), كرسي (chaise) et كوب (verre) ne sont pas des fruits.',
                    ],
                    [
                        'q' => 'Le jus coûte 5 dirhams et vous payez avec 10 dirhams. Combien le vendeur doit-il vous rendre ?',
                        'c' => ['4 dirhams', '5 dirhams', '10 dirhams', '15 dirhams'],
                        'a' => 1,
                        'e' => '10 − 5 = 5 dirhams.',
                    ],
                    [
                        'q' => 'Au marché, comment demander le prix d’un article ?',
                        'c' => ['أين هذا؟', 'كيف حالك؟', 'بكم هذا؟', 'ما اسمك؟'],
                        'a' => 2,
                        'e' => '« بكم هذا؟ » signifie « combien ça coûte ? ».',
                    ],
                    [
                        'q' => 'Sara commande « شاي بالحليب ». Que boit-elle ?',
                        'c' => ['Du café seul', 'De l’eau seule', 'Du thé au lait', 'Du jus d’orange'],
                        'a' => 2,
                        'e' => 'شاي بالحليب = thé au lait.',
                    ],
                    [
                        'q' => 'Comment dit-on « sans sucre, s’il vous plaît » ?',
                        'c' => ['سكر كثير، من فضلك.', 'مع سكر، من فضلك.', 'أين السكر؟', 'من دون سكر، من فضلك.'],
                        'a' => 3,
                        'e' => 'من دون = sans.',
                    ],
                    [
                        'q' => 'Quel mot arabe signifie « lait » ?',
                        'c' => ['حليب', 'عصير', 'ماء', 'قهوة'],
                        'a' => 0,
                        'e' => 'حليب = lait ; عصير = jus ; ماء = eau ; قهوة = café.',
                    ],
                    [
                        'q' => 'Le vendeur dit « هذا آخر سعر ». Que veut-il dire ?',
                        'c' => ['Que c’est gratuit', 'Que le magasin ferme', 'Que le prix change sans cesse', 'Que c’est son dernier prix'],
                        'a' => 3,
                        'e' => 'آخر سعر = « dernier prix » : le vendeur ne baissera pas davantage.',
                    ],
                    [
                        'q' => 'Un client dit « الحساب، من فضلك ». Que demande-t-il ?',
                        'c' => ['Une nouvelle table', 'L’addition', 'Le menu', 'Un verre d’eau'],
                        'a' => 1,
                        'e' => 'الحساب = l’addition.',
                    ],
                ],
            ],
            [
                'title' => 'Lieux, directions et vie quotidienne',
                'description' => 'Les lieux courants, les prépositions de lieu et les directions pour se repérer en ville.',
                'questions' => [
                    [
                        'q' => 'Où va-t-on d’habitude pour acheter des médicaments ?',
                        'c' => ['الصيدلية', 'المكتبة', 'المخبز', 'الملعب'],
                        'a' => 0,
                        'e' => 'الصيدلية = la pharmacie.',
                    ],
                    [
                        'q' => '« المدرسة أمام المسجد » : où se trouve l’école par rapport à la mosquée ?',
                        'c' => ['Derrière', 'Au-dessus', 'En face', 'À l’intérieur'],
                        'a' => 2,
                        'e' => 'أمام = devant / en face de.',
                    ],
                    [
                        'q' => 'Quel mot est le contraire de « يمين » (droite) ?',
                        'c' => ['أمام', 'فوق', 'داخل', 'يسار'],
                        'a' => 3,
                        'e' => 'يسار = gauche.',
                    ],
                    [
                        'q' => 'Le plan indique : « امشِ إلى الأمام ثم انعطف يسارًا ». Quelle est la deuxième étape ?',
                        'c' => ['Tourner à gauche', 'Tourner à droite', 'Faire demi-tour', 'S’arrêter'],
                        'a' => 0,
                        'e' => 'Première étape : avancer. Deuxième étape (ثم) : tourner à gauche.',
                    ],
                    [
                        'q' => 'À la gare, comment demander où est le guichet ?',
                        'c' => ['كم عمرك؟', 'هل تحب القهوة؟', 'أين شباك التذاكر؟', 'ما اسم عائلتك؟'],
                        'a' => 2,
                        'e' => 'شباك التذاكر = le guichet des billets.',
                    ],
                    [
                        'q' => 'Que signifie « فوق » ?',
                        'c' => ['Dessous', 'Devant', 'Dessus', 'Derrière'],
                        'a' => 2,
                        'e' => 'فوق = au-dessus ; تحت = en dessous.',
                    ],
                    [
                        'q' => 'Où peut-on retirer de l’argent ?',
                        'c' => ['البنك', 'المخبز', 'الملعب', 'المكتبة'],
                        'a' => 0,
                        'e' => 'البنك = la banque.',
                    ],
                    [
                        'q' => 'Dans « المطعم بجانب الفندق », que signifie « بجانب » ?',
                        'c' => ['Très loin de lui', 'Sous lui', 'À l’intérieur', 'Près de lui'],
                        'a' => 3,
                        'e' => 'بجانب = à côté de, tout près.',
                    ],
                    [
                        'q' => 'Vous êtes perdu dans une ville inconnue. Quelle question est la plus utile ?',
                        'c' => ['هل تحب الفاكهة؟', 'كم عمرك؟', 'ما لون قميصك؟', 'كيف أذهب إلى محطة الحافلات؟'],
                        'a' => 3,
                        'e' => '« كيف أذهب إلى… ؟ » = « comment aller à… ? », la bonne question pour demander son chemin.',
                    ],
                    [
                        'q' => 'Comment dit-on « derrière le magasin » ?',
                        'c' => ['أمام المتجر', 'خلف المتجر', 'داخل المتجر', 'فوق المتجر'],
                        'a' => 1,
                        'e' => 'خلف = derrière ; أمام = devant ; داخل = à l’intérieur.',
                    ],
                ],
            ],
            [
                'title' => 'Décrire et exprimer ses sentiments',
                'description' => 'Adjectifs simples, couleurs et mots du ressenti pour décrire une personne, un objet ou le temps.',
                'questions' => [
                    [
                        'q' => 'Quel mot décrit la couleur d’un ciel dégagé ?',
                        'c' => ['أحمر', 'أزرق', 'أسود', 'أخضر'],
                        'a' => 1,
                        'e' => 'أزرق = bleu.',
                    ],
                    [
                        'q' => 'Quel est le contraire de « كبير » ?',
                        'c' => ['طويل', 'قريب', 'قديم', 'صغير'],
                        'a' => 3,
                        'e' => 'كبير (grand) s’oppose à صغير (petit).',
                    ],
                    [
                        'q' => 'Quel est le contraire de « جديد » ?',
                        'c' => ['قديم', 'سريع', 'نظيف', 'بعيد'],
                        'a' => 0,
                        'e' => 'جديد (neuf) s’oppose à قديم (vieux, ancien).',
                    ],
                    [
                        'q' => 'Sara dit « أنا سعيدة اليوم ». Que ressent-elle ?',
                        'c' => ['Elle dort', 'De la joie', 'Elle a faim', 'Elle est à l’école'],
                        'a' => 1,
                        'e' => 'سعيدة = heureuse (au féminin).',
                    ],
                    [
                        'q' => 'Une rue où passent peu de voitures est plutôt…',
                        'c' => ['صاخب', 'ثقيل', 'حلو', 'هادئ'],
                        'a' => 3,
                        'e' => 'هادئ = calme, tranquille ; صاخب = bruyant.',
                    ],
                    [
                        'q' => 'Quel adjectif convient à un temps avec de la pluie et un vent fort ?',
                        'c' => ['جاف ودافئ', 'مشمس فقط', 'عاصف وممطر', 'مثلج دائمًا'],
                        'a' => 2,
                        'e' => 'عاصف = venteux ; ممطر = pluvieux.',
                    ],
                    [
                        'q' => 'Un livre qui a peu de pages est…',
                        'c' => ['ثقيل', 'قصير', 'قديم', 'ممتع'],
                        'a' => 1,
                        'e' => 'قصير = court.',
                    ],
                    [
                        'q' => 'Quel sentiment éprouve quelqu’un qui a perdu un objet auquel il tenait ?',
                        'c' => ['الفرح', 'الجوع', 'الهدوء', 'الحزن'],
                        'a' => 3,
                        'e' => 'الحزن = la tristesse.',
                    ],
                    [
                        'q' => 'L’examen était « سهل » pour Khaled. Qu’est-ce que cela signifie ?',
                        'c' => ['Il ne l’a pas trouvé difficile', 'Il n’a rien compris', 'Il n’est pas venu', 'L’examen était très long'],
                        'a' => 0,
                        'e' => 'سهل = facile.',
                    ],
                    [
                        'q' => 'Quel mot arabe signifie « froid » ?',
                        'c' => ['حار', 'بارد', 'جميل', 'سريع'],
                        'a' => 1,
                        'e' => 'بارد = froid ; حار = chaud.',
                    ],
                ],
            ],
            [
                'title' => 'Questions et réponses utiles',
                'description' => 'Poser et comprendre les questions de base : qui, où, quand, pourquoi, et y répondre poliment.',
                'questions' => [
                    [
                        'q' => 'Comment demander où se trouve quelqu’un ?',
                        'c' => ['كم عمرك؟', 'أين أنت؟', 'ما اسمك؟', 'ماذا تأكل؟'],
                        'a' => 1,
                        'e' => 'أين = où.',
                    ],
                    [
                        'q' => 'Que signifie la question « من أين أنت؟ » ?',
                        'c' => ['Quel âge as-tu ?', 'Quel est ton plat préféré ?', 'D’où viens-tu ?', 'Quel est ton métier ?'],
                        'a' => 2,
                        'e' => 'من أين = d’où.',
                    ],
                    [
                        'q' => 'Nora dit « أنا من المغرب ». À quelle question répond-elle ?',
                        'c' => ['كم عمرك؟', 'أين تعمل؟', 'من أين أنت؟', 'ماذا تريد؟'],
                        'a' => 2,
                        'e' => 'Elle donne son pays d’origine, donc elle répond à « من أين أنت؟ ».',
                    ],
                    [
                        'q' => 'Vous n’avez pas compris un mot dit par le professeur. Que dites-vous ?',
                        'c' => ['كم سعره؟', 'أين المطار؟', 'متى تنام؟', 'ماذا يعني هذا؟'],
                        'a' => 3,
                        'e' => '« ماذا يعني هذا؟ » = « qu’est-ce que cela veut dire ? ».',
                    ],
                    [
                        'q' => 'Pour savoir ce que fait quelqu’un en ce moment, on demande :',
                        'c' => ['من أنت؟', 'ماذا تفعل؟', 'أين بيتك؟', 'كم كتابًا عندك؟'],
                        'a' => 1,
                        'e' => 'ماذا تفعل؟ = « que fais-tu ? ».',
                    ],
                    [
                        'q' => 'Youssef dit « أنا أعمل في مستشفى ». Que sait-on de lui ?',
                        'c' => ['Il étudie à l’université', 'Il vit à l’école', 'Il travaille à l’hôpital', 'Il travaille au restaurant'],
                        'a' => 2,
                        'e' => 'أعمل في مستشفى = je travaille dans un hôpital.',
                    ],
                    [
                        'q' => 'Quel mot interrogatif sert à demander la cause ?',
                        'c' => ['لماذا؟', 'أين؟', 'متى؟', 'من؟'],
                        'a' => 0,
                        'e' => 'لماذا = pourquoi ; أين = où ; متى = quand ; من = qui.',
                    ],
                    [
                        'q' => 'Avec « متى تبدأ المباراة؟ », que veut-on savoir ?',
                        'c' => ['Le lieu seulement', 'Le nom du joueur', 'L’heure', 'Le prix du billet'],
                        'a' => 2,
                        'e' => 'متى = quand : on demande l’heure du début du match.',
                    ],
                    [
                        'q' => 'Un ami vous demande un stylo. Quelle réponse marque l’accord ?',
                        'c' => ['نعم، تفضل.', 'لا، ليس عندي.', 'لا أعرف أين القلم.', 'من أين أنت؟'],
                        'a' => 0,
                        'e' => '« نعم، تفضل » = « oui, tiens / je t’en prie ».',
                    ],
                    [
                        'q' => 'On vous propose de l’aide : « هل تحتاج إلى مساعدة؟ ». Comment refuser poliment ?',
                        'c' => ['أين المساعدة؟', 'لا، شكرًا. أنا بخير.', 'نعم، لا أريدها.', 'صباح الغد.'],
                        'a' => 1,
                        'e' => '« لا، شكرًا. أنا بخير. » refuse avec courtoisie. « نعم، لا أريدها » se contredit.',
                    ],
                ],
            ],
            [
                'title' => 'Révision des bases de l’arabe',
                'description' => 'Révision mêlant salutations, nombres, famille, lieux, descriptions et questions courantes.',
                'questions' => [
                    [
                        'q' => 'Vous arrivez dans un lieu inconnu le matin. Quelle suite de phrases est naturelle ?',
                        'c' => ['إلى اللقاء، أنا ياسر، صباح الخير بعد ذلك.', 'السلام عليكم، اسمي ياسر، أين محطة الحافلات؟', 'مع السلامة، أين أنا اسمي؟', 'شكرًا، ما اسمك، ثم تصبح على خير عند الوصول.'],
                        'a' => 1,
                        'e' => 'On salue, on se présente, puis on pose sa question : l’ordre le plus naturel.',
                    ],
                    [
                        'q' => 'Vous avez 30 dirhams, vous payez 12 dirhams pour le déjeuner et 8 pour le jus. Combien vous reste-t-il ?',
                        'c' => ['12 dirhams', '14 dirhams', '20 dirhams', '10 dirhams'],
                        'a' => 3,
                        'e' => '12 + 8 = 20, puis 30 − 20 = 10 dirhams.',
                    ],
                    [
                        'q' => 'Mariam dit : « أخي يعمل في البنك وأنا أدرس في الجامعة ». Quelle information est exacte ?',
                        'c' => ['Mariam travaille à la banque.', 'Le frère de Mariam étudie à l’université.', 'Le frère de Mariam travaille à la banque.', 'Mariam travaille à l’école.'],
                        'a' => 2,
                        'e' => 'C’est le frère qui travaille à la banque ; Mariam, elle, étudie à l’université.',
                    ],
                    [
                        'q' => 'On vous dit : « المكتبة بجانب المدرسة وعلى اليمين ». Quelle description correspond ?',
                        'c' => ['Une bibliothèque à l’intérieur de l’école', 'Une bibliothèque proche de l’école, sur la droite', 'Une bibliothèque très loin derrière l’école', 'Une bibliothèque sous l’école'],
                        'a' => 1,
                        'e' => 'بجانب = à côté ; على اليمين = à droite.',
                    ],
                    [
                        'q' => 'Le marchand dit « هذا القميص بـ40 درهمًا ». Que comprenez-vous ?',
                        'c' => ['La chemise est gratuite', 'Le magasin ferme dans 40 minutes', 'La chemise est forcément d’occasion', 'La chemise coûte 40 dirhams'],
                        'a' => 3,
                        'e' => 'Le nombre introduit par بـ donne le prix.',
                    ],
                    [
                        'q' => 'Khaled raconte : « استيقظت مبكرًا، تناولت الفطور، ثم ذهبت إلى العمل ». Que fait-il en premier ?',
                        'c' => ['Il prend le petit-déjeuner', 'Il part au travail', 'Il rentre à la maison', 'Il se réveille'],
                        'a' => 3,
                        'e' => 'Le récit suit l’ordre chronologique : il se réveille, déjeune, puis part au travail.',
                    ],
                    [
                        'q' => 'Quelle réponse à « كيف حالك؟ » est à la fois polie et informative ?',
                        'c' => ['أنا بخير، شكرًا. وأنت؟', 'اسمي خالد فقط.', 'أين المدرسة؟', 'ثلاثة كتب.'],
                        'a' => 0,
                        'e' => 'On donne de ses nouvelles, on remercie et on retourne la question.',
                    ],
                    [
                        'q' => 'Vous voulez savoir pourquoi votre ami est en retard. Quelle question posez-vous ?',
                        'c' => ['أين اسمك؟', 'كم بيتك؟', 'متى عمرك؟', 'لماذا تأخرت؟'],
                        'a' => 3,
                        'e' => 'لماذا = pourquoi ; تأخرت = tu es en retard.',
                    ],
                    [
                        'q' => 'Rendez-vous « يوم الجمعة الساعة الخامسة مساءً ». Quel mot indique le jour et lequel la partie de la journée ?',
                        'c' => ['Jour : الخامسة ; moment : الجمعة', 'Jour : مساءً ; lieu : الخامسة', 'Jour : الجمعة ; moment : مساءً', 'Tous les mots indiquent le jour'],
                        'a' => 2,
                        'e' => 'الجمعة est un jour de la semaine ; مساءً précise le moment de la journée ; الخامسة donne l’heure.',
                    ],
                    [
                        'q' => 'Un nouvel élève dit : « أنا من تونس، اسمي سامي، وأحب القراءة ». Que sait-on de lui ?',
                        'c' => ['Il s’appelle Tunis et vient de Sami', 'Il travaille forcément dans une librairie', 'Il s’appelle Sami, vient de Tunisie et aime lire', 'Il a vingt ans'],
                        'a' => 2,
                        'e' => 'Trois informations : prénom Sami, origine Tunisie, goût pour la lecture.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $position => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings[$position]['duration'],
                    'passing_score' => $settings[$position]['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $qIndex => $item) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $qIndex + 1,
                    ],
                    [
                        'question' => $item['q'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $item['e'],
                    ]
                );

                foreach ($item['c'] as $cIndex => $text) {
                    Choice::updateOrCreate(
                        [
                            'question_id' => $question->id,
                            'order' => $cIndex + 1,
                        ],
                        [
                            'choice_text' => $text,
                            'is_correct' => $cIndex === $item['a'],
                        ]
                    );
                }

                $question->choices()->where('order', '>', count($item['c']))->delete();
            }
        }
    }
}
