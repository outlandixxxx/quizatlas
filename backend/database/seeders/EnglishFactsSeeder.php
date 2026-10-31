<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnglishFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'english',
                'fr' => 'Ernest Vincent Wright a écrit le roman *Gadsby* — plus de 50 000 mots — sans utiliser la lettre « e ». Il a même attaché la touche « e » de sa machine à écrire pour éviter de la taper par accident.',
                'en' => 'Ernest Vincent Wright wrote the novel *Gadsby*—over 50,000 words—without using the letter “e.” He even tied down the “e” key on his typewriter to avoid hitting it by accident.',
                'ar' => 'كتب إرنست فنسنت رايت رواية *Gadsby* التي تزيد على 50 ألف كلمة من دون استخدام حرف «e». بل ربط مفتاح «e» في آلته الكاتبة كي لا يضغط عليه عرضًا.',
                'source_url' => 'https://www.gutenberg.org/cache/epub/47342/pg47342-images.html',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Les mots anglais *cwm* et *crwth*, empruntés au gallois, ne contiennent aucune des lettres habituelles pour les voyelles (a, e, i, o, u, y). Dans ces mots, « w » représente un son vocalique proche de « ou ».',
                'en' => 'The English words *cwm* and *crwth*, borrowed from Welsh, contain none of the usual vowel letters (a, e, i, o, u, y). In these words, “w” represents a vowel sound similar to “oo.”',
                'ar' => 'الكلمتان الإنجليزيتان *cwm* و*crwth*، وهما مستعارتان من الويلزية، لا تحتويان على أي من حروف العلة المعتادة (a, e, i, o, u, y). وفيهما يمثّل الحرف «w» صوتًا علّيًا قريبًا من «oo».',
                'source_url' => 'https://www.dictionary.com/articles/words-without-vowels',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'La phrase « Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo » est grammaticalement correcte : *Buffalo* peut désigner la ville de Buffalo, un bison ou le verbe « intimider ».',
                'en' => 'The sentence “Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo” is grammatically correct: *Buffalo* can refer to the city, a bison, or the verb meaning “to bully.”',
                'ar' => 'الجملة «Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo» صحيحة نحويًا؛ فكلمة *Buffalo* قد تشير إلى مدينة بافالو أو إلى البيسون أو إلى فعل بمعنى «يتنمّر على».',
                'source_url' => 'https://www.cse.buffalo.edu/~rapaport/buffalobuffalo.html',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Le mot *goodbye* vient d’une ancienne formule signifiant « God be with you » (« Que Dieu soit avec vous »). *Good* a remplacé *God*, probablement sous l’influence de salutations comme *good day*.',
                'en' => 'The word *goodbye* comes from the old phrase “God be with you.” *Good* replaced *God*, probably by analogy with greetings such as *good day*.',
                'ar' => 'تأتي كلمة *goodbye* من العبارة القديمة «God be with you» أي «ليكن الله معك». وحلّت *good* محل *God* على الأرجح بتأثير تحيات مثل *good day*.',
                'source_url' => 'https://www.oxfordlearnersdictionaries.com/definition/english/goodbye',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'En moyen anglais, *girl* désignait un enfant ou un jeune de l’un ou l’autre sexe. Le mot a pris son sens actuel de « fille » avec le temps.',
                'en' => 'In Middle English, *girl* referred to a child or young person of either sex. It acquired its current female meaning over time.',
                'ar' => 'في الإنجليزية الوسطى، كانت كلمة *girl* تشير إلى طفل أو شاب من أيٍّ من الجنسين. واكتسبت معناها الحالي «فتاة» لاحقًا.',
                'source_url' => 'https://www.oxfordlearnersdictionaries.com/definition/english/girl',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Le verbe *cleave* peut signifier « fendre » ou « s’attacher étroitement à ». Le même mot peut donc évoquer des actions opposées.',
                'en' => 'The verb *cleave* can mean either “to split apart” or “to cling closely to.” The same word can point to opposite actions.',
                'ar' => 'يمكن للفعل *cleave* أن يعني «يشطر» أو «يلتصق بشدة». وهكذا قد تشير الكلمة نفسها إلى فعلين متضادين.',
                'source_url' => 'https://dictionary.cambridge.org/dictionary/english/cleave',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Le mot *nickname* vient d’une mauvaise séparation de l’ancien *ekename*, qui signifiait « nom ajouté ». Avec le temps, le « n » de *an ekename* s’est rattaché au mot.',
                'en' => 'The word *nickname* arose when the old word *ekename*, meaning “an additional name,” was misdivided. Over time, the “n” from *an ekename* became attached to the word.',
                'ar' => 'نشأت كلمة *nickname* من إعادة تقسيم خاطئة للكلمة القديمة *ekename*، التي تعني «اسمًا إضافيًا». ومع الزمن، التصق بها حرف «n» من عبارة *an ekename*.',
                'source_url' => 'https://www.etymonline.com/word/nickname',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Autrefois, *nice* pouvait signifier « stupide » ou « ignorant ». Le mot a traversé plusieurs sens avant de prendre son sens courant de « agréable » ou « gentil ».',
                'en' => 'The word *nice* once meant “foolish” or “ignorant.” It passed through several meanings before acquiring its familiar sense of “pleasant” or “kind.”',
                'ar' => 'كانت كلمة *nice* تعني قديمًا «أحمق» أو «جاهل». ثم مرّت بعدة معانٍ قبل أن تكتسب معناها الشائع «لطيف» أو «ودود».',
                'source_url' => 'https://www.etymonline.com/word/nice',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Les mots *flammable* et *inflammable* signifient tous deux « qui peut prendre feu ». Ici, le préfixe *in-* ne rend pas le mot négatif.',
                'en' => 'Both *flammable* and *inflammable* mean “capable of catching fire.” Here, the prefix *in-* does not make the word negative.',
                'ar' => 'تعني كلمتا *flammable* و*inflammable* كلتاهما «قابل للاشتعال». وفي هذه الحالة لا تجعل السابقة *in-* المعنى منفيًا.',
                'source_url' => 'https://www.merriam-webster.com/dictionary/inflammable',
            ],
            [
                'major_slug' => 'english',
                'fr' => 'Le nom *sanction* peut désigner une pénalité, tandis que le verbe *to sanction* peut aussi signifier approuver ou autoriser officiellement. Selon le contexte, sanctionner peut donc vouloir dire punir ou donner son accord.',
                'en' => 'A *sanction* can be a penalty, while the verb *to sanction* can also mean to officially approve or authorize. Depending on context, sanctioning can mean punishing or giving permission.',
                'ar' => 'قد تعني *sanction* عقوبة، لكن الفعل *to sanction* قد يعني أيضًا الموافقة الرسمية أو الإذن. لذلك قد تعني الكلمة، بحسب السياق، المعاقبة أو الإقرار.',
                'source_url' => 'https://www.merriam-webster.com/dictionary/sanction',
            ],
        ]);
    }
}