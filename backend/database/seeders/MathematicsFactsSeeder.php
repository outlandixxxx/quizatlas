<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MathematicsFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'mathematics',
                'fr' => 'Le paradoxe de Banach-Tarski montre qu’en mathématiques, une boule peut être découpée en un nombre fini de morceaux et réassemblée en deux boules identiques à l’originale. Ces morceaux sont des ensembles de points très particuliers, pas des morceaux de matière qu’on pourrait découper physiquement.',
                'en' => 'The Banach–Tarski paradox shows that, in mathematics, a ball can be split into finitely many pieces and reassembled into two balls identical to the original. The pieces are unusual sets of points, not chunks of matter that could be physically cut apart.',
                'ar' => 'تُظهر مفارقة باناخ-تارسكي أنه يمكن رياضيًا تقسيم كرة إلى عدد منتهٍ من القطع ثم إعادة تركيبها لتكوين كرتين مطابقتين للأصلية. هذه القطع مجموعات خاصة من النقاط، وليست أجزاءً مادية يمكن قطعها فعليًا.',
                'source_url' => 'https://www.ams.org/notices/202011/rnoti-p1716.pdf',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'Dans l’hôtel infini de Hilbert, toutes les chambres peuvent être occupées et l’hôtel peut quand même accueillir un nouveau client : chaque occupant passe de la chambre n à la chambre n+1, ce qui libère la chambre 1.',
                'en' => 'In Hilbert’s Infinite Hotel, every room can be occupied and the hotel can still take one more guest: each occupant moves from room n to room n+1, freeing room 1.',
                'ar' => 'في فندق هيلبرت اللانهائي، قد تكون كل الغرف مشغولة ومع ذلك يستطيع الفندق استقبال نزيل جديد: ينتقل كل نزيل من الغرفة رقم n إلى الغرفة رقم n+1، فتُخلى الغرفة الأولى.',
                'source_url' => 'https://www.ias.edu/ideas/2016/pires-hilbert-hotel',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'Dans un groupe de 23 personnes, la probabilité qu’au moins deux partagent leur anniversaire dépasse 50 %, en supposant que les anniversaires sont répartis uniformément sur 365 jours.',
                'en' => 'In a group of 23 people, the chance that at least two share a birthday is over 50%, assuming birthdays are evenly distributed across 365 days.',
                'ar' => 'في مجموعة من 23 شخصًا، يتجاوز احتمال أن يتشارك شخصان على الأقل تاريخ الميلاد 50٪، بافتراض توزّع أعياد الميلاد بالتساوي على 365 يومًا.',
                'source_url' => 'https://courses.cs.washington.edu/courses/cse312/26sp/files/notes/birthday_paradox.html',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'Le théorème des quatre couleurs, qui affirme qu’une carte plane peut être coloriée avec au plus quatre couleurs sans que deux régions voisines aient la même couleur, a nécessité un ordinateur pour vérifier une grande quantité de configurations.',
                'en' => 'The four-color theorem says any flat map can be colored with at most four colors so that neighboring regions differ. Its proof required a computer to check a large number of configurations.',
                'ar' => 'تنص مبرهنة الألوان الأربعة على إمكان تلوين أي خريطة مستوية بأربعة ألوان على الأكثر، بحيث تختلف ألوان المناطق المتجاورة. وقد احتاج برهانها إلى حاسوب للتحقق من عدد كبير من الحالات.',
                'source_url' => 'https://doi.org/10.1090/noti2781',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'L’expression 1 + 2 + 3 + 4 + … reçoit la valeur −1/12 dans une méthode appelée régularisation zêta. Ce n’est pas la somme ordinaire : les sommes partielles classiques grandissent sans limite.',
                'en' => 'The expression 1 + 2 + 3 + 4 + … is assigned the value −1/12 by a method called zeta regularization. This is not an ordinary sum: its usual partial sums grow without bound.',
                'ar' => 'تُسند القيمة ‎−1/12‎ إلى التعبير 1 + 2 + 3 + 4 + … باستخدام طريقة تُسمى تنظيم زيتا. هذه ليست عملية جمع عادية؛ فالمجاميع الجزئية المعتادة تزداد بلا حد.',
                'source_url' => 'https://mathworld.wolfram.com/Zeta-RegularizedSum.html',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'La longueur mesurée d’un littoral dépend de la taille de la règle utilisée : plus la règle est courte, plus elle suit les petites courbes et plus la longueur calculée augmente.',
                'en' => 'A coastline’s measured length depends on the size of the ruler used: a shorter ruler follows smaller bends, making the calculated length grow.',
                'ar' => 'يعتمد الطول المقاس للساحل على طول المسطرة المستخدمة: كلما قصرت المسطرة تتبعت تعرّجات أصغر، فازداد الطول المحسوب.',
                'source_url' => 'https://mathworld.wolfram.com/CoastlineParadox.html',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'Une bande de Möbius n’a qu’une seule face : en traçant une ligne au centre sans lever le crayon, on finit par parcourir toute la surface.',
                'en' => 'A Möbius strip has only one side: draw a line down its center without lifting your pencil, and you eventually trace the entire surface.',
                'ar' => 'لشريط موبيوس وجه واحد فقط: إذا رسمت خطًا على وسطه من دون رفع القلم، فستمر في النهاية على كامل سطحه.',
                'source_url' => 'https://www.open.edu/openlearn/mod/oucontent/view.php?id=9288&section=3.1',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'Il y a strictement plus de nombres réels que de nombres entiers naturels : Cantor l’a démontré en montrant qu’aucune liste de nombres réels ne peut tous les contenir.',
                'en' => 'There are strictly more real numbers than natural numbers: Cantor proved this by showing that no list of real numbers can contain them all.',
                'ar' => 'عدد الأعداد الحقيقية أكبر من عدد الأعداد الطبيعية بالمعنى الدقيق؛ فقد أثبت كانتور أنه لا يمكن لأي قائمة من الأعداد الحقيقية أن تضمها كلها.',
                'source_url' => 'https://math.ucla.edu/~marks/notes/set_theory_notes_3.pdf',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => '0,999… est exactement égal à 1, et pas seulement presque égal. En notation décimale, certains nombres ont deux écritures différentes pour désigner la même valeur.',
                'en' => '0.999… is exactly equal to 1, not merely almost equal. In decimal notation, some numbers have two different representations for the same value.',
                'ar' => 'العدد 0.999… يساوي 1 تمامًا، وليس قريبًا منه فحسب. ففي الكتابة العشرية، يمكن لبعض الأعداد أن تُمثَّل بطريقتين مختلفتين للقيمة نفسها.',
                'source_url' => 'https://math.hmc.edu/funfacts/why-does-0-999-1/',
            ],
            [
                'major_slug' => 'mathematics',
                'fr' => 'On peut toujours trouver une suite aussi longue qu’on veut de nombres composés consécutifs. Par exemple, les nombres n! + 2, n! + 3, …, n! + n sont tous composés.',
                'en' => 'You can always find a run of consecutive composite numbers as long as you like. For example, n! + 2, n! + 3, …, n! + n are all composite.',
                'ar' => 'يمكن دائمًا إيجاد سلسلة من الأعداد المركبة المتتالية بأي طول نريده. فالأعداد n! + 2 وn! + 3 و… وn! + n كلها مركبة.',
                'source_url' => 'https://mathschallenge.net/full/consecutive_composites',
            ],
        ]);
    }
}
