<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'finance',
                'fr' => 'En 1661, la Suède a émis les premiers vrais billets de banque d’Europe. La banque en a imprimé trop, a fait faillite, et son fondateur a été condamné à mort avant d’être gracié.',
                'en' => 'In 1661, Sweden issued Europe’s first real banknotes. The bank printed too many, collapsed, and its founder was sentenced to death before being pardoned.',
                'ar' => 'أصدرت السويد أول أوراق نقدية حقيقية في أوروبا عام 1661. طبعت الجهة المُصدرة عددًا مفرطًا منها فأفلست، وحُكم على مؤسسها بالإعدام قبل أن يُعفى عنه.',
                'source_url' => 'https://www.riksbank.se/en-gb/about-the-riksbank/history/historical-timeline/1600-1699/first-banknotes-in-europe',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'La plus grande pièce jamais fabriquée pèse 19,7 kg. La Suède l’a frappée en cuivre au XVIIe siècle, sous la forme d’une grande plaque.',
                'en' => 'The largest coin ever made weighs 19.7 kg. Sweden minted it from copper in the 17th century as a large plate.',
                'ar' => 'تزن أكبر عملة صُنعت على الإطلاق 19.7 كيلوغرامًا. صاغتها السويد من النحاس في القرن السابع عشر على شكل صفيحة كبيرة.',
                'source_url' => 'https://www.riksbank.se/en-gb/about-the-riksbank/history/historical-timeline',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'Les États-Unis ont imprimé un billet de 100 000 dollars en 1934, mais le public ne l’a jamais utilisé : il servait uniquement aux transactions officielles entre banques de la Réserve fédérale.',
                'en' => 'The United States printed a $100,000 bill in 1934, but the public never used it: it was only for official transactions between Federal Reserve Banks.',
                'ar' => 'طبعت الولايات المتحدة ورقة نقدية بقيمة 100 ألف دولار عام 1934، لكن الجمهور لم يستخدمها قط؛ فقد خُصصت للمعاملات الرسمية بين بنوك الاحتياطي الفيدرالي.',
                'source_url' => 'https://www.bep.gov/currency/history/historical-currency/100000-gold-certificate',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'Des financiers ont préparé les bases de la Réserve fédérale lors d’une réunion secrète sur une île en 1910. Pour cacher leur identité, ils se sont retrouvés sous prétexte d’une partie de chasse au canard et n’utilisaient que leurs prénoms.',
                'en' => 'Financiers laid the groundwork for the Federal Reserve at a secret island meeting in 1910. To hide their identities, they used a duck-hunting trip as a cover and addressed one another only by first names.',
                'ar' => 'وضع ممولون أسس الاحتياطي الفيدرالي في اجتماع سري على جزيرة عام 1910. ولإخفاء هوياتهم، تذرعوا برحلة لصيد البط، واستخدموا أسماءهم الأولى فقط فيما بينهم.',
                'source_url' => 'https://www.federalreservehistory.org/essays/jekyll-island-conference',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'Le premier distributeur automatique de billets, installé en 1967, utilisait des chèques légèrement radioactifs au carbone 14 plutôt que des cartes bancaires. Son inventeur disait avoir choisi un code à quatre chiffres parce que sa femme pouvait en mémoriser quatre.',
                'en' => 'The first ATM, installed in 1967, used cheques containing a small amount of radioactive carbon-14 instead of bank cards. Its inventor said he settled on a four-digit PIN because his wife could remember four digits.',
                'ar' => 'استخدم أول صرّاف آلي، رُكّب عام 1967، شيكات تحتوي على كمية ضئيلة من الكربون-14 المشع بدلًا من البطاقات المصرفية. وقال مخترعه إنه اختار رمزًا من أربعة أرقام لأن زوجته تستطيع تذكّر أربعة أرقام.',
                'source_url' => 'https://www.abc.net.au/news/2010-05-20/atm-inventor-dies-at-84/834008',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'La carte Diners Club, l’une des premières cartes de paiement polyvalentes, serait née après que son fondateur eut oublié son portefeuille au restaurant. La première version était une petite carte en carton.',
                'en' => 'The Diners Club card, one of the first multipurpose payment cards, began after its founder reportedly forgot his wallet at a restaurant. The first version was a small cardboard card.',
                'ar' => 'يُقال إن بطاقة Diners Club، وهي من أوائل بطاقات الدفع متعددة الاستخدامات، بدأت بعدما نسي مؤسسها محفظته في مطعم. وكانت النسخة الأولى بطاقة صغيرة من الورق المقوّى.',
                'source_url' => 'https://www.dinersclubus.com/home/about/dinersclub/story',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'La bande magnétique des cartes a été fixée au plastique grâce à un fer à repasser : la femme de l’ingénieur d’IBM Forrest Parry lui a suggéré d’utiliser celui qu’elle employait pour les vêtements.',
                'en' => 'The magnetic stripe on cards was attached to plastic with an iron: IBM engineer Forrest Parry’s wife suggested using the household iron she was using on clothes.',
                'ar' => 'ثُبّت الشريط المغناطيسي على البطاقات البلاستيكية باستخدام مكواة؛ فقد اقترحت زوجة مهندس IBM فورست باري استعمال المكواة التي كانت تستخدمها للملابس.',
                'source_url' => 'https://www.ibm.com/history/magnetic-stripe',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'Une dette liée au prêt initial de la Banque d’Angleterre au gouvernement en 1694 est restée dans ses comptes pendant 300 ans. Le gouvernement l’a remboursée en 1994, pour le tricentenaire de la Banque.',
                'en' => 'A debt tied to the Bank of England’s original 1694 government loan remained on its books for 300 years. The government repaid it in 1994, for the Bank’s tercentenary.',
                'ar' => 'ظلّ دين مرتبط بالقرض الحكومي الأول لبنك إنجلترا عام 1694 مسجّلًا في دفاتره 300 عام. وسدّدت الحكومة الدين عام 1994 بمناسبة مرور ثلاثة قرون على تأسيس البنك.',
                'source_url' => 'https://www.bankofengland.co.uk/freedom-of-information/2020/details-of-the-bank-of-england-loan-to-the-government-in-1694',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'En 1933, les États-Unis ont frappé 445 500 pièces d’or de 20 dollars, puis ordonné leur fonte avant qu’elles n’entrent en circulation. Certaines ont pourtant disparu ; l’une a fini par être vendue légalement aux enchères après un accord exceptionnel.',
                'en' => 'In 1933, the United States minted 445,500 twenty-dollar gold coins, then ordered them melted before they entered circulation. Some nevertheless disappeared; one was eventually sold legally at auction after a unique settlement.',
                'ar' => 'صاغت الولايات المتحدة 445,500 قطعة ذهبية من فئة 20 دولارًا عام 1933، ثم أمرت بصهرها قبل تداولها. ومع ذلك اختفت بعض القطع؛ وانتهى الأمر ببيع إحداها قانونيًا في مزاد بعد تسوية استثنائية.',
                'source_url' => 'https://americanhistory.si.edu/explore/exhibitions/value-money/online/allure-money/american-rarities',
            ],
            [
                'major_slug' => 'finance',
                'fr' => 'Pour financer ses guerres, la Suède a émis plus de 40 millions de pièces d’urgence en cuivre en 1715. Certaines portaient des inscriptions comme « Jupiter », « Mars » ou « Rapide et prêt ».',
                'en' => 'To finance its wars, Sweden issued more than 40 million emergency copper coins in 1715. Some were inscribed with names such as “Jupiter,” “Mars,” or “Quick and ready.”',
                'ar' => 'لتمويل حروبها، أصدرت السويد أكثر من 40 مليون قطعة نقدية طارئة من النحاس عام 1715. وحملت بعضها نقوشًا مثل «جوبيتر» و«مارس» و«سريع ومستعد».',
                'source_url' => 'https://www.riksbank.se/en-gb/about-the-riksbank/history/historical-timeline',
            ],
        ]);
    }
}