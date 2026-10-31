<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhysicsFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'physics',
                'fr' => 'Sur Vénus, un jour sidéral dure environ 243 jours terrestres, tandis qu’une année dure environ 225 jours. La planète tourne aussi en sens rétrograde : le Soleil s’y lève à l’ouest.',
                'en' => 'On Venus, a sidereal day lasts about 243 Earth days, while a year lasts about 225. The planet also rotates retrograde, so the Sun rises in the west.',
                'ar' => 'على كوكب الزهرة، يستمر اليوم النجمي نحو 243 يومًا أرضيًا، بينما تستمر السنة نحو 225 يومًا. كما يدور الكوكب بعكس اتجاه دوران الأرض، لذلك تشرق الشمس من الغرب.',
                'source_url' => 'https://science.nasa.gov/venus/venus-facts/',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'La matière et l’énergie que nous connaissons représentent moins de 5 % du contenu de l’Univers selon le modèle cosmologique actuel. Le reste est attribué à la matière noire et à l’énergie noire, dont la nature demeure inconnue.',
                'en' => 'The matter and energy we understand make up less than 5% of the universe’s contents in the current cosmological model. The rest is attributed to dark matter and dark energy, whose nature remains unknown.',
                'ar' => 'تشكل المادة والطاقة اللتان نفهمهما أقل من 5٪ من محتوى الكون وفق النموذج الكوني الحالي. ويُنسب الباقي إلى المادة المظلمة والطاقة المظلمة، وما زالت طبيعتهما مجهولة.',
                'source_url' => 'https://science.nasa.gov/exoplanets/what-is-the-universe/',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'Des milliers de milliards de neutrinos traverseraient notre corps chaque seconde sans laisser de trace. Ils interagissent si rarement avec la matière qu’ils peuvent traverser des milieux opaques à la lumière.',
                'en' => 'Trillions of neutrinos pass through our bodies every second without leaving a trace. They interact so rarely with matter that they can pass through environments opaque to light.',
                'ar' => 'تمر تريليونات من النيوترينوات عبر أجسامنا كل ثانية من دون أن تترك أثرًا. فهي نادرًا ما تتفاعل مع المادة، ويمكنها عبور بيئات لا ينفذ الضوء خلالها.',
                'source_url' => 'https://science.nasa.gov/universe/glossary/',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'La NASA estime qu’un volume de matière d’étoile à neutrons de 1,5 cm³ aurait une masse d’environ 9,75 × 10¹⁴ grammes. Cette densité extrême vient de l’effondrement d’une étoile en un objet d’à peine quelques dizaines de kilomètres de diamètre.',
                'en' => 'NASA estimates that 1.5 cm³ of neutron-star material would have a mass of about 9.75 × 10¹⁴ grams. This extreme density results when a star collapses into an object only a few dozen kilometers across.',
                'ar' => 'تقدّر ناسا أن حجمًا قدره 1.5 سم³ من مادة نجم نيوتروني تبلغ كتلته نحو 9.75 × 10¹⁴ غرام. تنتج هذه الكثافة الهائلة عن انهيار نجم إلى جسم لا يتجاوز قطره بضعة عشرات من الكيلومترات.',
                'source_url' => 'https://imagine.gsfc.nasa.gov/educators/lifecycles/LC_main3.html',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'Pour une personne qui observe de loin, la lumière d’un objet tombant vers un trou noir met de plus en plus de temps à lui parvenir : l’objet semble donc ralentir et s’assombrir. La personne qui tombe, elle, franchit l’horizon en un temps fini selon sa propre horloge.',
                'en' => 'To a distant observer, light from an object falling toward a black hole takes longer and longer to arrive, so the object appears to slow down and dim. The falling observer, however, crosses the horizon in finite time on their own clock.',
                'ar' => 'بالنسبة إلى مراقب بعيد، يستغرق ضوء جسم يسقط نحو ثقب أسود وقتًا أطول فأطول للوصول إليه، فيبدو الجسم أبطأ وأكثر خفوتًا. أما الشخص الساقط فيعبر أفق الحدث خلال زمن محدود بحسب ساعته هو.',
                'source_url' => 'https://science.nasa.gov/apod/frequently-asked-questions-faqs-on-black-holes/',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'La foudre peut chauffer l’air qu’elle traverse jusqu’à environ 28 000 °C, soit plusieurs fois la température de la photosphère solaire. C’est l’air du canal de foudre qui atteint cette température, pas tout l’éclair comme un objet solide.',
                'en' => 'Lightning can heat the air it passes through to about 28,000°C, several times the temperature of the Sun’s photosphere. It is the air in the lightning channel that reaches this temperature, not the entire bolt as if it were a solid object.',
                'ar' => 'يمكن للبرق أن يسخّن الهواء الذي يمر عبره إلى نحو 28,000 درجة مئوية، أي عدة أضعاف حرارة الغلاف الضوئي للشمس. الذي يبلغ هذه الحرارة هو الهواء في قناة البرق، لا البرق كله كأنه جسم صلب.',
                'source_url' => 'https://www.weather.gov/safety/lightning-temperature',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'À une température et une pression précises — environ 0,01 °C et 611,657 Pa — la glace, l’eau liquide et la vapeur d’eau peuvent coexister en équilibre. Ce point est appelé le point triple de l’eau.',
                'en' => 'At a precise temperature and pressure—about 0.01°C and 611.657 Pa—ice, liquid water, and water vapor can coexist in equilibrium. This is called water’s triple point.',
                'ar' => 'عند درجة حرارة وضغط محددين — نحو 0.01 درجة مئوية و611.657 باسكال — يمكن للجليد والماء السائل وبخار الماء أن تتواجد معًا في حالة توازن. وتُسمى هذه الحالة النقطة الثلاثية للماء.',
                'source_url' => 'https://nvlpubs.nist.gov/nistpubs/ir/2024/NIST.IR.8533.pdf',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'Quand une particule de matière rencontre son antiparticule, elles s’annihilent et convertissent presque toute leur masse en énergie transportée par de nouvelles particules. Les quantités d’antimatière produites en laboratoire restent toutefois minuscules.',
                'en' => 'When a matter particle meets its antiparticle, they annihilate and convert nearly all their mass into energy carried by new particles. The amounts of antimatter produced in laboratories are still tiny.',
                'ar' => 'عندما يلتقي جسيم من المادة بجسيمه المضاد، يفني كل منهما الآخر وتتحول معظم كتلتهما إلى طاقة تحملها جسيمات جديدة. ومع ذلك، تظل كميات المادة المضادة التي تُنتج في المختبرات ضئيلة جدًا.',
                'source_url' => 'https://home.cern/science/physics/antimatter/',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'En mécanique quantique, une particule peut parfois traverser une barrière qu’elle ne pourrait pas franchir selon la physique classique. Cet effet, appelé effet tunnel, contribue par exemple à expliquer la désintégration de certaines particules radioactives.',
                'en' => 'In quantum mechanics, a particle can sometimes pass through a barrier it could not cross according to classical physics. This effect, called quantum tunneling, helps explain the decay of some radioactive particles.',
                'ar' => 'في ميكانيكا الكم، يمكن لجسيم أحيانًا عبور حاجز لا يستطيع تجاوزه وفق الفيزياء الكلاسيكية. ويساعد هذا التأثير، المسمى النفق الكمومي، في تفسير اضمحلال بعض الجسيمات المشعة.',
                'source_url' => 'https://physics.aps.org/articles/v18/170',
            ],
            [
                'major_slug' => 'physics',
                'fr' => 'À l’échelle atomique, le noyau est minuscule par rapport à la taille de l’atome : si le noyau d’un atome d’hydrogène avait la taille d’une bille, l’atome aurait un rayon environ 100 000 fois plus grand. L’expression « l’atome est surtout du vide » est une image utile, même si les électrons sont décrits par des nuages de probabilité plutôt que par de petites planètes.',
                'en' => 'At atomic scale, the nucleus is tiny compared with the atom: if a hydrogen atom’s nucleus were the size of a small bead, the atom’s radius would be about 100,000 times larger. “Atoms are mostly empty space” is a useful picture, though electrons are described by probability clouds rather than tiny planets.',
                'ar' => 'على المقياس الذري، تكون النواة صغيرة جدًا مقارنة بحجم الذرة: لو كان حجم نواة ذرة الهيدروجين كحبة صغيرة، لكان نصف قطر الذرة أكبر بنحو 100,000 مرة. وعبارة «الذرة معظمها فراغ» صورة توضيحية مفيدة، مع أن الإلكترونات توصف بسحب احتمالية لا بكواكب صغيرة.',
                'source_url' => 'https://www1.eere.energy.gov/hydrogenandfuelcells/tech_validation/pdfs/fcm01r0.pdf',
            ],
        ]);
    }
}
