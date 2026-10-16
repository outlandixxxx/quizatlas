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
                'title' => 'Les racines : trouver le noyau d’un mot',
                'description' => 'Repérer la racine de trois lettres que partagent les mots d’une même famille et s’en servir pour relier les sens.',
                'questions' => [
                    [
                        'q' => 'Quelle racine est commune à « كتب، كاتب، مكتوب » ?',
                        'c' => ['ت ب ك', 'ك و ب', 'ك ت ب', 'ب ت ك'],
                        'a' => 2,
                        'e' => 'Les trois mots tournent autour de l’écriture ; leurs lettres radicales sont ك ت ب.',
                    ],
                    [
                        'q' => 'Les mots « درس، مدرسة، مدرّس » se rattachent à quelle racine ?',
                        'c' => ['د ر س', 'ر س د', 'د س م', 'م د ر'],
                        'a' => 0,
                        'e' => 'Le sens d’étude et d’enseignement vient de la racine د ر س.',
                    ],
                    [
                        'q' => 'La racine ع ل م renvoie au savoir. Lequel de ces mots en dérive ?',
                        'c' => ['ملعقة', 'ملعب', 'معلومة', 'معدة'],
                        'a' => 2,
                        'e' => 'معلومة (« une information ») dérive de ع ل م. ملعقة vient de ل ع ق et ملعب de ل ع ب.',
                    ],
                    [
                        'q' => 'Quel groupe de mots appartient à la racine ق ر أ ?',
                        'c' => ['قرر، قرار، مقرر', 'قرأ، قارئ، قراءة', 'قرب، قريب، قرابة', 'قاد، قائد، قيادة'],
                        'a' => 1,
                        'e' => 'قرأ، قارئ et قراءة parlent tous de la lecture : racine ق ر أ.',
                    ],
                    [
                        'q' => 'Quand un apprenant cherche la racine d’un mot, que cherche-t-il d’abord ?',
                        'c' => [
                            'Seulement la dernière lettre',
                            'Le nombre de syllabes',
                            'Le signe de ponctuation qui suit',
                            'Les lettres de base qui portent le sens principal',
                        ],
                        'a' => 3,
                        'e' => 'La racine est l’ensemble des lettres de base qui portent le sens général des mots dérivés.',
                    ],
                    [
                        'q' => '« كاتب » et « كتابة » n’ont pas la même forme. Qu’est-ce qui les réunit ?',
                        'c' => [
                            'Le même schème',
                            'Exactement le même sens',
                            'La même racine ك ت ب',
                            'Le même nombre de lettres',
                        ],
                        'a' => 2,
                        'e' => 'Les deux dérivent de ك ت ب, mais chacun a son schème et son sens propre (celui qui écrit / l’action d’écrire).',
                    ],
                    [
                        'q' => 'Lequel de ces mots ne vient pas de la racine ف ت ح ?',
                        'c' => ['فاتح', 'مفتوح', 'فتح', 'تفاحة'],
                        'a' => 3,
                        'e' => 'تفاحة (la pomme) vient de ت ف ح ; les autres mots viennent de ف ت ح.',
                    ],
                    [
                        'q' => 'Que remarque-t-on dans « لعب، لاعب، ملعب » ?',
                        'c' => [
                            'Ce sont tous des verbes au passé',
                            'Ils dérivent tous de la racine ل ع ب avec des schèmes différents',
                            'Ce sont tous des noms de lieu',
                            'Il n’y a aucun lien entre eux',
                        ],
                        'a' => 1,
                        'e' => 'Même racine ل ع ب, mais le schème change : action, agent, lieu.',
                    ],
                    [
                        'q' => 'Un élève dit : « Je retrouve ك ت ب dans beaucoup de mots, ils ont donc un lien avec l’écriture. » Qu’a-t-il bien compris ?',
                        'c' => [
                            'Qu’une racine peut relier des mots d’une même famille',
                            'Que tout mot arabe est formé de deux lettres',
                            'Que tous les mots ont le même schème',
                            'Que le sens ne change jamais selon le schème',
                        ],
                        'a' => 0,
                        'e' => 'Connaître la racine permet de voir le lien entre des mots dérivés d’un même fond.',
                    ],
                    [
                        'q' => 'Lequel de ces mots dérive de la racine س م ع (entendre) ?',
                        'c' => ['مسافر', 'سائل', 'شارع', 'سامع'],
                        'a' => 3,
                        'e' => 'سامع (« auditeur ») vient de س م ع. مسافر vient de س ف ر, سائل de س أ ل et شارع de ش ر ع.',
                    ],
                ],
            ],
            [
                'title' => 'Les schèmes courants',
                'description' => 'Reconnaître des schèmes fréquents et voir comment changer de schème modifie le rôle ou le sens d’un mot.',
                'questions' => [
                    [
                        'q' => 'Quel mot est construit sur le schème « فاعل » ?',
                        'c' => ['مكتوب', 'كتاب', 'كاتب', 'كتابة'],
                        'a' => 2,
                        'e' => 'كاتب suit le schème فاعل, celui du participe actif des verbes trilitères.',
                    ],
                    [
                        'q' => 'Quel mot est construit sur le schème « مفعول » ?',
                        'c' => ['مكتوب', 'كاتب', 'كتابة', 'مكتب'],
                        'a' => 0,
                        'e' => 'مكتوب suit le schème مفعول, celui du participe passif.',
                    ],
                    [
                        'q' => 'Dans « كاتب », qu’ajoute le schème « فاعل » au sens de base de « كتب » ?',
                        'c' => [
                            'Le lieu de l’écriture',
                            'La personne qui accomplit l’action',
                            'Seulement la chose écrite',
                            'Il transforme le mot en particule',
                        ],
                        'a' => 1,
                        'e' => 'Le schème فاعل désigne celui qui fait l’action : ici, celui qui écrit.',
                    ],
                    [
                        'q' => '« حارس » désigne celui qui garde. Quel mot désigne celui ou ce qui est gardé ?',
                        'c' => ['حراسة', 'حارس', 'يحرس', 'محروس'],
                        'a' => 3,
                        'e' => 'محروس est le participe passif : ce qui a subi l’action de garder.',
                    ],
                    [
                        'q' => 'Quel mot désigne le lieu associé au verbe « كتب » ?',
                        'c' => ['كاتب', 'مكتب', 'مكتوب', 'كتابة'],
                        'a' => 1,
                        'e' => 'مكتب (le bureau) est un nom de lieu : on y écrit, on y travaille.',
                    ],
                    [
                        'q' => 'Quel est le lien entre « مجلس » et « جلس » ?',
                        'c' => [
                            'Aucun lien',
                            'مجلس est un verbe au passé',
                            'مجلس vient de la même racine et désigne un lieu où l’on s’assoit',
                            'جلس est le participe actif de مجلس',
                        ],
                        'a' => 2,
                        'e' => 'La racine ج ل س est visible dans les deux mots ; مجلس est un nom de lieu lié à l’action de s’asseoir.',
                    ],
                    [
                        'q' => 'Quel mot suit le schème « فعّال » (avec la lettre doublée) ?',
                        'c' => ['مكتوب', 'غفّار', 'كاتب', 'كتاب'],
                        'a' => 1,
                        'e' => 'غفّار porte une chadda sur la deuxième lettre : c’est le schème فعّال, qui exprime l’intensité.',
                    ],
                    [
                        'q' => 'Si l’on compare « كاتب » et « مكتوب », quelle phrase est exacte ?',
                        'c' => [
                            'Les deux désignent un lieu',
                            'Les deux sont des verbes',
                            'Le premier désigne celui qui agit, le second ce qui subit l’action',
                            'Le premier désigne ce qui subit l’action, le second celui qui agit',
                        ],
                        'a' => 2,
                        'e' => 'كاتب est un participe actif ; مكتوب est un participe passif.',
                    ],
                    [
                        'q' => 'Quel mot a la racine ك ت ب mais un schème différent, et désigne un lieu lié aux livres ?',
                        'c' => ['مدينة', 'مدرسة', 'نافذة', 'مكتبة'],
                        'a' => 3,
                        'e' => 'مكتبة (bibliothèque, librairie) vient de ك ت ب avec le schème des noms de lieu.',
                    ],
                    [
                        'q' => 'Pourquoi un apprenant a-t-il intérêt à connaître les schèmes ?',
                        'c' => [
                            'Ils dispensent de connaître la racine',
                            'Ils aident à comprendre la fonction du mot et son sens dérivé',
                            'Ils fixent le nombre de mots d’une phrase',
                            'Ils rendent tous les mots synonymes',
                        ],
                        'a' => 1,
                        'e' => 'Racine + schème donnent une idée du sens et du rôle d’un mot.',
                    ],
                ],
            ],
            [
                'title' => 'Le masdar : nommer l’action',
                'description' => 'Reconnaître les noms d’action (المصدر) courants et les distinguer de la personne ou de l’objet concernés.',
                'questions' => [
                    [
                        'q' => 'Quel est le masdar courant du verbe « كتب » ?',
                        'c' => ['كاتب', 'مكتوب', 'مكتب', 'كتابة'],
                        'a' => 3,
                        'e' => 'كتابة nomme l’action d’écrire : c’est le masdar de كتب.',
                    ],
                    [
                        'q' => 'Quel mot est le masdar du verbe « جلس » ?',
                        'c' => ['جلوس', 'جالس', 'مجلس', 'مجلوس'],
                        'a' => 0,
                        'e' => 'جلوس nomme l’action de s’asseoir. جالس est le participe actif, مجلس un lieu.',
                    ],
                    [
                        'q' => 'Dans « أحب القراءة قبل النوم », que désigne le mot « القراءة » ?',
                        'c' => [
                            'La personne qui lit',
                            'Le livre que l’on lit',
                            'L’action elle-même, sans préciser qui l’accomplit',
                            'Le lieu de la lecture',
                        ],
                        'a' => 2,
                        'e' => 'القراءة ne désigne pas une personne précise : elle nomme l’action de lire.',
                    ],
                    [
                        'q' => 'Quel couple associe un verbe à son masdar ?',
                        'c' => ['نجح — نجاح', 'نجح — ناجح', 'شرب — مشروب', 'كتب — كاتب'],
                        'a' => 0,
                        'e' => 'نجاح nomme l’action de réussir. ناجح est le participe actif, مشروب le participe passif.',
                    ],
                    [
                        'q' => 'Quel est le masdar du verbe « ذهب » (aller) ?',
                        'c' => ['ذاهب', 'مذهب', 'ذهاب', 'مذهوب'],
                        'a' => 2,
                        'e' => 'ذهاب nomme l’action d’aller. ذاهب est le participe actif.',
                    ],
                    [
                        'q' => 'Dans « بعد السفر، احتاج سامي إلى الراحة », quel mot nomme une action sans désigner une personne ?',
                        'c' => ['سامي', 'السفر', 'بعد', 'احتاج'],
                        'a' => 1,
                        'e' => 'السفر est un masdar : il nomme l’action de voyager.',
                    ],
                    [
                        'q' => 'Lequel de ces mots n’est pas un masdar ?',
                        'c' => ['قراءة', 'جلوس', 'لاعب', 'نجاح'],
                        'a' => 2,
                        'e' => 'لاعب désigne la personne qui joue (participe actif). Les autres nomment des actions.',
                    ],
                    [
                        'q' => 'Quelle est la différence simple entre « كاتب » et « كتابة » ?',
                        'c' => [
                            'Les deux désignent un lieu',
                            'كاتب désigne la personne, كتابة l’action d’écrire',
                            'كاتب est un masdar et كتابة un verbe',
                            'Il n’y a aucune différence',
                        ],
                        'a' => 1,
                        'e' => 'كاتب = celui qui écrit ; كتابة = le fait d’écrire.',
                    ],
                    [
                        'q' => 'Si quelqu’un dit « أحب السباحة », qu’aime-t-il exactement ?',
                        'c' => ['Un nageur précis', 'L’activité de nager', 'Un lieu', 'Un équipement'],
                        'a' => 1,
                        'e' => 'السباحة est un masdar : le nom de l’activité elle-même.',
                    ],
                    [
                        'q' => 'Un élève écrit « القراءة اليومية مفيدة ». Pourquoi utilise-t-il « القراءة » plutôt que « قارئ » ?',
                        'c' => [
                            'Parce que قارئ est un nom de lieu',
                            'Parce que القراءة est un verbe au passé',
                            'Parce que قارئ n’a aucun lien avec la lecture',
                            'Parce que la phrase parle de l’activité, pas de la personne',
                        ],
                        'a' => 3,
                        'e' => 'La phrase parle de la valeur de l’activité ; il faut donc le masdar.',
                    ],
                ],
            ],
            [
                'title' => 'Participes actif et passif',
                'description' => 'Distinguer, au niveau débutant, celui qui accomplit l’action et ce qui la subit.',
                'questions' => [
                    [
                        'q' => 'Quel est le participe actif (اسم الفاعل) du verbe « كتب » ?',
                        'c' => ['مكتوب', 'كتابة', 'مكتب', 'كاتب'],
                        'a' => 3,
                        'e' => 'كاتب désigne celui qui écrit.',
                    ],
                    [
                        'q' => 'Quel est le participe passif (اسم المفعول) du verbe « كتب » ?',
                        'c' => ['كاتب', 'مكتوب', 'كتابة', 'كتاب'],
                        'a' => 1,
                        'e' => 'مكتوب désigne ce sur quoi porte l’écriture : ce qui est écrit.',
                    ],
                    [
                        'q' => 'Dans « الطالب قارئٌ جيد », quel mot est un participe actif ?',
                        'c' => ['قارئ', 'الطالب', 'جيد', 'Aucun'],
                        'a' => 0,
                        'e' => 'قارئ vient de قرأ et désigne celui qui lit.',
                    ],
                    [
                        'q' => 'Le professeur dit : « الدرس مفهوم ». Que décrit le mot « مفهوم » ?',
                        'c' => [
                            'La personne qui explique la leçon',
                            'La leçon qui a été comprise',
                            'Le moment de la leçon',
                            'Le lieu de la leçon',
                        ],
                        'a' => 1,
                        'e' => 'مفهوم est un participe passif : la leçon a subi l’action de comprendre.',
                    ],
                    [
                        'q' => 'Quel couple associe un verbe à son participe actif ?',
                        'c' => ['فتح — فاتح', 'فتح — مفتاح', 'قرأ — مقروء', 'لعب — ملعب'],
                        'a' => 0,
                        'e' => 'فاتح (celui qui ouvre) est le participe actif de فتح. مقروء est un participe passif, مفتاح un nom d’instrument, ملعب un nom de lieu.',
                    ],
                    [
                        'q' => 'Quel mot désigne ce qui subit l’action de « شرب » ?',
                        'c' => ['شارب', 'شرب', 'مشروب', 'مشرب'],
                        'a' => 2,
                        'e' => 'مشروب : ce qui est bu (la boisson).',
                    ],
                    [
                        'q' => '« لاعب » désigne celui qui joue. Quel mot désigne le lieu du jeu ?',
                        'c' => ['ملعب', 'لاعب', 'لعب', 'لعبة'],
                        'a' => 0,
                        'e' => 'ملعب (terrain, stade) est un nom de lieu de la racine ل ع ب.',
                    ],
                    [
                        'q' => 'Quelle phrase explique la différence entre participe actif et participe passif ?',
                        'c' => [
                            'Le premier désigne le temps, le second le lieu',
                            'Le premier désigne celui qui agit, le second ce qui subit l’action',
                            'Les deux désignent l’agent',
                            'Les deux désignent le masdar',
                        ],
                        'a' => 1,
                        'e' => 'Le participe actif renvoie à celui qui fait ; le participe passif à ce qui subit.',
                    ],
                    [
                        'q' => 'Dans « النافذة مفتوحة », que comprend-on de « مفتوحة » ?',
                        'c' => [
                            'La fenêtre a subi l’action d’ouvrir : elle est ouverte',
                            'La fenêtre est celle qui ouvre quelque chose',
                            'Une personne s’appelle مفتوحة',
                            'La fenêtre est un lieu d’ouverture',
                        ],
                        'a' => 0,
                        'e' => 'مفتوحة est le féminin du participe passif مفتوح.',
                    ],
                    [
                        'q' => 'Quel mot désigne celui qui dirige (de la racine ق و د) ?',
                        'c' => ['قيادة', 'قائد', 'مقود', 'مقاد'],
                        'a' => 1,
                        'e' => 'قائد est le participe actif. قيادة est le masdar, مقود le volant.',
                    ],
                ],
            ],
            [
                'title' => 'Dérivation et familles de mots',
                'description' => 'Utiliser les mots apparentés pour comprendre comment l’arabe forme noms de métier, de lieu, d’instrument et autres dérivés.',
                'questions' => [
                    [
                        'q' => 'À partir de « خبز », quel mot désigne celui qui fait le pain ?',
                        'c' => ['مخبوز', 'خبّاز', 'خبز', 'مخبز'],
                        'a' => 1,
                        'e' => 'خبّاز (boulanger) est un nom de métier de la même racine.',
                    ],
                    [
                        'q' => 'Quel mot désigne un lieu lié au verbe « سبح » (nager) ?',
                        'c' => ['سبّاح', 'سباحة', 'مسبح', 'مسبيح'],
                        'a' => 2,
                        'e' => 'مسبح (piscine) est un nom de lieu.',
                    ],
                    [
                        'q' => 'Complétez la famille de mots : علم، معلّم، ___',
                        'c' => ['ملعقة', 'ملعب', 'منزل', 'متعلّم'],
                        'a' => 3,
                        'e' => 'متعلّم (apprenant) appartient à la racine ع ل م.',
                    ],
                    [
                        'q' => 'Quel couple associe, avec une même racine, une personne et un lieu ?',
                        'c' => ['لاعب — ملعب', 'كاتب — سيارة', 'قارئ — نافذة', 'طالب — كتاب'],
                        'a' => 0,
                        'e' => 'لاعب et ملعب viennent de ل ع ب : le joueur et le terrain.',
                    ],
                    [
                        'q' => 'Quel mot désigne l’instrument dans la famille de « فتح » ?',
                        'c' => ['فاتح', 'مفتوح', 'مفتاح', 'فتحة'],
                        'a' => 2,
                        'e' => 'مفتاح (clé) est un nom d’instrument (اسم الآلة).',
                    ],
                    [
                        'q' => 'Un enfant dit : « C’est une مكتبة, pas un مكتب. » Que peut-on en déduire en morphologie ?',
                        'c' => [
                            'Les deux mots viennent de racines sans rapport',
                            'Les deux mots ont le même schème',
                            'مكتبة est un verbe et مكتب une particule',
                            'Même racine, mais schèmes différents',
                        ],
                        'a' => 3,
                        'e' => 'Les deux mots viennent de ك ت ب ; le schème, le sens et l’emploi diffèrent.',
                    ],
                    [
                        'q' => 'Quel mot désigne celui qui exerce le métier de menuisier ?',
                        'c' => ['منشار', 'نجّار', 'نجارة', 'منجور'],
                        'a' => 1,
                        'e' => 'نجّار est le nom de la personne ; نجارة est le métier, منشار la scie.',
                    ],
                    [
                        'q' => 'Lequel de ces mots désigne un instrument ?',
                        'c' => ['مكنسة', 'منظّف', 'تنظيف', 'نظيف'],
                        'a' => 0,
                        'e' => 'مكنسة (balai) est un nom d’instrument ; تنظيف est une action, نظيف un adjectif.',
                    ],
                    [
                        'q' => 'Lequel de ces mots désigne un lieu (de la racine ط ب خ, cuisiner) ?',
                        'c' => ['طابخ', 'مطبوخ', 'مطبخ', 'طبخ'],
                        'a' => 2,
                        'e' => 'مطبخ (cuisine) est un nom de lieu. طابخ est celui qui cuisine, مطبوخ ce qui est cuit.',
                    ],
                    [
                        'q' => 'Un élève forme une famille avec la racine « ع م ل ». Quel mot convient ?',
                        'c' => ['حديقة', 'عامل', 'نافذة', 'مدرسة'],
                        'a' => 1,
                        'e' => 'عامل (ouvrier, celui qui travaille) vient de ع م ل.',
                    ],
                ],
            ],
            [
                'title' => 'Pluriels et variations de forme',
                'description' => 'Les pluriels courants (sain et brisé) et la manière dont l’arabe change la forme du mot pour exprimer le nombre.',
                'questions' => [
                    [
                        'q' => 'Quel est le pluriel de « كتاب » ?',
                        'c' => ['كتابان', 'كتب', 'كاتب', 'مكتبة'],
                        'a' => 1,
                        'e' => 'Le pluriel courant de كتاب est كتب : c’est un pluriel brisé.',
                    ],
                    [
                        'q' => 'Quel est le pluriel de « طالب » ?',
                        'c' => ['طالبة', 'مطلوب', 'طلاب', 'طلب'],
                        'a' => 2,
                        'e' => 'طلاب est un pluriel brisé de طالب.',
                    ],
                    [
                        'q' => 'Lequel de ces mots est un pluriel féminin sain ?',
                        'c' => ['رجال', 'كتب', 'أطفال', 'معلّمات'],
                        'a' => 3,
                        'e' => 'معلّمات ajoute ـات au féminin singulier : c’est un pluriel féminin sain.',
                    ],
                    [
                        'q' => 'Quel couple associe un singulier à son pluriel ?',
                        'c' => ['مدينة — مدن', 'كتاب — كاتب', 'معلّم — تعلّم', 'شارع — شارب'],
                        'a' => 0,
                        'e' => 'مدن est le pluriel de مدينة.',
                    ],
                    [
                        'q' => 'Que change-t-on de « معلّمة » à « معلّمات » ?',
                        'c' => [
                            'La racine change entièrement',
                            'On ajoute la marque du pluriel féminin',
                            'Le mot devient un verbe',
                            'Toutes les lettres radicales sont supprimées',
                        ],
                        'a' => 1,
                        'e' => 'Dans le pluriel sain, la base reste intacte ; on ajoute seulement la terminaison.',
                    ],
                    [
                        'q' => 'Lequel de ces pluriels est un pluriel brisé ?',
                        'c' => ['مهندس — مهندسون', 'قلم — أقلام', 'طالبة — طالبات', 'معلمة — معلمات'],
                        'a' => 1,
                        'e' => 'Dans أقلام, la forme interne du singulier قلم a changé : c’est un pluriel brisé.',
                    ],
                    [
                        'q' => 'Un enfant dit « معلمون » au lieu de « معلمات » en parlant d’un groupe de femmes. Qu’a-t-il confondu ?',
                        'c' => [
                            'Le temps du verbe',
                            'Le type de racine',
                            'Le sens du mot école',
                            'Le type de pluriel et le genre du mot',
                        ],
                        'a' => 3,
                        'e' => 'معلمون est un pluriel masculin sain ; pour des femmes, on dit معلمات (pluriel féminin sain).',
                    ],
                    [
                        'q' => 'Quel mot est le pluriel de « مهندس » (ingénieur) ?',
                        'c' => ['مهندسون', 'هندسة', 'مهندسة', 'مهدوس'],
                        'a' => 0,
                        'e' => 'مهندسون est le pluriel masculin sain au nominatif.',
                    ],
                    [
                        'q' => 'Comment expliquer simplement le pluriel brisé ?',
                        'c' => [
                            'Un pluriel qui ajoute toujours ـات',
                            'Un pluriel propre aux verbes',
                            'Un pluriel où la forme du singulier change en général',
                            'Un pluriel qui ne modifie jamais le mot',
                        ],
                        'a' => 2,
                        'e' => 'On dit « brisé » car la structure du singulier est modifiée, comme dans كتاب ← كتب.',
                    ],
                    [
                        'q' => 'Ahmed entend « أقلام » et ne connaît pas le singulier. Lequel convient ?',
                        'c' => ['قالم', 'قلمون', 'مقلم', 'قلم'],
                        'a' => 3,
                        'e' => 'Le singulier de أقلام est قلم.',
                    ],
                ],
            ],
            [
                'title' => 'La dérivation dans la vie courante',
                'description' => 'Appliquer la morphologie à des situations familières : métiers, lieux, instruments et personnes.',
                'questions' => [
                    [
                        'q' => 'Dans une librairie, quel mot désigne la personne qui vend ?',
                        'c' => ['مبيع', 'بيع', 'بائع', 'مباع'],
                        'a' => 2,
                        'e' => 'بائع est le participe actif : celui qui vend.',
                    ],
                    [
                        'q' => 'À la maison, quel mot désigne l’instrument utilisé pour balayer ?',
                        'c' => ['كانس', 'كنس', 'مكنوس', 'مكنسة'],
                        'a' => 3,
                        'e' => 'مكنسة est un nom d’instrument ; كانس désigne la personne qui balaie.',
                    ],
                    [
                        'q' => 'Sara dit : « الماء مغلي ». Que signifie « مغلي » ici ?',
                        'c' => [
                            'L’eau a subi l’action de bouillir',
                            'L’eau fait bouillir autre chose',
                            'L’eau est un lieu d’ébullition',
                            'L’eau est un nom d’action',
                        ],
                        'a' => 0,
                        'e' => 'مغلي est un participe passif : ce qui a été bouilli.',
                    ],
                    [
                        'q' => 'Un commerce veut nommer le lieu où l’on fait et vend le pain. Quel mot convient ?',
                        'c' => ['خبّاز', 'مخبوز', 'مخبز', 'خبز'],
                        'a' => 2,
                        'e' => 'مخبز (boulangerie) est un nom de lieu ; خبّاز désigne la personne.',
                    ],
                    [
                        'q' => 'Dans « الطبيب معالج للمرضى », quel mot désigne la personne qui accomplit l’action ?',
                        'c' => ['علاج', 'معالج', 'معالَج', 'مرض'],
                        'a' => 1,
                        'e' => 'معالِج est le participe actif : celui qui soigne.',
                    ],
                    [
                        'q' => 'Quel mot désigne une personne qui travaille dans la photographie ?',
                        'c' => ['مصوَّر', 'تصوير', 'صورة', 'مصوِّر'],
                        'a' => 3,
                        'e' => 'مصوِّر (photographe) désigne la personne ; مصوَّر désigne ce qui a été photographié.',
                    ],
                    [
                        'q' => 'Dans « هذه صورة مصوَّرة حديثًا », que décrit le mot « مصوَّرة » ?',
                        'c' => [
                            'La personne qui a pris la photo',
                            'Le lieu de prise de vue',
                            'L’image qui a été photographiée',
                            'Seulement le moment',
                        ],
                        'a' => 2,
                        'e' => 'مصوَّرة est un participe passif : l’image est ce qui a subi l’action de photographier.',
                    ],
                    [
                        'q' => 'Une famille cherche un endroit pour nager. Quel mot cherche-t-elle ?',
                        'c' => ['مسبح', 'سبّاح', 'سباحة', 'مسبّح'],
                        'a' => 0,
                        'e' => 'مسبح est le nom de lieu adapté.',
                    ],
                    [
                        'q' => 'Quel couple associe une personne à l’action qui lui est liée ?',
                        'c' => ['كتاب — مكتبة', 'قارئ — قراءة', 'مدرسة — طالب', 'منزل — باب'],
                        'a' => 1,
                        'e' => 'قارئ désigne la personne et قراءة l’action qu’elle accomplit.',
                    ],
                    [
                        'q' => 'Une enseignante remarque qu’une élève comprend plus vite un mot nouveau en le reliant à des mots de même racine. Quel est l’intérêt ?',
                        'c' => [
                            'Tous les mots deviennent identiques',
                            'Elle n’a plus besoin de lire',
                            'Elle voit mieux les liens entre les mots et leurs sens',
                            'Elle n’a plus besoin de dictionnaire',
                        ],
                        'a' => 2,
                        'e' => 'Relier les mots par leur racine aide à deviner leur sens général et leurs rapports.',
                    ],
                ],
            ],
            [
                'title' => 'Révision de morphologie et analyse de mots',
                'description' => 'Révision finale : racines, schèmes, masdar, participes et dérivés courants.',
                'questions' => [
                    [
                        'q' => 'Analysez le mot « مكتوب » à un niveau débutant. Quelle réponse convient ?',
                        'c' => [
                            'Racine م ك ت, verbe au passé',
                            'Racine ك ت ب, participe passif',
                            'Racine ك ت ب, participe actif',
                            'Il ne vient d’aucune racine arabe',
                        ],
                        'a' => 1,
                        'e' => 'مكتوب dérive de ك ت ب ; son schème désigne ce qui a subi l’action d’écrire.',
                    ],
                    [
                        'q' => 'Quel mot est le participe actif de « قرأ » ?',
                        'c' => ['مقروء', 'قراءة', 'قارئ', 'مقرأ'],
                        'a' => 2,
                        'e' => 'قارئ désigne celui qui lit.',
                    ],
                    [
                        'q' => 'Parmi ces mots, lequel désigne l’action de voyager plutôt que la personne qui voyage ?',
'c' => ['مسافر', 'سفر', 'مسفور', 'مطار'],
'a' => 1,
'e' => 'سفر nomme l’action de voyager ; مسافر désigne la personne qui voyage.',
                    ],
                    [
                        'q' => 'Quel couple associe une même racine et deux schèmes différents ?',
                        'c' => ['مدرسة — مكتبة', 'شجرة — شارع', 'عامل — معمل', 'بيت — باب'],
                        'a' => 2,
                        'e' => 'عامل et معمل viennent de ع م ل : l’ouvrier et l’atelier.',
                    ],
                    [
                        'q' => '« معلّم » désigne celui qui enseigne. Quel mot désigne celui qui reçoit l’enseignement ?',
                        'c' => ['تعليم', 'معلومة', 'عالم', 'متعلّم'],
                        'a' => 3,
                        'e' => 'متعلّم est l’apprenant, lié au verbe تعلّم.',
                    ],
                    [
                        'q' => 'Quelle phrase explique simplement la racine et le schème ?',
                        'c' => [
                            'La racine et le schème sont toujours la même chose',
                            'Le schème fixe le nombre de phrases',
                            'La racine porte le sens de base, le schème précise la forme du mot',
                            'La racine est le dernier signe de ponctuation',
                        ],
                        'a' => 2,
                        'e' => 'La racine donne le fond de sens ; le schème dit comment le mot est construit.',
                    ],
                    [
                        'q' => 'Un élève découvre un mot nouveau de racine « ع م ل » dont le schème désigne la personne qui agit. Que peut-il raisonnablement supposer ?',
                        'c' => [
                            'Qu’il peut désigner une personne qui travaille',
                            'Qu’il n’a aucun lien avec le travail',
                            'Qu’il ne peut pas être un nom',
                            'Qu’il désigne un lieu, quel que soit le schème',
                        ],
                        'a' => 0,
                        'e' => 'Racine du travail + schème de l’agent : un sens proche de « عامل ».',
                    ],
                    [
                        'q' => 'Que remarque-t-on dans le mot « مفتوح » ?',
                        'c' => [
                            'Le م est une lettre radicale',
                            'Le م fait partie du schème ; la racine est ف ت ح',
                            'La racine est م ف ت',
                            'Le mot n’est pas dérivé',
                        ],
                        'a' => 1,
                        'e' => 'Ici le م est une lettre du schème مفعول ; les lettres de la racine sont ف ت ح.',
                    ],
                    [
                        'q' => 'Quelle association entre un mot et sa fonction morphologique est correcte ?',
                        'c' => [
                            'مكتوب — masdar',
                            'كتابة — participe actif',
                            'كاتب — participe actif',
                            'قارئ — participe passif',
                        ],
                        'a' => 2,
                        'e' => 'كاتب désigne celui qui écrit : c’est un participe actif.',
                    ],
                    [
                        'q' => 'Quelle démarche est utile pour analyser un mot arabe pour la première fois ?',
                        'c' => [
                            'Compter d’abord les signes de ponctuation',
                            'Chercher la racine, puis observer le schème et le sens qu’il apporte',
                            'Ignorer les lettres et ne regarder que la fin',
                            'Supposer que tous les mots ont le même schème',
                        ],
                        'a' => 1,
                        'e' => 'On part de la racine, puis on regarde le schème pour comprendre le sens et la fonction.',
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
