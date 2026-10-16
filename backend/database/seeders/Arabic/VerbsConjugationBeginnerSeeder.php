<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verbs-conjugation')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Le présent : actions de tous les jours",
                'description' => "S'entraîner avec des verbes arabes courants à l'inaccompli (présent) et associer chaque action au bon sujet.",
                'questions' => [
                    ['q' => "Quel verbe est au présent (action en cours ou habituelle) ?", 'c' => ["كتب", "يكتب", "سيكتب", "اكتب"], 'a' => 1, 'e' => "« يكتب » est à l'inaccompli : il exprime ce qui se fait maintenant ou habituellement."],
                    ['q' => "Complète : « أنا ___ العربية كل صباح. »", 'c' => ["يدرس", "أدرس", "تدرس", "ندرس"], 'a' => 1, 'e' => "Avec « أنا », l'inaccompli commence par le préfixe « أ » : أدرس."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["هو أقرأ كتابًا.", "هو يقرأ كتابًا.", "هو نقرأ كتابًا.", "هو يقرآن كتابًا."], 'a' => 1, 'e' => "Avec « هو », le verbe prend le préfixe « ي » : يقرأ."],
                    ['q' => "Complète : « سلمى ___ إلى الجامعة بالحافلة كل يوم. »", 'c' => ["أذهب", "تذهب", "يذهب", "نذهب"], 'a' => 1, 'e' => "« سلمى » est un féminin singulier : le verbe prend le préfixe « ت » : تذهب."],
                    ['q' => "Complète : « نحن ___ في البيت مساءً. »", 'c' => ["أجلس", "نجلس", "تجلس", "يجلس"], 'a' => 1, 'e' => "Avec « نحن », le verbe prend le préfixe « ن » : نجلس."],
                    ['q' => "Quel verbe convient à « الطلاب » ?", 'c' => ["يقرأ", "يقرؤون", "تقرئين", "أقرأ"], 'a' => 1, 'e' => "« الطلاب » est un pluriel masculin : on emploie « يقرؤون »."],
                    ['q' => "« مريم تكتب رسالة كل مساء. » Que nous dit le verbe « تكتب » ?", 'c' => ["que Mariam a écrit hier", "que Mariam écrit habituellement ou en ce moment", "que Mariam n'écrira que demain", "que Mariam n'écrit pas"], 'a' => 1, 'e' => "Le présent peut exprimer une action en cours ou une habitude, ici renforcée par « كل مساء »."],
                    ['q' => "Ahmed dit : « أنا أعمل من الاثنين إلى الجمعة ». Que comprend-on ?", 'c' => ["que le travail a eu lieu une seule fois", "que le travail est une habitude régulière", "que le travail commencera dans un an", "qu'Ahmed a arrêté de travailler"], 'a' => 1, 'e' => "L'indication « من الاثنين إلى الجمعة » avec le présent marque une activité répétée."],
                    ['q' => "Quelle phrase contient une erreur d'accord, le sujet étant un féminin pluriel ?", 'c' => ["البنات يكتبن الواجب.", "الطالبات يقرؤون النص.", "الطالبات يقرأن النص.", "المعلمات يشرحن الدرس."], 'a' => 1, 'e' => "Pour un féminin pluriel, la forme est « يقرأن » ; « يقرؤون » est réservé au masculin pluriel."],
                    ['q' => "Quelle phrase décrit naturellement une routine quotidienne avec le présent ?", 'c' => ["استيقظت غدًا وأتناول أمس.", "أستيقظ مبكرًا وأتناول الفطور.", "سأستيقظ أمس وأتناول الفطور.", "استيقظت الآن كل يوم."], 'a' => 1, 'e' => "Les deux verbes sont au présent et décrivent une routine qui se répète."],
                ],
            ],
            [
                'title' => "Le passé : raconter ce qui s'est passé",
                'description' => "Reconnaître et employer les formes courantes de l'accompli (passé) dans de courtes situations de la vie quotidienne.",
                'questions' => [
                    ['q' => "Quel verbe est au passé ?", 'c' => ["يذهب", "ذهب", "سيذهب", "اذهب"], 'a' => 1, 'e' => "« ذهب » est un verbe à l'accompli : il exprime une action terminée."],
                    ['q' => "Complète : « أنا ___ إلى السوق أمس. »", 'c' => ["أذهب", "ذهبت", "يذهب", "سأذهب"], 'a' => 1, 'e' => "« أمس » indique le passé ; avec « أنا », la terminaison est « ـتُ » : ذهبتُ."],
                    ['q' => "Quelle phrase parle d'un événement terminé ?", 'c' => ["أقرأ الكتاب كل يوم.", "قرأت الكتاب أمس.", "سأقرأ الكتاب غدًا.", "اقرأ الكتاب الآن."], 'a' => 1, 'e' => "« قرأت » et « أمس » placent la lecture dans le passé."],
                    ['q' => "Complète : « فاطمة ___ الطعام قبل أن تخرج. »", 'c' => ["تأكل", "أكلت", "ستأكل", "كلي"], 'a' => 1, 'e' => "L'action a eu lieu avant la sortie ; au féminin singulier, le passé se termine par « ـتْ » : أكلتْ."],
                    ['q' => "Quelle forme du passé convient à « نحن » ?", 'c' => ["ذهبوا", "ذهبنا", "ذهبتُ", "ذهبتما"], 'a' => 1, 'e' => "Avec « نحن », le passé se termine par « ـنا » : ذهبنا."],
                    ['q' => "Quelle forme du passé convient à « هم » ?", 'c' => ["قرأتِ", "قرؤوا", "قرأنا", "قرأتما"], 'a' => 1, 'e' => "« هم » est un masculin pluriel : le passé se termine par « ـوا »."],
                    ['q' => "Layla dit : « شربتُ الماء ثم خرجتُ ». Qu'est-ce qui s'est passé en premier ?", 'c' => ["elle est sortie", "elle a bu de l'eau", "les deux actions sont au futur", "elle n'a pas bu"], 'a' => 1, 'e' => "Le texte cite d'abord boire de l'eau, puis sortir."],
                    ['q' => "Khaled dit : « زرتُ جدتي أمس ». Quel temps est utilisé ?", 'c' => ["le présent", "le passé", "le futur", "l'impératif"], 'a' => 1, 'e' => "« زرتُ » avec « أمس » exprime une action passée."],
                    ['q' => "Quelle phrase est correcte avec le pronom « هي » au passé ?", 'c' => ["هي ذهب إلى المدرسة.", "هي ذهبت إلى المدرسة.", "هي ذهبنا إلى المدرسة.", "هي ذهبوا إلى المدرسة."], 'a' => 1, 'e' => "« هي » est un féminin singulier : le passé est « ذهبتْ »."],
                    ['q' => "Mets « هو يقرأ الكتاب » au passé.", 'c' => ["هو سيقرأ الكتاب.", "هو يقرأ الكتاب أمس.", "هو قرأ الكتاب.", "هو اقرأ الكتاب."], 'a' => 2, 'e' => "Le passé de « يقرأ » avec « هو » est « قرأ »."],
                ],
            ],
            [
                'title' => "Le futur et ses marqueurs",
                'description' => "S'entraîner à parler de projets et d'événements qui n'ont pas encore eu lieu, avec des moyens simples.",
                'questions' => [
                    ['q' => "Quel mot aide à exprimer le futur ?", 'c' => ["الآن", "أمس", "غدًا", "أول أمس"], 'a' => 2, 'e' => "« غدًا » désigne un moment à venir."],
                    ['q' => "Complète : « سوف ___ غدًا. »", 'c' => ["سافرت", "سافر", "يسافر", "سافروا"], 'a' => 2, 'e' => "« سوف » est suivi de l'inaccompli : سوف يسافر."],
                    ['q' => "Quelle phrase parle d'un projet à venir ?", 'c' => ["أذهب إلى الطبيب الآن.", "ذهبت إلى الطبيب أمس.", "سأذهب إلى الطبيب غدًا.", "اذهب إلى الطبيب!"], 'a' => 2, 'e' => "« سأذهب » et « غدًا » indiquent clairement le futur."],
                    ['q' => "Noura dit : « سأدرس بعد العشاء ». Quand va-t-elle étudier ?", 'c' => ["hier", "avant le petit-déjeuner", "après le dîner", "pendant l'école, hier"], 'a' => 2, 'e' => "La phrase donne l'heure de l'étude : après le dîner."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["سوف يقرأ أنا الكتاب.", "سوف قرأت الكتاب الليلة.", "سوف أقرأ الكتاب الليلة.", "سوف اقرأت الكتاب الليلة."], 'a' => 2, 'e' => "Après « سوف », on emploie l'inaccompli, et avec « أنا » il commence par « أ » : أقرأ."],
                    ['q' => "Quelle est la différence simple entre « أدرس » et « سأدرس » ?", 'c' => ["le premier est un ordre, le second une interdiction", "le premier est le passé, le second le présent", "le premier exprime le présent ou l'habitude, le second le futur", "il n'y a aucune différence"], 'a' => 2, 'e' => "Le préfixe « س » devant l'inaccompli place l'action dans le futur."],
                    ['q' => "Youssef dit : « غدًا سنزور المتحف ». Que comprend-on avec « سنزور » ?", 'c' => ["que la visite a lieu maintenant", "que la visite a eu lieu hier", "que la visite est prévue dans le futur", "que c'est un ordre donné à une personne"], 'a' => 2, 'e' => "Le « س » devant « نزور » oriente le verbe vers le futur."],
                    ['q' => "Quelle phrase ne va PAS avec le mot « غدًا » ?", 'c' => ["سأبدأ الدرس غدًا.", "سأسافر غدًا.", "ذهبت إلى العمل غدًا.", "سأزور صديقي غدًا."], 'a' => 2, 'e' => "« ذهبت » est au passé : il ne s'accorde pas avec « غدًا », qui désigne le futur."],
                    ['q' => "Mariam dit : « سوف أطبخ العشاء ». Quel est le verbe qui exprime l'action de cuisiner ?", 'c' => ["العشاء", "سوف", "أطبخ", "أنا"], 'a' => 2, 'e' => "« أطبخ » est le verbe ; « سوف » est seulement la particule du futur."],
                    ['q' => "Quelle phrase associe un marqueur du futur et une forme verbale correcte ?", 'c' => ["سوف كتبت الرسالة.", "سأكتب الرسالة أمس.", "سأكتب الرسالة مساءً.", "سيكتب أنا الرسالة."], 'a' => 2, 'e' => "« سأكتب » est la forme correcte du futur avec « أنا », suivie d'un repère de temps."],
                ],
            ],
            [
                'title' => "Conjuguer avec les pronoms",
                'description' => "Associer des verbes courants aux pronoms أنا، أنت، هو، هي، نحن، أنتم، هم et employer chaque forme naturellement.",
                'questions' => [
                    ['q' => "Complète : « أنا ___ القهوة. »", 'c' => ["يشرب", "تشرب", "أشرب", "نشرب"], 'a' => 2, 'e' => "Avec « أنا », on emploie « أشرب »."],
                    ['q' => "Complète : « أنتَ ___ العربية. »", 'c' => ["يدرس", "أدرس", "تدرس", "ندرس"], 'a' => 2, 'e' => "« أنتَ » est un masculin singulier de la 2e personne : « تدرس »."],
                    ['q' => "Complète : « أنتِ ___ الرسالة. »", 'c' => ["تكتبون", "يكتب", "تكتبين", "أكتب"], 'a' => 2, 'e' => "Pour le féminin singulier de la 2e personne, on ajoute « ـين » : تكتبين."],
                    ['q' => "Complète : « هو ___ في المستشفى. »", 'c' => ["تعمل", "أعمل", "يعمل", "نعمل"], 'a' => 2, 'e' => "« هو » prend la forme de la 3e personne masculine : « يعمل »."],
                    ['q' => "Complète : « هي ___ كتابًا. »", 'c' => ["يقرأ", "أقرأ", "تقرأ", "نقرأ"], 'a' => 2, 'e' => "« هي » est un féminin singulier : « تقرأ »."],
                    ['q' => "Complète : « نحن ___ إلى المدرسة. »", 'c' => ["تذهبون", "يذهب", "نذهب", "أذهب"], 'a' => 2, 'e' => "Avec « نحن », la forme est « نذهب »."],
                    ['q' => "Quelle forme convient à « أنتم ___ الدرس » ?", 'c' => ["تدرسين", "يدرسون", "تدرسون", "ندرس"], 'a' => 2, 'e' => "« أنتم » est un masculin pluriel de la 2e personne : « تدرسون »."],
                    ['q' => "Quelle forme convient à « أنتنّ ___ الطعام » ?", 'c' => ["يطبخن", "تطبخون", "تطبخن", "نطبخ"], 'a' => 2, 'e' => "« أنتنّ » est un féminin pluriel de la 2e personne : « تطبخن »."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["هم يذهبن إلى العمل.", "هم تذهبون إلى العمل.", "هم أذهبون إلى العمل.", "هم يذهبون إلى العمل."], 'a' => 3, 'e' => "« هم » est un masculin pluriel de la 3e personne : « يذهبون »."],
                    ['q' => "On a « نحن نقرأ القصة ». Que devient le verbe si on remplace « نحن » par « هم » ?", 'c' => ["هم أقرأ القصة.", "هم نقرأ القصة.", "هم تقرأ القصة.", "هم يقرؤون القصة."], 'a' => 3, 'e' => "Quand le sujet devient « هم », le verbe prend la forme du masculin pluriel : « يقرؤون »."],
                ],
            ],
            [
                'title' => "Genre et nombre dans les formes verbales",
                'description' => "Voir comment le verbe arabe change selon que le sujet est masculin, féminin, singulier, duel ou pluriel.",
                'questions' => [
                    ['q' => "Quel verbe convient à « الفتاة » ?", 'c' => ["أذهب", "يذهب", "يذهبون", "تذهب"], 'a' => 3, 'e' => "« الفتاة » est un féminin singulier : le verbe commence par « ت »."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["الولد تلعبان.", "الولد تلعب.", "البنت يلعب.", "البنت تلعب."], 'a' => 3, 'e' => "« البنت » est un féminin singulier : « تلعب »."],
                    ['q' => "Complète : « الطفلان ___ في الحديقة. »", 'c' => ["يلعبون", "يلعب", "تلعبان", "يلعبان"], 'a' => 3, 'e' => "Le duel masculin demande « يلعبان »."],
                    ['q' => "Complète : « البنتان ___ إلى المدرسة. »", 'c' => ["يذهبون", "يذهبان", "تذهب", "تذهبان"], 'a' => 3, 'e' => "Le duel féminin demande « تذهبان »."],
                    ['q' => "Quelle forme convient à « المعلمان » ?", 'c' => ["يدرس", "تدرسان", "يدرسون", "يدرسان"], 'a' => 3, 'e' => "Le duel masculin demande « يدرسان »."],
                    ['q' => "Quelle forme convient à « المعلمتان » ?", 'c' => ["تدرس", "يدرسان", "تدرسون", "تدرسان"], 'a' => 3, 'e' => "Le duel féminin demande « تدرسان »."],
                    ['q' => "Sara dit : « أنا أكتب ». Comment une autre fille dit-elle la même chose d'elle-même ?", 'c' => ["أنا نكتب.", "أنا يكتب.", "أنا تكتبين.", "أنا أكتب."], 'a' => 3, 'e' => "À la 1re personne du singulier, la forme ne change pas selon le sexe de celui qui parle."],
                    ['q' => "Quelle phrase convient à un groupe de filles ?", 'c' => ["البنات أكتب الواجب.", "البنات يكتبون الواجب.", "البنات يكتب الواجب.", "البنات يكتبن الواجب."], 'a' => 3, 'e' => "Pour un féminin pluriel de la 3e personne, la forme est « يكتبن »."],
                    ['q' => "Quelle phrase est correcte ?", 'c' => ["الطلاب أدرس الدرس.", "الطلاب تدرسون الدرس.", "الطلاب يدرسان الدرس.", "الطلاب يدرسون الدرس."], 'a' => 3, 'e' => "« الطلاب » est un masculin pluriel : « يدرسون »."],
                    ['q' => "« الولدان يلعبان، والبنات يلعبن. » Quelle idée cet exemple illustre-t-il ?", 'c' => ["tous les verbes sont au futur", "le verbe ne change jamais", "les noms n'influencent pas le verbe", "la forme du verbe dépend du nombre et du genre du sujet"], 'a' => 3, 'e' => "« يلعبان » est un duel masculin, « يلعبن » un féminin pluriel : le verbe s'accorde avec le sujet."],
                ],
            ],
            [
                'title' => "Ordre et négation",
                'description' => "S'exercer avec des ordres simples et la négation de débutant avec لا et لم, sur des verbes de la vie quotidienne.",
                'questions' => [
                    ['q' => "Quelle phrase est un ordre adressé à un seul homme ?", 'c' => ["كتب الدرس.", "تكتب الدرس.", "يكتب الدرس.", "اكتب الدرس."], 'a' => 3, 'e' => "« اكتب » est l'impératif du masculin singulier."],
                    ['q' => "Comment dit-on « اكتب » à une seule fille, à l'impératif ?", 'c' => ["أكتب", "اكتبْ", "اكتبوا", "اكتبي"], 'a' => 3, 'e' => "L'impératif du féminin singulier se termine par « ـي » : اكتبي."],
                    ['q' => "Quel mot sert à nier un verbe au présent dans une phrase simple ?", 'c' => ["قد", "سوف", "هل", "لا"], 'a' => 3, 'e' => "« لا » nie le présent : لا أذهب."],
                    ['q' => "Quel mot sert à nier une action passée avec un verbe à l'inaccompli ?", 'c' => ["هل", "لا", "سوف", "لم"], 'a' => 3, 'e' => "« لم » suivi du verbe à l'inaccompli nie une action passée : لم أذهب."],
                    ['q' => "Quelle phrase est un ordre correct adressé à un groupe d'hommes ?", 'c' => ["نكتبوا واجبكم.", "اكتبن واجبكم.", "يكتبون واجبكم.", "اكتبوا واجبكم."], 'a' => 3, 'e' => "« اكتبوا » est l'impératif du masculin pluriel."],
                    ['q' => "Quelle phrase convient pour donner un conseil direct ?", 'c' => ["سأشرب الماء.", "شرب الماء.", "يشرب الماء.", "اشرب الماء."], 'a' => 3, 'e' => "L'impératif « اشرب » permet de donner un conseil direct."],
                    ['q' => "Que signifie « لا تفتح الباب » ?", 'c' => ["j'ouvrirai la porte demain", "ouvre la porte maintenant", "j'ai ouvert la porte plus tôt", "ne l'ouvre pas : une interdiction"], 'a' => 3, 'e' => "« لا » devant le verbe à l'inaccompli exprime ici une interdiction."],
                    ['q' => "Quelle phrase nie naturellement une habitude quotidienne ?", 'c' => ["لا أستيقظ متأخرًا عادةً.", "لم أستيقظ غدًا عادةً.", "لا استيقظت أمس.", "سوف لا استيقظ."], 'a' => 0, 'e' => "« لا أستيقظ » est la forme naturelle pour nier une habitude au présent."],
                    ['q' => "Complète : « يا أحمد، ___ الباب من فضلك. »", 'c' => ["أغلق", "يغلق", "أغلقتَ", "سنغلق"], 'a' => 0, 'e' => "On s'adresse directement à Ahmed pour demander quelque chose : l'impératif « أغلق »."],
                    ['q' => "Quelle phrase associe correctement négation et passé ?", 'c' => ["لم أذهب إلى السوق أمس.", "لا ذهبت إلى السوق أمس.", "سوف ذهبت أمس.", "لم أذهب غدًا."], 'a' => 0, 'e' => "« لم » suivi du verbe à l'inaccompli nie un fait passé ; « أمس » le confirme."],
                ],
            ],
            [
                'title' => "Verbes courants en contexte",
                'description' => "Employer des verbes familiers comme ذهب، جاء، أخذ، أعطى، أكل et شرب dans de courtes situations, plutôt que de mémoriser des formes isolées.",
                'questions' => [
                    ['q' => "Complète : « أمس ___ أحمد إلى العمل. »", 'c' => ["ذهب", "يذهب", "اذهب", "سيذهب"], 'a' => 0, 'e' => "« أمس » appelle le passé : ذهب."],
                    ['q' => "« جاءت مريم إلى البيت. » Qui est venu ?", 'c' => ["Mariam", "Ahmed", "les élèves", "les garçons"], 'a' => 0, 'e' => "Le verbe « جاءت » est au féminin singulier et se rapporte à Mariam."],
                    ['q' => "Complète : « الطفل ___ الماء لأنه عطشان. »", 'c' => ["يشرب", "يكتب", "يقرأ", "ينام"], 'a' => 0, 'e' => "La soif explique le choix du verbe « يشرب »."],
                    ['q' => "Complète : « أمينة كانت جائعة، لذلك ___ وجبة صغيرة. »", 'c' => ["أكلت", "قرأت", "غسلت", "رسمت"], 'a' => 0, 'e' => "La faim est liée au fait de manger, et l'action est passée : « أكلتْ »."],
                    ['q' => "« أعطى المعلم الطالب كتابًا. » Qu'a donné le professeur ?", 'c' => ["un livre", "un stylo", "une chaise", "un sac"], 'a' => 0, 'e' => "L'objet mentionné dans la phrase est « كتابًا »."],
                    ['q' => "Quelle phrase utilise « أخذ » naturellement ?", 'c' => ["أخذت سارة الكتاب من الطاولة.", "أخذت سارة الكتاب الطاولة من.", "سارة الكتاب أخذت من طاولة.", "الكتاب من أخذت سارة الطاولة."], 'a' => 0, 'e' => "La première phrase respecte l'ordre verbe, sujet, complément, lieu d'origine."],
                    ['q' => "Ali dit : « سأعود بعد ساعة ». Que comprend-on avec « سأعود » ?", 'c' => ["qu'il reviendra plus tard", "qu'il est déjà revenu", "qu'il ne veut pas revenir", "qu'il revient tous les jours"], 'a' => 0, 'e' => "Le « س » devant l'inaccompli exprime une action à venir."],
                    ['q' => "Quelle phrase montre que quelqu'un est déjà arrivé ?", 'c' => ["وصل خالد قبل قليل.", "يصل خالد الآن.", "سيصل خالد غدًا.", "صلْ يا خالد."], 'a' => 0, 'e' => "« وصل » est au passé et « قبل قليل » confirme qu'il est déjà arrivé."],
                    ['q' => "Le professeur dit : « افتحوا كتبكم ». À qui s'adresse-t-il ?", 'c' => ["à un groupe de personnes", "à un seul homme", "à une seule femme", "à lui-même"], 'a' => 0, 'e' => "« افتحوا » est un impératif pluriel."],
                    ['q' => "Quelle phrase garde le sens quand on remplace « هو » par « هم » dans « هو شرب الماء » ?", 'c' => ["هم شربوا الماء.", "هم شرب الماء.", "هم تشرب الماء.", "هم نشرب الماء."], 'a' => 0, 'e' => "Avec « هم », le passé devient « شربوا »."],
                ],
            ],
            [
                'title' => "Révision générale des verbes",
                'description' => "Un dernier test de niveau débutant qui réunit temps, pronoms, nombre, négation et contexte quotidien.",
                'questions' => [
                    ['q' => "Complète : « أنا ___ إلى المكتبة أمس. »", 'c' => ["ذهبت", "أذهب", "سأذهب", "يذهب"], 'a' => 0, 'e' => "« أمس » indique le passé ; avec « أنا », la forme est « ذهبتُ »."],
                    ['q' => "Complète : « هي ___ إلى المدرسة كل يوم. »", 'c' => ["تذهب", "يذهبون", "أذهب", "ذهبن"], 'a' => 0, 'e' => "« هي » est un féminin singulier et « كل يوم » demande le présent : « تذهب »."],
                    ['q' => "Quelle phrase exprime le futur ?", 'c' => ["سنقرأ الدرس غدًا.", "نقرأ الدرس الآن.", "قرأنا الدرس أمس.", "اقرأ الدرس."], 'a' => 0, 'e' => "« سنقرأ » et « غدًا » marquent clairement le futur."],
                    ['q' => "Complète : « الطالبتان ___ الدرس الآن. »", 'c' => ["تدرسان", "يدرسون", "تدرسين", "تدرس"], 'a' => 0, 'e' => "« الطالبتان » est un duel féminin : « تدرسان »."],
                    ['q' => "Quelle phrase nie une action au présent ?", 'c' => ["لا أذهب الآن.", "لم أذهب أمس.", "سأذهب غدًا.", "ذهبت أمس."], 'a' => 0, 'e' => "« لا أذهب » nie le présent, alors que « لم أذهب » nie une action passée."],
                    ['q' => "Layla dit : « سأكتب الرسالة بعد الغداء ». Quel est le verbe et que montre-t-il ?", 'c' => ["سأكتب, un futur", "أكتب, un passé", "الرسالة, un futur", "الغداء, le verbe"], 'a' => 0, 'e' => "« سأكتب » est le verbe, et le « س » lui donne une valeur de futur."],
                    ['q' => "Mets « هم يدرسون العربية » au passé.", 'c' => ["هم درسوا العربية.", "هم يدرسون العربية أمس.", "هم سيدرسون العربية أمس.", "هم ادرسوا العربية."], 'a' => 0, 'e' => "Le passé de « يدرسون » avec « هم » est « درسوا »."],
                    ['q' => "Complète : « عاد الأولاد من المدرسة، ___ الطعام ثم لعبوا. »", 'c' => ["أكلوا", "يأكلون", "كلوا", "سيأكلون"], 'a' => 0, 'e' => "Le récit est au passé : « عاد ... أكلوا ... لعبوا »."],
                    ['q' => "Dans « يا طالبات، اقرأن النص ببطء », pourquoi dit-on « اقرأن » ?", 'c' => ["parce qu'on s'adresse à un groupe de filles", "parce qu'on s'adresse à un seul homme", "parce que le verbe est au passé", "parce que la phrase est au futur"], 'a' => 0, 'e' => "« طالبات » est un féminin pluriel ; l'impératif correspondant est « اقرأن »."],
                    ['q' => "Quelle suite respecte l'ordre : passé, présent, puis futur ?", 'c' => ["ذهبت أمس، أدرس الآن، سأرتاح غدًا.", "أدرس الآن، ذهبت أمس، سأرتاح غدًا.", "سأذهب غدًا، ذهبت أمس، أدرس الآن.", "أدرس أمس، ذهبت الآن، سأرتاح أمس."], 'a' => 0, 'e' => "La première est classée dans le temps : fait passé, verbe au présent, projet futur."],
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
