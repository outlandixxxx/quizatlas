<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EconomicsFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'economy',
                'fr' => 'Dans la Rome antique, l’urine était assez utile pour être taxée : les tanneurs et les blanchisseurs s’en servaient comme matière première. Selon une anecdote, Vespasien aurait répondu aux critiques : « L’argent n’a pas d’odeur. »',
                'en' => 'In ancient Rome, urine was useful enough to be taxed: tanners and launderers used it as a raw material. According to an anecdote, Vespasian answered his critics, “Money doesn’t stink.”',
                'ar' => 'كان البول في روما القديمة مفيدًا بما يكفي لفرض ضريبة عليه؛ فقد استخدمه دبّاغو الجلود وعمال الغسيل مادةً خامًا. وتقول رواية إن فسبازيان ردّ على منتقديه: «المال لا رائحة له».',
                'source_url' => 'https://www.auajournals.org/doi/10.1016/j.juro.2010.02.2330',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'La fameuse « tulipomanie » néerlandaise n’a probablement pas ruiné tout le pays : des recherches de l’Université d’Oxford indiquent que la spéculation touchait surtout un petit groupe de marchands aisés, sans effet notable sur l’économie générale.',
                'en' => 'The famous Dutch “tulip mania” probably did not ruin the whole country: Oxford research indicates the speculation mainly involved a small group of wealthy merchants, with little noticeable effect on the wider economy.',
                'ar' => 'من المرجّح أن «هوس التوليب» الهولندي الشهير لم يُفلس البلاد كلها؛ إذ تشير أبحاث جامعة أكسفورد إلى أن المضاربة اقتصرت أساسًا على مجموعة صغيرة من التجار الأثرياء، ولم يكن لها أثر ملحوظ في الاقتصاد الأوسع.',
                'source_url' => 'https://www.history.ox.ac.uk/tulipmania-garden-historians-perspective',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Dans les statistiques de l’Union européenne, le PIB peut inclure des estimations d’activités illégales, comme le trafic de drogues ou la prostitution, ainsi que de transactions non déclarées.',
                'en' => 'In European Union statistics, GDP can include estimates of illegal activities such as drug dealing or prostitution, as well as unreported transactions.',
                'ar' => 'في الإحصاءات الأوروبية، قد يشمل الناتج المحلي الإجمالي تقديرات لأنشطة غير قانونية مثل تجارة المخدرات أو الدعارة، إلى جانب معاملات غير مُعلنة.',
                'source_url' => 'https://ec.europa.eu/eurostat/web/european-statistics-learning-hub/statistics-for-beginners/gross-domestic-product',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Le PIB attribue une valeur locative estimée aux propriétaires qui habitent leur propre logement, comme s’ils le louaient à quelqu’un d’autre.',
                'en' => 'GDP assigns an estimated rental value to homeowners living in their own homes, as if they were renting the homes from someone else.',
                'ar' => 'يُدرج الناتج المحلي الإجمالي قيمة إيجار تقديرية لمالكي المنازل الذين يسكنون فيها، كما لو أنهم يستأجرونها من شخص آخر.',
                'source_url' => 'https://www.bea.gov/help/faq/64',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'En 2014, la nouvelle méthode de calcul du PIB du Nigeria a augmenté sa taille économique mesurée de près de 90 %, surtout en intégrant des activités jusque-là sous-estimées.',
                'en' => 'In 2014, Nigeria’s new GDP calculation method made its measured economy nearly 90% larger, mainly by including activities that had previously been undercounted.',
                'ar' => 'في عام 2014، رفعت طريقة الحساب الجديدة للناتج المحلي الإجمالي حجم اقتصاد نيجيريا المُقاس بنحو 90%، ويرجع ذلك أساسًا إلى إدراج أنشطة لم تكن تُقدّر بما يكفي من قبل.',
                'source_url' => 'https://thedocs.worldbank.org/en/doc/4262e1e15b463ecb360cec4ad78cf062-0310012026/original/April-2026-India-Development-Update.pdf',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Au pire de l’hyperinflation hongroise, en juillet 1946, les prix doublaient environ toutes les 15,6 heures.',
                'en' => 'At the peak of Hungary’s hyperinflation, in July 1946, prices doubled about every 15.6 hours.',
                'ar' => 'في ذروة التضخم المفرط في المجر، في يوليو 1946، كانت الأسعار تتضاعف كل نحو 15.6 ساعة.',
                'source_url' => 'https://www.sciencedirect.com/science/article/pii/S0167268119301428',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Pendant l’hyperinflation allemande, le « Reutergeld », émis dans 70 villes et communes du Mecklembourg, n’était même pas destiné aux paiements : c’était un objet de collection illustré.',
                'en' => 'During Germany’s hyperinflation, “Reutergeld,” issued in 70 towns and municipalities in Mecklenburg, was not even meant for payments: it was an illustrated collectible.',
                'ar' => 'خلال التضخم المفرط في ألمانيا، لم يكن «Reutergeld» الذي أصدرته 70 مدينة وبلدية في مكلنبورغ مخصصًا للشراء أصلًا؛ بل كان قطعةً تذكارية مزخرفة لهواة الجمع.',
                'source_url' => 'https://weimar.bundesarchiv.de/WEIMAR/DE/Content/Virtuelle-Ausstellungen/Nach-dem-grossen-Krieg/Inflation.html',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'En 1932, la ville autrichienne de Wörgl a émis une monnaie locale qui perdait 1 % de sa valeur chaque mois si son détenteur n’y collait pas un timbre.',
                'en' => 'In 1932, the Austrian town of Wörgl issued a local currency that lost 1% of its value each month unless its holder attached a stamp.',
                'ar' => 'في عام 1932، أصدرت بلدة فورغل النمساوية عملة محلية تفقد 1% من قيمتها كل شهر ما لم يضع حاملها طابعًا عليها.',
                'source_url' => 'https://www.citeco.fr/10000-years-history-economics/industrial-revolutions/the-worgl-experiment-in-tyrol-austria-the-first-parallel-currency',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Un chroniqueur médiéval rapporta que le pèlerinage de Mansa Musa avait apporté tant d’or au Caire que sa valeur y avait baissé et serait restée basse pendant environ douze ans.',
                'en' => 'A medieval chronicler reported that Mansa Musa’s pilgrimage brought so much gold to Cairo that its value fell there and reportedly stayed low for about twelve years.',
                'ar' => 'ذكر مؤرخ من العصور الوسطى أن رحلة الحج التي قام بها مانسا موسى جلبت إلى القاهرة ذهبًا كثيرًا حتى انخفضت قيمته، وبقي منخفضًا نحو اثني عشر عامًا بحسب الرواية.',
                'source_url' => 'https://www.bu.edu/africa/outreach/teachingresources/history/ancient-to-medieval-history/k_o_mali/',
            ],
            [
                'major_slug' => 'economy',
                'fr' => 'Le PIB compte certains biens produits gratuitement par des bénévoles, mais pas leurs services bénévoles : le travail de bénévoles dans une association est exclu, tandis qu’un service similaire rémunéré peut être comptabilisé.',
                'en' => 'GDP counts some goods produced for free by volunteers, but not their volunteer services: work done for a charity is excluded, while a similar paid service may be counted.',
                'ar' => 'يحتسب الناتج المحلي الإجمالي بعض السلع التي ينتجها متطوعون مجانًا، لكنه لا يحتسب خدماتهم التطوعية؛ فالعمل التطوعي في جمعية يُستثنى، بينما قد تُحتسب خدمة مماثلة إذا كانت مدفوعة.',
                'source_url' => 'https://ec.europa.eu/eurostat/web/european-statistics-learning-hub/statistics-for-beginners/gross-domestic-product',
            ],
        ]);
    }
}
