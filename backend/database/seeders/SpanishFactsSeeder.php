<?php

namespace Database\Seeders;

use Database\Seeders\ImportsFacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpanishFactsSeeder extends Seeder
{
    use ImportsFacts;
    public function run(): void
    {
        $this->importFacts([
            [
                'major_slug' => 'spanish',
                'fr' => 'La nouvelle « El dinosaurio » d’Augusto Monterroso ne compte que sept mots : « Cuando despertó, el dinosaurio todavía estaba allí. »',
                'en' => 'Augusto Monterroso’s story “El dinosaurio” has only seven words: “Cuando despertó, el dinosaurio todavía estaba allí” (“When he woke up, the dinosaur was still there”).',
                'ar' => 'تتكوّن قصة «El dinosaurio» لأوغوستو مونتيروسو من سبع كلمات فقط: «Cuando despertó, el dinosaurio todavía estaba allí» أي «عندما استيقظ، كان الديناصور لا يزال هناك».',
                'source_url' => 'https://cvc.cervantes.es/ACTCULT/monterroso/acerca/zavala.htm',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Jusqu’en 2010, *ch* et *ll* étaient considérés comme des lettres distinctes de l’alphabet espagnol. Ce sont désormais des digrammes, c’est-à-dire des combinaisons de deux lettres.',
                'en' => 'Until 2010, *ch* and *ll* were treated as separate letters of the Spanish alphabet. They are now classified as digraphs, combinations of two letters.',
                'ar' => 'حتى عام 2010، كان الحرفان المركبان *ch* و*ll* يُعدّان حرفين مستقلين في الأبجدية الإسبانية. أمّا الآن فيُصنّفان ثنائيي الحروف، أي تركيبًا من حرفين.',
                'source_url' => 'https://www.fundeu.es/consulta/abecedario-1985/',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'L’Académie royale espagnole a recommandé les signes d’ouverture « ¿ » et « ¡ » dans son orthographe de 1754. Ils permettent de voir dès le début si une phrase longue est une question ou une exclamation.',
                'en' => 'The Spanish Royal Academy recommended the opening marks “¿” and “¡” in its 1754 orthography. They show from the start whether a long sentence is a question or an exclamation.',
                'ar' => 'أوصت الأكاديمية الملكية الإسبانية بعلامتي الاستفهام والتعجب الافتتاحيتين «¿» و«¡» في إملائها لعام 1754. وهما توضّحان منذ البداية ما إذا كانت الجملة الطويلة سؤالًا أم تعجبًا.',
                'source_url' => 'https://www.aal.edu.ar/?q=node%2F616',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Le tilde de la lettre *ñ* vient d’une petite lettre *n* placée au-dessus d’une autre *n* dans des manuscrits médiévaux pour abréger la double consonne.',
                'en' => 'The tilde in *ñ* began as a small *n* written above another *n* in medieval manuscripts to abbreviate the doubled consonant.',
                'ar' => 'بدأت علامة التلدة في الحرف *ñ* على شكل حرف *n* صغير فوق حرف *n* آخر في المخطوطات الوسيطة، اختصارًا للحرف المضعّف.',
                'source_url' => 'https://www.rtve.es/play/audios/preguntas-a-la-historia/1147-preguntas-historia-87-090512-donde-procede-enie-090512-2012-04-26t09-55-51103/1399973/',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Dans *Rayuela* de Julio Cortázar, le lecteur peut suivre deux parcours : lire les chapitres 1 à 56 dans l’ordre, ou commencer au chapitre 73 et suivre le parcours indiqué par l’auteur.',
                'en' => 'In Julio Cortázar’s *Rayuela*, readers can follow two routes: read chapters 1 to 56 in order, or start at chapter 73 and follow the sequence set out by the author.',
                'ar' => 'في رواية *Rayuela* لخوليو كورتاثار، يستطيع القارئ اختيار مسارين: قراءة الفصول من 1 إلى 56 بالترتيب، أو البدء بالفصل 73 واتباع التسلسل الذي حدّده الكاتب.',
                'source_url' => 'https://www.penguinlibros.com/es/literatura-contemporanea/6440-libro-rayuela-edicion-conmemorativa-9788420414706/fragmento',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Cervantes et Shakespeare sont souvent associés à la date du 23 avril 1616. Mais l’Angleterre utilisait alors le calendrier julien : la date de Shakespeare correspond au 3 mai dans le calendrier grégorien, utilisé en Espagne.',
                'en' => 'Cervantes and Shakespeare are often linked to April 23, 1616. But England was still using the Julian calendar: Shakespeare’s date corresponds to May 3 in the Gregorian calendar then used in Spain.',
                'ar' => 'غالبًا ما يُربط اسم ثربانتس واسم شكسبير بتاريخ 23 أبريل 1616. لكن إنجلترا كانت تستخدم التقويم اليولياني آنذاك؛ ويوافق تاريخ شكسبير 3 مايو في التقويم الغريغوري الذي كانت إسبانيا تستخدمه.',
                'source_url' => 'https://shc.stanford.edu/arcade/colloquies/shakespeare-and-cervantes-then-and-now',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'L’interjection espagnole *ojalá*, qui exprime un souhait, vient de l’arabe hispanique *law šá lláh*, « si Dieu le veut ». Une expression arabe s’est ainsi installée dans une formule courante de l’espagnol.',
                'en' => 'The Spanish interjection *ojalá*, used to express a wish, comes from Hispano-Arabic *law šá lláh*, “if God wills it.” An Arabic expression became part of everyday Spanish.',
                'ar' => 'تأتي أداة التمني الإسبانية *ojalá* من التعبير العربي الأندلسي *law šá lláh*، أي «لو شاء الله». وهكذا دخل تعبير عربي في استعمال إسباني يومي.',
                'source_url' => 'https://revistas.rae.es/bilrae/article/view/285/711',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'La forme *murciégalo* est plus ancienne que *murciélago*. La forme actuelle est aujourd’hui la plus courante, tandis que *murciégalo* figure encore dans le dictionnaire avec la marque « vulgaire ».',
                'en' => 'The form *murciégalo* is older than *murciélago*. The modern form is now much more common, while *murciégalo* remains in the dictionary marked as a vulgar usage.',
                'ar' => 'الصيغة *murciégalo* أقدم من *murciélago*. والصيغة الحديثة هي الأكثر شيوعًا الآن، بينما لا تزال *murciégalo* موجودة في القاموس مع وسم «عامية».',
                'source_url' => 'https://www.fundeu.es/consulta/murciegalomurcielago-1840/',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Dans *Niebla*, Miguel de Unamuno fait apparaître le personnage principal, Augusto Pérez, dans son bureau pour discuter avec lui. Unamuno lui annonce qu’il est un personnage fictif et qu’il va mourir.',
                'en' => 'In *Niebla*, Miguel de Unamuno brings the protagonist, Augusto Pérez, into his study to speak with him. Unamuno tells him that he is fictional and is going to die.',
                'ar' => 'في رواية *Niebla*، يُدخل ميغيل دي أونامونو الشخصية الرئيسية أوغوستو بيريث إلى مكتبه ليتحاور معه. ويخبره أونامونو بأنه شخصية خيالية وأن مصيره الموت.',
                'source_url' => 'https://descargas.intef.es/recursos_educativos/It_didac/Leng_ESO/4/09/05_Narrativa/niebla.html',
            ],
            [
                'major_slug' => 'spanish',
                'fr' => 'Avant que Cervantes ne publie la deuxième partie de *Don Quichotte*, un auteur anonyme avait déjà publié une fausse suite. Cervantes a répondu à cette suite en la faisant lire et critiquer par ses propres personnages.',
                'en' => 'Before Cervantes published the second part of *Don Quixote*, an anonymous author had already released a fake sequel. Cervantes answered it by having his own characters read and criticize that false continuation.',
                'ar' => 'قبل أن ينشر ثربانتس الجزء الثاني من *دون كيخوتي*، كان مؤلف مجهول قد نشر تتمة مزيفة. وردّ ثربانتس عليها بجعل شخصياته تقرأ تلك التتمة وتنتقدها.',
                'source_url' => 'https://www.gla.ac.uk/myglasgow/library/files/special/exhibns/hispanica/literature.html',
            ],
        ]);
    }
}