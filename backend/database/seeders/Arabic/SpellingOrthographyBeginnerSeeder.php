<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpellingOrthographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spelling-orthography')->firstOrFail();

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
                'title' => "La hamza en début de mot",
                'description' => "S'entraîner à écrire la hamza de coupure et la hamza de liaison au début de mots arabes courants.",
                'questions' => [
                    ['q' => "Quelle graphie est correcte pour ce prénom ?", 'c' => ["احمد", "أحمد", "إحمد", "ءحمد"], 'a' => 1, 'e' => "Le prénom « أحمد » commence par une hamza de coupure, écrite au-dessus du alif."],
                    ['q' => "Quel mot commence par une hamza de coupure ?", 'c' => ["استعمال", "إكرام", "اجتماع", "انطلاق"], 'a' => 1, 'e' => "La hamza de « إكرام » se prononce toujours et s'écrit. Les trois autres mots commencent par une hamza de liaison."],
                    ['q' => "Quel mot commence par une hamza de liaison ?", 'c' => ["أسماء", "استخدام", "إيمان", "أستاذ"], 'a' => 1, 'e' => "« استخدام » commence par une hamza de liaison : le alif s'écrit sans signe de hamza."],
                    ['q' => "Comment écrire correctement le mot « fils » ?", 'c' => ["إبن", "ابن", "أبن", "ءبن"], 'a' => 1, 'e' => "« ابن » prend une hamza de liaison : on écrit un simple alif, sans signe de hamza."],
                    ['q' => "Quel mot s'écrit avec la hamza sous le alif ?", 'c' => ["أكرم", "إسلام", "أخذ", "أمينة"], 'a' => 1, 'e' => "Dans « إسلام », la hamza porte une voyelle kasra : elle s'écrit sous le alif."],
                    ['q' => "Un élève a écrit « إستماع ». Quelle est la bonne graphie ?", 'c' => ["إستماع", "استماع", "أستماع", "استمإع"], 'a' => 1, 'e' => "« استماع » est un nom verbal de la forme VIII : il commence par une hamza de liaison."],
                    ['q' => "Quelle phrase est correcte sur le plan orthographique ?", 'c' => ["إبي يحب القراءة.", "أبي يحب القراءة.", "ابي يحب القراءة.", "أبي يحب القراءه."], 'a' => 1, 'e' => "« أبي » prend une hamza de coupure sur le alif, et « القراءة » finit par un tā' marbūṭa."],
                    ['q' => "Comment écrire le prénom Ibrahim ?", 'c' => ["ابراهيم", "إبراهيم", "أبراهيم", "إبراهم"], 'a' => 1, 'e' => "« إبراهيم » commence par une hamza de coupure avec kasra, donc sous le alif."],
                    ['q' => "Quelle est la bonne graphie du mot « nom » ?", 'c' => ["أسم", "اسم", "إسم", "اإسم"], 'a' => 1, 'e' => "« اسم » est l'un des mots à hamza de liaison : on écrit un simple alif."],
                    ['q' => "Quelle phrase décrit correctement la différence entre hamza de coupure et hamza de liaison ?", 'c' => ["la hamza de coupure ne s'écrit jamais", "la hamza de coupure s'écrit et se prononce toujours ; celle de liaison se prononce au début du discours et tombe quand on enchaîne", "la hamza de liaison s'écrit toujours au-dessus du alif", "il n'y a aucune différence"], 'a' => 1, 'e' => "La hamza de coupure est stable à l'écrit et à l'oral ; la hamza de liaison tombe quand on lie les mots."],
                ],
            ],
            [
                'title' => "Tā' marbūṭa et tā' maftūḥa",
                'description' => "Distinguer la tā' marbūṭa de la tā' maftūḥa dans des noms, des verbes et des mots du quotidien.",
                'questions' => [
                    ['q' => "Quelle graphie est correcte ?", 'c' => ["مدرست", "مدرسة", "مدرسه", "مدرسا"], 'a' => 1, 'e' => "« مدرسة » est un nom féminin qui se termine par un tā' marbūṭa (ة)."],
                    ['q' => "Quel mot se termine par un tā' maftūḥa (ت) ?", 'c' => ["شجرة", "بنت", "حديقة", "سيارة"], 'a' => 1, 'e' => "Dans « بنت », la lettre finale reste un « t » à la pause comme à la liaison."],
                    ['q' => "Complète correctement : « هذه ___ جميلة. »", 'c' => ["حديقت", "حديقة", "حديقه", "حديقاة"], 'a' => 1, 'e' => "Le nom féminin « حديقة » s'écrit avec un tā' marbūṭa."],
                    ['q' => "Quelle phrase est correctement orthographiée ?", 'c' => ["ذهبت فاطمه إلى المدرسه.", "ذهبت فاطمة إلى المدرسة.", "ذهبت فاطمت إلى المدرسة.", "ذهبت فاطمة إلى المدرسه."], 'a' => 1, 'e' => "« فاطمة » et « المدرسة » se terminent toutes deux par un tā' marbūṭa."],
                    ['q' => "Quel mot NE se termine PAS par un tā' marbūṭa ?", 'c' => ["غرفة", "صوت", "شجرة", "سيارة"], 'a' => 1, 'e' => "« صوت » n'est pas un nom féminin en ة : il se termine par un vrai tā' (ت)."],
                    ['q' => "Comment écrit-on le mot qui désigne une fille ?", 'c' => ["بنته", "بنت", "بنتة", "بنة"], 'a' => 1, 'e' => "On écrit « بنت » avec le tā' maftūḥa, car la lettre finale reste un « t »."],
                    ['q' => "Dans quel mot la dernière lettre se prononce-t-elle comme un « h » à la pause ?", 'c' => ["بنت", "رحمة", "بيت", "وقت"], 'a' => 1, 'e' => "Le tā' marbūṭa de « رحمة » se prononce « h » à la pause ; le tā' maftūḥa reste « t »."],
                    ['q' => "Un élève a écrit « شجره ». Quelle est la correction ?", 'c' => ["شجرت", "شجرة", "شجراة", "شجره est correct"], 'a' => 1, 'e' => "On écrit « شجرة » avec un tā' marbūṭa, pas avec un hā'."],
                    ['q' => "Quelle paire est correctement écrite ?", 'c' => ["معلمه ـ طالبات", "معلمة ـ طالبات", "معلمة ـ طالباة", "معلمت ـ طالبات"], 'a' => 1, 'e' => "« معلمة » finit par un tā' marbūṭa ; le pluriel « طالبات » prend un tā' maftūḥa."],
                    ['q' => "Quelle remarque est juste à propos du mot « المعلمات » ?", 'c' => ["il se termine par un hā'", "il se termine par un tā' marbūṭa", "il se termine par un tā' maftūḥa", "il ne contient aucun tā'"], 'a' => 2, 'e' => "Le pluriel féminin sain se termine par « ات » avec un tā' maftūḥa."],
                ],
            ],
            [
                'title' => "Alif long et alif maqṣūra en fin de mot",
                'description' => "Apprendre à distinguer le alif ordinaire (ا) et le alif maqṣūra (ى) dans des mots connus.",
                'questions' => [
                    ['q' => "Quel mot se termine par un alif maqṣūra (ى) ?", 'c' => ["علا", "دعا", "سعى", "بنا"], 'a' => 2, 'e' => "« سعى » s'écrit avec le alif en forme de yā' sans points. Les trois autres prennent un alif ordinaire."],
                    ['q' => "Quel mot se termine par un alif ordinaire (ا) ?", 'c' => ["رمى", "سعى", "دعا", "جرى"], 'a' => 2, 'e' => "« دعا » se termine par un alif ordinaire, alors que « سعى », « رمى » et « جرى » prennent le alif maqṣūra."],
                    ['q' => "Quelle est la bonne graphie du verbe « invoquer » au passé ?", 'c' => ["دعاا", "دعى", "دعا", "دعاء"], 'a' => 2, 'e' => "Le verbe s'écrit « دعا » avec un alif ordinaire final."],
                    ['q' => "Quelle graphie est correcte ?", 'c' => ["فتىء", "فتا", "فتى", "فتاةه"], 'a' => 2, 'e' => "« فتى » (jeune homme) se termine par un alif maqṣūra."],
                    ['q' => "Quel mot se termine par un alif maqṣūra ?", 'c' => ["دنا", "علا", "هدى", "نما"], 'a' => 2, 'e' => "« هدى » prend le alif maqṣūra ; les autres mots de la liste se terminent par un alif ordinaire."],
                    ['q' => "Comment écrire le verbe de « رمى اللاعب الكرة » ?", 'c' => ["رمي", "رما", "رمى", "رماء"], 'a' => 2, 'e' => "« رمى » se termine par un alif maqṣūra."],
                    ['q' => "Quelle phrase est correcte sur le plan orthographique ?", 'c' => ["سعي الطالب إلى النجاح.", "سعا الطالب إلى النجاح.", "سعى الطالب إلى النجاح.", "سعىء الطالب إلى النجاح."], 'a' => 2, 'e' => "Le verbe « سعى » s'écrit avec un alif maqṣūra."],
                    ['q' => "Quel mot ne se termine PAS par un alif long ?", 'c' => ["فتى", "هدى", "كتاب", "مصطفى"], 'a' => 2, 'e' => "« كتاب » se termine par la lettre bā' ; les autres mots finissent par un alif maqṣūra."],
                    ['q' => "Comment écrit-on le verbe « venir » au passé ?", 'c' => ["أتي", "أتا", "أتى", "أتاء"], 'a' => 2, 'e' => "Le verbe « أتى » s'écrit avec un alif maqṣūra."],
                    ['q' => "Pourquoi faut-il mémoriser certains mots à alif maqṣūra ?", 'c' => ["parce que le alif maqṣūra ne se prononce pas", "parce que tous les mots arabes se terminent par un alif maqṣūra", "parce que la prononciation ne suffit pas toujours à savoir quelle forme du alif écrire", "parce qu'il n'existe que dans les noms"], 'a' => 2, 'e' => "À l'oral, ا et ى sonnent pareil à la fin d'un mot : la graphie s'apprend avec les mots courants."],
                ],
            ],
            [
                'title' => "Voyelles longues et lettres proches",
                'description' => "S'exercer à écrire les voyelles longues avec alif, wāw et yā' et à ne pas confondre des mots proches.",
                'questions' => [
                    ['q' => "Quel mot contient une voyelle longue avec alif ?", 'c' => ["يقول", "قيل", "قال", "بيت"], 'a' => 2, 'e' => "Dans « قال », un alif prolonge la voyelle après le qāf. Les autres mots contiennent un yā' ou un wāw long."],
                    ['q' => "Quel mot contient une voyelle longue avec wāw ?", 'c' => ["دين", "نار", "نور", "بيت"], 'a' => 2, 'e' => "Dans « نور », le wāw prolonge la voyelle après le nūn."],
                    ['q' => "Quel mot contient une voyelle longue avec yā' ?", 'c' => ["نور", "كتاب", "كبير", "باب"], 'a' => 2, 'e' => "Dans « كبير », le yā' prolonge la voyelle kasra."],
                    ['q' => "Quelle paire ne diffère que par la voyelle longue ?", 'c' => ["بيت ـ بيض", "كتب ـ كلب", "نور ـ نار", "قال ـ قام"], 'a' => 2, 'e' => "« نور » et « نار » ont les mêmes consonnes, mais l'une a un wāw long et l'autre un alif long."],
                    ['q' => "Dans quel mot la lettre ي n'est-elle PAS une voyelle longue ?", 'c' => ["قيل", "كبير", "يد", "سير"], 'a' => 2, 'e' => "Dans « يد », le yā' est une consonne initiale, non précédée d'une kasra."],
                    ['q' => "Quel mot contient un alif de prolongation ?", 'c' => ["قلم", "كتب", "كتاب", "جبل"], 'a' => 2, 'e' => "« كتاب » contient un alif qui allonge la voyelle après le kāf."],
                    ['q' => "Quel mot aide à repérer la voyelle longue avec wāw ?", 'c' => ["سمك", "سيف", "سوق", "بيت"], 'a' => 2, 'e' => "Dans « سوق », on entend la voyelle longue ū dans la première syllabe."],
                    ['q' => "Quel mot contient une voyelle longue avec yā' ?", 'c' => ["دور", "دار", "دين", "درب"], 'a' => 2, 'e' => "Le yā' de « دين » suit une kasra et forme une voyelle longue."],
                    ['q' => "Quelle lettre suit généralement la fatha pour former une voyelle longue ā ?", 'c' => ["ن", "و", "ي", "ا"], 'a' => 3, 'e' => "La voyelle longue ā se forme avec une fatha suivie d'un alif."],
                    ['q' => "Un élève confond « سير » et « سور ». Quelle est la différence essentielle ?", 'c' => ["les deux ont un alif long", "le premier a un alif long, le second n'a pas de voyelle longue", "il n'y a aucune différence", "le premier a un yā' long, le second un wāw long"], 'a' => 3, 'e' => "Dans « سير », la voyelle longue est ī (après kasra) ; dans « سور », c'est ū (après damma)."],
                ],
            ],
            [
                'title' => "La hamza au milieu et à la fin du mot",
                'description' => "S'entraîner à écrire la hamza à l'intérieur d'un mot ou à sa fin, avec des mots courants et des questions simples.",
                'questions' => [
                    ['q' => "Quel mot contient une hamza au milieu ?", 'c' => ["سماء", "دفء", "شيء", "سأل"], 'a' => 3, 'e' => "Dans « سأل », la hamza est au milieu du mot : c'est une hamza médiane."],
                    ['q' => "Quel mot se termine par une hamza finale ?", 'c' => ["سؤال", "سأل", "رأس", "دفء"], 'a' => 3, 'e' => "Dans « دفء », la hamza est à la toute fin du mot."],
                    ['q' => "Quelle est la bonne graphie ?", 'c' => ["سوال", "سءال", "سوؤال", "سؤال"], 'a' => 3, 'e' => "On écrit « سؤال » : la hamza médiane est portée par un wāw."],
                    ['q' => "Quel mot est correctement écrit ?", 'c' => ["رأسس", "راس", "رائس", "رأس"], 'a' => 3, 'e' => "On écrit « رأس » avec la hamza sur le alif."],
                    ['q' => "Quel mot contient une hamza sur yā' ?", 'c' => ["دفء", "قرأ", "سأل", "فئة"], 'a' => 3, 'e' => "Dans « فئة », la hamza médiane s'écrit sur un yā' sans points."],
                    ['q' => "Un élève a écrit « مساله » au lieu de « مسألة ». Quelle partie faut-il corriger ?", 'c' => ["il faut ajouter un wāw après le mīm", "seulement le alif", "le sīn à changer en ṣād", "la hamza et le tā' marbūṭa"], 'a' => 3, 'e' => "« مسألة » s'écrit avec une hamza sur le alif et se termine par un tā' marbūṭa."],
                    ['q' => "Complète correctement : « هذه ___ سهلة. »", 'c' => ["مسئله", "مساله", "مسأله", "مسألة"], 'a' => 3, 'e' => "On écrit « مسألة » avec la hamza sur le alif et un tā' marbūṭa final."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["قرأت سؤالن في الدرس.", "قرأت سوالاً في الدرس.", "قرأت سءالًا في الدرس.", "قرأت سؤالًا في الدرس."], 'a' => 3, 'e' => "« سؤال » garde sa hamza sur le wāw ; le tanwīn fatḥ s'écrit sur le alif."],
                    ['q' => "Comment appelle-t-on la hamza à la fin d'un mot comme « شيء » ?", 'c' => ["alif long", "hamza de liaison", "hamza de coupure initiale", "hamza finale (mutaṭarrifa)"], 'a' => 3, 'e' => "Elle se trouve à la fin du mot : c'est une hamza finale."],
                    ['q' => "Pourquoi vérifie-t-on la forme de la hamza dans « مسألة » ou « سؤال » ?", 'c' => ["parce que la hamza est un signe de ponctuation", "parce que la hamza ne se prononce pas", "parce que toutes les hamzas s'écrivent de la même manière", "parce que sa place dans le mot influence la façon de l'écrire"], 'a' => 3, 'e' => "La forme de la hamza dépend de sa position et des voyelles voisines : il faut revoir le mot."],
                ],
            ],
            [
                'title' => "Lettres omises ou ajoutées à l'écrit",
                'description' => "Reconnaître des mots courants dont certaines lettres se prononcent sans s'écrire, ou inversement, avec des exemples simples.",
                'questions' => [
                    ['q' => "Quelle est la bonne graphie du démonstratif masculin singulier proche ?", 'c' => ["هاذه", "هاذا", "هاذاا", "هذا"], 'a' => 3, 'e' => "On écrit « هذا » sans alif après le hā' même si on le prononce « hādhā »."],
                    ['q' => "Quelle est la bonne graphie du mot « mais » ?", 'c' => ["لاكان", "لاكن", "لكان", "لكن"], 'a' => 3, 'e' => "On écrit « لكن » sans alif après le lām."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["هذا ولدن مجتهد.", "هاذا ولد مجتهد.", "هاذا ولدن مجتهد.", "هذا ولد مجتهد."], 'a' => 3, 'e' => "Le démonstratif s'écrit « هذا », sans alif ajouté."],
                    ['q' => "Un élève a écrit « هاؤلاء ». Quelle est la bonne graphie ?", 'c' => ["هؤلاءا", "هاؤلاء", "هولاء", "هؤلاء"], 'a' => 3, 'e' => "On écrit « هؤلاء » : hā', hamza sur wāw, lām, alif, hamza finale."],
                    ['q' => "Quelle est la bonne graphie du démonstratif « cela » ?", 'c' => ["ذلكا", "ذالك", "ذلكة", "ذلك"], 'a' => 3, 'e' => "On écrit « ذلك » sans alif après le dhāl."],
                    ['q' => "Quelle écriture est correcte pour « ces élèves » ?", 'c' => ["هؤلاءا الطلاب.", "هاؤلاء الطلاب.", "هولاء الطلاب.", "هؤلاء الطلاب."], 'a' => 3, 'e' => "« هؤلاء » est le démonstratif du pluriel proche."],
                    ['q' => "Un enfant a écrit « ذلكة » au lieu de « ذلك ». Quel est le problème ?", 'c' => ["le mot est correct", "il a supprimé une lettre", "il a remplacé le dhāl par un zāy", "il a ajouté un tā' marbūṭa inutile"], 'a' => 3, 'e' => "Le démonstratif « ذلك » se termine par un kāf, sans tā' marbūṭa."],
                    ['q' => "Quelle phrase ne contient aucune erreur dans le démonstratif ?", 'c' => ["تلك شجرة جميلة.", "تلْكة شجرة جميلة.", "تلكه شجرة جميلة.", "تلكا شجرة جميلة."], 'a' => 0, 'e' => "« تلك » est le démonstratif féminin singulier éloigné."],
                    ['q' => "Dans quel mot entend-on un « ā » long qui ne s'écrit pas avec un alif ?", 'c' => ["هذا", "كتاب", "باب", "قال"], 'a' => 0, 'e' => "Dans « هذا », le « ā » se prononce mais ne s'écrit pas : c'est un mot à apprendre."],
                    ['q' => "Quelle habitude réduit le mieux les erreurs de lettres omises ou ajoutées ?", 'c' => ["relire, copier et réviser plusieurs fois les mots courants", "écrire vite sans relire", "supprimer les lettres difficiles à prononcer", "ajouter un alif à chaque mot"], 'a' => 0, 'e' => "La répétition et la relecture fixent la graphie correcte des mots fréquents."],
                ],
            ],
            [
                'title' => "Voyelles brèves et tanwīn",
                'description' => "Mettre en pratique les voyelles brèves et le tanwīn dans des mots et des phrases simples, en distinguant l'écriture de la prononciation.",
                'questions' => [
                    ['q' => "Quelle voyelle brève se place sur le bā' de « بَاب » ?", 'c' => ["fatha", "damma", "kasra", "sukūn"], 'a' => 0, 'e' => "« بَاب » commence par un bā' avec fatha : بَ."],
                    ['q' => "Quel mot porte un tanwīn damm ?", 'c' => ["كتابٌ", "كتابًا", "كتابٍ", "الكتابُ"], 'a' => 0, 'e' => "Le tanwīn damm s'écrit avec deux dammas à la fin du nom."],
                    ['q' => "Quel mot porte un tanwīn fatḥ ?", 'c' => ["قلمًا", "قلمٌ", "قلمٍ", "القلمُ"], 'a' => 0, 'e' => "Dans « قلمًا », deux fatḥas s'écrivent au-dessus du alif final."],
                    ['q' => "Quel mot porte un tanwīn kasr ?", 'c' => ["بيتٍ", "بيتٌ", "بيتًا", "البيتِ"], 'a' => 0, 'e' => "« بيتٍ » porte deux kasras sous la dernière lettre."],
                    ['q' => "Quelle voyelle donne le son court « bi » ?", 'c' => ["la kasra", "la fatha", "la damma", "le sukūn"], 'a' => 0, 'e' => "La kasra se place sous la lettre et donne le son « i » : بِ."],
                    ['q' => "Quelle voyelle se trouve sur la première lettre de « مُعلّم » ?", 'c' => ["damma", "fatha", "kasra", "sukūn"], 'a' => 0, 'e' => "Le mīm initial porte une damma : « mu »."],
                    ['q' => "Comment écrire « avec un stylo » (indéfini, après « بـ ») ?", 'c' => ["بقلمٍ", "بقلمٌ", "بقلمًا", "بالقلمٍ"], 'a' => 0, 'e' => "Après la préposition « بـ », le nom est au génitif : tanwīn kasr, « بقلمٍ »."],
                    ['q' => "Quel mot ne porte pas de tanwīn parce qu'il est défini par « ال » ?", 'c' => ["الكتاب", "كتابٌ", "كتابًا", "كتابٍ"], 'a' => 0, 'e' => "Un nom défini par « ال » ne prend pas de tanwīn."],
                    ['q' => "Dans « مَدْرَسَة », quel signe se trouve sur le dāl ?", 'c' => ["le sukūn", "la fatha", "la damma", "la kasra"], 'a' => 0, 'e' => "Le dāl porte un sukūn : il n'y a pas de voyelle brève après lui."],
                    ['q' => "Dans « بُيوت », quelle voyelle se trouve sur le bā' ?", 'c' => ["damma", "fatha", "kasra", "tanwīn"], 'a' => 0, 'e' => "Le bā' porte une damma : « bu »."],
                ],
            ],
            [
                'title' => "Révision orthographique et correction d'erreurs",
                'description' => "Repérer et corriger les fautes d'orthographe dans de courts mots et phrases de la vie quotidienne.",
                'questions' => [
                    ['q' => "Quelle phrase est correctement écrite dans tous ses mots ?", 'c' => ["ذهبت إلى المكتبة واشتريت قصة جديدة.", "ذهبت إلى المكتبه واشتريت قصه جديدة.", "ذهبت إلى المكتبة واشتريت قصه جديده.", "ذهبت إلى المكتبه واشتريت قصة جديدة."], 'a' => 0, 'e' => "« المكتبة », « قصة » et « جديدة » prennent tous un tā' marbūṭa final."],
                    ['q' => "Un élève a écrit : « قرأت مساله سهله ». Quelle est la bonne correction ?", 'c' => ["قرأت مسألة سهلة.", "قرأت مسئلة سهلة.", "قرأت مساله سهله.", "قرأت مسألة سهله."], 'a' => 0, 'e' => "Il faut corriger la hamza de « مسألة » et les deux tā' marbūṭa."],
                    ['q' => "Quelle version corrige « هاذا الولد يقراء كتابًا » ?", 'c' => ["هذا الولد يقرأ كتابًا.", "هاذا الولد يقرأ كتابًا.", "هذا الولد يقراء كتابًا.", "هذا الولد يقرء كتابًا."], 'a' => 0, 'e' => "On corrige « هذا » (sans alif) et « يقرأ » (hamza sur le alif, sans alif ajouté)."],
                    ['q' => "Quel mot est mal orthographié ?", 'c' => ["حديقه", "بيت", "صوت", "وقت"], 'a' => 0, 'e' => "Il faut écrire « حديقة » avec un tā' marbūṭa ; les autres mots sont corrects."],
                    ['q' => "Quel mot demande un alif maqṣūra à la fin ?", 'c' => ["رمى", "دعا", "سما", "بدا"], 'a' => 0, 'e' => "« رمى » s'écrit avec un alif maqṣūra ; les autres mots prennent un alif ordinaire."],
                    ['q' => "Quelle phrase n'a besoin d'aucune correction ?", 'c' => ["هذا سؤال مهم.", "هاذا سؤال مهم.", "هذا سوال مهم.", "هذا سءال مهم."], 'a' => 0, 'e' => "Le démonstratif et la hamza de « سؤال » sont écrits correctement."],
                    ['q' => "Un enfant a écrit : « فاطمه طالبه مجتهده ». Combien de mots faut-il corriger ?", 'c' => ["trois mots", "deux mots", "un seul mot", "quatre mots"], 'a' => 0, 'e' => "« فاطمة », « طالبة » et « مجتهدة » doivent se terminer par un tā' marbūṭa."],
                    ['q' => "Quelle phrase est écrite sans aucune erreur ?", 'c' => ["هؤلاء معلمات مجتهدات.", "هاؤلاء معلمات مجتهدات.", "هؤلاء معلمات مجتهداتة.", "هؤلاء معلمه مجتهده."], 'a' => 0, 'e' => "Le démonstratif est correct et le pluriel féminin sain prend « ات » avec un tā' maftūḥa."],
                    ['q' => "Dans « سعى أحمد إلى المدرسه », quel mot est mal écrit ?", 'c' => ["المدرسه", "سعى", "أحمد", "إلى"], 'a' => 0, 'e' => "Il faut écrire « المدرسة » avec un tā' marbūṭa ; les autres mots sont corrects."],
                    ['q' => "Avant de rendre une dictée, quelle relecture est la plus utile ?", 'c' => ["relire le texte en cherchant hamzas, tā', alif maqṣūra et mots courants", "changer tous les mots qui contiennent un alif", "supprimer toute la ponctuation", "ajouter des lettres aux mots qui semblent courts"], 'a' => 0, 'e' => "Relire les points où l'on se trompe le plus permet de repérer les fautes avant de rendre sa copie."],
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
