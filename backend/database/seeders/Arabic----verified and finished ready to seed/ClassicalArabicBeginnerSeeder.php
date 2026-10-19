<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-arabic')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => 'Introduction à l’arabe classique',
                'description' => 'Ce que l’on entend par arabe classique, ses caractéristiques générales et quelques mots et tournures du patrimoine.',
                'questions' => [
                    [
                        'q' => 'Qu’entend-on, simplement, par « arabe classique » ?',
                        'c' => [
                            'Un dialecte propre à une seule ville',
                            'L’arabe des textes littéraires et patrimoniaux anciens : poésie, discours, livres',
                            'Une langue moderne réservée aux SMS',
                            'Une façon d’écrire les nombres en lettres',
                        ],
                        'a' => 1,
                        'e' => 'L’arabe classique est celui que l’on trouve dans de nombreux textes anciens : poésie, discours, ouvrages.',
                    ],
                    [
                        'q' => 'Quelle source est la plus liée à l’arabe classique ?',
                        'c' => [
                            'Un SMS en dialecte',
                            'Une publicité récente',
                            'Une conversation familière',
                            'La poésie arabe ancienne',
                        ],
                        'a' => 3,
                        'e' => 'La poésie arabe ancienne est l’une des grandes sources de l’arabe classique.',
                    ],
                    [
                        'q' => 'Vous rencontrez un mot ancien qu’on n’emploie guère aujourd’hui. Quelle est la meilleure méthode pour le comprendre ?',
                        'c' => [
                            'Chercher son sens dans le contexte et dans un dictionnaire adapté',
                            'Supposer que son sens est l’inverse d’un autre mot',
                            'Le supprimer du texte',
                            'Le remplacer par un mot choisi au hasard',
                        ],
                        'a' => 0,
                        'e' => 'Le contexte et le dictionnaire permettent de comprendre le vocabulaire ancien sans deviner.',
                    ],
                    [
                        'q' => 'Quelle phrase se rapproche le plus d’un style patrimonial ?',
                        'c' => [
                            'أرسل لي رسالة على التطبيق.',
                            'سأرسل لك الملف الآن.',
                            'قال الشيخ: «يا بني، احفظ عهدك.»',
                            'افتح الرابط في الهاتف.',
                        ],
                        'a' => 2,
                        'e' => 'L’appel « يا بني » et le conseil du maître sont typiques des textes du patrimoine.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui peut rendre un texte classique plus difficile pour un débutant ?',
                        'c' => [
                            'La brièveté du texte',
                            'L’absence de verbes',
                            'Un grand nombre de signes de ponctuation',
                            'La présence de mots et de tournures anciens, peu employés aujourd’hui',
                        ],
                        'a' => 3,
                        'e' => 'Certains textes anciens contiennent des mots et des tournures que l’on voit rarement en arabe contemporain.',
                    ],
                    [
                        'q' => 'Dans un texte classique, le mot « فتى » signifie le plus souvent :',
                        'c' => ['Vieillard', 'Jeune homme', 'Ville', 'Livre'],
                        'a' => 1,
                        'e' => 'فتى est un mot fréquent en littérature ancienne pour désigner un jeune homme.',
                    ],
                    [
                        'q' => 'Dans « يا بني », quelle est la fonction de « يا » ?',
                        'c' => ['Négation', 'Coordination', 'Particule d’appel', 'Condition'],
                        'a' => 2,
                        'e' => 'يا est la particule d’appel (نداء) la plus courante : on s’adresse ici au fils.',
                    ],
                    [
                        'q' => 'Dans « مضى الرجل إلى داره », que signifie « مضى » ?',
                        'c' => ['Il a dormi', 'Il a ri', 'Il s’est assis', 'Il est parti, il s’en est allé'],
                        'a' => 3,
                        'e' => 'مضى peut signifier « s’en aller », « se rendre » ; le contexte (إلى داره) le confirme.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui caractérise une bonne lecture d’un texte classique ?',
                        'c' => [
                            'Se concentrer sur un seul mot et oublier le reste',
                            'Comprendre les mots par leur contexte et repérer les tournures anciennes sans perdre le sens général',
                            'Remplacer tout mot ancien par du dialecte',
                            'Apprendre le texte par cœur sans le comprendre',
                        ],
                        'a' => 1,
                        'e' => 'Comprendre un texte ancien demande d’associer vocabulaire, contexte et vue d’ensemble.',
                    ],
                    [
                        'q' => 'Pourquoi l’étude de l’arabe classique est-elle utile à un apprenant ?',
                        'c' => [
                            'Elle lui ouvre l’accès à de nombreux textes littéraires et patrimoniaux anciens',
                            'Elle remplace toutes les formes de l’arabe moderne',
                            'Elle ne sert qu’en calcul',
                            'Elle dispense de lire',
                        ],
                        'a' => 0,
                        'e' => 'Elle aide à lire le patrimoine et à en comprendre le vocabulaire et les tournures.',
                    ],
                ],
            ],
            [
                'title' => 'Vocabulaire classique courant',
                'description' => 'Comprendre des mots classiques fréquents par leur sens et leur contexte.',
                'questions' => [
                    [
                        'q' => 'Dans « لبث الرجل في القرية أيامًا », que signifie « لبث » ?',
                        'c' => ['Il est resté', 'Il est parti vite', 'Il a beaucoup ri', 'Il a dormi en chemin'],
                        'a' => 0,
                        'e' => 'لبث signifie rester, demeurer un certain temps.',
                    ],
                    [
                        'q' => 'Dans « أقبل الصباح », que signifie « أقبل » ?',
                        'c' => ['Il s’est éloigné', 'Il est venu, il approche', 'Il a disparu', 'Il s’est arrêté'],
                        'a' => 1,
                        'e' => 'أقبل signifie arriver, s’approcher.',
                    ],
                    [
                        'q' => 'Que signifie « أمس » dans un texte classique ?',
                        'c' => ['Demain', 'Dans un an', 'Hier', 'Seulement maintenant'],
                        'a' => 2,
                        'e' => 'أمس désigne la veille.',
                    ],
                    [
                        'q' => 'Dans « رجع القوم أدراجهم », que comprend-on ?',
                        'c' => [
                            'Ils ont voyagé vers une nouvelle ville',
                            'Ils se sont assis',
                            'Ils sont entrés dans la mer',
                            'Ils sont revenus par le chemin par lequel ils étaient venus',
                        ],
                        'a' => 3,
                        'e' => 'رجع أدراجه signifie revenir sur ses pas.',
                    ],
                    [
                        'q' => 'Que signifie souvent « قوم » dans les textes anciens ?',
                        'c' => ['Un lieu élevé', 'Un groupe de gens', 'Un vieux livre', 'Un moment de la journée'],
                        'a' => 1,
                        'e' => 'قوم désigne un groupe de personnes, un peuple.',
                    ],
                    [
                        'q' => 'Dans « اشتدّ الحر », que signifie le verbe « اشتدّ » ?',
                        'c' => ['Il a baissé', 'Il a disparu', 'Il s’est accru, il est devenu plus fort', 'Il s’est mis au niveau du froid'],
                        'a' => 2,
                        'e' => 'اشتدّ veut dire devenir plus intense.',
                    ],
                    [
                        'q' => 'Dans « سعى إلى طلب العلم », que signifie « سعى » ?',
                        'c' => [
                            'S’efforcer, s’appliquer pour atteindre quelque chose',
                            'Cesser le travail',
                            'Dormir longtemps',
                            'Oublier l’affaire',
                        ],
                        'a' => 0,
                        'e' => 'سعى إلى exprime l’effort fait pour atteindre un but.',
                    ],
                    [
                        'q' => 'Dans « غدا المسافر إلى المدينة », que signifie « غدا » ?',
                        'c' => [
                            'Il est reparti dans la nuit',
                            'Il est parti de bon matin',
                            'Il est resté à la maison',
                            'Il a dormi l’après-midi',
                        ],
                        'a' => 1,
                        'e' => 'غدا, ici verbe, veut dire partir tôt le matin (au moment du غدوّ).',
                    ],
                    [
                        'q' => 'Dans « رجع إلى داره », que signifie « دار » ?',
                        'c' => ['Son marché', 'Son livre', 'Sa maison, sa demeure', 'Son bateau'],
                        'a' => 2,
                        'e' => 'دار est un mot courant pour la maison, la demeure.',
                    ],
                    [
                        'q' => 'Dans « حفظ العهد », que signifie « العهد » ?',
                        'c' => [
                            'Le chemin du marché',
                            'Un type de nourriture',
                            'Un nom de lieu',
                            'La promesse ou l’engagement que l’on a pris',
                        ],
                        'a' => 3,
                        'e' => 'العهد est la promesse, l’engagement que l’on a pris envers soi-même ou envers autrui.',
                    ],
                ],
            ],
            [
                'title' => 'Pronoms et verbes dans un texte classique',
                'description' => 'Réviser pronoms et verbes de base à travers des phrases proches du style classique.',
                'questions' => [
                    [
                        'q' => 'Dans « قال الفتى: أنا أطلب العلم », à qui renvoie le pronom « أنا » ?',
                        'c' => [
                            'À une personne absente',
                            'Au jeune homme qui parle',
                            'À un groupe de personnes',
                            'Au lieu',
                        ],
                        'a' => 1,
                        'e' => 'أنا est la première personne du singulier : ici, le jeune homme qui parle.',
                    ],
                    [
                        'q' => 'Complétez correctement : « هم ___ إلى القرية ».',
                        'c' => ['ذهبت', 'ذهب', 'ذهبوا', 'ذهبا'],
                        'a' => 2,
                        'e' => 'Avec هم, le verbe au passé est à la 3e personne du masculin pluriel : ذهبوا.',
                    ],
                    [
                        'q' => 'Dans « هي حفظت الوعد », qui est le sujet ?',
                        'c' => ['الوعد', 'حفظت', 'La phrase entière', 'هي'],
                        'a' => 3,
                        'e' => 'Le pronom هي est celui qui accomplit l’action de garder.',
                    ],
                    [
                        'q' => 'Quelle phrase s’accorde avec le pronom « أنتَ » ?',
                        'c' => ['أنتَ تحفظان العهد.', 'أنتَ تحفظ العهد.', 'أنتَ يحفظ العهد.', 'أنتَ أحفظ العهد.'],
                        'a' => 1,
                        'e' => 'أنتَ désigne un seul interlocuteur masculin : le verbe est تحفظ.',
                    ],
                    [
                        'q' => 'Dans « خرج القوم ثم عادوا », à qui renvoie « عادوا » ?',
                        'c' => ['À une seule personne', 'Aux gens (القوم)', 'À une femme', 'Au lieu'],
                        'a' => 1,
                        'e' => 'Le و de عادوا marque le masculin pluriel ; il reprend القوم.',
                    ],
                    [
                        'q' => 'Dans « سيعود الفتى غدًا », quel verbe exprime le futur ?',
                        'c' => ['الفتى', 'غدًا', 'سيعود', 'Aucun verbe'],
                        'a' => 2,
                        'e' => 'سيعود est un présent précédé de س : il marque le futur.',
                    ],
                    [
                        'q' => 'Dans « ما خرج الرجل », quelle est la fonction de « ما » ?',
                        'c' => ['Appel', 'Interrogation', 'Négation', 'Coordination'],
                        'a' => 2,
                        'e' => 'ما nie ici l’action : l’homme n’est pas sorti.',
                    ],
                    [
                        'q' => 'Complétez : « لم ___ الرجل عن وعده ».',
                        'c' => ['تراجعَ', 'يتراجعُ', 'تراجعوا', 'يتراجعْ'],
                        'a' => 3,
                        'e' => 'Après لم, le verbe est au présent jussif : يتراجعْ.',
                    ],
                    [
                        'q' => 'Dans « إن تجتهدْ تنجحْ », quel est le rapport entre les deux verbes ?',
                        'c' => [
                            'Le premier explique la couleur du second',
                            'Les deux sont au passé',
                            'Le premier est la condition qui mène au second',
                            'Il n’y a aucun rapport',
                        ],
                        'a' => 2,
                        'e' => 'Structure conditionnelle : l’effort conduit à la réussite.',
                    ],
                    [
                        'q' => 'Dans « كان الشيخ حكيمًا », quel mot indique la qualité du cheikh ?',
                        'c' => ['كان', 'حكيمًا', 'الشيخ', 'L’expression entière'],
                        'a' => 1,
                        'e' => 'حكيمًا est l’attribut : il dit comment était le cheikh.',
                    ],
                ],
            ],
            [
                'title' => 'Tournures et procédés classiques',
                'description' => 'L’appel, la négation, l’interrogation, la condition et d’autres tournures fréquentes dans les textes classiques.',
                'questions' => [
                    [
                        'q' => 'Dans « يا طالبَ العلمِ، اجتهد », quelle est la fonction de « يا » ?',
                        'c' => ['Appel', 'Négation', 'Condition', 'Coordination'],
                        'a' => 0,
                        'e' => 'يا sert à interpeller la personne à qui l’on parle.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est une question ?',
                        'c' => ['اذهب إلى دارك.', 'ما أجمل الصباح!', 'أين تذهب؟', 'لم يخرج.'],
                        'a' => 2,
                        'e' => '« أين تذهب؟ » demande un lieu : c’est une interrogation.',
                    ],
                    [
                        'q' => 'Dans « لا تهملْ واجبك », quelle est la fonction de « لا » ?',
                        'c' => ['Affirmer l’action', 'Interdire l’action (لا الناهية)', 'Appeler', 'Coordonner'],
                        'a' => 1,
                        'e' => 'لا devant un présent jussif exprime l’interdiction.',
                    ],
                    [
                        'q' => 'Dans « إن تصبرْ تظفرْ », que marque « إن » ?',
                        'c' => ['La négation', 'La surprise', 'L’appel', 'La condition'],
                        'a' => 3,
                        'e' => 'إن introduit la condition : la patience conduit à la victoire.',
                    ],
                    [
                        'q' => 'Quel procédé trouve-t-on dans « ما أكرمَ الضيفَ! » ?',
                        'c' => ['L’exclamation (التعجب)', 'L’interrogation', 'L’interdiction', 'L’appel'],
                        'a' => 0,
                        'e' => 'La forme « ما أفعلَ » exprime l’admiration ou l’étonnement.',
                    ],
                    [
                        'q' => 'Dans « هلا اجتهدت في طلب العلم؟ », que comprend le lecteur en général ?',
                        'c' => [
                            'Un récit de voyage',
                            'Une exhortation ou un reproche doux',
                            'La description d’un lieu',
                            'Une simple demande d’heure',
                        ],
                        'a' => 1,
                        'e' => 'هلّا sert souvent à exhorter ou à reprocher gentiment : ici, à encourager l’effort.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est une négation ?',
                        'c' => ['يا رجل.', 'هل حضر الرجل؟', 'ما حضر الرجل.', 'احضر يا رجل.'],
                        'a' => 2,
                        'e' => '« ما حضر الرجل » nie la venue de l’homme.',
                    ],
                    [
                        'q' => 'Quelle phrase exprime un souhait ?',
                        'c' => ['لا تهمل واجبك.', 'أين الكتاب؟', 'يا فتى.', 'ليت الشباب دائمٌ.'],
                        'a' => 3,
                        'e' => 'ليت est l’outil du souhait : « si seulement la jeunesse durait ».',
                    ],
                    [
                        'q' => 'Dans « ثم عاد إلى داره », quelle est la fonction de « ثم » ?',
                        'c' => [
                            'Négation',
                            'Coordination avec ordre et délai entre les faits',
                            'Interrogation',
                            'Appel',
                        ],
                        'a' => 1,
                        'e' => 'ثم relie deux faits : le second vient après le premier, avec un certain intervalle.',
                    ],
                    [
                        'q' => 'Quelle phrase contient un ordre ?',
                        'c' => ['هل حفظت عهدك؟', 'ما أجمل الوفاء!', 'احفظ عهدك.', 'لم يحفظ عهده.'],
                        'a' => 2,
                        'e' => '« احفظ » est un impératif.',
                    ],
                ],
            ],
            [
                'title' => 'Lire des textes classiques simplifiés',
                'description' => 'Lire de courtes phrases dans un style patrimonial et en dégager le sens direct et les idées.',
                'questions' => [
                    [
                        'q' => 'Lisez : « خرج الفتى من داره في أول النهار، وسعى إلى طلب العلم. » Pourquoi est-il sorti ?',
                        'c' => [
                            'Pour acheter des vêtements',
                            'Pour chercher le savoir',
                            'Pour voir la mer',
                            'Pour nourrir les oiseaux',
                        ],
                        'a' => 1,
                        'e' => 'Le texte dit qu’il est sorti pour chercher le savoir.',
                    ],
                    [
                        'q' => 'Lisez : « لبث الشيخ في مجلسه حتى أقبل المساء. » Quand quitte-t-il l’assemblée, d’après la phrase ?',
                        'c' => ['À l’aube', 'Avant le lever du soleil', 'Quand le soir arrive ou approche', 'Forcément à midi'],
                        'a' => 2,
                        'e' => '« حتى أقبل المساء » : il reste jusqu’à ce que le soir vienne.',
                    ],
                    [
                        'q' => 'Lisez : « قال الأب لابنه: يا بني، إن الصدق ينجي صاحبه. » Quelle est l’idée principale ?',
                        'c' => [
                            'Le fils n’aime pas parler',
                            'Le père parle d’un voyage',
                            'Le texte décrit un lieu',
                            'La sincérité protège celui qui la pratique',
                        ],
                        'a' => 3,
                        'e' => 'Le texte associe la sincérité au salut.',
                    ],
                    [
                        'q' => 'Lisez : « عاد المسافر أدراجه حين رأى الطريق موحشًا. » Pourquoi est-il revenu ?',
                        'c' => [
                            'Parce que la route lui paraissait effrayante, déserte',
                            'Parce qu’il était arrivé au but',
                            'Parce qu’il avait retrouvé son ami',
                            'Parce qu’il voulait dormir en voiture',
                        ],
                        'a' => 0,
                        'e' => 'L’adjectif « موحشًا » explique son retour.',
                    ],
                    [
                        'q' => 'Lisez : « إذا اجتهدت في طلب العلم بلغت الغاية. » Que relie le texte ?',
                        'c' => [
                            'Le sommeil et le voyage',
                            'L’effort et l’atteinte du but',
                            'La nourriture et le travail',
                            'La pluie et la lune',
                        ],
                        'a' => 1,
                        'e' => 'La structure conditionnelle relie l’effort à la réussite.',
                    ],
                    [
                        'q' => 'Lisez : « لم يضيع التلميذ وقته، بل حفظ درسه وراجع كتبه. » Qu’a fait l’élève ?',
                        'c' => [
                            'Il a abandonné ses études',
                            'Il a dormi toute la journée',
                            'Il a appris sa leçon et révisé ses livres',
                            'Il a voyagé dans une autre ville',
                        ],
                        'a' => 2,
                        'e' => 'Le texte mentionne deux actions : apprendre sa leçon et réviser ses livres.',
                    ],
                    [
                        'q' => 'Lisez : « كان الرجل كريمًا، فإذا طرق بابه سائلٌ أعانه. » Que comprend-on de son comportement ?',
                        'c' => [
                            'Il n’ouvrait sa porte à personne',
                            'Il aimait aider celui qui lui demandait de l’aide',
                            'Il détestait les invités',
                            'Il travaillait au marché',
                        ],
                        'a' => 1,
                        'e' => 'Aider le mendiant qui frappe à sa porte montre sa générosité.',
                    ],
                    [
                        'q' => 'Lisez : « أطلّ الفتى على البحر فرأى السفن تمضي في الأفق. » Qu’a-t-il vu ?',
                        'c' => [
                            'Des montagnes qui s’effondrent',
                            'Le village en flammes',
                            'La ville qui s’endort',
                            'Des navires qui avancent à l’horizon',
                        ],
                        'a' => 3,
                        'e' => 'C’est l’image que le texte mentionne directement.',
                    ],
                    [
                        'q' => 'Lisez : « حفظ الشيخ قولًا قديمًا: من جدّ وجد. » Quelle idée porte ce dicton ?',
                        'c' => [
                            'La paresse vaut mieux que le travail',
                            'Le succès arrive sans effort',
                            'L’effort mène à la réussite',
                            'Il ne parle que de voyage',
                        ],
                        'a' => 2,
                        'e' => '« من جدّ وجد » : celui qui s’applique finit par obtenir.',
                    ],
                    [
                        'q' => 'Lisez : « شكر الفتى معلّمه ثم رجع إلى داره مطمئن القلب. » Comment se sentait-il en rentrant ?',
                        'c' => ['En colère', 'Apaisé', 'Effrayé', 'Perplexe'],
                        'a' => 1,
                        'e' => 'Le texte dit qu’il est rentré le cœur tranquille.',
                    ],
                ],
            ],
            [
                'title' => 'Le style littéraire des textes anciens',
                'description' => 'Observer le ton, les images, les mots choisis et le style dans de brèves phrases classiques.',
                'questions' => [
                    [
                        'q' => 'Dans « أقبل الليل وبسط جناحيه », quelle est l’image ?',
                        'c' => [
                            'La nuit est représentée comme un oiseau qui déploie ses ailes',
                            'Une description scientifique de la nuit',
                            'Une définition des oiseaux',
                            'L’indication de l’heure du départ',
                        ],
                        'a' => 0,
                        'e' => 'La nuit n’a pas d’ailes : l’auteur en fait un être qui les déploie.',
                    ],
                    [
                        'q' => 'Un auteur décrit le matin comme « بهاءٌ يملأ القلب ». Qu’est-ce qui ressort ?',
                        'c' => [
                            'Un calcul',
                            'Des consignes',
                            'Une image et une émotion ensemble',
                            'Le temps, sans aucun sentiment',
                        ],
                        'a' => 2,
                        'e' => 'L’image du « splendeur qui emplit le cœur » associe le matin à un sentiment intérieur.',
                    ],
                    [
                        'q' => 'Un texte multiplie les « يا بني، يا صاحبي ». Qu’observe-t-on ?',
                        'c' => [
                            'Seulement des phrases conditionnelles',
                            'L’absence d’interlocuteur',
                            'Un texte transformé en liste',
                            'La présence de l’appel et du discours direct',
                        ],
                        'a' => 3,
                        'e' => 'Les appels répétés montrent que le locuteur s’adresse directement à quelqu’un.',
                    ],
                    [
                        'q' => 'Dans un texte triste, l’expression « يا ليتني » revient souvent. Quelle émotion attend-on ?',
                        'c' => ['Le rire', 'Le souhait mêlé de regret', 'La colère contre le calcul', 'L’indifférence'],
                        'a' => 1,
                        'e' => '« يا ليتني » exprime le souhait, souvent teinté de regret.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases a un ton plus sentencieux, plus sage ?',
                        'c' => ['وصلت الحافلة.', 'فتحت الباب.', 'من جدّ وجد.', 'جلست قرب النافذة.'],
                        'a' => 2,
                        'e' => '« من جدّ وجد » énonce une règle générale, un proverbe.',
                    ],
                    [
                        'q' => 'Que fait la répétition dans un texte littéraire, quand elle est maîtrisée ?',
                        'c' => [
                            'Elle annule toujours le sens',
                            'Elle transforme le texte en tableau',
                            'Elle empêche de suivre le texte',
                            'Elle insiste sur une idée ou un sentiment et renforce le rythme',
                        ],
                        'a' => 3,
                        'e' => 'Une répétition voulue donne du poids à une idée ou à une émotion.',
                    ],
                    [
                        'q' => 'Dans « تجري الريح في أرجاء البيداء », que signifie « البيداء » ?',
                        'c' => [
                            'Le désert, une vaste terre aride',
                            'La mer',
                            'La ville',
                            'Le jardin',
                        ],
                        'a' => 0,
                        'e' => 'البيداء est un mot littéraire ancien pour le désert ou la vaste étendue aride.',
                    ],
                    [
                        'q' => 'Pourquoi un auteur emploierait-il un mot ancien comme « الدجى » plutôt que « الظلام » ?',
                        'c' => [
                            'Parce que « الدجى » signifie toujours la lumière',
                            'Parce que le mot ancien peut donner au texte un ton et une atmosphère littéraires particuliers',
                            'Parce que l’auteur ne veut pas être compris',
                            'Parce que les deux mots n’ont aucun rapport',
                        ],
                        'a' => 1,
                        'e' => 'Choisir un mot ancien donne une couleur patrimoniale et une voix littéraire.',
                    ],
                    [
                        'q' => 'Dans « نامت القرية ولم يبق إلا صوت الحارس », quelle ambiance domine ?',
                        'c' => [
                            'Une foule intense',
                            'Une fête bruyante',
                            'Le calme, la nuit, le silence',
                            'Un marché bondé',
                        ],
                        'a' => 2,
                        'e' => 'Le village endormi et un seul bruit restant suggèrent la quiétude.',
                    ],
                    [
                        'q' => 'Quelle question aide à comprendre le style d’un texte classique ?',
                        'c' => [
                            'De quelle couleur est la couverture ?',
                            'Combien de pages compte le livre ?',
                            'Où le lecteur a-t-il acheté son stylo ?',
                            'Pourquoi l’auteur a-t-il choisi ces mots et ces images plutôt que des mots plus simples ?',
                        ],
                        'a' => 3,
                        'e' => 'Se demander pourquoi tels mots et telles images ont été choisis conduit à analyser le style.',
                    ],
                ],
            ],
            [
                'title' => 'Arabe classique et arabe contemporain',
                'description' => 'Quelques mots et tournures plus fréquents dans les textes classiques que dans l’usage moderne.',
                'questions' => [
                    [
                        'q' => 'Quel mot paraît le plus patrimonial par rapport à l’usage quotidien moderne ?',
                        'c' => ['الهاتف', 'البيداء', 'السيارة', 'الحافلة'],
                        'a' => 1,
                        'e' => 'البيداء est un mot littéraire ancien pour le désert ; les autres sont d’usage courant.',
                    ],
                    [
                        'q' => 'Si vous lisez « داره » dans un texte ancien, quel mot moderne est le plus proche ?',
                        'c' => ['منزله', 'مدرسته', 'عمله', 'هاتفه'],
                        'a' => 0,
                        'e' => 'دار désigne la maison, la demeure.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases semble la plus classique ?',
                        'c' => [
                            'ذهب الناس إلى بيوتهم بعد العمل.',
                            'أرسل لي رسالة.',
                            'مضى القوم إلى ديارهم.',
                            'سأفتح التطبيق.',
                        ],
                        'a' => 2,
                        'e' => 'مضى et ديارهم donnent à la phrase une couleur patrimoniale.',
                    ],
                    [
                        'q' => 'Vous rencontrez le mot « غداة » dans un texte ancien. Que faire ?',
                        'c' => [
                            'Le prendre pour un nom de ville',
                            'Le comprendre par le contexte : début du jour, matin',
                            'Le prendre pour un verbe qui veut dire dormir',
                            'Le supprimer du texte',
                        ],
                        'a' => 1,
                        'e' => 'غداة est un mot ancien qui renvoie au début du jour ; le contexte le confirme.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases est la plus proche de l’arabe contemporain par son vocabulaire ?',
                        'c' => [
                            'مضى الفتى إلى داره عند الأصيل.',
                            'أقبل القوم من البيداء.',
                            'غدا المسافر نحو الديار.',
                            'أرسل الطالب رسالة إلى المعلم عبر الهاتف.',
                        ],
                        'a' => 3,
                        'e' => 'رسالة, الهاتف et الطالب sont des mots tout à fait courants aujourd’hui.',
                    ],
                    [
                        'q' => 'Pourquoi est-il utile de connaître l’équivalent moderne d’un mot ancien pendant la lecture ?',
                        'c' => [
                            'Cela rend le texte poétique',
                            'Cela aide à comprendre sans se perdre dans les mots anciens',
                            'Cela dispense du contexte',
                            'Cela change l’histoire',
                        ],
                        'a' => 1,
                        'e' => 'L’équivalent moderne permet d’accéder au sens avant de revenir au texte original.',
                    ],
                    [
                        'q' => 'Si un texte emploie « الأصيل » pour un moment de la journée, de quel moment s’agit-il ?',
                        'c' => [
                            'Minuit',
                            'Seulement le début de l’aube',
                            'Midi',
                            'La fin d’après-midi, peu avant le coucher du soleil',
                        ],
                        'a' => 3,
                        'e' => 'الأصيل désigne la fin du jour, avant le coucher du soleil.',
                    ],
                    [
                        'q' => 'Quel mot moderne rend le mieux « الركب » dans beaucoup de textes anciens ?',
                        'c' => ['L’école', 'La bibliothèque', 'La caravane, le groupe de voyageurs', 'L’aéroport'],
                        'a' => 2,
                        'e' => 'الركب désigne un groupe de voyageurs, une caravane.',
                    ],
                    [
                        'q' => 'Pourquoi ne faut-il pas traduire chaque mot classique directement en dialecte pendant la lecture ?',
                        'c' => [
                            'Parce que le dialecte est toujours interdit',
                            'Parce que certains mots demandent une compréhension précise du contexte pour garder le sens et le style',
                            'Parce que le texte ancien n’a pas de sens',
                            'Parce que chaque mot a une seule traduction possible',
                        ],
                        'a' => 1,
                        'e' => 'Une traduction mot à mot en dialecte peut perdre des nuances ; le contexte aide à choisir le bon sens.',
                    ],
                    [
                        'q' => 'Quelle compétence aide le plus à passer de l’arabe moderne à un texte classique ?',
                        'c' => [
                            'Comparer le vocabulaire et les tournures tout en lisant le contexte',
                            'Apprendre des mots sans exemples',
                            'Ignorer les verbes',
                            'Lire seulement le titre',
                        ],
                        'a' => 0,
                        'e' => 'Comparer vocabulaire et tournures, en s’appuyant sur le contexte, construit un pont entre les deux états de la langue.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale d’arabe classique',
                'description' => 'Révision du vocabulaire, des tournures et de la lecture littéraire dans des textes classiques simplifiés.',
                'questions' => [
                    [
                        'q' => 'Dans « يا طالب العلم، اجتهد تبلغ غايتك », quels éléments de style repère-t-on ?',
                        'c' => [
                            'Une négation et une exclamation seulement',
                            'Un appel, un ordre et l’idée d’une conséquence',
                            'La description d’un lieu',
                            'Une liste de noms',
                        ],
                        'a' => 1,
                        'e' => '« يا طالب العلم » est un appel, « اجتهد » un ordre, et « تبلغ غايتك » la conséquence de l’effort.',
                    ],
                    [
                        'q' => 'Lisez : « أقبل الفجر، فنهض المسافر وأعدّ راحلته. » Qu’est-ce qui s’est passé en premier ?',
                        'c' => [
                            'Le voyageur a préparé sa monture',
                            'Le voyageur a quitté la ville',
                            'L’aube est venue',
                            'Il est rentré chez lui',
                        ],
                        'a' => 2,
                        'e' => 'L’aube arrive d’abord ; ensuite le voyageur se lève et prépare sa monture.',
                    ],
                    [
                        'q' => 'Quelle idée exprime « من جدّ وجد » ?',
                        'c' => [
                            'Le repos vaut toujours mieux que le travail',
                            'La chance seule fait la réussite',
                            'L’effort est le chemin vers le résultat',
                            'Le dicton parle de voyage',
                        ],
                        'a' => 2,
                        'e' => 'Le dicton relie l’application et le succès.',
                    ],
                    [
                        'q' => 'Dans « عاد القوم أدراجهم », quel mot demande le plus souvent une explication à un débutant ?',
                        'c' => ['عاد', 'القوم', 'هم seul', 'أدراجهم'],
                        'a' => 3,
                        'e' => 'أدراجهم appartient à une expression ancienne (« revenir sur ses pas ») ; les autres mots sont plus faciles.',
                    ],
                    [
                        'q' => 'Un auteur appelle le désert « البيداء ». Que remarque-t-on ?',
                        'c' => [
                            'Il emploie un nom de ville',
                            'Il emploie un mot littéraire ancien au lieu d’un mot plus courant comme الصحراء',
                            'Il emploie un impératif',
                            'Il parle de la mer',
                        ],
                        'a' => 1,
                        'e' => 'البيداء est un mot littéraire ancien pour désigner le désert ou la vaste étendue aride.',
                    ],
                    [
                        'q' => 'Dans « لم يضيع الفتى وقته », quelle est la fonction de « لم » ?',
                        'c' => [
                            'Appel',
                            'Exclamation',
                            'Condition',
                            'Négation d’un fait passé, avec le verbe au présent',
                        ],
                        'a' => 3,
                        'e' => 'لم nie un fait passé et se construit avec le présent jussif.',
                    ],
                    [
                        'q' => 'Que dire d’un texte classique où reviennent souvent « يا بني », « يا أخي », « يا قوم » ?',
                        'c' => [
                            'Il n’y a aucun interlocuteur',
                            'C’est un texte de calcul',
                            'C’est une liste de courses',
                            'Il contient beaucoup d’adresses et d’appels directs',
                        ],
                        'a' => 3,
                        'e' => 'La répétition de يا montre que l’on s’adresse sans cesse à des personnes.',
                    ],
                    [
                        'q' => 'Pourquoi le lecteur d’un texte classique doit-il s’appuyer sur le contexte ?',
                        'c' => [
                            'Parce que les textes anciens sont vides de sens',
                            'Parce que le sens précis d’un mot ancien se dégage de la phrase et de la situation',
                            'Parce que chaque mot n’a qu’un seul sens',
                            'Parce que le contexte n’a aucun rapport avec le vocabulaire',
                        ],
                        'a' => 1,
                        'e' => 'Le contexte aide à choisir le sens voulu quand le mot est ancien ou polysémique.',
                    ],
                    [
                        'q' => 'Un texte classique vous paraît difficile. Quelle est la meilleure stratégie ?',
                        'c' => [
                            'Laisser de côté tout mot inconnu sans essayer',
                            'Tout traduire immédiatement en dialecte',
                            'Découper le texte en phrases, repérer les mots clés, puis revenir au sens général',
                            'Apprendre le texte par cœur sans le comprendre',
                        ],
                        'a' => 2,
                        'e' => 'Découper, s’appuyer sur le contexte et le dictionnaire rend la lecture plus facile et plus précise.',
                    ],
                    [
                        'q' => 'Quel est le but d’étudier l’arabe classique à côté de l’arabe contemporain ?',
                        'c' => [
                            'Cesser d’utiliser l’arabe moderne',
                            'Comprendre le lien entre l’arabe actuel et la langue d’une grande partie du patrimoine',
                            'Apprendre le calcul ancien',
                            'Apprendre des textes par cœur sans sens',
                        ],
                        'a' => 1,
                        'e' => 'L’arabe classique aide à lire le patrimoine et à voir comment son vocabulaire et ses tournures se rattachent à l’arabe d’aujourd’hui.',
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
