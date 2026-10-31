<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChemistryFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'chemistry',
                'fr' => 'Le gallium fond à environ 29,8 °C : une pièce assez chaude peut donc le faire fondre dans la main. Il faut toutefois le chauffer doucement et éviter de le manipuler sans précaution.',
                'en' => 'Gallium melts at about 29.8°C, so a warm hand can melt a small piece. It should still be handled carefully and warmed gently.',
                'ar' => 'ينصهر الغاليوم عند نحو 29.8 درجة مئوية، لذا يمكن لدفء اليد أن يذيب قطعة صغيرة منه. ومع ذلك، ينبغي التعامل معه بحذر وتسخينه تدريجيًا.',
                'source_url' => 'https://edu.rsc.org/elements/gallium/2020009.article',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'Le gallium se comporte à l’inverse de la plupart des métaux lorsqu’il fond : il se contracte. Le gallium solide peut donc flotter sur le gallium liquide.',
                'en' => 'Gallium behaves opposite to most metals when it melts: it contracts. Solid gallium can therefore float on liquid gallium.',
                'ar' => 'يتصرف الغاليوم بعكس معظم المعادن عند انصهاره، إذ ينكمش. لذلك يمكن للغاليوم الصلب أن يطفو فوق الغاليوم السائل.',
                'source_url' => 'https://periodic-table.rsc.org/element/31/',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'À température ambiante, le brome est un liquide rouge-brun. C’est l’un des rares non-métaux liquides dans ces conditions, et ses vapeurs sont toxiques.',
                'en' => 'At room temperature, bromine is a reddish-brown liquid. It is one of the few nonmetals that are liquid under these conditions, and its vapors are toxic.',
                'ar' => 'يكون البروم سائلًا بنيًا محمرًا في درجة حرارة الغرفة. وهو من اللافلزات القليلة التي تكون سائلة في هذه الظروف، وأبخرته سامة.',
                'source_url' => 'https://periodic-table.rsc.org/element/35/Bromine',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'Le xénon était autrefois considéré comme chimiquement inerte, mais des chimistes ont réussi à lui faire former des composés. Plus de 100 composés du xénon ont depuis été préparés.',
                'en' => 'Xenon was once considered chemically inert, but chemists succeeded in making it form compounds. More than 100 xenon compounds have since been made.',
                'ar' => 'كان يُعتقد سابقًا أن الزينون خامل كيميائيًا، لكن الكيميائيين نجحوا في جعله يُكوّن مركبات. ومنذ ذلك الحين، صُنّع أكثر من 100 مركب للزينون.',
                'source_url' => 'https://periodic-table.rsc.org/element/54/Xenon',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'L’oxygène liquide, bleu pâle, est attiré par un aimant. Cette propriété vient de sa structure électronique et peut être montrée avec une petite quantité et un aimant puissant.',
                'en' => 'Pale-blue liquid oxygen is attracted to a magnet. This property comes from its electronic structure and can be demonstrated with a small amount and a strong magnet.',
                'ar' => 'ينجذب الأكسجين السائل ذو اللون الأزرق الشاحب إلى المغناطيس. وتعود هذه الخاصية إلى بنيته الإلكترونية، ويمكن إظهارها بكمية صغيرة ومغناطيس قوي.',
                'source_url' => 'https://pubs.acs.org/doi/10.1021/ed084p1296',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'De l’eau très pure peut rester liquide sous 0 °C si la formation de cristaux de glace est empêchée. Cet état instable est appelé surfusion ; une perturbation peut déclencher rapidement la congélation.',
                'en' => 'Very pure water can remain liquid below 0°C if ice crystals are prevented from forming. This unstable state is called supercooling; a disturbance can trigger rapid freezing.',
                'ar' => 'يمكن للماء شديد النقاء أن يبقى سائلًا تحت درجة الصفر المئوية إذا مُنعت بلورات الجليد من التكوّن. وتُسمى هذه الحالة غير المستقرة بالتبريد الفائق، وقد يؤدي اضطراب بسيط إلى تجمّده بسرعة.',
                'source_url' => 'https://pubs.acs.org/doi/10.1021/acs.chemrev.7b00259',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'L’eau douce atteint sa densité maximale vers 4 °C. En la refroidissant davantage, elle devient moins dense, ce qui aide à expliquer pourquoi les lacs gèlent d’abord à la surface et pourquoi la glace flotte.',
                'en' => 'Fresh water reaches its maximum density at about 4°C. Cooling it further makes it less dense, helping explain why lakes freeze first at the surface and why ice floats.',
                'ar' => 'تبلغ كثافة الماء العذب أقصاها عند نحو 4 درجات مئوية. وعند تبريده أكثر تقل كثافته، ما يساعد على تفسير تجمّد البحيرات أولًا عند السطح وطفو الجليد.',
                'source_url' => 'https://www.open.edu/openlearn/mod/oucontent/view.php?id=20129&section=3.2',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'Une solution sursaturée d’acétate de sodium peut rester liquide jusqu’à ce qu’on y ajoute un petit cristal. Elle se solidifie alors rapidement et libère de la chaleur — le principe de certaines chaufferettes réutilisables.',
                'en' => 'A supersaturated sodium acetate solution can stay liquid until a small crystal is added. It then solidifies quickly and releases heat—the principle behind some reusable hand warmers.',
                'ar' => 'يمكن لمحلول أسيتات الصوديوم فائق التشبع أن يبقى سائلًا إلى أن تُضاف إليه بلورة صغيرة. عندها يتصلب بسرعة ويطلق حرارة، وهو المبدأ الذي تعمل به بعض أكياس التدفئة القابلة لإعادة الاستخدام.',
                'source_url' => 'https://www.colorado.edu/lab/lecture-demo-manual/general-reactions/s150-chemical-rxns-crystallization-saturated-sodium-acetate',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'À la pression atmosphérique habituelle, la glace carbonique passe directement de l’état solide au gaz sans devenir liquide. Cette transformation s’appelle la sublimation.',
                'en' => 'At ordinary atmospheric pressure, dry ice goes directly from solid to gas without becoming liquid. This change is called sublimation.',
                'ar' => 'عند الضغط الجوي المعتاد، يتحول الجليد الجاف مباشرة من الحالة الصلبة إلى الغازية من دون أن يصبح سائلًا. وتُسمى هذه العملية التسامي.',
                'source_url' => 'https://sp.ehs.cornell.edu/research-safety/chemical-safety/specific-chemical-hazards/cryogenic-material-safety/dry-ice-tip-sheet',
            ],
            [
                'major_slug' => 'chemistry',
                'fr' => 'Les cristaux d’iode peuvent se transformer directement en une vapeur violette sans passer par l’état liquide. C’est un autre exemple de sublimation, observable à température ambiante.',
                'en' => 'Iodine crystals can turn directly into purple vapor without passing through a liquid state. This is another example of sublimation, observable at room temperature.',
                'ar' => 'يمكن لبلورات اليود أن تتحول مباشرة إلى بخار بنفسجي من دون المرور بالحالة السائلة. وهذا مثال آخر على التسامي يمكن ملاحظته في درجة حرارة الغرفة.',
                'source_url' => 'https://www.chem.ucla.edu/~harding/IGOC/S/sublimation.html',
            ],
        ]);
    }
}
