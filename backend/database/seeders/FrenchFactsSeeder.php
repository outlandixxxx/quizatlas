<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrenchFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'french',
                'fr' => 'Les nombres 70, 80 et 90 gardent une trace d’un ancien système par vingt : soixante-dix signifie 60 + 10, quatre-vingts signifie 4 × 20, et quatre-vingt-dix signifie 4 × 20 + 10.',
                'en' => 'The French numbers 70, 80, and 90 preserve traces of an old base-20 system: soixante-dix means 60 + 10, quatre-vingts means 4 × 20, and quatre-vingt-dix means 4 × 20 + 10.',
                'ar' => 'تحتفظ الأعداد الفرنسية 70 و80 و90 بأثر نظام قديم قائم على العدّ بالعشرين: فـ soixante-dix تعني 60 + 10، وquatre-vingts تعني 4 × 20، وquatre-vingt-dix تعني 4 × 20 + 10.',
                'source_url' => 'https://www.academie-francaise.fr/questions-de-langue',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Les formes septante et nonante sont utilisées dans plusieurs régions francophones et sont officielles en Belgique et en Suisse. En Suisse, huitante s’emploie aussi pour 80 dans certaines régions.',
                'en' => 'The forms septante and nonante are used in several French-speaking regions and are official in Belgium and Switzerland. In some Swiss regions, huitante is also used for 80.',
                'ar' => 'تُستخدم الصيغتان septante وnonante في مناطق فرنكوفونية عديدة، وهما رسميتان في بلجيكا وسويسرا. وتُستخدم huitante أيضًا في بعض مناطق سويسرا للدلالة على 80.',
                'source_url' => 'https://www.academie-francaise.fr/questions-de-langue',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'À Paris, l’hôpital des Quinze-Vingts doit son nom au nombre 300 : quinze fois vingt. Le nom conserve ainsi une ancienne façon de compter.',
                'en' => 'In Paris, the Quinze-Vingts hospital takes its name from the number 300: fifteen times twenty. Its name preserves an older way of counting.',
                'ar' => 'يحمل مستشفى Quinze-Vingts في باريس اسم العدد 300، أي خمسة عشر مضروبًا في عشرين. وهكذا يحتفظ اسمه بطريقة قديمة للعدّ.',
                'source_url' => 'https://www.academie-francaise.fr/questions-de-langue',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Georges Perec a écrit La Disparition, un roman entier sans la lettre « e », pourtant la lettre la plus fréquente en français. Le roman, publié en 1969, compte près de 300 pages.',
                'en' => 'Georges Perec wrote La Disparition, an entire novel without the letter “e,” even though it is the most frequent letter in French. Published in 1969, the novel runs to nearly 300 pages.',
                'ar' => 'كتب جورج بيرك رواية La Disparition كاملةً من دون حرف «e»، مع أنه أكثر الحروف شيوعًا في الفرنسية. نُشرت الرواية عام 1969 ويبلغ طولها نحو 300 صفحة.',
                'source_url' => 'https://dictionnaire.lerobert.com/guide/lipogramme',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Quelques années après La Disparition, Perec a publié Les Revenentes, un roman où le « e » est la seule voyelle utilisée. Les deux livres imposent donc des contraintes d’écriture presque opposées.',
                'en' => 'A few years after La Disparition, Perec published Les Revenentes, a novel in which “e” is the only vowel used. The two books therefore impose almost opposite writing constraints.',
                'ar' => 'بعد سنوات قليلة من La Disparition، نشر بيرك رواية Les Revenentes التي لا تستخدم إلا حرف «e» بوصفه حرف علة. وهكذا تفرض الروايتان قيدين كتابيين متعاكسين تقريبًا.',
                'source_url' => 'https://www.oulipo.net/fr/oulipiens/gp',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Georges Perec n’était pas le premier à tenter un roman sans voyelle particulière : en 1853, Jacques Arago avait publié un récit intitulé Voyage autour du monde sans la lettre A.',
                'en' => 'Georges Perec was not the first to attempt a novel without a particular vowel: in 1853, Jacques Arago published a work titled Voyage autour du monde sans la lettre A (Voyage Around the World Without the Letter A).',
                'ar' => 'لم يكن جورج بيرك أول من جرّب كتابة رواية من دون حرف علة معيّن؛ ففي عام 1853 نشر جاك أراغو عملًا بعنوان Voyage autour du monde sans la lettre A، أي «رحلة حول العالم من دون حرف A».',
                'source_url' => 'https://dictionnaire.lerobert.com/guide/lipogramme',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Dans l’orthographe française, « quatre-vingts » prend un s lorsqu’il termine le nombre, mais le perd dans « quatre-vingt-un » ou « quatre-vingt-deux ».',
                'en' => 'In French spelling, quatre-vingts takes an s when it ends the number, but loses it in quatre-vingt-un or quatre-vingt-deux.',
                'ar' => 'في الإملاء الفرنسي، تُكتب كلمة quatre-vingts مع s عندما تنتهي بها قيمة العدد، لكنها تفقد هذا الحرف في quatre-vingt-un وquatre-vingt-deux.',
                'source_url' => 'https://www.dictionnaire-academie.fr/article/A8Q0092',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Jusqu’au XVIIe siècle, l’écriture française ne distinguait pas les lettres u et v : elles pouvaient être deux formes d’une même lettre.',
                'en' => 'Until the 17th century, French writing did not distinguish between u and v: they could be two forms of the same letter.',
                'ar' => 'حتى القرن السابع عشر، لم تكن الكتابة الفرنسية تميّز بين الحرفين u وv؛ إذ كانا يُستعملان أحيانًا شكلين للحرف نفسه.',
                'source_url' => 'https://www.dictionnaire-academie.fr/article/A9U0001',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Un lipogramme est un texte où l’auteur s’interdit une ou plusieurs lettres. Perec a poussé ce jeu jusqu’au roman entier, mais la contrainte existe aussi dans des poèmes et des textes beaucoup plus anciens.',
                'en' => 'A lipogram is a text in which the writer avoids one or more letters. Perec extended this word game to an entire novel, but the constraint also appears in poems and much older texts.',
                'ar' => 'الليبوقرام نصّ يمتنع فيه الكاتب عن استخدام حرف واحد أو أكثر. وقد وسّع بيرك هذه اللعبة لتشمل رواية كاملة، لكن هذا القيد استُخدم أيضًا في قصائد ونصوص أقدم بكثير.',
                'source_url' => 'https://www.oulipo.net/fr/contraintes/lipogramme',
            ],
            [
                'major_slug' => 'french',
                'fr' => 'Le roman La Disparition a aussi été traduit en anglais sous le titre A Void en conservant la contrainte du « e » absent. Traduire le livre exigeait donc de recréer le jeu de lettres dans une autre langue.',
                'en' => 'La Disparition was also translated into English as A Void while preserving the constraint of avoiding “e.” Translating the book therefore required recreating its letter game in another language.',
                'ar' => 'تُرجمت رواية La Disparition إلى الإنجليزية بعنوان A Void مع الحفاظ على قيد حذف حرف «e». لذلك تطلبت ترجمتها إعادة ابتكار لعبة الحروف في لغة أخرى.',
                'source_url' => 'https://www.nybooks.com/articles/1994/11/03/hide-and-seek/',
            ],
        ]);
    }
}
