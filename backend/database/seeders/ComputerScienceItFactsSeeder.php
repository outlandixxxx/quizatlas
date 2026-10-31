<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputerScienceItFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le célèbre « bug » informatique était bien un vrai insecte : en 1947, des ingénieurs ont trouvé une mite coincée dans l’ordinateur Mark II et l’ont collée dans leur journal. Le mot « bug » désignait déjà des défauts mécaniques depuis plus d’un siècle.',
                'en' => 'The famous computer “bug” was a real insect: in 1947, engineers found a moth stuck in the Mark II computer and taped it into their logbook. The word “bug” had already been used for mechanical faults for over a century.',
                'ar' => 'كانت «العلّة» الحاسوبية الشهيرة حشرةً حقيقية: ففي عام 1947 عثر مهندسون على عثة عالقة في حاسوب Mark II وثبّتوها في سجلّهم. لكن كلمة «bug» كانت تُستخدم للأعطال الميكانيكية منذ أكثر من قرن.',
                'source_url' => 'https://www.americanhistory.si.edu/collections/object/nmah_334663',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le premier prototype de souris informatique, construit en 1964, avait une coque en bois, un seul bouton et des roues pour suivre les mouvements.',
                'en' => 'The first computer mouse prototype, built in 1964, had a wooden shell, one button, and wheels to track its movement.',
                'ar' => 'كان النموذج الأولي لفأرة الحاسوب، الذي صُنع عام 1964، ذا غلاف خشبي وزر واحد وعجلات لتتبّع حركته.',
                'source_url' => 'https://www.sri.com/hoi/computer-mouse-and-interactive-computing/',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'La première webcam a été installée pour surveiller une cafetière à Cambridge : les chercheurs voulaient vérifier s’il restait du café avant de traverser le couloir.',
                'en' => 'The first webcam was set up to watch a coffee pot in Cambridge: researchers wanted to check whether coffee was left before walking down the corridor.',
                'ar' => 'وُضعت أول كاميرا ويب لمراقبة إبريق قهوة في كامبريدج؛ أراد الباحثون التأكد من بقاء القهوة قبل عبور الممر.',
                'source_url' => 'https://www.cl.cam.ac.uk/coffee/qsf/timeline.html',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le tout premier e-mail était un message test envoyé par Ray Tomlinson à lui-même entre deux ordinateurs côte à côte ; il ressemblait à « QWERTYUIOP » et passait par ARPANET.',
                'en' => 'The first email was a test message Ray Tomlinson sent to himself between two computers sitting side by side; it looked something like “QWERTYUIOP” and travelled over ARPANET.',
                'ar' => 'كانت أول رسالة بريد إلكتروني رسالةً تجريبية أرسلها راي توملينسون إلى نفسه بين حاسوبين متجاورين؛ وكان نصها شبيهًا بـ«QWERTYUIOP» وعبرت شبكة أربانت.',
                'source_url' => 'https://www.computinghistory.org.uk/det/6116/first-e-mail-sent-by-ray-tomlinson',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Ray Tomlinson a choisi le symbole « @ » pour séparer le nom du destinataire de sa machine dans une adresse e-mail.',
                'en' => 'Ray Tomlinson chose the “@” symbol to separate a recipient’s name from their machine in an email address.',
                'ar' => 'اختار راي توملينسون الرمز «@» للفصل بين اسم المستلِم واسم الحاسوب في عنوان البريد الإلكتروني.',
                'source_url' => 'https://www.computerhistory.org/timeline/networking-the-web/',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le premier site web au monde parlait du World Wide Web lui-même : il expliquait le projet qui l’avait créé.',
                'en' => 'The world’s first website was about the World Wide Web itself: it explained the project that created it.',
                'ar' => 'كان أول موقع ويب في العالم يتحدث عن الويب نفسه، ويشرح المشروع الذي أنشأه.',
                'source_url' => 'https://home.cern/science/computing/the-birth-of-the-web',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Pour éviter que quelqu’un n’éteigne par erreur le premier serveur web, Tim Berners-Lee a collé dessus un avertissement manuscrit : « This machine is a server. DO NOT POWER IT DOWN!! »',
                'en' => 'To stop anyone from accidentally switching off the first web server, Tim Berners-Lee put a handwritten warning on it: “This machine is a server. DO NOT POWER IT DOWN!!”',
                'ar' => 'حتى لا يُطفئ أحدٌ أول خادم ويب عن طريق الخطأ، وضع تيم بيرنرز لي عليه تحذيرًا مكتوبًا بخط اليد: «This machine is a server. DO NOT POWER IT DOWN!!».',
                'source_url' => 'https://home.cern/science/computing/the-birth-of-the-web/short-history-web/',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le premier nom de domaine « .com » enregistré fut symbolics.com, le 15 mars 1985, avant que le Web ne devienne accessible au grand public.',
                'en' => 'The first registered “.com” domain was symbolics.com, on March 15, 1985, before the Web became publicly accessible.',
                'ar' => 'كان أول نطاق «.com» مسجّل هو symbolics.com، وذلك في 15 مارس 1985، قبل أن يصبح الويب متاحًا للجمهور.',
                'source_url' => 'https://investor.verisign.com/news-releases/news-release-details/verisign-marks-25-years-com/',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le disque dur IBM RAMAC de 1956 stockait environ 5 à 10 Mo, occupait l’espace de deux réfrigérateurs et pesait plus d’une tonne.',
                'en' => 'The 1956 IBM RAMAC disk system stored about 5–10 MB, took up the space of two refrigerators, and weighed more than a ton.',
                'ar' => 'كان نظام الأقراص IBM RAMAC لعام 1956 يخزّن نحو 5 إلى 10 ميغابايت، ويشغل مساحة ثلاجتين، ويزن أكثر من طن.',
                'source_url' => 'https://www.ibm.com/history/ramac',
            ],
            [
                'major_slug' => 'computer-science-it',
                'fr' => 'Le jeu informatique Spacewar! s’inspirait des romans de science-fiction Lensman. Le groupe qui l’a développé portait un nom de laboratoire prestigieux, mais ses réunions avaient lieu chez l’un des créateurs.',
                'en' => 'The computer game Spacewar! was inspired by the Lensman science-fiction novels. Its developers used an impressive-sounding research-group name, but met at one creator’s home.',
                'ar' => 'استُلهمت لعبة الحاسوب Spacewar! من روايات الخيال العلمي Lensman. واتخذ مطوّروها اسم مجموعة بحثية فخمًا، لكن اجتماعاتهم كانت تُعقد في منزل أحدهم.',
                'source_url' => 'https://www.computerhistory.org/pdp-1/spacewar/',
            ],
        ]);
    }
}