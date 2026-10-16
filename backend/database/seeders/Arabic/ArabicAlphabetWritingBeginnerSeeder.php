<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicAlphabetWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-alphabet-writing')->firstOrFail();

        // Durée (minutes) et score de réussite (%) par quiz, dans l'ordre.
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

        // 'c' = choix, 'a' = index (à partir de 0) de la bonne réponse, 'e' = explication.
        $quizzes = [
            [
                'title' => "Reconnaître les lettres",
                'description' => "Apprends à repérer les lettres de base, leurs sons et les points qui les distinguent.",
                'questions' => [
                    [
                        'q' => "Quelle lettre entend-on au début de « بيت » (maison) ?",
                        'c' => ['ت', 'ب', 'ن', 'ث'],
                        'a' => 1,
                        'e' => "« بيت » commence par ب (bāʼ), qui se prononce /b/.",
                    ],
                    [
                        'q' => "Quelle lettre porte trois points au-dessus ?",
                        'c' => ['ن', 'ب', 'ث', 'ت'],
                        'a' => 2,
                        'e' => "ث (thāʼ) a trois points au-dessus. ت en a deux, ن un seul, et ب un seul en dessous.",
                    ],
                    [
                        'q' => "Où se place le point de la lettre ب ?",
                        'c' => ["Un point en dessous", "Un point au-dessus", "Deux points en dessous", "Deux points au-dessus"],
                        'a' => 0,
                        'e' => "ب a un seul point, placé sous la lettre.",
                    ],
                    [
                        'q' => "Quelle lettre a le même squelette que ب, mais deux points au-dessus ?",
                        'c' => ['ث', 'ن', 'ت', 'ي'],
                        'a' => 2,
                        'e' => "ت (tāʼ) : même forme que ب, avec deux points au-dessus.",
                    ],
                    [
                        'q' => "Quel mot commence par le son « ch » (/ʃ/) ?",
                        'c' => ['سمك', 'صوم', 'جمل', 'شمس'],
                        'a' => 3,
                        'e' => "« شمس » (soleil) commence par ش (shīn), le son « ch ».",
                    ],
                    [
                        'q' => "Quel mot commence par la lettre م (mīm) ?",
                        'c' => ['باب', 'ماء', 'نور', 'ورد'],
                        'a' => 1,
                        'e' => "« ماء » (eau) commence par م. Les autres mots commencent par ب, ن et و.",
                    ],
                    [
                        'q' => "Quelle est la première lettre de « خبز » (pain) ?",
                        'c' => ['ح', 'ج', 'خ', 'ه'],
                        'a' => 2,
                        'e' => "خ (khāʼ) a un point au-dessus. ح n'a aucun point et ج en a un en dessous.",
                    ],
                    [
                        'q' => "Les lettres ج، ح، خ ont le même squelette. Qu'est-ce qui les distingue ?",
                        'c' => ["La longueur de la ligne", "Le point : dessous pour ج, aucun pour ح, dessus pour خ", "Le sens d'écriture", "Le nombre de boucles"],
                        'a' => 1,
                        'e' => "Seul le point change : ج a un point en dessous, ح aucun, خ un point au-dessus.",
                    ],
                    [
                        'q' => "Quel mot commence par la lettre ف (fāʼ) ?",
                        'c' => ['قلم', 'نهر', 'كتاب', 'فم'],
                        'a' => 3,
                        'e' => "« فم » (bouche) commence par ف, qui a un point au-dessus. ق, elle, en a deux.",
                    ],
                    [
                        'q' => "Laquelle de ces lettres n'a aucun point ?",
                        'c' => ['ب', 'ج', 'ح', 'خ'],
                        'a' => 2,
                        'e' => "ح (ḥāʼ) est la seule sans point.",
                    ],
                ],
            ],
            [
                'title' => "Formes des lettres et liaisons",
                'description' => "Comprends comment les lettres changent de forme et se lient entre elles à l'intérieur d'un mot.",
                'questions' => [
                    [
                        'q' => "Dans quel sens écrit-on l'arabe ?",
                        'c' => ["De gauche à droite", "De droite à gauche", "De haut en bas", "Dans les deux sens"],
                        'a' => 1,
                        'e' => "L'arabe s'écrit et se lit de droite à gauche.",
                    ],
                    [
                        'q' => "Combien de formes différentes une lettre arabe peut-elle avoir au maximum ?",
                        'c' => ['1', '2', '4', '6'],
                        'a' => 2,
                        'e' => "Quatre : isolée, initiale, médiane et finale.",
                    ],
                    [
                        'q' => "Laquelle de ces lettres ne se lie PAS à la lettre suivante ?",
                        'c' => ['ب', 'س', 'م', 'ر'],
                        'a' => 3,
                        'e' => "ر (rāʼ) ne se lie qu'à la lettre qui la précède, jamais à celle qui la suit.",
                    ],
                    [
                        'q' => "Quel groupe ne contient que des lettres qui ne se lient pas à la suivante ?",
                        'c' => ['ب ت ن ي', 'ا د ر و', 'س ش ص ض', 'ك ل م ن'],
                        'a' => 1,
                        'e' => "ا، د، ر، و (comme ذ et ز) se lient seulement vers la droite. Les autres groupes contiennent des lettres qui se lient dans les deux sens.",
                    ],
                    [
                        'q' => "Dans le mot « كتب », les trois lettres sont-elles liées entre elles ?",
                        'c' => ["Oui, toutes", "Non, aucune", "Seulement les deux dernières", "Seulement les deux premières"],
                        'a' => 0,
                        'e' => "ك، ت et ب se lient : le mot s'écrit d'un seul trait.",
                    ],
                    [
                        'q' => "Dans « ورد » (rose), où voit-on une coupure ?",
                        'c' => ["Aucune coupure", "Seulement après د", "Seulement avant و", "Après و et après ر"],
                        'a' => 3,
                        'e' => "و et ر ne se lient pas à la lettre suivante, donc le mot est coupé après chacune d'elles.",
                    ],
                    [
                        'q' => "Dans « باب » (porte), combien y a-t-il de coupure(s) à l'intérieur du mot ?",
                        'c' => ['0', '1', '2', '3'],
                        'a' => 1,
                        'e' => "ب se lie à ا, mais ا ne se lie pas au ب final : une seule coupure.",
                    ],
                    [
                        'q' => "Quel mot s'écrit d'un seul bloc, sans coupure ?",
                        'c' => ['دار', 'ورد', 'نور', 'سلم'],
                        'a' => 3,
                        'e' => "Dans « سلم », س et ل se lient, et م est la dernière lettre. Dans les autres mots, د ou و ou ر interrompent la liaison.",
                    ],
                    [
                        'q' => "Pourquoi la forme d'une lettre change-t-elle à l'intérieur d'un mot ?",
                        'c' => ["Son sens change", "Elle se lie aux lettres voisines", "Elle est abrégée", "Le scribe choisit au hasard"],
                        'a' => 1,
                        'e' => "La forme s'adapte à la liaison avec les lettres voisines. Le son et le sens de la lettre restent les mêmes.",
                    ],
                    [
                        'q' => "Dans le mot « بسم », quelle est la position de la lettre س ?",
                        'c' => ["Initiale", "Finale", "Isolée", "Médiane"],
                        'a' => 3,
                        'e' => "س est entre ب et م : c'est la forme médiane.",
                    ],
                ],
            ],
            [
                'title' => "Voyelles brèves (harakāt)",
                'description' => "Entraîne-toi sur la fatha, la damma, la kasra et le soukoun, et sur leur effet sur la prononciation.",
                'questions' => [
                    [
                        'q' => "Quel signe donne le son /a/ à une lettre ?",
                        'c' => ["Damma ـُ", "Kasra ـِ", "Fatha ـَ", "Soukoun ـْ"],
                        'a' => 2,
                        'e' => "La fatha, petit trait oblique au-dessus de la lettre, donne /a/ : بَ = ba.",
                    ],
                    [
                        'q' => "Comment lit-on « بُ » ?",
                        'c' => ["ba", "bi", "bou", "b sans voyelle"],
                        'a' => 2,
                        'e' => "La damma (petit wāw au-dessus) donne /u/ : بُ = bou.",
                    ],
                    [
                        'q' => "Où s'écrit la kasra ?",
                        'c' => ["Au-dessus de la lettre", "En dessous de la lettre", "À droite de la lettre", "À l'intérieur de la lettre"],
                        'a' => 1,
                        'e' => "La kasra est un petit trait sous la lettre : بِ = bi.",
                    ],
                    [
                        'q' => "Que signifie le soukoun (ـْ) placé sur une lettre ?",
                        'c' => ["Elle est doublée", "Elle est allongée", "Elle n'est suivie d'aucune voyelle brève", "Elle ne se prononce jamais"],
                        'a' => 2,
                        'e' => "Le soukoun indique l'absence de voyelle après la consonne.",
                    ],
                    [
                        'q' => "Combien de fathas y a-t-il dans « كَتَبَ » ?",
                        'c' => ['1', '2', '3', '4'],
                        'a' => 2,
                        'e' => "Une fatha sur chaque lettre : كَ، تَ، بَ, soit trois.",
                    ],
                    [
                        'q' => "Quelle prononciation correspond à « بِ » ?",
                        'c' => ["ba", "bi", "bou", "ib"],
                        'a' => 1,
                        'e' => "La kasra sous le ب donne /bi/.",
                    ],
                    [
                        'q' => "Comment transcrire « كُتِبَ » ?",
                        'c' => ["kataba", "kutiba", "kitaba", "kutuba"],
                        'a' => 1,
                        'e' => "ك porte une damma (ku), ت une kasra (ti), ب une fatha (ba) : kutiba.",
                    ],
                    [
                        'q' => "Dans « مَدْرَسَة », quelle lettre porte le soukoun ?",
                        'c' => ['م', 'د', 'ر', 'س'],
                        'a' => 1,
                        'e' => "Le د porte le soukoun : mad-ra-sa.",
                    ],
                    [
                        'q' => "Quelle paire ne diffère que par la voyelle brève ?",
                        'c' => ["ب / ت", "با / بو", "بَ / بِ", "ب / ن"],
                        'a' => 2,
                        'e' => "Dans بَ / بِ, c'est la même lettre ب, seule la voyelle change (ba / bi).",
                    ],
                    [
                        'q' => "Un débutant lit toutes les voyelles comme /a/. Que doit-il travailler en priorité ?",
                        'c' => ["Le nombre de lettres", "Les chiffres", "La différence entre fatha, damma et kasra", "Le sens des mots"],
                        'a' => 2,
                        'e' => "Son erreur vient de la confusion entre les trois voyelles brèves.",
                    ],
                ],
            ],
            [
                'title' => "Voyelles longues et tanwīn",
                'description' => "Distingue les voyelles longues ا، و، ي et reconnais les trois tanwīn dans des mots simples.",
                'questions' => [
                    [
                        'q' => "Quelle lettre allonge le son /a/ dans « قال » ?",
                        'c' => ['و', 'ا', 'ي', 'ة'],
                        'a' => 1,
                        'e' => "L'alif après la fatha donne un /aː/ long : qāla.",
                    ],
                    [
                        'q' => "Quel mot contient un allongement en /uː/ (avec و) ?",
                        'c' => ['بيت', 'باب', 'نور', 'قلم'],
                        'a' => 2,
                        'e' => "Dans « نور » (lumière), le و prolonge le son /u/ : nūr.",
                    ],
                    [
                        'q' => "Quel mot contient un allongement en /iː/ (avec ي) ?",
                        'c' => ['كبير', 'نور', 'باب', 'قال'],
                        'a' => 0,
                        'e' => "Dans « كبير » (grand), le ي prolonge le son /i/ : kabīr.",
                    ],
                    [
                        'q' => "Quel allongement trouve-t-on dans « باب » ?",
                        'c' => ["Wāw (/uː/)", "Yāʼ (/iː/)", "Alif (/aː/)", "Aucun"],
                        'a' => 2,
                        'e' => "L'alif après la fatha de ب donne /aː/ : bāb.",
                    ],
                    [
                        'q' => "Quel signe représente le tanwīn damm ?",
                        'c' => ["ـً", "ـٌ", "ـٍ", "ـْ"],
                        'a' => 1,
                        'e' => "Le tanwīn damm s'écrit avec deux dammas superposées : ـٌ.",
                    ],
                    [
                        'q' => "Quel tanwīn trouve-t-on à la fin de « كتابٍ » ?",
                        'c' => ["Fatḥ", "Damm", "Kasr", "Aucun"],
                        'a' => 2,
                        'e' => "Deux kasras sous la dernière lettre : c'est le tanwīn kasr.",
                    ],
                    [
                        'q' => "Quel mot porte un tanwīn fatḥ ?",
                        'c' => ['كتابٌ', 'كتابٍ', 'كتابًا', 'الكتابُ'],
                        'a' => 2,
                        'e' => "Dans « كتابًا », deux fathas surmontent la lettre finale (avec un alif muet après).",
                    ],
                    [
                        'q' => "Quelle différence entre « بُ » et « بو » ?",
                        'c' => ["Aucune", "بُ porte un tanwīn", "بو est muet", "بُ est bref, بو est long"],
                        'a' => 3,
                        'e' => "La damma donne un /u/ bref ; le و après une damma allonge la voyelle en /uː/.",
                    ],
                    [
                        'q' => "Quelle paire oppose une voyelle brève et une voyelle longue ?",
                        'c' => ["بَ / بِ", "ب / ت", "با / ثا", "بَ / با"],
                        'a' => 3,
                        'e' => "بَ (ba) est bref, با (bā) est long : même lettre, durée différente.",
                    ],
                    [
                        'q' => "Un nom précédé de « ال » prend-il un tanwīn ?",
                        'c' => ["Oui, toujours", "Non, en général", "Seulement les verbes", "Seulement le tanwīn fatḥ"],
                        'a' => 1,
                        'e' => "L'article ال et le tanwīn ne vont pas ensemble : on dit « الكتابُ », pas « الكتابٌ ».",
                    ],
                ],
            ],
            [
                'title' => "Écrire : sens, points et alignement",
                'description' => "Prends de bonnes habitudes d'écriture : sens du tracé, espaces, points et lignes de base.",
                'questions' => [
                    [
                        'q' => "De quel côté de la page commence-t-on à écrire en arabe ?",
                        'c' => ["Gauche", "Droite", "Haut-gauche", "Peu importe"],
                        'a' => 1,
                        'e' => "On commence à droite et on avance vers la gauche.",
                    ],
                    [
                        'q' => "Pourquoi laisser un espace entre les mots ?",
                        'c' => ["Pour économiser le papier", "Pour ajouter des points", "Pour repérer où commence et finit chaque mot", "Parce que les lettres se lient"],
                        'a' => 2,
                        'e' => "L'espace aide l'œil à séparer les mots, surtout quand ils sont écrits en lettres liées.",
                    ],
                    [
                        'q' => "Un élève écrit ب sans son point. Quel est le risque ?",
                        'c' => ["Aucun, le point est facultatif", "Le mot change de sens d'écriture", "La lettre devient muette", "On peut la confondre avec une autre lettre"],
                        'a' => 3,
                        'e' => "Le point fait partie de la lettre : sans lui, ب peut être lue comme ت, ث ou ن.",
                    ],
                    [
                        'q' => "Quel ordre d'entraînement est le plus efficace pour progresser ?",
                        'c' => ["Phrase longue d'abord", "Lettre seule, puis mot, puis phrase", "Copier au hasard", "Écrire vite sans relire"],
                        'a' => 1,
                        'e' => "On fixe d'abord le geste sur la lettre, puis sur le mot, puis sur la phrase.",
                    ],
                    [
                        'q' => "En général, quand ajoute-t-on les points quand on écrit à la main ?",
                        'c' => ["Avant le mot", "Jamais", "Juste après chaque lettre", "Après avoir tracé le squelette du mot"],
                        'a' => 3,
                        'e' => "On trace d'abord le mot d'un trait, puis on pose les points pour ne pas casser le geste.",
                    ],
                    [
                        'q' => "Que veut dire « écrire sur la ligne » ?",
                        'c' => ["Écrire au-dessus de la ligne", "Garder les lettres posées sur la même ligne de base", "Écrire en biais", "Ne jamais lever le stylo"],
                        'a' => 1,
                        'e' => "Les lettres doivent reposer sur une même ligne de base pour que l'écriture reste lisible.",
                    ],
                    [
                        'q' => "Combien de points a la lettre ش (shīn) ?",
                        'c' => ['1', '2', '3', '0'],
                        'a' => 2,
                        'e' => "ش a trois points au-dessus. س, la même lettre sans points, est une autre lettre.",
                    ],
                    [
                        'q' => "Quelle lettre ne se distingue de ر que par un point ?",
                        'c' => ['د', 'ز', 'و', 'ن'],
                        'a' => 1,
                        'e' => "ز (zāy) est un ر avec un point au-dessus.",
                    ],
                    [
                        'q' => "Quelle lettre ne se distingue de د que par un point ?",
                        'c' => ['ر', 'و', 'ز', 'ذ'],
                        'a' => 3,
                        'e' => "ذ (dhāl) est un د avec un point au-dessus.",
                    ],
                    [
                        'q' => "Pour copier un mot sans erreur, que faire d'abord ?",
                        'c' => ["Le copier lettre par lettre sans le regarder", "Le deviner", "L'écrire de gauche à droite", "Le regarder en entier et repérer les liaisons"],
                        'a' => 3,
                        'e' => "Voir le mot en entier permet de repérer l'ordre des lettres et les endroits où elles se lient.",
                    ],
                ],
            ],
            [
                'title' => "Hamza et tāʼ marbūṭa",
                'description' => "Quelques pièges fréquents du débutant : la hamza, le tāʼ marbūṭa et le tāʼ ouvert.",
                'questions' => [
                    [
                        'q' => "Comment s'écrit la hamza au début de « أحمد » ?",
                        'c' => ["Sous l'alif", "Sur l'alif", "Sur le wāw", "Sur la ligne"],
                        'a' => 1,
                        'e' => "La hamza de « أحمد » s'écrit au-dessus de l'alif.",
                    ],
                    [
                        'q' => "Dans « إسلام », où s'écrit la hamza ?",
                        'c' => ["Sur l'alif", "Sur le yāʼ", "Sur le wāw", "Sous l'alif"],
                        'a' => 3,
                        'e' => "Avec une kasra, la hamza de début de mot s'écrit sous l'alif : إ.",
                    ],
                    [
                        'q' => "Quel mot se termine par un tāʼ marbūṭa (ة) ?",
                        'c' => ['بيت', 'صوت', 'وقت', 'شجرة'],
                        'a' => 3,
                        'e' => "« شجرة » (arbre) est un nom féminin terminé par ة. Les autres se terminent par un ت ouvert.",
                    ],
                    [
                        'q' => "Quelle écriture de « école » est correcte ?",
                        'c' => ['مدرست', 'مدرسه', 'مدرسة', 'مدرساة'],
                        'a' => 2,
                        'e' => "On écrit « مدرسة », avec un tāʼ marbūṭa.",
                    ],
                    [
                        'q' => "Quel mot se termine par un tāʼ ouvert (ت) ?",
                        'c' => ['حديقة', 'سيارة', 'غرفة', 'بنت'],
                        'a' => 3,
                        'e' => "« بنت » (fille) se termine par un ت ouvert, qui reste /t/ même à la pause.",
                    ],
                    [
                        'q' => "Dans « سؤال » (question), sur quelle lettre est écrite la hamza ?",
                        'c' => ['ا', 'ي', 'و', "Seule sur la ligne"],
                        'a' => 2,
                        'e' => "La hamza est écrite sur un wāw : ؤ.",
                    ],
                    [
                        'q' => "Quel mot contient une hamza écrite sur l'alif au milieu du mot ?",
                        'c' => ['سؤال', 'رأس', 'فئة', 'شيء'],
                        'a' => 1,
                        'e' => "Dans « رأس » (tête), la hamza est sur l'alif. Dans « سؤال » elle est sur le wāw, dans « فئة » sur le yāʼ, et dans « شيء » elle est seule en fin de mot.",
                    ],
                    [
                        'q' => "Corrige la phrase « هذه معلمه » (voici une enseignante).",
                        'c' => ['هذا معلمة', 'هذه معلمه', 'هذه معلمة', 'هذه معلمت'],
                        'a' => 2,
                        'e' => "Le mot féminin « معلمة » prend un tāʼ marbūṭa.",
                    ],
                    [
                        'q' => "Que devient le ة quand on s'arrête à la fin d'un mot ?",
                        'c' => ["Il se prononce toujours /t/", "Il disparaît", "Il se prononce comme un h très léger", "Il se double"],
                        'a' => 2,
                        'e' => "À la pause, le tāʼ marbūṭa se prononce comme un léger /h/ (ou un /a/ très faible).",
                    ],
                    [
                        'q' => "Quelle phrase est écrite correctement ?",
                        'c' => ['ذهبت فاطمه إلى المدرسه.', 'ذهبت فاطمت إلى المدرسة.', 'ذهبت فاطمة إلى المدرست.', 'ذهبت فاطمة إلى المدرسة.'],
                        'a' => 3,
                        'e' => "« فاطمة » et « المدرسة » s'écrivent toutes les deux avec ة.",
                    ],
                ],
            ],
            [
                'title' => "Lire et copier de courts textes",
                'description' => "Mets en pratique ce que tu as appris : lecture de phrases simples et copie sans erreur.",
                'questions' => [
                    [
                        'q' => "Quel est le premier mot de la phrase « ذهب علي إلى البيت » ?",
                        'c' => ['علي', 'ذهب', 'إلى', 'البيت'],
                        'a' => 1,
                        'e' => "On lit de droite à gauche : le premier mot est « ذهب » (est allé).",
                    ],
                    [
                        'q' => "Combien de mots contient « هذا كتاب جديد » ?",
                        'c' => ['2', '3', '4', '5'],
                        'a' => 1,
                        'e' => "Trois mots : هذا، كتاب، جديد.",
                    ],
                    [
                        'q' => "Quelle copie de « أحب القراءة. » est fidèle à l'original ?",
                        'c' => ['احب القراءه.', 'أحب القراءة', 'أحب القراءة.', 'أحبّ القراءة،'],
                        'a' => 2,
                        'e' => "Copier, c'est reproduire les lettres, la hamza, le tāʼ marbūṭa et le point final, sans rien changer.",
                    ],
                    [
                        'q' => "Dans « في الحديقة شجرة كبيرة », où se trouve l'arbre ?",
                        'c' => ["À l'école", "Dans la maison", "Au marché", "Dans le jardin"],
                        'a' => 3,
                        'e' => "« في الحديقة » signifie « dans le jardin ».",
                    ],
                    [
                        'q' => "Quel est le dernier mot de « ذهبت سارة إلى السوق » ?",
                        'c' => ['سارة', 'ذهبت', 'إلى', 'السوق'],
                        'a' => 3,
                        'e' => "Le mot le plus à gauche est « السوق » (le marché).",
                    ],
                    [
                        'q' => "Combien de lettres a le mot « قلم » ?",
                        'c' => ['2', '3', '4', '5'],
                        'a' => 1,
                        'e' => "ق، ل، م : trois lettres.",
                    ],
                    [
                        'q' => "Dans « يقرأ محمد قصة », quel mot est le verbe ?",
                        'c' => ['محمد', 'قصة', 'يقرأ', "Il n'y en a pas"],
                        'a' => 2,
                        'e' => "« يقرأ » (il lit) exprime l'action.",
                    ],
                    [
                        'q' => "Que signifie « باب » ?",
                        'c' => ["fenêtre", "porte", "livre", "chaise"],
                        'a' => 1,
                        'e' => "« باب » veut dire « porte ».",
                    ],
                    [
                        'q' => "Quelle copie de « ذهبت سارة إلى السوق. » est correcte ?",
                        'c' => ['ذهبت ساره إلى السوق.', 'ذهبت سارت إلى السوق.', 'ذهبت سارة إلى السوق.', 'ذهبت سارة إلا السوق.'],
                        'a' => 2,
                        'e' => "Seule cette version garde le ة de « سارة » et le mot « إلى » intacts.",
                    ],
                    [
                        'q' => "Un élève copie un texte en collant tous les mots, sans espace. Quel est le problème ?",
                        'c' => ["Les lettres changent de sens", "Les points disparaissent", "On ne voit plus où finit un mot", "Rien ne change"],
                        'a' => 2,
                        'e' => "Sans espaces, le lecteur ne sait plus où un mot s'arrête et où le suivant commence.",
                    ],
                ],
            ],
            [
                'title' => "Révision de l'alphabet et de l'écriture",
                'description' => "Un dernier tour d'horizon : lettres, liaisons, voyelles, orthographe et écriture de mots courts.",
                'questions' => [
                    [
                        'q' => "Quel mot est composé de ب، ي، ت, dans cet ordre ?",
                        'c' => ['تبن', 'نبت', 'بيت', 'بنت'],
                        'a' => 2,
                        'e' => "« بيت » = ب + ي + ت.",
                    ],
                    [
                        'q' => "Quel mot commence par une lettre qui ne se lie pas à la suivante ?",
                        'c' => ['سلم', 'ورد', 'كتب', 'نزل'],
                        'a' => 1,
                        'e' => "Le و de « ورد » ne se lie pas à la lettre suivante. س، ك et ن, elles, se lient.",
                    ],
                    [
                        'q' => "Comment lit-on « قالَ » ?",
                        'c' => ["qala", "qāla", "qila", "qul"],
                        'a' => 1,
                        'e' => "L'alif allonge le premier /a/ : qāla.",
                    ],
                    [
                        'q' => "Quelle est la forme correcte du féminin singulier de « معلم » (enseignant) ?",
                        'c' => ['معلمات', 'معلمة', 'معلمه', 'معلمت'],
                        'a' => 1,
                        'e' => "« معلمة » est le féminin singulier. « معلمات » est le pluriel féminin.",
                    ],
                    [
                        'q' => "Quelle est l'écriture correcte de « ceci » (masculin) ?",
                        'c' => ['هاذا', 'هدا', 'هذا', 'هذه'],
                        'a' => 2,
                        'e' => "On écrit « هذا » : pas d'alif après le ه, et la lettre ذ porte un point.",
                    ],
                    [
                        'q' => "Que faire quand on apprend une nouvelle lettre ?",
                        'c' => ["La copier seulement 100 fois", "L'apprendre sans son", "L'employer dans de longues phrases", "Observer sa forme, son son et ses points, puis l'écrire dans des mots courts"],
                        'a' => 3,
                        'e' => "Associer forme, son et points, puis écrire la lettre dans des mots simples, fixe l'apprentissage.",
                    ],
                    [
                        'q' => "Dans « كُتِبَ », qu'est-ce qui permet de le prononcer correctement ?",
                        'c' => ["Le nombre de mots", "Les voyelles brèves écrites", "L'espace", "La couleur de l'encre"],
                        'a' => 1,
                        'e' => "Les voyelles brèves (damma, kasra, fatha) indiquent comment lire chaque lettre.",
                    ],
                    [
                        'q' => "Quel mot se termine par un tāʼ marbūṭa ?",
                        'c' => ['كتاب', 'صوت', 'مكتبة', 'بيت'],
                        'a' => 2,
                        'e' => "« مكتبة » (bibliothèque) se termine par ة.",
                    ],
                    [
                        'q' => "Un élève connaît les lettres isolées mais lit mal les mots liés. Quelle est la meilleure étape suivante ?",
                        'c' => ["Passer à de longs textes", "Ignorer les liaisons", "Réapprendre les noms des lettres", "S'entraîner aux formes initiale, médiane et finale dans des mots courts"],
                        'a' => 3,
                        'e' => "Son blocage vient de la forme des lettres dans les mots liés, pas des lettres isolées.",
                    ],
                    [
                        'q' => "Combien de points a la lettre ن (nūn) et où sont-ils ?",
                        'c' => ["2 au-dessus", "1 en dessous", "Aucun", "1 au-dessus"],
                        'a' => 3,
                        'e' => "ن a un seul point, placé au-dessus.",
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

                // Les choix sont mis à jour sur place (même ordre) : les identifiants
                // ne changent donc pas quand on relance le seeder.
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
