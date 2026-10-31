<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArabicFactsSeeder extends Seeder
{
    use ImportsFacts;
    
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'arabic',
                'fr' => 'Dans les textes arabes courants, les voyelles brèves sont généralement omises. Un même squelette de consonnes peut donc parfois correspondre à plusieurs lectures ; les signes vocaliques sont ajoutés lorsqu’une prononciation précise est nécessaire.',
                'en' => 'In ordinary Arabic texts, short vowels are usually omitted. The same consonant skeleton can therefore sometimes allow several readings; vowel marks are added when a precise pronunciation is needed.',
                'ar' => 'تُحذف الحركات القصيرة عادةً من النصوص العربية العادية. لذلك قد يحتمل الهيكل نفسه من الحروف الساكنة أكثر من قراءة، وتُضاف الحركات عندما تكون هناك حاجة إلى نطق دقيق.',
                'source_url' => 'https://www.cambridge.org/core/books/abs/reference-grammar-of-modern-standard-arabic/phonology-and-script/8CF8574CCCBC16657222C37874905587',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'La plupart des lettres arabes changent de forme selon leur position dans le mot et les lettres auxquelles elles se joignent. Certaines lettres interrompent la liaison avec la lettre suivante, même au milieu d’un mot.',
                'en' => 'Most Arabic letters change shape depending on their position in a word and which letters they join. Some letters interrupt the connection to the following letter, even in the middle of a word.',
                'ar' => 'يتغير شكل معظم الحروف العربية بحسب موقعها في الكلمة والحروف التي تتصل بها. وتقطع بعض الحروف الاتصال بالحرف التالي، حتى عندما تأتي في وسط الكلمة.',
                'source_url' => 'https://www.open.edu/openlearn/mod/oucontent/view.php?id=171153&section=13',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'Plusieurs lettres arabes partagent presque la même forme de base et se distinguent par leurs points. Par exemple, ب، ت et ث ont un tracé semblable, mais diffèrent par la position et le nombre de points.',
                'en' => 'Several Arabic letters share almost the same basic shape and are distinguished by their dots. For example, ب، ت, and ث have similar outlines but differ in the number and position of their dots.',
                'ar' => 'تتشابه أشكال الحروف الأساسية لعدد من الحروف العربية، وتُميَّز بالنقاط. فمثلًا، تتشابه الحروف ب وت وث في رسمها، لكنها تختلف في عدد النقاط ومواضعها.',
                'source_url' => 'https://pmc.ncbi.nlm.nih.gov/articles/PMC4980158/',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'L’article défini ال s’écrit toujours avec la lettre ل, mais celle-ci ne se prononce pas devant 14 « lettres solaires » : elle s’assimile à la consonne suivante, comme dans الشَّمس, prononcé ash-shams.',
                'en' => 'The definite article ال is always written with the letter ل, but that letter is not pronounced before the 14 “sun letters”: it assimilates to the next consonant, as in الشَّمس, pronounced ash-shams.',
                'ar' => 'تُكتب أداة التعريف «الـ» دائمًا بحرف اللام، لكن اللام لا تُنطق قبل «الحروف الشمسية» الأربعة عشر، بل تُدغم في الحرف التالي، كما في «الشَّمس» التي تُنطق «أشّمس».',
                'source_url' => 'https://openbooks.lib.msu.edu/arb101/chapter/grammar-and-writing-2/',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'De nombreux mots arabes sont construits à partir d’une racine, souvent composée de trois consonnes, combinée à différents modèles de voyelles et de lettres. Les dictionnaires arabes classent souvent les mots sous leur racine plutôt que selon leur orthographe complète.',
                'en' => 'Many Arabic words are built from a root, often made of three consonants, combined with different vowel and letter patterns. Arabic dictionaries often organize words under their root rather than by their full spelling.',
                'ar' => 'تُبنى كلمات عربية كثيرة على جذر، غالبًا ما يتكوّن من ثلاثة أحرف ساكنة، يُركّب مع أوزان مختلفة من الحركات والحروف. وغالبًا ما ترتّب المعاجم العربية الكلمات تحت جذورها بدلًا من ترتيبها وفق كتابتها الكاملة.',
                'source_url' => 'https://www.cambridge.org/core/books/reference-grammar-of-modern-standard-arabic/207FA6CB610D541184C4B8CB10A4084A/listing',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'En arabe, certains pluriels ne se forment pas en ajoutant simplement une terminaison : la structure interne du mot change. Ainsi, كتاب (kitāb, « livre ») devient كتب (kutub, « livres »). Les chercheurs recensent des dizaines de modèles de pluriel brisé.',
                'en' => 'In Arabic, some plurals are not formed simply by adding an ending: the word’s internal structure changes. For example, كتاب (kitāb, “book”) becomes كتب (kutub, “books”). Researchers have documented dozens of broken-plural patterns.',
                'ar' => 'لا تتكوّن بعض صيغ الجمع في العربية بإضافة نهاية فحسب، بل يتغير تركيب الكلمة من الداخل. فمثلًا، تتحول «كتاب» إلى «كتب». وقد وثّق الباحثون عشرات الأوزان لهذا النوع من الجمع، المسمى جمع التكسير.',
                'source_url' => 'https://pmc.ncbi.nlm.nih.gov/articles/PMC4192858/',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'Dans une phrase nominale arabe au présent, le verbe équivalent à « être » est souvent absent. Par exemple, « Maryam est ingénieure » peut s’exprimer par مريم مهندسة (Maryam muhandisa), sans mot séparé pour « est ».',
                'en' => 'In an Arabic present-tense nominal sentence, the equivalent of “to be” is often absent. For example, “Maryam is an engineer” can be expressed as مريم مهندسة (Maryam muhandisa), with no separate word for “is.”',
                'ar' => 'في الجملة الاسمية العربية في الزمن الحاضر، غالبًا ما يُحذف الفعل المقابل لـ«يكون». فمثلًا يمكن التعبير عن «مريم مهندسة» بهذه الصيغة نفسها، من دون كلمة مستقلة تعني «هي تكون».',
                'source_url' => 'https://elon.io/grammar/arabic-modern-standard/word-order-agreement/nominal-vs-verbal',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'L’arabe standard possède une forme grammaticale spéciale pour désigner exactement deux personnes ou deux choses, appelée le duel. Beaucoup de langues, dont le français et l’anglais, utilisent plutôt leur forme plurielle.',
                'en' => 'Modern Standard Arabic has a special grammatical form for exactly two people or things, called the dual. Many languages, including French and English, use their plural form instead.',
                'ar' => 'توجد في العربية الفصحى صيغة نحوية خاصة للدلالة على شخصين أو شيئين بالضبط، وتُسمى المثنى. أما لغات كثيرة، منها الفرنسية والإنجليزية، فتستخدم صيغة الجمع للدلالة على الاثنين.',
                'source_url' => 'https://scholarworks.sjsu.edu/etd_theses/4530/',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'L’écriture arabe a été adaptée pour écrire des langues appartenant à d’autres familles linguistiques, notamment le persan, l’ourdou, le pachto et le kurde. Elles utilisent des variantes de l’écriture arabe, avec des ajustements pour leurs sons.',
                'en' => 'Arabic script has been adapted to write languages from other language families, including Persian, Urdu, Pashto, and Kurdish. These use variants of Arabic script, with adjustments for their sounds.',
                'ar' => 'استُخدم الخط العربي لكتابة لغات تنتمي إلى عائلات لغوية أخرى، منها الفارسية والأردية والبشتوية والكردية. وتستخدم هذه اللغات نسخًا معدّلة من الخط العربي لتناسب أصواتها.',
                'source_url' => 'https://link.springer.com/chapter/10.1007/978-981-92-4324-2_13',
            ],
            [
                'major_slug' => 'arabic',
                'fr' => 'Dans un paragraphe arabe, les lettres se lisent de droite à gauche, mais les chiffres latins comme 2026 restent ordonnés de gauche à droite. Un même texte mélange donc des segments écrits dans les deux directions.',
                'en' => 'In an Arabic paragraph, letters are read from right to left, but Latin digits such as 2026 remain ordered from left to right. A single text can therefore mix segments written in both directions.',
                'ar' => 'في الفقرة العربية، تُقرأ الحروف من اليمين إلى اليسار، لكن الأرقام الغربية مثل 2026 تبقى مرتبة من اليسار إلى اليمين. لذلك قد يجمع النص الواحد مقاطع مكتوبة في اتجاهين مختلفين.',
                'source_url' => 'https://www.w3.org/International/articles/inline-bidi-markup/uba-basics',
            ],
        ]);
    }
}
