<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SvtFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        
        $this->importFacts([
            [
                'major_slug' => 'svt',
                'fr' => 'En Antarctique, Blood Falls semble être une cascade de sang, mais sa couleur rouge vient d’une saumure riche en fer qui s’écoule sous le glacier Taylor. Des microbes y vivent dans le froid, l’obscurité et une eau très salée.',
                'en' => 'In Antarctica, Blood Falls looks like a waterfall of blood, but its red color comes from iron-rich brine flowing from beneath Taylor Glacier. Microbes live there in the cold, dark, highly salty water.',
                'ar' => 'يبدو شلال الدم في أنتاركتيكا كأنه شلال من الدم، لكن لونه الأحمر ناتج عن مياه مالحة غنية بالحديد تتدفق من تحت نهر تايلور الجليدي. وتعيش هناك ميكروبات في البرد والظلام والمياه شديدة الملوحة.',
                'source_url' => 'https://nsf-gov-resources.nsf.gov/files/NSF-Science-on-the-Ice-fifth-edition.pdf',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Le manteau terrestre est surtout constitué de roche solide, pas d’un océan de magma. Sur de très longues périodes, cette roche solide peut néanmoins se déformer et s’écouler lentement, à peu près au rythme de croissance des ongles.',
                'en' => 'Earth’s mantle is mostly solid rock, not an ocean of magma. Over very long periods, however, this solid rock can deform and flow slowly, at roughly the rate fingernails grow.',
                'ar' => 'يتكوّن وشاح الأرض في معظمه من صخور صلبة، وليس من محيط من الصهارة. لكن هذه الصخور الصلبة يمكنها أن تتشوه وتتدفق ببطء على مدى فترات طويلة جدًا، بمعدل يقارب نمو الأظافر.',
                'source_url' => 'https://www.usgs.gov/faqs/are-tectonic-plates-floating-magma',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Un éclair qui frappe le sol peut faire fondre le sable et le transformer en tubes naturels de verre appelés fulgurites. Certains suivent la trajectoire ramifiée de l’électricité dans le sol.',
                'en' => 'A lightning strike can melt sand and turn it into natural glass tubes called fulgurites. Some follow the branching path of the electrical discharge through the ground.',
                'ar' => 'يمكن لضربة برق أن تذيب الرمال وتحولها إلى أنابيب زجاجية طبيعية تُسمى الفولغوريت. ويتبع بعضها المسار المتشعب للتفريغ الكهربائي في الأرض.',
                'source_url' => 'https://geology.utah.gov/map-pub/survey-notes/glad-you-asked/what-are-fulgurites-and-where-can-they-be-found/',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'On a repéré environ 675 lacs sous la calotte glaciaire antarctique. Le plus grand, le lac Vostok, s’étend sur environ 260 km de long et se trouve sous plus de 3 km de glace.',
                'en' => 'About 675 lakes have been identified beneath the Antarctic ice sheet. The largest, Lake Vostok, is about 260 km long and lies under more than 3 km of ice.',
                'ar' => 'رُصد نحو 675 بحيرة تحت الغطاء الجليدي في أنتاركتيكا. وأكبرها بحيرة فوستوك، التي يبلغ طولها نحو 260 كيلومترًا وتقع تحت أكثر من 3 كيلومترات من الجليد.',
                'source_url' => 'https://nsf-gov-resources.nsf.gov/files/NSF-Science-on-the-Ice-fifth-edition.pdf',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Le champ magnétique terrestre s’est déjà inversé : le nord magnétique et le sud magnétique ont échangé leurs positions. Ces inversions sont irrégulières, et la dernière remonte à environ 780 000 ans.',
                'en' => 'Earth’s magnetic field has reversed before: magnetic north and magnetic south switched places. These reversals occur irregularly, and the last one was about 780,000 years ago.',
                'ar' => 'سبق أن انعكس المجال المغناطيسي للأرض، فتبادل القطبان المغناطيسيان الشمالي والجنوبي موقعيهما. وتحدث هذه الانقلابات بصورة غير منتظمة، وكان آخرها قبل نحو 780 ألف سنة.',
                'source_url' => 'https://www.usgs.gov/faqs/it-true-earths-magnetic-field-occasionally-reverses-its-polarity',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'La plus grande cascade du monde se trouve sous la mer, dans le détroit du Danemark. L’eau froide et dense y plonge au-dessus d’un relief sous-marin sur une hauteur d’environ 3,5 km.',
                'en' => 'The world’s largest waterfall is underwater, in the Denmark Strait. There, cold, dense water plunges over an underwater ridge through a vertical drop of about 3.5 km.',
                'ar' => 'يقع أكبر شلال في العالم تحت البحر في مضيق الدنمارك. فهناك تهبط المياه الباردة والكثيفة فوق حافة في قاع البحر عبر ارتفاع يقارب 3.5 كيلومتر.',
                'source_url' => 'https://oceanservice.noaa.gov/facts/largest-waterfall.html',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Selon un calcul préliminaire de la NASA, le séisme japonais de 2011 a redistribué la masse de la Terre d’une manière qui aurait raccourci la journée d’environ 1,8 microseconde.',
                'en' => 'According to a preliminary NASA calculation, the 2011 Japan earthquake shifted Earth’s mass in a way that would have shortened the day by about 1.8 microseconds.',
                'ar' => 'وفق حساب أولي أجرته ناسا، أعاد زلزال اليابان عام 2011 توزيع كتلة الأرض بطريقة يُقدّر أنها قصّرت اليوم بنحو 1.8 ميكروثانية.',
                'source_url' => 'https://www.jpl.nasa.gov/news/japan-quake-may-have-shortened-earth-days-moved-axis/',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Des séismes peuvent se produire jusqu’à environ 700 km de profondeur, bien que les roches y soient soumises à une pression énorme. Ces séismes profonds se produisent dans des plaques océaniques froides qui plongent dans le manteau.',
                'en' => 'Earthquakes can occur as deep as about 700 km, despite the enormous pressure on rocks at that depth. These deep earthquakes occur within cold oceanic plates sinking into the mantle.',
                'ar' => 'يمكن أن تحدث زلازل على عمق يصل إلى نحو 700 كيلومتر، رغم الضغط الهائل الواقع على الصخور هناك. وتقع هذه الزلازل العميقة داخل صفائح محيطية باردة تهبط إلى الوشاح.',
                'source_url' => 'https://www.usgs.gov/faqs/what-depth-do-earthquakes-occur-what-significance-depth',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'Dans une grotte de la mine de Naica, au Mexique, des cristaux de gypse atteignent jusqu’à 11 m de long. Ils ont grandi dans une eau minérale maintenue longtemps à une température proche de 54 °C.',
                'en' => 'In a cave in Mexico’s Naica mine, gypsum crystals reach up to 11 m long. They grew in mineral-rich water kept for a long time at a temperature near 54°C.',
                'ar' => 'في كهف داخل منجم نايكا في المكسيك، يصل طول بلورات الجبس إلى 11 مترًا. وقد نمت في مياه غنية بالمعادن ظلت مدة طويلة عند درجة حرارة تقارب 54 مئوية.',
                'source_url' => 'https://pubs.geoscienceworld.org/gsa/geology/article-abstract/35/4/327/129804/Formation-of-natural-gypsum-megacrystals-in-Naica',
            ],
            [
                'major_slug' => 'svt',
                'fr' => 'L’Antarctique abrite des écosystèmes microbiens sous la glace, dans des saumures froides et sans lumière. Certains microbes tirent de l’énergie de réactions chimiques avec des substances présentes dans la roche, sans dépendre de la photosynthèse.',
                'en' => 'Antarctica has microbial ecosystems beneath the ice, in cold, lightless brines. Some microbes obtain energy from chemical reactions involving substances in the bedrock, without relying on photosynthesis.',
                'ar' => 'توجد في أنتاركتيكا أنظمة بيئية ميكروبية تحت الجليد، في مياه مالحة باردة ومظلمة. وتحصل بعض الميكروبات على الطاقة من تفاعلات كيميائية مع مواد موجودة في الصخور، من دون الاعتماد على التمثيل الضوئي.',
                'source_url' => 'https://nsf-gov-resources.nsf.gov/files/NSF-Science-on-the-Ice-fifth-edition.pdf',
            ],
        ]);
    }
}
