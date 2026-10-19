<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicRhetoricBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-rhetoric')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => 'Introduction à la rhétorique arabe',
                'description' => 'Ce qu’est la balāgha, à quoi servent les images et les procédés de style, et comment adapter son expression à la situation.',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que la rhétorique (البلاغة), en termes simples ?',
                        'c' => [
                            'Utiliser le plus de mots possible',
                            'Choisir l’expression claire, adaptée et efficace pour la situation',
                            'Changer volontairement le sens d’une phrase',
                            'Réciter des textes sans les comprendre',
                        ],
                        'a' => 1,
                        'e' => 'La balāgha consiste à adapter le discours à la situation, avec clarté et effet.',
                    ],
                    [
                        'q' => 'Pourquoi un auteur emploie-t-il parfois une image plutôt qu’une expression directe ?',
                        'c' => [
                            'Pour toujours cacher le sens',
                            'Pour allonger la phrase sans raison',
                            'Pour rendre l’idée plus vivante et plus frappante',
                            'Pour transformer le texte en liste',
                        ],
                        'a' => 2,
                        'e' => 'Une image rend l’idée plus concrète et aide le lecteur à se la représenter.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est la plus frappante ?',
                        'c' => ['العلم نور.', 'العلم شيء مفيد.', 'العلم موجود.', 'أنا أدرس العلم.'],
                        'a' => 0,
                        'e' => '« العلم نور » présente le savoir comme une lumière : l’image est plus forte qu’un constat banal.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui compte avant tout dans le choix du style ?',
                        'c' => [
                            'La longueur de la phrase',
                            'Le nombre de virgules',
                            'La situation (المقام), le destinataire et le but du discours',
                            'Le nombre de mots difficiles',
                        ],
                        'a' => 2,
                        'e' => 'Le style dépend de la situation, de celui à qui l’on parle et de ce que l’on veut obtenir.',
                    ],
                    [
                        'q' => 'Un auteur veut encourager quelqu’un à travailler. Que choisit-il ?',
                        'c' => [
                            'Une phrase sans lien avec le travail',
                            'Une question répétée sans raison',
                            'La suppression du verbe',
                            'Une formule motivante, claire et adaptée',
                        ],
                        'a' => 3,
                        'e' => 'Encourager demande une formulation adaptée à ce but et compréhensible.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est une expression directe, sans image ?',
                        'c' => [
                            'الليل يبتسم للنجوم.',
                            'العلم نور.',
                            'وصل الطالب إلى المدرسة.',
                            'الأمل يضيء القلب.',
                        ],
                        'a' => 2,
                        'e' => 'Elle rapporte un fait tel quel : ni comparaison ni image.',
                    ],
                    [
                        'q' => 'Que produit une bonne rhétorique dans une phrase ?',
                        'c' => [
                            'Elle rend chaque mot obscur',
                            'Elle empêche de comprendre le sujet',
                            'Elle repose uniquement sur des mots longs',
                            'Elle allie clarté du sens, belle expression et effet sur le lecteur',
                        ],
                        'a' => 3,
                        'e' => 'La rhétorique n’est pas de la complication : elle améliore l’expression pour la rendre claire et efficace.',
                    ],
                    [
                        'q' => 'Un texte s’adresse à un jeune enfant. Que vaut-il mieux faire ?',
                        'c' => [
                            'Employer un langage clair adapté à son âge',
                            'Employer des mots très difficiles sans explication',
                            'Éviter tout exemple',
                            'Écrire toujours de très longues phrases',
                        ],
                        'a' => 0,
                        'e' => 'Adapter le langage au destinataire fait partie de la rhétorique.',
                    ],
                    [
                        'q' => 'Quel est le but le plus proche d’un procédé rhétorique ?',
                        'c' => [
                            'Cacher l’idée à tout le monde',
                            'Renforcer l’idée, l’image ou l’émotion',
                            'Ajouter des lignes au texte',
                            'Changer le sujet du texte',
                        ],
                        'a' => 1,
                        'e' => 'Les procédés servent en général à renforcer le sens, l’image ou l’effet émotionnel.',
                    ],
                    [
                        'q' => 'Quelle question est utile pour analyser une phrase rhétorique ?',
                        'c' => [
                            'Combien de lettres compte le premier mot ?',
                            'Quelle est la couleur de la page ?',
                            'Combien de fois ai-je relu la phrase ?',
                            'Quel effet ce procédé produit-il sur le sens ?',
                        ],
                        'a' => 3,
                        'e' => 'L’analyse ne se limite pas à nommer le procédé : elle en montre l’effet.',
                    ],
                ],
            ],
            [
                'title' => 'La comparaison (التشبيه) et ses éléments',
                'description' => 'Reconnaître le comparé, le comparant, l’outil de comparaison et le point commun dans des phrases simples.',
                'questions' => [
                    [
                        'q' => 'Quelle phrase contient une comparaison claire ?',
                        'c' => [
                            'جلس الطفل على الكرسي.',
                            'الطفل كالقمر في جمال وجهه.',
                            'قرأ الطفل الكتاب.',
                            'ذهب الطفل إلى المدرسة.',
                        ],
                        'a' => 1,
                        'e' => 'L’outil « كـ » rapproche le visage de l’enfant de la lune.',
                    ],
                    [
                        'q' => 'Dans « العالِم كالبحر في عطائه », quel est le comparé (المشبّه) ?',
                        'c' => ['البحر', 'العطاء', 'العالِم', 'الكاف'],
                        'a' => 2,
                        'e' => 'Le comparé est ce que l’on veut décrire : ici « العالِم ».',
                    ],
                    [
                        'q' => 'Dans la même phrase, quel est le comparant (المشبّه به) ?',
                        'c' => ['العالِم', 'البحر', 'العطاء', 'La phrase entière'],
                        'a' => 1,
                        'e' => 'Le comparant est ce à quoi l’on compare : ici « البحر ».',
                    ],
                    [
                        'q' => 'Dans « الوجه مثل القمر », quel mot est l’outil de comparaison ?',
                        'c' => ['القمر', 'الوجه', 'مثل', 'Aucun'],
                        'a' => 2,
                        'e' => '« مثل » est un outil de comparaison, comme « كـ ».',
                    ],
                    [
                        'q' => 'Quel est le but de « الجندي كالأسد في الشجاعة » ?',
                        'c' => [
                            'Dire que le soldat est un animal',
                            'Décrire la couleur de l’uniforme',
                            'Faire ressortir la bravoure du soldat',
                            'Indiquer où se trouve le soldat',
                        ],
                        'a' => 2,
                        'e' => 'La comparaison avec le lion met la bravoure en relief.',
                    ],
                    [
                        'q' => 'Quelle phrase emploie une comparaison adaptée pour exprimer la douceur ?',
                        'c' => [
                            'كان صوته سيارة.',
                            'كان صوته قلمًا.',
                            'كان صوته كالنسيم في هدوئه.',
                            'كان صوته سريعًا في الكتابة.',
                        ],
                        'a' => 2,
                        'e' => 'La brise évoque la douceur et le calme.',
                    ],
                    [
                        'q' => 'Dans « الطالب كالنحلة في نشاطه », quel est le point commun (وجه الشبه) ?',
                        'c' => ['La couleur', 'L’énergie, l’activité', 'La taille', 'L’âge'],
                        'a' => 1,
                        'e' => 'Le texte rapproche l’élève de l’abeille par son activité.',
                    ],
                    [
                        'q' => 'Quelle phrase explique correctement le tashbih ?',
                        'c' => [
                            'Comparer une chose à une autre pour faire ressortir une qualité commune, de manière expressive',
                            'Supprimer tous les verbes d’une phrase',
                            'Répéter un mot sans raison',
                            'Demander où se trouve une chose',
                        ],
                        'a' => 0,
                        'e' => 'Le tashbih repose sur la comparaison de deux termes pour mettre en valeur un trait commun.',
                    ],
                    [
                        'q' => 'Si l’on dit « كانت الفتاة كالفراشة في خفتها », que comprend-on ?',
                        'c' => [
                            'Qu’elle avait des ailes',
                            'Qu’elle volait vraiment',
                            'Qu’elle vivait dans le jardin',
                            'Que ses mouvements étaient légers et gracieux',
                        ],
                        'a' => 3,
                        'e' => 'La comparaison transmet la légèreté, pas un fait littéral.',
                    ],
                    [
                        'q' => 'Par rapport à « العلم كالنور في الهداية », que s’est-il passé dans « العلم نور » ?',
                        'c' => [
                            'On a supprimé l’outil et le point commun : c’est un tashbih baligh (تشبيه بليغ)',
                            'On a ajouté une question',
                            'On a remplacé le nom par un verbe',
                            'Il n’y a plus aucune comparaison',
                        ],
                        'a' => 0,
                        'e' => 'Quand on supprime l’outil et le point commun, la comparaison devient un tashbih baligh : la phrase est plus dense et plus forte.',
                    ],
                ],
            ],
            [
                'title' => 'La métaphore et la personnification',
                'description' => 'Reconnaître l’isti‘āra et la personnification (التشخيص) et comprendre leur effet dans un texte.',
                'questions' => [
                    [
                        'q' => 'Laquelle de ces phrases contient une métaphore (استعارة) ?',
                        'c' => [
                            'العلم مفيد للطالب.',
                            'ابتسم الصباح.',
                            'قرأ الطالب كتابًا.',
                            'ذهب المعلم إلى الفصل.',
                        ],
                        'a' => 1,
                        'e' => 'Le matin ne sourit pas vraiment : on le présente comme un être humain.',
                    ],
                    [
                        'q' => 'Dans « ابتسم الصباح », quel procédé domine ?',
                        'c' => ['Une définition scientifique', 'Une question', 'Une négation', 'La personnification (التشخيص)'],
                        'a' => 3,
                        'e' => 'Sourire est un trait humain attribué au matin : c’est une personnification.',
                    ],
                    [
                        'q' => 'Dans « المدينة نائمة », que fait l’auteur ?',
                        'c' => [
                            'Il traite la ville comme un être humain qui dort',
                            'Il donne une information scientifique',
                            'Il indique le nombre d’habitants',
                            'Il pose une question directe',
                        ],
                        'a' => 0,
                        'e' => 'Il prête à la ville une attitude humaine : le sommeil.',
                    ],
                    [
                        'q' => 'À quoi sert la métaphore dans un texte ?',
                        'c' => [
                            'À empêcher de comprendre',
                            'À renforcer l’image et à rendre le sens plus vivant',
                            'À supprimer le sujet',
                            'À allonger le texte',
                        ],
                        'a' => 1,
                        'e' => 'La métaphore rend le sens concret et lui donne de la force.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une personnification ?',
                        'c' => [
                            'تحركت الريح بين الأشجار.',
                            'كانت الأشجار طويلة.',
                            'تحدثت الأشجار مع الريح.',
                            'زرع الفلاح الأشجار.',
                        ],
                        'a' => 2,
                        'e' => 'Parler est un acte humain attribué aux arbres.',
                    ],
                    [
                        'q' => 'Dans « الوقت يركض », que veut-on dire en général ?',
                        'c' => [
                            'Le temps est une vraie personne',
                            'Le temps passe vite',
                            'Le temps fait du sport',
                            'Les heures se déplacent sur la route',
                        ],
                        'a' => 1,
                        'e' => 'C’est une image : la vitesse du temps qui passe.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est à prendre au sens propre ?',
                        'c' => [
                            'الليل يمد يده.',
                            'الأمل يشرق في القلب.',
                            'المدينة تستيقظ.',
                            'جلس الطفل تحت الشجرة.',
                        ],
                        'a' => 3,
                        'e' => 'Cette phrase décrit un fait réel ; les autres emploient des images.',
                    ],
                    [
                        'q' => 'Dans « زرع المعلم الأمل في نفوس طلابه », que signifie l’expression au sens figuré ?',
                        'c' => [
                            'Il a planté des végétaux dans l’école',
                            'Il leur a donné des graines',
                            'Il a fait naître l’espoir en eux et l’a encouragé',
                            'Il leur a demandé de jardiner',
                        ],
                        'a' => 2,
                        'e' => '« Semer l’espoir » est une image : faire naître et nourrir l’espoir.',
                    ],
                    [
                        'q' => 'Pourquoi ne comprend-on pas « الوقت يركض » au sens propre ?',
                        'c' => [
                            'Parce que le temps n’existe pas',
                            'Parce que « يركض » n’a pas de sens',
                            'Parce que la phrase est une question',
                            'Parce que l’auteur emploie une image pour dire la vitesse du temps',
                        ],
                        'a' => 3,
                        'e' => 'Courir est ici une image pour la rapidité du temps.',
                    ],
                    [
                        'q' => 'Quelle question aide à repérer une personnification ?',
                        'c' => [
                            'Un être non humain reçoit-il un acte ou un trait humain ?',
                            'La phrase est-elle longue ?',
                            'Contient-elle un chiffre ?',
                            'L’auteur donne-t-il son nom ?',
                        ],
                        'a' => 0,
                        'e' => 'La personnification consiste à prêter aux choses des traits et des actes humains.',
                    ],
                ],
            ],
            [
                'title' => 'L’antithèse (الطباق) et l’opposition (المقابلة)',
                'description' => 'Repérer les mots contraires et les oppositions de sens, et comprendre ce qu’ils apportent au texte.',
                'questions' => [
                    [
                        'q' => 'Quelle paire de mots forme un tibāq (antithèse) ?',
                        'c' => ['الكتاب والقلم', 'البيت والباب', 'الليل والنهار', 'الشجرة والحديقة'],
                        'a' => 2,
                        'e' => 'الليل et النهار sont deux contraires.',
                    ],
                    [
                        'q' => 'Quel procédé trouve-t-on dans « يعرف الخير والشر » ?',
                        'c' => ['La comparaison', 'Le tibāq', 'L’appel', 'L’interrogation'],
                        'a' => 1,
                        'e' => 'الخير et الشر sont opposés : c’est un tibāq.',
                    ],
                    [
                        'q' => 'Quel est l’effet du tibāq ?',
                        'c' => [
                            'Annuler le sens',
                            'Transformer la phrase en question',
                            'Mettre le sens en relief en opposant deux contraires',
                            'Empêcher de voir le rapport entre les mots',
                        ],
                        'a' => 2,
                        'e' => 'Rapprocher deux contraires rend leur différence plus nette.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une muqābala ?',
                        'c' => [
                            'جلس الطفل وقرأ.',
                            'دخل الطالب الفصل.',
                            'يكرم الكريم ويهين اللئيم.',
                            'أحب الشاي والقهوة.',
                        ],
                        'a' => 2,
                        'e' => 'On y trouve deux paires opposées : يكرم / يهين et الكريم / اللئيم.',
                    ],
                    [
                        'q' => 'Quelle différence simple entre tibāq et muqābala ?',
                        'c' => [
                            'Aucune',
                            'Le tibāq est réservé aux questions',
                            'La muqābala est une comparaison',
                            'Le tibāq oppose en général deux mots contraires ; la muqābala est plus large et peut opposer plusieurs paires de sens',
                        ],
                        'a' => 3,
                        'e' => 'Le tibāq est plus simple ; la muqābala met en regard plusieurs idées et leurs contraires.',
                    ],
                    [
                        'q' => 'Quelle phrase utilise clairement l’opposition ?',
                        'c' => [
                            'يحب القراءة والكتابة.',
                            'ذهب إلى السوق ثم عاد.',
                            'جلس قرب النافذة.',
                            'يحب الصدق ويكره الكذب.',
                        ],
                        'a' => 3,
                        'e' => 'الصدق et الكذب sont contraires, ainsi que يحب et يكره.',
                    ],
                    [
                        'q' => 'Pourquoi l’auteur emploie-t-il le tibāq ?',
                        'c' => [
                            'Pour cacher le sens',
                            'Pour éviter une répétition',
                            'Pour renforcer l’idée en montrant la différence entre deux sens',
                            'Pour mettre le texte en liste',
                        ],
                        'a' => 2,
                        'e' => 'Les contraires aident à faire ressortir les différences de sens.',
                    ],
                    [
                        'q' => 'Quelle paire ne contient pas d’opposition ?',
                        'c' => ['الحياة والموت', 'العلم والكتاب', 'الحق والباطل', 'الحضور والغياب'],
                        'a' => 1,
                        'e' => 'العلم et الكتاب ne sont pas contraires, alors que les autres paires le sont.',
                    ],
                    [
                        'q' => 'Dans « يضحك في الفرح ويبكي في الحزن », qu’est-ce qui donne sa force à la phrase ?',
                        'c' => [
                            'Une comparaison avec la lune',
                            'Un appel',
                            'La description d’un lieu',
                            'Les oppositions entre joie et tristesse, rire et larmes',
                        ],
                        'a' => 3,
                        'e' => 'La phrase repose sur des paires opposées pour montrer les deux états d’une personne.',
                    ],
                    [
                        'q' => 'Quelle question convient pour analyser un tibāq ?',
                        'c' => [
                            'Combien de lettres compte le titre ?',
                            'Où le livre a-t-il été imprimé ?',
                            'Quels sont les deux mots contraires, et que met leur rapprochement en relief ?',
                            'Qui a lu le texte en premier ?',
                        ],
                        'a' => 2,
                        'e' => 'Il faut repérer les contraires puis expliquer l’effet produit.',
                    ],
                ],
            ],
            [
                'title' => 'Le jinās et le saj‘',
                'description' => 'Reconnaître la paronomase et la prose rimée dans des exemples simples, et voir l’effet de la sonorité.',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que le jinās, en termes simples ?',
                        'c' => [
                            'L’opposition de deux mots',
                            'La ressemblance de deux mots par la forme ou le son, avec un sens différent',
                            'Une comparaison',
                            'Une question placée en fin de phrase',
                        ],
                        'a' => 1,
                        'e' => 'Le jinās repose sur deux mots qui se ressemblent mais ne veulent pas dire la même chose.',
                    ],
                    [
                        'q' => 'Dans « ويوم تقوم الساعة يقسم المجرمون ما لبثوا غير ساعة », le mot « ساعة » revient deux fois. Quel procédé est à l’œuvre ?',
                        'c' => [
                            'Un tibāq',
                            'Un jinās : même mot, deux sens (l’Heure, une heure)',
                            'Un appel',
                            'Une personnification',
                        ],
                        'a' => 1,
                        'e' => 'Même forme, sens différents : c’est un exemple classique de jinās.',
                    ],
                    [
                        'q' => 'À quoi sert le jinās ?',
                        'c' => [
                            'À montrer seulement une opposition',
                            'À donner de la musicalité et à attirer l’attention sur la phrase',
                            'À indiquer le lieu d’un événement',
                            'À supprimer le sens',
                        ],
                        'a' => 1,
                        'e' => 'Le jeu sur les sons donne du charme à l’expression et peut aider à la mémoriser.',
                    ],
                    [
                        'q' => 'Qu’est-ce que le saj‘ ?',
                        'c' => [
                            'Une comparaison entre deux personnes',
                            'Une opposition entre deux mots',
                            'Le rapprochement des fins de phrases en prose, qui donne un rythme',
                            'Une question sur le lieu',
                        ],
                        'a' => 2,
                        'e' => 'Le saj‘ est la prose rimée : les fins de phrases se répondent par le son.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases se rapproche le plus d’un saj‘ ?',
                        'c' => [
                            'ذهب الطالب إلى المدرسة.',
                            'قرأت الكتاب في البيت.',
                            'جلست قرب النافذة.',
                            'العلم نور، والجهل شرور.',
                        ],
                        'a' => 3,
                        'e' => 'نور et شرور ont une terminaison proche et donnent un rythme à la phrase.',
                    ],
                    [
                        'q' => 'Le saj‘ est-il réservé à la poésie ?',
                        'c' => [
                            'Oui, il n’existe qu’en poésie',
                            'Oui, et il n’apparaît jamais dans les discours',
                            'Non, il apparaît aussi en prose',
                            'Non, mais il n’apparaît dans aucun texte arabe',
                        ],
                        'a' => 2,
                        'e' => 'Le saj‘ est un procédé de la prose, notamment dans certains discours et textes littéraires.',
                    ],
                    [
                        'q' => 'Qu’est-ce que le saj‘ met surtout en valeur ?',
                        'c' => [
                            'Le nombre de personnages',
                            'Le lieu de l’histoire',
                            'Le temps de l’action',
                            'Le rythme sonore des fins de phrases',
                        ],
                        'a' => 3,
                        'e' => 'Les terminaisons proches produisent un effet de rythme.',
                    ],
                    [
                        'q' => 'Pourquoi toute ressemblance entre deux mots n’est-elle pas un jinās ?',
                        'c' => [
                            'Parce que le jinās est un contraire',
                            'Parce qu’il faut une ressemblance de forme et une différence de sens',
                            'Parce que le jinās ne concerne que les verbes',
                            'Parce que deux mots voisins forment toujours un jinās',
                        ],
                        'a' => 1,
                        'e' => 'La ressemblance seule ne suffit pas : le sens doit différer.',
                    ],
                    [
                        'q' => 'Un auteur écrit des phrases dont les terminaisons se répondent par le son. À quel procédé penser ?',
                        'c' => ['Le tibāq', 'La comparaison', 'L’appel', 'Le saj‘'],
                        'a' => 3,
                        'e' => 'La proximité sonore des fins de phrases est la marque du saj‘.',
                    ],
                    [
                        'q' => 'Quel est l’intérêt général des procédés sonores comme le jinās et le saj‘ ?',
                        'c' => [
                            'Changer le sujet',
                            'Cacher les idées',
                            'Embellir le son et aider à retenir certaines phrases',
                            'Transformer la prose en nouvelle',
                        ],
                        'a' => 2,
                        'e' => 'Ils donnent de la cadence au discours et le rendent plus mémorable.',
                    ],
                ],
            ],
            [
                'title' => 'Les procédés de l’énonciation (الأساليب الإنشائية)',
                'description' => 'Interrogation, ordre, interdiction, appel et souhait : reconnaître chaque procédé et comprendre son but.',
                'questions' => [
                    [
                        'q' => 'Laquelle de ces phrases est une interrogation ?',
                        'c' => ['متى يبدأ الدرس؟', 'ابدأ الدرس.', 'لا تهمل واجبك.', 'يا طالب العلم.'],
                        'a' => 0,
                        'e' => 'Elle demande à quelle heure commence le cours.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est un ordre ?',
                        'c' => ['هل قرأت النص؟', 'اقرأ النص بعناية.', 'لا تهمل النص.', 'يا صديقي.'],
                        'a' => 1,
                        'e' => '« اقرأ » est un verbe à l’impératif.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est une interdiction (نهي) ?',
                        'c' => ['راجع درسك.', 'هل راجعت درسك؟', 'يا طالب.', 'لا تهمل درسك.'],
                        'a' => 3,
                        'e' => '« لا » devant un présent à la 2e personne exprime l’interdiction.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient un appel (نداء) ?',
                        'c' => ['انتبه جيدًا.', 'هل انتبهت؟', 'لا تتأخر.', 'يا أخي، انتبه.'],
                        'a' => 3,
                        'e' => '« يا أخي » interpelle directement la personne.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases exprime un souhait (تمنٍّ) ?',
                        'c' => ['ليت السلام يسود العالم.', 'احفظ واجبك.', 'هل وصلت؟', 'لا تتأخر.'],
                        'a' => 0,
                        'e' => '« ليت » est l’outil du souhait.',
                    ],
                    [
                        'q' => 'Dans « كيف تهمل واجبك وأنت تعلم أهميته؟ », quel est le but de la question ?',
                        'c' => [
                            'Demander une information',
                            'Reprocher, plutôt que chercher une réponse',
                            'Exprimer un souhait',
                            'Appeler quelqu’un',
                        ],
                        'a' => 1,
                        'e' => 'La forme est interrogative, mais l’intention est le reproche.',
                    ],
                    [
                        'q' => 'Quel est le but le plus proche de « احفظ الأمانة » ?',
                        'c' => [
                            'Demander un lieu',
                            'Exprimer la surprise',
                            'Conseiller et guider',
                            'Souhaiter quelque chose',
                        ],
                        'a' => 2,
                        'e' => 'L’ordre porte ici un sens de conseil et d’orientation.',
                    ],
                    [
                        'q' => 'Dans « لا تقطع حديث غيرك », quel est le but ?',
                        'c' => [
                            'Demander une information',
                            'Exprimer la surprise',
                            'Exprimer un souhait',
                            'Conseiller et enseigner la politesse, par l’interdiction',
                        ],
                        'a' => 3,
                        'e' => 'L’interdiction vise un comportement poli : c’est un conseil.',
                    ],
                    [
                        'q' => 'Quel procédé trouve-t-on dans « يا ليت الشباب يعود يومًا » ?',
                        'c' => ['L’interdiction', 'L’ordre', 'Le souhait (تمنٍّ)', 'Une vraie question'],
                        'a' => 2,
                        'e' => '« ليت » indique le souhait : on voudrait que la jeunesse revienne.',
                    ],
                    [
                        'q' => 'Pourquoi ne suffit-il pas de nommer le procédé ?',
                        'c' => [
                            'Parce que le nom n’a pas d’importance',
                            'Parce que comprendre le but du procédé éclaire le sens voulu',
                            'Parce que tous les procédés ont le même but',
                            'Parce que ces procédés n’ont pas de sens',
                        ],
                        'a' => 1,
                        'e' => 'Un même procédé peut servir des buts différents ; le contexte permet de les distinguer.',
                    ],
                ],
            ],
            [
                'title' => 'Application à de courts textes',
                'description' => 'Appliquer ce qui a été appris à de brèves phrases littéraires mêlant images, procédés sonores et tournures.',
                'questions' => [
                    [
                        'q' => 'Lisez : « العلم يفتح أبواب المستقبل. » Quelle est l’image la plus proche ?',
                        'c' => [
                            'Une opposition entre savoir et avenir',
                            'Une métaphore : le savoir est présenté comme ce qui ouvre les portes de l’avenir',
                            'Un appel',
                            'Une question',
                        ],
                        'a' => 1,
                        'e' => 'Les « portes » ne sont pas réelles : l’image présente le savoir comme un moyen d’accéder à des opportunités.',
                    ],
                    [
                        'q' => 'Lisez : « الجندي كالأسد في شجاعته. » Quel procédé reconnaît-on ?',
                        'c' => ['Une métaphore', 'Une comparaison (تشبيه)', 'Un saj‘', 'Un tibāq'],
                        'a' => 1,
                        'e' => 'L’outil « كـ » relie le soldat et le lion : comparaison explicite.',
                    ],
                    [
                        'q' => 'Lisez : « ضحك الصباح وغنى الطير. » Quelle image domine dans « ضحك الصباح » ?',
                        'c' => ['Un tibāq', 'Une interrogation', 'Un jinās', 'La personnification du matin'],
                        'a' => 3,
                        'e' => 'Le matin ne rit pas vraiment : on lui prête un acte humain.',
                    ],
                    [
                        'q' => 'Lisez : « يحب الخير ويكره الشر. » Quel procédé reconnaît-on ?',
                        'c' => ['Le tibāq', 'La comparaison', 'L’appel', 'Le saj‘'],
                        'a' => 0,
                        'e' => 'الخير et الشر sont des contraires.',
                    ],
                    [
                        'q' => 'Lisez : « يا طالب العلم، اجتهد. » Quel procédé ouvre la phrase ?',
                        'c' => ['La négation', 'Le souhait', 'L’interrogation', 'L’appel (نداء)'],
                        'a' => 3,
                        'e' => '« يا طالب العلم » interpelle la personne à qui l’on s’adresse.',
                    ],
                    [
                        'q' => 'Lisez : « لا تؤجل عمل اليوم إلى الغد. » Quel est le but de l’interdiction ?',
                        'c' => [
                            'Demander une information',
                            'Conseiller de ne pas remettre à plus tard',
                            'Exprimer la surprise',
                            'Décrire un lieu',
                        ],
                        'a' => 1,
                        'e' => 'L’interdiction donne un conseil sur l’organisation du travail.',
                    ],
                    [
                        'q' => 'Lisez : « العقل سراج صاحبه. » Quelle idée porte l’image ?',
                        'c' => [
                            'La raison est une lampe réelle',
                            'Le سراج est un outil d’écriture',
                            'La raison éclaire à son possesseur le chemin de la réflexion et de la guidance',
                            'La phrase parle de la météo',
                        ],
                        'a' => 2,
                        'e' => 'L’image fait de la raison une lampe qui éclaire le chemin.',
                    ],
                    [
                        'q' => 'Lisez : « بالصدق يعلو المرء، وبالكذب يهبط. » Qu’est-ce qui ressort ?',
                        'c' => [
                            'L’opposition entre vérité et mensonge, élévation et chute (muqābala)',
                            'Seulement une comparaison',
                            'Un appel',
                            'Une question',
                        ],
                        'a' => 0,
                        'e' => 'Plusieurs paires s’opposent : الصدق/الكذب et يعلو/يهبط.',
                    ],
                    [
                        'q' => 'Lisez : « من جدّ وجد. » Quelle qualité rhétorique ressort surtout ?',
                        'c' => [
                            'L’interrogation',
                            'L’appel',
                            'La personnification',
                            'La brièveté et la sagesse, avec une sonorité facile à retenir',
                        ],
                        'a' => 3,
                        'e' => 'La formule est courte, dense, et ses sons se répondent.',
                    ],
                    [
                        'q' => 'Quelle est la meilleure question pour analyser « الليل يهمس » ?',
                        'c' => [
                            'Combien de lettres compte le mot الليل ?',
                            'Quel trait humain est attribué à la nuit, et quel effet cela produit-il ?',
                            'Où le livre a-t-il été imprimé ?',
                            'Combien de fois le mot apparaît-il ?',
                        ],
                        'a' => 1,
                        'e' => 'Elle conduit à la personnification et à son effet : la nuit devient vivante.',
                    ],
                ],
            ],
            [
                'title' => 'Procédés et figures en contexte',
                'description' => 'Distinguer les figures dans des phrases courtes et voir la fonction de chaque procédé.',
                'questions' => [
                    [
                        'q' => 'Quelle phrase repose sur l’opposition ?',
                        'c' => [
                            'ينير العلم ويظلم الجهل.',
                            'قرأ الطالب الكتاب.',
                            'سافر الأب إلى المدينة.',
                            'جلس الطفل قرب النافذة.',
                        ],
                        'a' => 0,
                        'e' => 'ينير / يظلم et العلم / الجهل forment des oppositions nettes.',
                    ],
                    [
                        'q' => 'Quelle phrase contient une comparaison explicite, avec un outil ?',
                        'c' => ['العلم مفيد.', 'وجهه كالبدر.', 'المدينة نائمة.', 'يا طالب، اجتهد.'],
                        'a' => 1,
                        'e' => 'L’outil « كـ » est présent : comparaison explicite.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une métaphore ?',
                        'c' => [
                            'الطالب كالنحلة.',
                            'هل وصلت؟',
                            'الأمل يضيء القلب.',
                            'لا تهمل عملك.',
                        ],
                        'a' => 2,
                        'e' => 'L’espoir n’éclaire pas au sens propre : il est présenté comme une lumière dans le cœur.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient un appel ?',
                        'c' => ['تمهل قليلًا.', 'هل تمهلت؟', 'لا تتعجل.', 'يا صديقي، تمهل.'],
                        'a' => 3,
                        'e' => '« يا صديقي » est un appel.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une interdiction ?',
                        'c' => ['ارفع صوتك.', 'لا ترفع صوتك.', 'هل رفعت صوتك؟', 'يا رجل.'],
                        'a' => 1,
                        'e' => '« لا ترفع » demande de ne pas faire l’action.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une interrogation ?',
                        'c' => ['اسكن هنا.', 'لا تسكن بعيدًا.', 'أين تسكن؟', 'يا جار.'],
                        'a' => 2,
                        'e' => '« أين » est un mot interrogatif : on demande où la personne habite.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est la plus proche d’un saj‘ ?',
                        'c' => [
                            'العلم رفعة، والجهل ضعة.',
                            'الولد في البيت.',
                            'ذهبت إلى السوق.',
                            'قرأ الكتاب.',
                        ],
                        'a' => 0,
                        'e' => 'رفعة et ضعة ont des terminaisons proches qui donnent un rythme.',
                    ],
                    [
                        'q' => 'Laquelle de ces paires illustre le jinās (même prononciation, sens différent) ?',
                        'c' => [
                            'ليل ونهار',
                            'عين (l’œil) et عين (la source)',
                            'كبير وصغير',
                            'بحر ونهر',
                        ],
                        'a' => 1,
                        'e' => 'Même mot, deux sens : un jinās complet.',
                    ],
                    [
                        'q' => 'Dans « هل يستوي المجتهد والمهمل؟ », quel est l’effet probable de la question ?',
                        'c' => [
                            'Demander l’heure d’une réunion',
                            'Donner un ordre direct',
                            'Éveiller la réflexion et faire ressortir la différence entre les deux',
                            'Décrire un lieu',
                        ],
                        'a' => 2,
                        'e' => 'La question n’attend pas de réponse : elle invite à penser à la différence.',
                    ],
                    [
                        'q' => 'Quelle phrase donne un conseil sous forme d’ordre ?',
                        'c' => [
                            'هل حفظت وقتك؟',
                            'لا تضيع وقتك.',
                            'يا أخي.',
                            'احفظ وقتك تستفد منه.',
                        ],
                        'a' => 3,
                        'e' => '« احفظ » est un impératif qui porte ici un conseil.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de rhétorique',
                'description' => 'Reconnaître images, procédés et formes d’énonciation, et expliquer leur effet sur le sens.',
                'questions' => [
                    [
                        'q' => 'L’auteur écrit « البطل كالأسد ». Que cherche-t-on en premier ?',
                        'c' => [
                            'Le point commun que l’auteur veut souligner',
                            'Le nombre de pages du livre',
                            'Le vrai nom du lion',
                            'Le lieu d’impression',
                        ],
                        'a' => 0,
                        'e' => 'Dans un tashbih, on cherche le trait qui relie les deux termes, ici la bravoure.',
                    ],
                    [
                        'q' => 'Dans « تحدثت الأيام عن أثره », quelle image domine ?',
                        'c' => ['Un tibāq', 'La personnification des jours', 'Une interrogation', 'Un jinās'],
                        'a' => 1,
                        'e' => 'Les jours ne parlent pas vraiment : on leur prête un acte humain.',
                    ],
                    [
                        'q' => 'Si l’on trouve « الحياة والموت » dans une phrase, quel procédé attend-on ?',
                        'c' => ['La comparaison', 'Le saj‘ seulement', 'Le tibāq', 'L’appel'],
                        'a' => 2,
                        'e' => 'Vie et mort sont des contraires.',
                    ],
                    [
                        'q' => 'Dans une courte prose, les fins de phrases se répondent par le son. Quel procédé est probable ?',
                        'c' => ['La comparaison', 'Le tibāq', 'L’interrogation', 'Le saj‘'],
                        'a' => 3,
                        'e' => 'Des fins de phrases proches par le son sont la marque du saj‘.',
                    ],
                    [
                        'q' => 'L’auteur invite le lecteur : « تأمل هذه الكلمات ». De quel procédé s’agit-il ?',
                        'c' => ['L’ordre', 'L’interrogation', 'L’appel', 'Le souhait'],
                        'a' => 0,
                        'e' => '« تأمل » est un impératif.',
                    ],
                    [
                        'q' => 'Dans « لا تهمل واجبك », quelle est la fonction la plus proche si le locuteur conseille un élève ?',
                        'c' => ['La surprise', 'Le souhait', 'Le conseil et l’orientation', 'L’opposition'],
                        'a' => 2,
                        'e' => 'L’interdiction sert ici à conseiller l’élève.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases contient une comparaison explicite ?',
                        'c' => [
                            'الكتاب على الطاولة.',
                            'الكتاب مثل الصديق.',
                            'قرأت الكتاب أمس.',
                            'كتب المعلم الدرس.',
                        ],
                        'a' => 1,
                        'e' => 'L’outil « مثل » rapproche le livre et l’ami.',
                    ],
                    [
                        'q' => 'Quelle est la meilleure façon d’expliquer l’effet d’une image dans une réponse d’examen ?',
                        'c' => [
                            'Écrire seulement le nom du procédé',
                            'Recopier la phrase sans l’expliquer',
                            'Citer le titre du texte',
                            'Citer l’image, puis expliquer le sens ou le sentiment qu’elle met en valeur',
                        ],
                        'a' => 3,
                        'e' => 'La meilleure réponse nomme le procédé et en explique l’effet sur le sens.',
                    ],
                    [
                        'q' => 'Une phrase mêle une opposition et une belle image. Faut-il choisir un seul procédé ?',
                        'c' => [
                            'Non : plusieurs procédés peuvent se cumuler dans une même phrase',
                            'Oui, il est impossible de les combiner',
                            'Un procédé ne peut apparaître qu’une seule fois',
                            'On ne peut pas analyser une telle phrase',
                        ],
                        'a' => 0,
                        'e' => 'Une phrase peut contenir plusieurs phénomènes rhétoriques ; le contexte aide à les repérer.',
                    ],
                    [
                        'q' => 'Quel est le but final de l’étude de la rhétorique pour un débutant ?',
                        'c' => [
                            'Mémoriser seulement les noms des procédés',
                            'Comprendre comment la manière de dire agit sur la clarté, la beauté et la force du sens',
                            'Employer des mots difficiles dans chaque phrase',
                            'Éviter la lecture littéraire',
                        ],
                        'a' => 1,
                        'e' => 'Le but est de comprendre le lien entre la façon de dire et l’effet produit sur le lecteur.',
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
