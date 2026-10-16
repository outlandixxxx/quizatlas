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
                'title' => 'Noms, verbes et particules',
                'description' => 'Reconnaître les trois catégories de mots en arabe (nom, verbe, particule) dans de courtes phrases.',
                'questions' => [
                    [
                        'q' => 'Dans la phrase « ذهبَ عليٌّ إلى المدرسةِ », quel mot est le verbe ?',
                        'c' => ['عليٌّ', 'إلى', 'المدرسةِ', 'ذهبَ'],
                        'a' => 3,
                        'e' => 'ذهبَ exprime une action accomplie : c’est un verbe au passé.',
                    ],
                    [
                        'q' => 'Lequel de ces mots est un nom ?',
                        'c' => ['يكتبُ', 'من', 'نافذةٌ', 'اكتبْ'],
                        'a' => 2,
                        'e' => 'نافذةٌ (une fenêtre) désigne une chose : c’est un nom. يكتبُ et اكتبْ sont des verbes, من est une particule.',
                    ],
                    [
                        'q' => 'Quelle est la nature du mot « في » dans « الكتابُ في الحقيبةِ » ?',
                        'c' => ['Préposition (حرف جر)', 'Nom', 'Verbe', 'Adjectif'],
                        'a' => 0,
                        'e' => 'في est une préposition ; elle indique ici le lieu où se trouve le livre.',
                    ],
                    [
                        'q' => 'Quelle phrase commence par un verbe ?',
                        'c' => ['الطفلُ ينامُ مبكرًا.', 'يقرأُ سامرٌ القصةَ.', 'في البيتِ طفلٌ.', 'الحديقةُ واسعةٌ.'],
                        'a' => 1,
                        'e' => 'يقرأُ سامرٌ القصةَ commence par le verbe يقرأُ : c’est une phrase verbale (جملة فعلية).',
                    ],
                    [
                        'q' => 'Complétez : « أعودُ ___ البيتِ. »',
                        'c' => ['هو', 'كتبَ', 'جميلٌ', 'إلى'],
                        'a' => 3,
                        'e' => 'إلى marque la direction : « je rentre à la maison ».',
                    ],
                    [
                        'q' => 'Dans « يضحكُ الطفلُ », quel mot est le sujet (الفاعل) ?',
                        'c' => ['Aucun des deux', 'يضحكُ', 'الطفلُ', 'Les deux mots'],
                        'a' => 2,
                        'e' => 'C’est l’enfant qui rit : الطفلُ est le sujet du verbe يضحكُ.',
                    ],
                    [
                        'q' => 'Quelle phrase est correctement construite avec les mots « الولد / في / الحديقة / يلعب » ?',
                        'c' => ['في الولد يلعب الحديقة.', 'الحديقة الولد في يلعب.', 'الولد يلعب في الحديقة.', 'الولد الحديقة يلعب في.'],
                        'a' => 2,
                        'e' => 'Seule « الولد يلعب في الحديقة » (le garçon joue dans le jardin) est à la fois ordonnée et compréhensible.',
                    ],
                    [
                        'q' => 'Dans « هذا كتابٌ جديدٌ », quel mot qualifie le livre ?',
                        'c' => ['جديدٌ', 'هذا', 'كتابٌ', 'Aucun'],
                        'a' => 0,
                        'e' => 'جديدٌ (neuf) décrit le livre : c’est un adjectif.',
                    ],
                    [
                        'q' => 'Dans « على الطاولةِ », à quel cas se trouve le mot « الطاولة » ?',
                        'c' => ['Nominatif (مرفوع)', 'Accusatif (منصوب)', 'Génitif (مجرور)', 'Impératif'],
                        'a' => 2,
                        'e' => 'Après une préposition comme على, le nom est au génitif : الطاولةِ (kasra).',
                    ],
                    [
                        'q' => 'Quelle phrase contient à la fois un nom, un verbe et une particule ?',
                        'c' => ['الولدُ والمدرسةُ.', 'يكتبُ ويقرأُ.', 'في البيتِ.', 'الولدُ يذهبُ إلى المدرسةِ.'],
                        'a' => 3,
                        'e' => 'الولدُ (nom), يذهبُ (verbe), إلى (particule de direction).',
                    ],
                ],
            ],
            [
                'title' => 'Genre et nombre',
                'description' => 'Masculin et féminin, singulier, duel et pluriel : former les mots et les accorder.',
                'questions' => [
                    [
                        'q' => 'Lequel de ces mots est féminin ?',
                        'c' => ['ولد', 'كتاب', 'قلم', 'طالبة'],
                        'a' => 3,
                        'e' => 'طالبة est féminin ; la marque du féminin est le tāʼ marbūṭa (ة).',
                    ],
                    [
                        'q' => 'Quel est le duel (المثنى) de « معلم » au nominatif ?',
                        'c' => ['معلمون', 'معلمات', 'معلمان', 'معلمة'],
                        'a' => 2,
                        'e' => 'Le duel s’obtient avec ـان au nominatif : معلمان (deux enseignants).',
                    ],
                    [
                        'q' => 'Quel est le pluriel de « بنت » ?',
                        'c' => ['بنون', 'بنات', 'بنتان', 'بنوت'],
                        'a' => 1,
                        'e' => 'Le pluriel de بنت est بنات. بنتان est le duel.',
                    ],
                    [
                        'q' => 'Quelle phrase respecte l’accord entre le nom et l’adjectif ?',
                        'c' => ['ولدٌ مجتهدةٌ.', 'طالباتٌ مجتهدٌ.', 'بنتٌ مجتهدةٌ.', 'معلمانِ مجتهدةٌ.'],
                        'a' => 2,
                        'e' => 'بنت est féminin singulier ; l’adjectif مجتهدة l’est aussi.',
                    ],
                    [
                        'q' => 'Complétez : « الطلابُ ___ في الفصل. »',
                        'c' => ['مجتهدات', 'مجتهدون', 'مجتهد', 'مجتهدان'],
                        'a' => 1,
                        'e' => 'الطلاب désigne des garçons au pluriel : on emploie le pluriel masculin مجتهدون.',
                    ],
                    [
                        'q' => 'Quel mot désigne deux livres ?',
                        'c' => ['كتاب', 'كتب', 'كتابان', 'كاتب'],
                        'a' => 2,
                        'e' => 'كتابان est le duel de كتاب.',
                    ],
                    [
                        'q' => 'Sara et sa sœur sont étudiantes. Quel pronom les désigne toutes les deux ?',
                        'c' => ['هم', 'هما', 'هنّ', 'هي'],
                        'a' => 1,
                        'e' => 'Pour parler de deux personnes (« elles deux »), on emploie هما.',
                    ],
                    [
                        'q' => 'Complétez : « هذانِ ___ جديدانِ. »',
                        'c' => ['كتب', 'كتابة', 'كتاب', 'كتابان'],
                        'a' => 3,
                        'e' => 'هذان est le démonstratif du duel masculin ; il appelle donc un nom au duel : كتابان.',
                    ],
                    [
                        'q' => 'Comment dit-on « trois enseignantes » ?',
                        'c' => ['ثلاثة معلمات', 'ثلاث معلمات', 'ثلاث معلمون', 'ثلاثان معلمات'],
                        'a' => 1,
                        'e' => 'De 3 à 10, le nombre prend le genre opposé à celui du nom compté : nom féminin → ثلاث (sans ة).',
                    ],
                    [
                        'q' => 'Complétez : « الطالبتانِ ___ الدرسَ. »',
                        'c' => ['يكتبون', 'يكتبان', 'تكتبن', 'تكتبان'],
                        'a' => 3,
                        'e' => 'Sujet au féminin duel placé avant le verbe : le verbe s’accorde, تكتبان.',
                    ],
                ],
            ],
            [
                'title' => 'Pronoms et démonstratifs',
                'description' => 'Les pronoms personnels et les démonstratifs courants : هذا، هذه، هؤلاء، ذلك…',
                'questions' => [
                    [
                        'q' => 'Quel pronom convient : « ___ أتعلم العربية كل يوم » ?',
                        'c' => ['هو', 'أنا', 'هم', 'هي'],
                        'a' => 1,
                        'e' => 'Quelqu’un qui parle de lui-même emploie أنا (« je »).',
                    ],
                    [
                        'q' => 'Complétez : « مريم طالبة. ___ مجتهدة. »',
                        'c' => ['هي', 'هو', 'هم', 'نحن'],
                        'a' => 0,
                        'e' => 'Mariam est une seule femme : le pronom est هي (« elle »).',
                    ],
                    [
                        'q' => 'Vous et votre frère êtes étudiants. Quel pronom vous désigne tous les deux ?',
                        'c' => ['هما', 'أنتم', 'نحن', 'أنتما'],
                        'a' => 3,
                        'e' => 'Quand on s’adresse à deux personnes, on dit أنتما (« vous deux »).',
                    ],
                    [
                        'q' => 'Quelle phrase emploie correctement « هذه » ?',
                        'c' => ['هذه كتابٌ.', 'هذه قلمٌ.', 'هذه سيارةٌ.', 'هذه ولدٌ.'],
                        'a' => 2,
                        'e' => 'هذه s’emploie avec un nom féminin singulier : سيارة (une voiture).',
                    ],
                    [
                        'q' => 'Complétez : « ___ رجلٌ عند الباب. »',
                        'c' => ['هذا', 'هذه', 'هؤلاء', 'هاتان'],
                        'a' => 0,
                        'e' => 'رجل est masculin singulier et proche : هذا.',
                    ],
                    [
                        'q' => 'Dans quel cas emploie-t-on « هؤلاء » ?',
                        'c' => ['Avec un seul étudiant', 'Avec une seule femme', 'Avec un groupe de personnes', 'Avec un objet éloigné'],
                        'a' => 2,
                        'e' => 'هؤلاء désigne un groupe de personnes proches : « ceux-ci / ces gens ».',
                    ],
                    [
                        'q' => 'Complétez : « الطلاب في الفصل. ___ يستمعون إلى المعلم. »',
                        'c' => ['هي', 'أنت', 'هو', 'هم'],
                        'a' => 3,
                        'e' => 'Le pronom qui reprend un groupe de garçons est هم (« ils »).',
                    ],
                    [
                        'q' => 'Quel démonstratif désigne une chose éloignée, au masculin singulier ?',
                        'c' => ['هذا', 'ذلك', 'تلك', 'هؤلاء'],
                        'a' => 1,
                        'e' => 'ذلك = « celui-là ». تلك est le féminin.',
                    ],
                    [
                        'q' => 'Quelle phrase est correcte ?',
                        'c' => ['هاتانِ بنتانِ.', 'هذانِ بنتانِ.', 'هؤلاء بنتٌ.', 'هذا بنتٌ.'],
                        'a' => 0,
                        'e' => 'هاتان est le démonstratif du duel féminin, qui convient à بنتان.',
                    ],
                    [
                        'q' => 'L’enseignante dit : « أنا أشرح الدرس، وأنتم تستمعون ». Qui écoute ?',
                        'c' => ['L’enseignante seulement', 'Une personne éloignée', 'Les élèves auxquels elle s’adresse', 'Personne'],
                        'a' => 2,
                        'e' => 'أنتم désigne les personnes à qui l’on parle (« vous », au pluriel).',
                    ],
                ],
            ],
            [
                'title' => 'Phrase nominale et adjectifs',
                'description' => 'Construire une phrase nominale (sujet + prédicat) et accorder l’adjectif avec le nom.',
                'questions' => [
                    [
                        'q' => 'Dans « السماءُ صافيةٌ », quel mot est le sujet (المبتدأ) ?',
                        'c' => ['صافيةٌ', 'Il n’y en a pas', 'السماءُ', 'Les deux mots ensemble'],
                        'a' => 2,
                        'e' => 'La phrase nominale commence par le sujet : السماءُ.',
                    ],
                    [
                        'q' => 'Dans « البيتُ كبيرٌ », quel mot est le prédicat (الخبر) ?',
                        'c' => ['البيتُ', 'كبيرٌ', 'Aucun', 'La phrase entière'],
                        'a' => 1,
                        'e' => 'كبيرٌ apporte l’information sur le sujet : c’est le khabar.',
                    ],
                    [
                        'q' => 'Choisissez l’adjectif correct : « حديقةٌ ___ ».',
                        'c' => ['جميلٌ', 'جميلةٌ', 'جميلانِ', 'جميلاتٌ'],
                        'a' => 1,
                        'e' => 'حديقة est féminin singulier : l’adjectif prend la même forme, جميلة.',
                    ],
                    [
                        'q' => 'Quelle phrase est correcte ?',
                        'c' => ['الكتابُ مفيدةٌ.', 'الكتابُ مفيدانِ.', 'الكتابُ مفيدٌ.', 'الكتابُ مفيداتٌ.'],
                        'a' => 2,
                        'e' => 'الكتاب est masculin singulier, donc مفيد.',
                    ],
                    [
                        'q' => 'Complétez : « المعلمتانِ ___ في المدرسة. »',
                        'c' => ['نشطٌ', 'نشطتانِ', 'نشاط', 'نشطون'],
                        'a' => 1,
                        'e' => 'المعلمتان est un féminin duel : l’adjectif est نشطتان.',
                    ],
                    [
                        'q' => 'Dans quelle phrase le prédicat est-il un groupe prépositionnel (شبه جملة) ?',
                        'c' => ['الكتابُ مفيدٌ.', 'يقرأُ الطالبُ.', 'كتبَ الطالبُ.', 'الكتابُ على الطاولةِ.'],
                        'a' => 3,
                        'e' => 'Dans « الكتابُ على الطاولةِ », c’est على الطاولةِ qui joue le rôle de prédicat.',
                    ],
                    [
                        'q' => 'Complétez : « الوردةُ ___ ».',
                        'c' => ['حمراءُ', 'أحمرُ', 'حمرانِ', 'حمرٌ'],
                        'a' => 0,
                        'e' => 'الوردة est féminin singulier : on emploie le féminin حمراء.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est une phrase nominale ?',
                        'c' => ['كتبَ الطالبُ الدرسَ.', 'يلعبُ الأولادُ.', 'ذهبتِ البنتُ.', 'الطقسُ جميلٌ اليومَ.'],
                        'a' => 3,
                        'e' => 'Elle commence par un nom (الطقسُ) ; les autres commencent par un verbe.',
                    ],
                    [
                        'q' => 'Dans « الطالبانِ مجتهدانِ », quel est le rôle de « مجتهدانِ » ?',
                        'c' => ['Un verbe', 'Un démonstratif', 'Une préposition', 'Le prédicat (خبر), qui qualifie les deux étudiants'],
                        'a' => 3,
                        'e' => 'مجتهدانِ s’accorde au duel avec الطالبانِ et donne l’information sur eux : c’est le khabar.',
                    ],
                    [
                        'q' => 'Quelle phrase respecte l’accord ?',
                        'c' => ['شوارعُ واسعٌ.', 'شوارعُ واسعانِ.', 'شوارعُ واسعتانِ.', 'شوارعُ واسعةٌ.'],
                        'a' => 3,
                        'e' => 'Un pluriel de choses (شوارع) s’accorde avec un adjectif au féminin singulier : واسعة.',
                    ],
                ],
            ],
            [
                'title' => 'Phrase verbale et accord du verbe',
                'description' => 'Repérer le sujet et le complément, puis accorder le verbe avec son sujet.',
                'questions' => [
                    [
                        'q' => 'Quelle phrase verbale est correcte ?',
                        'c' => ['كتبتَ الطالبُ الواجبَ.', 'كتبَ الطالبُ الواجبَ.', 'كتبنَ الطالبُ الواجبَ.', 'كتبوا الطالبُ الواجبَ.'],
                        'a' => 1,
                        'e' => 'Le sujet الطالبُ est à la 3e personne du masculin singulier : le verbe est كتبَ.',
                    ],
                    [
                        'q' => 'Complétez : « تذهبُ ___ إلى الجامعةِ. »',
                        'c' => ['الطالبُ', 'الطالبةُ', 'الطلابُ', 'الطالبانِ'],
                        'a' => 1,
                        'e' => 'تذهبُ est au féminin singulier ; seul الطالبةُ convient comme sujet.',
                    ],
                    [
                        'q' => 'Dans « قرأَ محمدٌ القصةَ », qui a lu ?',
                        'c' => ['L’histoire', 'On ne sait pas', 'محمد', 'La lecture'],
                        'a' => 2,
                        'e' => 'محمد est le sujet du verbe قرأَ.',
                    ],
                    [
                        'q' => 'Quel verbe au présent s’accorde avec « البنتانِ » ?',
                        'c' => ['يقرآنِ', 'يقرؤون', 'تقرآنِ', 'تقرأنَ'],
                        'a' => 2,
                        'e' => 'Féminin duel, sujet placé avant le verbe : تقرآنِ.',
                    ],
                    [
                        'q' => 'Dans « شربَ الطفلُ الحليبَ », quel mot est le complément d’objet (المفعول به) ?',
                        'c' => ['الحليبَ', 'الطفلُ', 'شربَ', 'Aucun'],
                        'a' => 0,
                        'e' => 'Le lait est ce qui est bu : الحليبَ est le complément d’objet, à l’accusatif.',
                    ],
                    [
                        'q' => 'Mettez « الولدُ يكتبُ الرسالةَ » au duel masculin.',
                        'c' => ['الولدونَ يكتبونَ الرسالةَ.', 'الولدانِ يكتبانِ الرسالةَ.', 'الولدانِ يكتبنَ الرسالةَ.', 'الولدَينِ يكتبُ الرسالةَ.'],
                        'a' => 1,
                        'e' => 'Au duel masculin, le nom et le verbe prennent ـان : الولدانِ يكتبانِ.',
                    ],
                    [
                        'q' => 'Quelle phrase met le verbe au passé avec un pluriel féminin ?',
                        'c' => ['الطالباتُ كتبوا الدرسَ.', 'الطالباتُ كتبَ الدرسَ.', 'الطالباتُ كتبنَ الدرسَ.', 'الطالباتُ كتبتانِ الدرسَ.'],
                        'a' => 2,
                        'e' => 'Au passé, le pluriel féminin se marque par ـنَ : كتبنَ.',
                    ],
                    [
                        'q' => 'Complétez : « أنتِ ___ العربية جيدًا. »',
                        'c' => ['يتكلم', 'تتكلمان', 'أتكلم', 'تتكلمين'],
                        'a' => 3,
                        'e' => 'Avec أنتِ (tu, féminin), le présent est تتكلمين.',
                    ],
                    [
                        'q' => 'Quel verbe au présent s’accorde avec « المعلمون » ?',
                        'c' => ['يشرحون', 'تشرح', 'يشرحان', 'أشرح'],
                        'a' => 0,
                        'e' => 'Pluriel masculin, 3e personne : يشرحون.',
                    ],
                    [
                        'q' => 'Pourquoi le verbe reste-t-il au singulier dans « حضرَ الطلابُ » ?',
                        'c' => ['Parce que la phrase est nominale', 'Parce que le sujet est au singulier', 'Parce que le verbe est à l’impératif', 'Parce que le verbe précède son sujet : il reste alors au singulier'],
                        'a' => 3,
                        'e' => 'Quand le verbe est placé avant le sujet, il ne s’accorde pas en nombre : حضرَ (et non حضروا).',
                    ],
                ],
            ],
            [
                'title' => 'Défini, indéfini et groupes prépositionnels',
                'description' => 'L’article ال, le tanwīn, les prépositions et l’annexion (الإضافة) dans des groupes nominaux simples.',
                'questions' => [
                    [
                        'q' => 'Quel mot est défini grâce à « ال » ?',
                        'c' => ['كتابٌ', 'كتابًا', 'الكتابُ', 'كتابٍ'],
                        'a' => 2,
                        'e' => 'Ajouter ال au début du nom le rend défini : الكتابُ.',
                    ],
                    [
                        'q' => 'Quel mot est indéfini ?',
                        'c' => ['البيت', 'هذا البيت', 'بيتُ أحمد', 'بيتٌ'],
                        'a' => 3,
                        'e' => 'بيتٌ n’a pas ال et n’est pas complété par un nom défini : il est indéfini (tanwīn).',
                    ],
                    [
                        'q' => 'Quelle est la marque du génitif dans « في المدرسةِ » ?',
                        'c' => ['La damma', 'La fatha', 'La kasra', 'Le soukoun'],
                        'a' => 2,
                        'e' => 'Un nom singulier au génitif porte la kasra : في المدرسةِ.',
                    ],
                    [
                        'q' => 'Complétez : « ذهبتُ ___ الطبيبِ. »',
                        'c' => ['إلى', 'هو', 'سوف', 'لكن'],
                        'a' => 0,
                        'e' => 'إلى exprime la direction : « je suis allé chez le médecin ».',
                    ],
                    [
                        'q' => 'Quelle construction est correcte ?',
                        'c' => ['الكتابُ طالبٍ', 'كتابُ الطالبِ', 'كتابٌ الطالبِ', 'كتابَ الطالبُ'],
                        'a' => 1,
                        'e' => 'Dans l’annexion, le premier terme n’a ni ال ni tanwīn et le second est au génitif : كتابُ الطالبِ.',
                    ],
                    [
                        'q' => 'Dans « بابُ البيتِ », quel mot est le complément d’annexion (المضاف إليه) ?',
                        'c' => ['بابُ', 'Les deux mots', 'البيتِ', 'Il n’y a pas d’annexion'],
                        'a' => 2,
                        'e' => 'Le second terme, البيتِ, est le مضاف إليه ; il est toujours au génitif.',
                    ],
                    [
                        'q' => 'Quelle phrase est correcte après la préposition « من » ?',
                        'c' => ['جئتُ من المدرسةُ.', 'جئتُ من المدرسةِ.', 'جئتُ من المدرسةَ.', 'جئتُ من المدرسةانِ.'],
                        'a' => 1,
                        'e' => 'Après من, le nom est au génitif : من المدرسةِ.',
                    ],
                    [
                        'q' => 'Quelle est la différence entre « كتابٌ » et « الكتابُ » ?',
                        'c' => ['Aucune différence', 'Le premier est un verbe', 'Le premier est un pluriel, le second un duel', 'Le premier est indéfini, le second défini'],
                        'a' => 3,
                        'e' => 'كتابٌ = « un livre » ; الكتابُ = « le livre ».',
                    ],
                    [
                        'q' => 'Complétez : « جلستُ ___ الكرسيِ. »',
                        'c' => ['هو', 'على', 'أن', 'سوف'],
                        'a' => 1,
                        'e' => 'على indique la position « sur » : جلستُ على الكرسيِ.',
                    ],
                    [
                        'q' => 'Quelle expression contient une annexion correcte ?',
                        'c' => ['مفتاحٌ السيارةِ', 'المفتاحُ سيارةٍ', 'مفتاحُ السيارةِ', 'مفتاحَ السيارةُ'],
                        'a' => 2,
                        'e' => 'مفتاحُ السيارةِ : premier terme sans ال ni tanwīn, second terme au génitif.',
                    ],
                ],
            ],
            [
                'title' => 'Questions, négation et ordres',
                'description' => 'Les mots interrogatifs courants, la négation simple et l’impératif dans de courtes phrases.',
                'questions' => [
                    [
                        'q' => 'Quel mot interrogatif sert à demander un lieu ?',
                        'c' => ['متى', 'من', 'أين', 'كم'],
                        'a' => 2,
                        'e' => 'أين = où.',
                    ],
                    [
                        'q' => 'Quel mot interrogatif sert à demander une quantité ?',
                        'c' => ['كم', 'أين', 'لماذا', 'متى'],
                        'a' => 0,
                        'e' => 'كم = combien.',
                    ],
                    [
                        'q' => 'Quelle phrase est une question correcte ?',
                        'c' => ['هل القراءة يحب؟', 'تحب هل القراءة.', 'هل تحب إلى القراءة؟', 'هل تحب القراءة؟'],
                        'a' => 3,
                        'e' => 'On place هل au début, puis la phrase suit l’ordre normal.',
                    ],
                    [
                        'q' => 'Comment nier simplement « هو يدرسُ » ?',
                        'c' => ['هو ما يدرسَ.', 'هو لا يدرسُ.', 'هو لن يدرسُ أمسِ.', 'هو لم يدرسُ.'],
                        'a' => 1,
                        'e' => 'Au présent, la négation simple se fait avec لا : هو لا يدرسُ.',
                    ],
                    [
                        'q' => 'Complétez pour nier la phrase : « ___ أحمدُ في البيتِ. »',
                        'c' => ['أين', 'هل', 'ليس', 'من'],
                        'a' => 2,
                        'e' => 'ليس nie une phrase nominale : ليس أحمدُ في البيتِ (« Ahmed n’est pas à la maison »).',
                    ],
                    [
                        'q' => 'Quelle forme est un ordre adressé à une seule personne (masculin) ?',
                        'c' => ['يكتبُ الدرسَ.', 'كتبَ الدرسَ.', 'أكتبُ الدرسَ.', 'اكتبْ الدرسَ.'],
                        'a' => 3,
                        'e' => 'اكتبْ est l’impératif : « écris la leçon ».',
                    ],
                    [
                        'q' => 'Que demande le mot « متى » ?',
                        'c' => ['Le moment', 'Le lieu', 'La personne', 'Le nombre'],
                        'a' => 0,
                        'e' => 'متى = quand.',
                    ],
                    [
                        'q' => 'Quelle question demande la cause ?',
                        'c' => ['أين ذهبت؟', 'لماذا تأخرت؟', 'متى وصلت؟', 'كم كتابًا لديك؟'],
                        'a' => 1,
                        'e' => 'لماذا = pourquoi.',
                    ],
                    [
                        'q' => 'Complétez : « ___ جاء إلى الحفلة؟ » (on veut savoir qui est venu)',
                        'c' => ['أين', 'متى', 'من', 'كم'],
                        'a' => 2,
                        'e' => 'من = qui.',
                    ],
                    [
                        'q' => 'Le professeur dit aux élèves : « لا تتحدثوا أثناء الدرس ». Que fait-il ?',
                        'c' => ['Il demande où ils sont', 'Il nie un fait passé', 'Il leur interdit de parler', 'Il décrit seulement les élèves'],
                        'a' => 2,
                        'e' => 'لا + présent à la 2e personne exprime une interdiction (النهي).',
                    ],
                ],
            ],
            [
                'title' => 'Révision de grammaire',
                'description' => 'Révision générale : accords, cas, annexion, verbe et sujet, questions et ponctuation.',
                'questions' => [
                    [
                        'q' => 'Choisissez la phrase correcte.',
                        'c' => ['هذه ولدٌ صغيرٌ.', 'هذا بنتٌ صغيرٌ.', 'هذا ولدٌ صغيرٌ.', 'هذه ولدٌ صغيرةٌ.'],
                        'a' => 2,
                        'e' => 'ولد est masculin : هذا et l’adjectif au masculin, صغير.',
                    ],
                    [
                        'q' => 'Quelle phrase met correctement le nom au génitif ?',
                        'c' => ['ذهبتُ إلى المدرسةِ.', 'ذهبتُ إلى المدرسةُ.', 'ذهبتُ إلى المدرسةَ.', 'ذهبتُ إلى المدرسةٌ.'],
                        'a' => 0,
                        'e' => 'Après إلى, le nom est au génitif : المدرسةِ.',
                    ],
                    [
                        'q' => 'Nour dit : « أنا أحب القهوة، لكن أخي يحب الشاي ». De combien de personnes parle la phrase ?',
                        'c' => ['Une', 'Trois', 'Deux', 'Impossible à savoir'],
                        'a' => 2,
                        'e' => 'Nour et son frère : deux personnes.',
                    ],
                    [
                        'q' => 'Complétez : « المهندساتُ ___ في المشروعِ. »',
                        'c' => ['يعملونَ', 'يعملانِ', 'يعملنَ', 'أعملُ'],
                        'a' => 2,
                        'e' => 'Pluriel féminin au présent : يعملنَ.',
                    ],
                    [
                        'q' => 'Quelle phrase contient une annexion correcte ?',
                        'c' => ['لونٌ السيارةِ جميلٌ.', 'لونُ السيارةِ جميلٌ.', 'لونُ السيارةُ جميلٌ.', 'اللونُ سيارةِ جميلٌ.'],
                        'a' => 1,
                        'e' => 'لونُ (مضاف) + السيارةِ (مضاف إليه au génitif), puis le prédicat جميلٌ.',
                    ],
                    [
                        'q' => 'Quelle question demande la cause de l’absence d’un élève ?',
                        'c' => ['أين غاب الطالب؟', 'متى غاب الطالب؟', 'كم غاب الطالب؟', 'لماذا غاب الطالب؟'],
                        'a' => 3,
                        'e' => 'لماذا = pourquoi.',
                    ],
                    [
                        'q' => 'Une élève a écrit « الولدُ مجتهدةٌ ». Quelle est la correction ?',
                        'c' => ['الولدُ مجتهدتانِ.', 'الولدُ مجتهدٌ.', 'الولدُ مجتهداتٌ.', 'الولدُ اجتهادٌ.'],
                        'a' => 1,
                        'e' => 'الولد est masculin singulier : l’adjectif doit être مجتهد.',
                    ],
                    [
                        'q' => 'Quelle phrase contient un verbe, un sujet et un complément d’objet ?',
                        'c' => ['الكتابُ على الطاولةِ.', 'الحديقةُ جميلةٌ.', 'في الفصلِ طلابٌ.', 'قرأَ الطفلُ القصةَ.'],
                        'a' => 3,
                        'e' => 'قرأَ (verbe), الطفلُ (sujet), القصةَ (complément d’objet).',
                    ],
                    [
                        'q' => 'Quelle phrase parle correctement de deux étudiantes ?',
                        'c' => ['هذانِ طالبتانِ مجتهدون.', 'هاتانِ طالبتانِ مجتهدتانِ.', 'هؤلاء طالبتانِ مجتهدةٌ.', 'هذا طالبتانِ مجتهدتانِ.'],
                        'a' => 1,
                        'e' => 'Démonstratif, nom et adjectif sont tous au féminin duel : هاتان طالبتان مجتهدتان.',
                    ],
                    [
                        'q' => 'Quel signe de ponctuation termine la phrase « هل وصلتَ إلى البيت ___ » ?',
                        'c' => ['،', '.', ':', '؟'],
                        'a' => 3,
                        'e' => 'C’est une question : on termine par le point d’interrogation arabe « ؟ ».',
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
