<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-literature')->firstOrFail();

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
                'title' => 'Introduction à la littérature arabe',
                'description' => 'Les notions de base : ce qu’est la littérature, la différence entre poésie et prose, et ce que l’on cherche dans un texte.',
                'questions' => [
                    [
                        'q' => 'Quelle définition se rapproche le plus de « الأدب » (la littérature) ?',
                        'c' => [
                            'Un art qui exprime idées, émotions et expériences par la langue',
                            'Un ensemble de règles de calcul',
                            'La seule étude de la grammaire',
                            'Un classement alphabétique de livres',
                        ],
                        'a' => 0,
                        'e' => 'La littérature utilise la langue de façon artistique pour dire ce que l’on pense, ressent ou vit.',
                    ],
                    [
                        'q' => 'Quelles sont les deux grandes formes de la littérature arabe ?',
                        'c' => [
                            'Le théâtre et le cinéma',
                            'La poésie (الشعر) et la prose (النثر)',
                            'La grammaire et la rhétorique',
                            'Le récit de voyage et le dictionnaire',
                        ],
                        'a' => 1,
                        'e' => 'On distingue traditionnellement الشعر (poésie) et النثر (prose).',
                    ],
                    [
                        'q' => 'Quelle est la différence simplifiée entre poésie et prose ?',
                        'c' => [
                            'La prose est toujours plus courte que la poésie',
                            'La poésie n’exprime jamais de sentiments',
                            'La poésie repose en général sur le rythme et une forme versifiée, pas la prose',
                            'Il n’y a aucune différence',
                        ],
                        'a' => 2,
                        'e' => 'Le vers obéit à un rythme et souvent à une rime ; la prose se construit en phrases et en paragraphes libres.',
                    ],
                    [
                        'q' => 'Pourquoi lit-on de la littérature ?',
                        'c' => [
                            'Pour apprendre des règles de calcul',
                            'Pour mémoriser des listes de mots',
                            'Parce que chaque texte littéraire est un mode d’emploi',
                            'Pour goûter la langue et comprendre des idées, des émotions et des vies',
                        ],
                        'a' => 3,
                        'e' => 'La lecture littéraire donne du plaisir, ouvre à d’autres expériences et aide à réfléchir.',
                    ],
                    [
                        'q' => 'Lequel de ces textes relève de la prose ?',
                        'c' => [
                            'Une qasida de vingt vers',
                            'Un hémistiche rimé',
                            'Une nouvelle racontant un enfant qui cherche son ami',
                            'Un seul vers avec sa rime',
                        ],
                        'a' => 2,
                        'e' => 'Une nouvelle est un récit en prose. Qasida, hémistiche et vers appartiennent à la poésie.',
                    ],
                    [
                        'q' => 'Un texte exprime la tristesse après la perte d’un proche. Quel aspect y repère-t-on d’abord ?',
                        'c' => [
                            'La structure grammaticale',
                            'L’émotion (العاطفة)',
                            'La date de publication',
                            'Le nom du narrateur',
                        ],
                        'a' => 1,
                        'e' => 'La tristesse exprimée relève de l’émotion portée par le texte.',
                    ],
                    [
                        'q' => 'Qu’appelle-t-on l’idée générale d’un texte littéraire ?',
                        'c' => [
                            'Sa première phrase',
                            'Le thème ou message central autour duquel le texte s’organise',
                            'Son titre seulement',
                            'Le résumé de la quatrième de couverture',
                        ],
                        'a' => 1,
                        'e' => 'L’idée générale est le sens central qui relie les parties du texte.',
                    ],
                    [
                        'q' => 'Un auteur décrit la pluie avec beauté et exprime de la nostalgie. Que réunit son texte ?',
                        'c' => [
                            'Description et émotion',
                            'Argumentation et statistiques',
                            'Mode d’emploi et tableau',
                            'Chiffres et cartes',
                        ],
                        'a' => 0,
                        'e' => 'Décrire la pluie est un travail d’image ; la nostalgie est une émotion : les deux cohabitent dans un même texte.',
                    ],
                    [
                        'q' => 'Quelle phrase décrit correctement un texte littéraire ?',
                        'c' => [
                            'Il ne s’intéresse qu’aux chiffres',
                            'Il n’a pas besoin de sens',
                            'Il peut jouer sur la langue, les images, l’émotion et les idées',
                            'Il doit toujours être un article de presse',
                        ],
                        'a' => 2,
                        'e' => 'Un texte littéraire peut associer beauté de la langue, images, émotions et réflexion.',
                    ],
                    [
                        'q' => 'Pourquoi faut-il être attentif au choix des mots dans un texte littéraire ?',
                        'c' => [
                            'Parce que les mots n’ont aucun effet',
                            'Parce que l’auteur les choisit toujours au hasard',
                            'Parce que chaque mot représente un nombre',
                            'Parce que ce choix influence le sens, l’émotion et le style',
                        ],
                        'a' => 3,
                        'e' => 'Un mot plutôt qu’un autre change le rythme, l’image et le ressenti du lecteur.',
                    ],
                ],
            ],
            [
                'title' => 'Bases de la poésie',
                'description' => 'Le vers, la rime, le rythme, les thèmes et les images dans la poésie arabe.',
                'questions' => [
                    [
                        'q' => 'Comment appelle-t-on l’unité de base d’une qasida arabe classique ?',
                        'c' => ['Le chapitre', 'Le vers (البيت)', 'Le paragraphe', 'L’intertitre'],
                        'a' => 1,
                        'e' => 'Une qasida classique est composée de vers, chacun appelé بيت.',
                    ],
                    [
                        'q' => 'Qu’est-ce que la rime (القافية), dans sa forme la plus simple ?',
                        'c' => [
                            'Le son final qui se répète à la fin des vers',
                            'Le nom du poète',
                            'Le nombre de personnages',
                            'Le lieu où le poème a été écrit',
                        ],
                        'a' => 0,
                        'e' => 'La rime est le retour d’un même son à la fin des vers.',
                    ],
                    [
                        'q' => 'Vous remarquez la répétition d’une même cadence dans les vers d’un poème. Qu’observez-vous ?',
                        'c' => [
                            'Le décor de l’histoire',
                            'L’intrigue',
                            'Le rythme musical du texte',
                            'Le point de vue du narrateur',
                        ],
                        'a' => 2,
                        'e' => 'Les retours sonores et rythmiques donnent au poème sa musique.',
                    ],
                    [
                        'q' => 'Un poète écrit : « الليل يهمس للنجوم ». Quelle image apparaît ?',
                        'c' => [
                            'Une information scientifique sur la nuit',
                            'Une définition des étoiles',
                            'Une question sur la météo',
                            'La nuit représentée comme une personne qui chuchote',
                        ],
                        'a' => 3,
                        'e' => 'La nuit ne chuchote pas réellement : le poète lui prête un comportement humain (personnification).',
                    ],
                    [
                        'q' => 'Quels thèmes reviennent souvent dans la poésie arabe ?',
                        'c' => [
                            'L’amour, la patrie, la nature et la sagesse',
                            'Uniquement des tableaux de chiffres',
                            'Uniquement des notices d’appareils',
                            'Uniquement des listes de prix',
                        ],
                        'a' => 0,
                        'e' => 'La poésie arabe aborde l’amour, la patrie, la nature, la sagesse, l’éloge, la plainte…',
                    ],
                    [
                        'q' => 'Un poète répète un mot ou une expression dans plusieurs vers. Quel peut être l’effet ?',
                        'c' => [
                            'Cacher le sujet du poème',
                            'Insister sur une idée ou une émotion',
                            'Transformer le poème en prose',
                            'Supprimer le sens du texte',
                        ],
                        'a' => 1,
                        'e' => 'La répétition renforce le rythme et met en relief une idée ou un sentiment.',
                    ],
                    [
                        'q' => 'Dans un poème sur la patrie, le poète décrit avec affection montagnes, rivières et plaines. Quelle émotion domine ?',
                        'c' => [
                            'L’ennui devant la nature',
                            'L’appartenance et la fierté',
                            'La peur du changement',
                            'La colère contre le voyage',
                        ],
                        'a' => 1,
                        'e' => 'Décrire sa terre avec tendresse exprime l’attachement et la fierté.',
                    ],
                    [
                        'q' => 'Lequel de ces textes se rapproche le plus d’un poème ?',
                        'c' => [
                            'Une lettre administrative',
                            'Un mode d’emploi',
                            'De courts vers qui reprennent la même rime',
                            'Une liste de courses',
                        ],
                        'a' => 2,
                        'e' => 'Les vers et la rime sont des marques claires d’un texte poétique.',
                    ],
                    [
                        'q' => 'Pourquoi un poète utilise-t-il des images et des comparaisons ?',
                        'c' => [
                            'Pour rendre une idée ou une scène plus vivante et plus forte',
                            'Pour masquer tout sens',
                            'Pour transformer son poème en rapport scientifique',
                            'Parce que la poésie ne peut jamais être claire',
                        ],
                        'a' => 0,
                        'e' => 'Les images aident le lecteur à voir et à ressentir ce que le poète décrit.',
                    ],
                    [
                        'q' => 'Un élève lit un court poème au climat triste. Que doit-il chercher pour comprendre cette impression ?',
                        'c' => [
                            'Le nombre de lettres du titre',
                            'Le nom de l’imprimeur',
                            'Les mots, les images et les événements qui créent la tristesse',
                            'La couleur du papier',
                        ],
                        'a' => 2,
                        'e' => 'Pour justifier une émotion, on s’appuie sur des indices précis du texte : mots, images, situations.',
                    ],
                ],
            ],
            [
                'title' => 'Prose et nouvelles',
                'description' => 'Personnages, cadre, événements, conflit et thème dans les récits en prose.',
                'questions' => [
                    [
                        'q' => 'Quel élément d’un récit indique qui agit dans l’histoire ?',
                        'c' => ['La rime', 'Le mètre', 'Les personnages', 'Le sous-titre'],
                        'a' => 2,
                        'e' => 'Les personnages sont ceux qui vivent et font avancer les événements.',
                    ],
                    [
                        'q' => 'Une histoire se déroule dans une école un lundi matin. Quel est le cadre ?',
                        'c' => [
                            'Lieu : lundi ; temps : l’école',
                            'Lieu : le matin ; temps : l’école',
                            'Lieu : l’école ; temps : lundi matin',
                            'Il n’y a ni lieu ni temps',
                        ],
                        'a' => 2,
                        'e' => 'L’école est le lieu ; lundi matin est le moment.',
                    ],
                    [
                        'q' => 'Le héros veut atteindre un endroit mais rencontre un obstacle en chemin. Que représente cet obstacle ?',
                        'c' => [
                            'Le nœud (العقدة), le conflit qui fait avancer l’action',
                            'Seulement le titre',
                            'La conclusion à elle seule',
                            'La description de la couverture',
                        ],
                        'a' => 0,
                        'e' => 'Un obstacle ou un conflit donne du mouvement au récit.',
                    ],
                    [
                        'q' => 'Quel début convient à une nouvelle ?',
                        'c' => [
                            'Puis l’histoire se termina.',
                            'Layane trouva une lettre anonyme devant sa porte.',
                            'C’est pourquoi le lecteur remercie l’auteur.',
                            'L’idée principale est la fin.',
                        ],
                        'a' => 1,
                        'e' => 'Un événement intrigant lance l’histoire et donne envie de lire la suite.',
                    ],
                    [
                        'q' => 'Qu’appelle-t-on la fin (الخاتمة) d’un récit ?',
                        'c' => [
                            'Le titre de l’histoire',
                            'La toute première phrase',
                            'La description de l’auteur',
                            'Le moment où l’action se dénoue et son résultat apparaît',
                        ],
                        'a' => 3,
                        'e' => 'La fin apporte une issue aux événements ou règle le problème posé au début.',
                    ],
                    [
                        'q' => 'Khaled lit l’histoire d’un enfant qui aide son voisin et apprend la valeur de l’honnêteté. Que représente l’honnêteté ?',
                        'c' => [
                            'Le lieu du récit',
                            'Une valeur que le lecteur peut retenir de l’histoire',
                            'Le nom de l’auteur',
                            'Le nombre de chapitres',
                        ],
                        'a' => 1,
                        'e' => 'C’est une valeur, c’est-à-dire une idée morale qui ressort des événements et des personnages.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui aide le lecteur à imaginer l’endroit où se passe l’histoire ?',
                        'c' => [
                            'La description du lieu',
                            'Le nombre de chapitres',
                            'La police du texte',
                            'La table des matières',
                        ],
                        'a' => 0,
                        'e' => 'La description situe l’action et rend le décor concret.',
                    ],
                    [
                        'q' => 'Si l’auteur raconte les événements dans l’ordre où ils se produisent, que suit le lecteur ?',
                        'c' => [
                            'La rime',
                            'Le mètre poétique',
                            'Le titre du livre',
                            'La succession des événements',
                        ],
                        'a' => 3,
                        'e' => 'L’ordre chronologique permet de comprendre ce qui arrive d’abord et ensuite.',
                    ],
                    [
                        'q' => 'Quelle phrase décrit le mieux un personnage ?',
                        'c' => [
                            'Samer.',
                            'Samer était calme, mais n’hésitait jamais à aider ses amis.',
                            'Il apparaît en page trois.',
                            'Son nom est écrit à l’encre.',
                        ],
                        'a' => 1,
                        'e' => 'La phrase donne des traits de caractère et une façon d’agir.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui distingue une nouvelle d’une notice d’utilisation ?',
                        'c' => [
                            'La notice raconte toujours en vers',
                            'La nouvelle est composée uniquement de chiffres',
                            'La nouvelle met en scène des personnages et des événements',
                            'La nouvelle n’a jamais de sens',
                        ],
                        'a' => 2,
                        'e' => 'La nouvelle raconte une expérience ; la notice guide une action pratique.',
                    ],
                ],
            ],
            [
                'title' => 'Idée, émotion et message',
                'description' => 'Distinguer l’idée, l’émotion et le message d’un court passage littéraire.',
                'questions' => [
                    [
                        'q' => 'Un poète parle de sa patrie avec fierté. Que représente cette fierté dans le texte ?',
                        'c' => [
                            'L’émotion du texte',
                            'Le lieu de l’action',
                            'Le nombre de vers',
                            'Le nom de la rime',
                        ],
                        'a' => 0,
                        'e' => 'La fierté est un sentiment : elle fait partie de l’émotion exprimée.',
                    ],
                    [
                        'q' => 'Une histoire apprend à un enfant qu’il est bon d’aider les autres. Quel est son message ?',
                        'c' => [
                            'L’histoire se passe à l’école',
                            'L’enfant aime le bleu',
                            'Aider les autres est une valeur positive',
                            'L’auteur vit dans une grande ville',
                        ],
                        'a' => 2,
                        'e' => 'Le message est l’idée ou la valeur que le texte veut laisser au lecteur.',
                    ],
                    [
                        'q' => 'Quelle phrase distingue l’idée de l’émotion ?',
                        'c' => [
                            'Il n’y a aucune différence',
                            'L’émotion est le nombre de personnages',
                            'L’idée est la rime',
                            'L’idée concerne ce que dit ou discute le texte ; l’émotion, ce que l’on ressent en le lisant',
                        ],
                        'a' => 3,
                        'e' => 'L’idée touche au sens ou au sujet ; l’émotion touche au ressenti.',
                    ],
                    [
                        'q' => 'Un texte décrit la maison d’enfance avec tendresse et regret du passé. Quelle émotion domine ?',
                        'c' => ['La colère', 'La nostalgie (الحنين)', 'L’ironie', 'L’indifférence'],
                        'a' => 1,
                        'e' => 'Le désir de retrouver un lieu et un temps révolus relève de la nostalgie.',
                    ],
                    [
                        'q' => 'Un auteur répète que la coopération rend le travail plus facile. Sur quelle idée insiste-t-il ?',
                        'c' => [
                            'Sur la valeur de la coopération',
                            'Sur la beauté du temps',
                            'Sur la description d’un repas',
                            'Sur la vitesse d’un voyage',
                        ],
                        'a' => 0,
                        'e' => 'La répétition met en avant l’idée centrale : la coopération.',
                    ],
                    [
                        'q' => 'Un texte décrit la pluie avec joie. Que peut remarquer le lecteur ?',
                        'c' => [
                            'La pluie devient un fait scientifique',
                            'Le texte est devenu une liste de prix',
                            'Les sentiments n’ont aucun lien avec la description',
                            'L’auteur ne décrit pas seulement la pluie : il l’associe à son humeur',
                        ],
                        'a' => 3,
                        'e' => 'Une description littéraire peut porter le point de vue et les sentiments de l’auteur.',
                    ],
                    [
                        'q' => 'Quelle question aide à découvrir l’émotion d’un texte ?',
                        'c' => [
                            'Combien de lettres compte le titre ?',
                            'Que ressent celui qui parle à propos de ce qu’il décrit ?',
                            'Quelle est la couleur du livre ?',
                            'Combien de fois a-t-on tourné la page ?',
                        ],
                        'a' => 1,
                        'e' => 'Chercher ce que ressent le locuteur conduit à repérer le ton et les mots chargés d’émotion.',
                    ],
                    [
                        'q' => 'Un personnage a peur, puis surmonte sa peur. Quelle idée peut en ressortir ?',
                        'c' => [
                            'La peur n’existe pas',
                            'Le courage peut aider à affronter la peur',
                            'Le récit parle uniquement de météo',
                            'Le personnage ne rencontre aucune difficulté',
                        ],
                        'a' => 1,
                        'e' => 'L’évolution de la peur vers l’affrontement mène à l’idée du courage.',
                    ],
                    [
                        'q' => 'Qu’est-ce qui aide à dégager l’idée générale d’un texte ?',
                        'c' => [
                            'Lire seulement le titre',
                            'Compter les signes de ponctuation',
                            'Repérer le thème qui revient et les détails qui s’y rattachent',
                            'Regarder uniquement la longueur du livre',
                        ],
                        'a' => 2,
                        'e' => 'Un thème récurrent et les détails qui l’entourent révèlent l’idée générale.',
                    ],
                    [
                        'q' => 'Pourquoi un auteur choisirait-il des mots doux pour une scène de coucher de soleil ?',
                        'c' => [
                            'Parce que les mots doux n’ont pas de sens',
                            'Pour transformer le coucher de soleil en question',
                            'Pour créer une atmosphère adaptée et transmettre une impression',
                            'Pour cacher tous les personnages',
                        ],
                        'a' => 2,
                        'e' => 'Le choix des mots installe une atmosphère et guide le ressenti du lecteur.',
                    ],
                ],
            ],
            [
                'title' => 'Langue et images littéraires',
                'description' => 'Comparaison, métaphore, personnification et effet des images sur le sens.',
                'questions' => [
                    [
                        'q' => 'Quelle phrase contient une comparaison (تشبيه) claire ?',
                        'c' => [
                            'دخل الرجل البيت.',
                            'قرأ الطالب الكتاب.',
                            'وجهه كالقمر في إشراقه.',
                            'وصلت الحافلة.',
                        ],
                        'a' => 2,
                        'e' => 'Le « كـ » rapproche le visage de la lune : c’est une comparaison.',
                    ],
                    [
                        'q' => 'Dans « البحر يبتسم للشاطئ », quel procédé domine ?',
                        'c' => [
                            'La personnification : on prête à la mer un trait humain',
                            'Une information scientifique',
                            'Une définition de dictionnaire',
                            'Une question directe',
                        ],
                        'a' => 0,
                        'e' => 'La mer ne sourit pas vraiment ; l’auteur la traite comme un être humain.',
                    ],
                    [
                        'q' => 'À quoi sert une comparaison dans un texte littéraire ?',
                        'c' => [
                            'À empêcher le lecteur de comprendre',
                            'À rendre l’image plus claire et plus frappante',
                            'À transformer le texte en liste',
                            'À supprimer les émotions',
                        ],
                        'a' => 1,
                        'e' => 'Comparer une chose à une autre rend sa qualité plus visible.',
                    ],
                    [
                        'q' => 'Quelle expression est une métaphore simple ?',
                        'c' => [
                            'الكتاب على الطاولة.',
                            'ذهب الطالب إلى المدرسة.',
                            'السماء زرقاء.',
                            'العلم نور.',
                        ],
                        'a' => 3,
                        'e' => '« العلم نور » : la science est présentée comme une lumière qui guide, sans mot de comparaison.',
                    ],
                    [
                        'q' => 'Dans « ابتسمت الزهور في الصباح », quelle est l’image ?',
                        'c' => [
                            'Une description scientifique des plantes',
                            'L’indication d’un lieu',
                            'Les fleurs à qui l’on attribue un sourire',
                            'Le récit d’un événement historique',
                        ],
                        'a' => 2,
                        'e' => 'Les fleurs ne sourient pas au sens propre : c’est une personnification.',
                    ],
                    [
                        'q' => 'Laquelle de ces phrases repose le moins sur l’image ?',
                        'c' => [
                            'النجوم ترقص في السماء.',
                            'الليل يمد يده.',
                            'المدينة تستيقظ.',
                            'جلست مريم على الكرسي.',
                        ],
                        'a' => 3,
                        'e' => 'La dernière phrase décrit simplement un fait, sans image.',
                    ],
                    [
                        'q' => 'Un auteur dit d’une voix qu’elle est « ناعم كالحرير ». Que veut-il dire ?',
                        'c' => [
                            'Que la voix est douce et délicate',
                            'Que la voix est faite de soie',
                            'Que le locuteur vend du tissu',
                            'Que la voix est très forte',
                        ],
                        'a' => 0,
                        'e' => 'La comparaison transmet une impression de douceur, pas un sens littéral.',
                    ],
                    [
                        'q' => 'Quelle phrase emploie une image littéraire à propos de la pluie ?',
                        'c' => [
                            'La pluie est tombée à six heures.',
                            'كانت قطرات المطر ترسم موسيقى على النافذة.',
                            'La pluie est de l’eau qui tombe des nuages.',
                            'J’ai pris mon parapluie.',
                        ],
                        'a' => 1,
                        'e' => 'Les gouttes qui « dessinent de la musique » : image qui associe le son et le dessin.',
                    ],
                    [
                        'q' => 'Pourquoi ne faut-il pas prendre toute image littéraire au sens propre ?',
                        'c' => [
                            'Parce que la littérature n’a pas de sens',
                            'Parce que tous les mots sont faux',
                            'Parce que l’auteur ne veut pas être compris',
                            'Parce que certaines images expriment un sens ou une impression de façon figurée',
                        ],
                        'a' => 3,
                        'e' => 'Une image peut signifier autre chose que son sens littéral ; le contexte aide à la comprendre.',
                    ],
                    [
                        'q' => 'Quelle question aide à analyser une image littéraire ?',
                        'c' => [
                            'Combien de pages compte le livre ?',
                            'Quel est le prix du livre ?',
                            'À quoi l’auteur compare-t-il la chose, et qu’est-ce que cette comparaison ajoute au sens ?',
                            'Où le lecteur a-t-il acheté son stylo ?',
                        ],
                        'a' => 2,
                        'e' => 'Cette question relie l’image au sens, ce qui est la base de l’analyse.',
                    ],
                ],
            ],
            [
                'title' => 'Lire un texte littéraire et son style',
                'description' => 'Repérer le ton, l’atmosphère, le choix des mots et quelques effets de style dans de courts passages.',
                'questions' => [
                    [
                        'q' => 'Lisez : « جلس الطفل عند النافذة يراقب المطر، وكان يشعر بالفرح كلما لمع البرق في السماء. » Quel sentiment est le plus net ?',
                        'c' => [
                            'La joie et l’émerveillement',
                            'La colère',
                            'Une peur intense',
                            'L’indifférence',
                        ],
                        'a' => 0,
                        'e' => 'Le texte dit que l’enfant ressent de la joie ; regarder les éclairs ajoute de l’émerveillement.',
                    ],
                    [
                        'q' => 'Lisez : « عاد المسافر إلى قريته بعد سنوات، فشعر بالحنين عندما رأى البيت القديم. » Quel thème est le plus proche ?',
                        'c' => [
                            'Un problème de calcul',
                            'La nostalgie du passé et d’un lieu',
                            'Des conseils de voyage',
                            'La description d’un repas',
                        ],
                        'a' => 1,
                        'e' => 'Revenir après des années et ressentir de la nostalgie face à la vieille maison indique un lien fort au passé.',
                    ],
                    [
                        'q' => 'Un texte accumule des verbes d’action rapides : « ركض، فتح، قفز، عاد ». Que cela suggère-t-il ?',
                        'c' => [
                            'Un calme complet',
                            'Peu d’événements',
                            'Du mouvement et une action qui s’accélère',
                            'Un texte incompréhensible',
                        ],
                        'a' => 2,
                        'e' => 'Des verbes de mouvement enchaînés donnent une impression de vitesse.',
                    ],
                    [
                        'q' => 'L’auteur emploie des mots comme « هادئ، ساكن، لطيف، خافت ». Quelle atmosphère attend-on ?',
                        'c' => [
                            'Une atmosphère bruyante',
                            'Une atmosphère forcément colérique',
                            'Une atmosphère de course-poursuite',
                            'Une atmosphère calme',
                        ],
                        'a' => 3,
                        'e' => 'Ces mots évoquent le silence et la douceur, et créent l’ambiance du passage.',
                    ],
                    [
                        'q' => 'Un auteur écrit : « تسللت الشمس إلى الغرفة من بين الستائر. » Quel est l’effet de ce style ?',
                        'c' => [
                            'Il donne une information d’ingénierie',
                            'Il rend l’entrée de la lumière vivante et facile à imaginer',
                            'Il empêche de voir la pièce',
                            'Il explique une règle de grammaire',
                        ],
                        'a' => 1,
                        'e' => 'Le verbe « تسللت » fait avancer la lumière comme un être vivant, d’où une image plus vive.',
                    ],
                    [
                        'q' => 'Quand on se demande « comment l’auteur parle-t-il du personnage ? », que cherche-t-on ?',
                        'c' => [
                            'Le nombre de pages',
                            'Le prix du livre',
                            'La manière de décrire et les mots employés pour le personnage',
                            'La forme de la couverture',
                        ],
                        'a' => 2,
                        'e' => 'Les mots et la façon de décrire révèlent le regard de l’auteur.',
                    ],
                    [
                        'q' => 'La fin d’une nouvelle laisse le lecteur réfléchir à la décision du héros. Quel effet est visé ?',
                        'c' => [
                            'Inviter le lecteur à méditer sur le sens de la fin',
                            'Donner une liste de prix',
                            'Transformer la nouvelle en poème',
                            'Annuler les événements précédents',
                        ],
                        'a' => 0,
                        'e' => 'Une fin ouverte pousse le lecteur à réfléchir aux personnages, à leurs choix et au sens.',
                    ],
                    [
                        'q' => 'Quelle lecture aide le plus à comprendre un texte littéraire ?',
                        'c' => [
                            'Lire seulement le titre',
                            'Ignorer les émotions',
                            'Chercher uniquement les chiffres',
                            'Être attentif aux mots répétés, aux images, aux émotions et aux événements',
                        ],
                        'a' => 3,
                        'e' => 'Ces éléments réunis donnent des indices sur le thème, le style et les sentiments.',
                    ],
                    [
                        'q' => 'Dans une scène de peur, l’auteur emploie des phrases très courtes. Quel effet cela peut-il avoir ?',
                        'c' => [
                            'Une impression de lenteur constante',
                            'Une impression de rapidité et de tension',
                            'Le texte devient un dictionnaire',
                            'Les personnages disparaissent',
                        ],
                        'a' => 1,
                        'e' => 'Des phrases courtes accélèrent la lecture et augmentent la tension.',
                    ],
                    [
                        'q' => 'L’auteur choisit « دافئ » plutôt que « حار » pour décrire un lieu. Que remarque-t-on ?',
                        'c' => [
                            'Les deux mots sont toujours identiques',
                            'Le texte est devenu scientifique',
                            'Le choix du mot modifie l’impression transmise',
                            'L’auteur s’est forcément trompé',
                        ],
                        'a' => 2,
                        'e' => '« دافئ » (agréablement chaud) donne un ton plus doux que « حار » (très chaud).',
                    ],
                ],
            ],
            [
                'title' => 'Comparer poésie et prose',
                'description' => 'Distinguer les caractéristiques de la poésie et de la prose à partir de courts exemples.',
                'questions' => [
                    [
                        'q' => 'Quel texte est le plus proche d’un poème ?',
                        'c' => [
                            'Des vers qui gardent un rythme et une rime',
                            'Une lettre au directeur de l’école',
                            'Une notice d’utilisation',
                            'Une annonce d’horaire de bus',
                        ],
                        'a' => 0,
                        'e' => 'Le rythme et la rime sont des traits connus de la poésie, surtout classique.',
                    ],
                    [
                        'q' => 'Lequel de ces exemples relève de la prose littéraire ?',
                        'c' => [
                            'Un vers avec sa rime',
                            'Une nouvelle avec personnages et événements',
                            'Un poème de plusieurs vers',
                            'Un hémistiche',
                        ],
                        'a' => 1,
                        'e' => 'La nouvelle est une forme en prose ; vers, poème et hémistiche relèvent de la poésie.',
                    ],
                    [
                        'q' => 'Qu’est-ce que poésie et prose peuvent avoir en commun ?',
                        'c' => [
                            'La même rime dans tous les cas',
                            'Un mètre poétique dans chaque texte',
                            'L’expression d’idées et d’émotions par une langue travaillée',
                            'Des vers dans tous les textes',
                        ],
                        'a' => 2,
                        'e' => 'Toutes deux peuvent porter des idées, des émotions et des images, malgré leur construction différente.',
                    ],
                    [
                        'q' => 'Un texte comporte de longs paragraphes, des personnages et des dialogues, sans mètre poétique. C’est probablement :',
                        'c' => [
                            'Une qasida classique',
                            'Un vers isolé',
                            'Une rime seule',
                            'De la prose littéraire',
                        ],
                        'a' => 3,
                        'e' => 'Paragraphes, récit et dialogue sans structure versifiée signalent la prose.',
                    ],
                    [
                        'q' => 'Quel élément est davantage lié à la poésie classique qu’à la nouvelle ?',
                        'c' => [
                            'Le personnage principal',
                            'La rime',
                            'Le dialogue',
                            'La succession des événements',
                        ],
                        'a' => 1,
                        'e' => 'La rime est caractéristique du vers classique ; personnages, dialogues et événements sont fréquents dans les récits.',
                    ],
                    [
                        'q' => 'Quel élément peut figurer dans une nouvelle mais n’est pas indispensable dans un poème ?',
                        'c' => [
                            'L’émotion',
                            'La langue',
                            'Le dialogue entre personnages',
                            'L’idée',
                        ],
                        'a' => 2,
                        'e' => 'Le dialogue est courant dans le récit ; un poème peut en contenir, mais n’en a pas besoin.',
                    ],
                    [
                        'q' => 'Pour étudier un personnage et son évolution au fil de plusieurs événements, quel genre convient le mieux ?',
                        'c' => [
                            'Un récit ou un texte narratif',
                            'Un vers isolé',
                            'Une rime seule',
                            'Un titre seul',
                        ],
                        'a' => 0,
                        'e' => 'Un récit laisse la place de montrer un personnage évoluer d’événement en événement.',
                    ],
                    [
                        'q' => 'Pour exprimer de façon condensée un sentiment en quelques vers, quelle forme convient ?',
                        'c' => [
                            'Une liste d’instructions',
                            'Une publicité',
                            'Un tableau de données',
                            'Un court poème',
                        ],
                        'a' => 3,
                        'e' => 'La poésie permet de condenser un sentiment grâce au rythme, aux images et à la langue poétique.',
                    ],
                    [
                        'q' => 'Quelle comparaison est juste ?',
                        'c' => [
                            'La poésie ne peut jamais raconter une histoire',
                            'La poésie s’appuie souvent sur le rythme et la rime, la prose davantage sur les paragraphes et le récit',
                            'La prose ne peut pas être littéraire',
                            'Toute prose doit avoir une rime',
                        ],
                        'a' => 1,
                        'e' => 'C’est une différence générale de construction, sans dire que l’une des formes ne peut rien emprunter à l’autre.',
                    ],
                    [
                        'q' => 'Pourquoi est-il utile à un élève de lire poésie et prose ?',
                        'c' => [
                            'Pour ne connaître qu’une seule forme',
                            'Parce que poésie et prose sont identiques',
                            'Parce que tout texte littéraire doit être poétique',
                            'Pour voir la diversité des manières de s’exprimer par la langue',
                        ],
                        'a' => 3,
                        'e' => 'Lire les deux formes élargit la connaissance des styles et des façons d’écrire.',
                    ],
                ],
            ],
            [
                'title' => 'Premiers pas en analyse littéraire',
                'description' => 'Analyse simple : personnage, cadre, conflit, images, ton, et preuves tirées du texte.',
                'questions' => [
                    [
                        'q' => 'En analysant une nouvelle, quelle question aide à comprendre le personnage principal ?',
                        'c' => [
                            'Que veut le personnage et quel problème rencontre-t-il ?',
                            'Combien de couleurs sur la couverture ?',
                            'Combien de pages compte le livre ?',
                            'Où le livre a-t-il été imprimé ?',
                        ],
                        'a' => 0,
                        'e' => 'Le désir du personnage et ses difficultés éclairent son rôle dans l’action.',
                    ],
                    [
                        'q' => 'Un personnage passe de l’égoïsme à la coopération. Que peut-on en conclure ?',
                        'c' => [
                            'Il n’y a eu aucun changement',
                            'Le personnage a évolué et tiré une leçon de son expérience',
                            'Le récit parle seulement de météo',
                            'Les événements n’ont aucun lien avec le personnage',
                        ],
                        'a' => 1,
                        'e' => 'Un changement de comportement au fil des événements montre l’évolution du personnage.',
                    ],
                    [
                        'q' => 'Dans un texte qui multiplie les détails sur les arbres, la mer et le ciel, quel aspect ressort ?',
                        'c' => [
                            'Le dialogue seulement',
                            'Le calcul',
                            'La description',
                            'Les consignes',
                        ],
                        'a' => 2,
                        'e' => 'L’abondance de détails sur la nature fait de la description un élément important.',
                    ],
                    [
                        'q' => 'L’auteur dit du village qu’il est « نائمة في حضن الجبل ». Quelle image propose-t-il ?',
                        'c' => [
                            'Une information géographique au sens propre',
                            'La preuve que le village est une personne',
                            'Le nombre d’habitants',
                            'Une impression de calme et de protection au pied de la montagne',
                        ],
                        'a' => 3,
                        'e' => 'L’image associe village et montagne et évoque la quiétude et l’abri.',
                    ],
                    [
                        'q' => 'Quelle est la meilleure preuve qu’un texte est triste ?',
                        'c' => [
                            'Un titre de deux mots',
                            'Des mots et des images évoquant la perte, la solitude et les larmes',
                            'Beaucoup de virgules',
                            'Le nom de l’auteur',
                        ],
                        'a' => 1,
                        'e' => 'Les mots et images associés à la tristesse sont des indices directs de l’émotion générale.',
                    ],
                    [
                        'q' => 'Un texte commence par un problème et finit par sa résolution. Comment nomme-t-on cet aspect de la construction ?',
                        'c' => [
                            'La rime',
                            'Le titre du chapitre',
                            'L’évolution de l’intrigue, du problème à la solution',
                            'La couleur du livre',
                        ],
                        'a' => 2,
                        'e' => 'Le passage d’un problème à sa solution structure l’intrigue d’un récit.',
                    ],
                    [
                        'q' => 'Quelle est la meilleure façon, pour un débutant, d’appuyer son interprétation d’un texte ?',
                        'c' => [
                            'S’appuyer sur un mot, une image ou un événement précis du texte',
                            'Se fier à une simple intuition',
                            'Ignorer le texte et parler d’autre chose',
                            'Se fier à la longueur du récit',
                        ],
                        'a' => 0,
                        'e' => 'Une bonne analyse s’appuie sur une preuve tirée du texte, même simple.',
                    ],
                    [
                        'q' => 'L’auteur décrit son héros comme « هادئ لكنه شجاع ». Que comprend-on ?',
                        'c' => [
                            'Le personnage est toujours en colère',
                            'Le personnage n’a aucun trait',
                            'Le héros n’est pas un personnage de l’histoire',
                            'Le personnage allie calme et capacité à affronter les difficultés',
                        ],
                        'a' => 3,
                        'e' => 'La phrase donne deux traits clairs, utilisables dans l’analyse du personnage.',
                    ],
                    [
                        'q' => 'Dans un poème sur la séparation, le poète répète « رحيل », « غياب » et « اشتياق ». Que souligne cette répétition ?',
                        'c' => [
                            'Une description de repas',
                            'Le thème de la séparation et l’émotion qui lui est liée',
                            'Un sujet de calcul',
                            'L’absence de tout thème',
                        ],
                        'a' => 1,
                        'e' => 'Les mots répétés autour du départ et du manque confirment le thème de la séparation.',
                    ],
                    [
                        'q' => 'Quelle question constitue un bon point de départ pour analyser le style ?',
                        'c' => [
                            'De quelle couleur est la couverture ?',
                            'Combien coûte le livre ?',
                            'La langue est-elle directe ou riche en images et en comparaisons ?',
                            'Combien de pages compte la bibliothèque ?',
                        ],
                        'a' => 2,
                        'e' => 'Cette question oriente l’attention vers l’emploi de la langue et des images, éléments du style.',
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
