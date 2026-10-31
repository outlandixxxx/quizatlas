<?php

namespace App\Services\ConcoursDiscovery;

class CandidateClassifier
{
    // Fixed editorial search hints, never extracted institution/grade/deadline facts.
    public function topic(string $title): string
    {
        $text = mb_strtolower(html_entity_decode(strip_tags($title), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        foreach (['Enseignement' => 'enseign|éducation|education|التعليم|التربية',
            'Police' => 'police|dgsn|الأمن الوطني|الامن الوطني',
            'Gendarmerie' => 'gendarmerie|الدرك', 'Forces armées' => '\\bfar\\b|forces armées|القوات المسلحة',
            'Santé' => 'santé|sante|chu\\b|الصحة|الطب|ممرض',
            'Enseignement supérieur' => 'universit|facult[ée]|master|licence|ingénieur|ingenieur|جامعة|كلية|ماستر|مهندس|إجازة|اجازة',
            'Administration' => 'minist[èe]re|commune|province|pr[ée]fecture|وزارة|جماعة|جماعات|إقليم|عمالة'] as $label => $pattern) {
            if (preg_match('~'.$pattern.'~u', $text)) {
                // Engineering employment must not be described as academic admissions.
                return $label === 'Enseignement supérieur' && $this->classify($title)['candidate_category'] === 'employment'
                    ? 'Recrutement public / technique' : $label;
            }
        }

        return 'Secteur à confirmer';
    }

    public function classify(string $title): array
    {
        $text = mb_strtolower(html_entity_decode(strip_tags($title), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        $has = fn (string $pattern) => (bool) preg_match('~'.$pattern.'~u', $text);
        $type = match (true) {
            $has('report|annul|rectific|prolong|modific|additif|إلغاء|الغاء|تأجيل|تمديد|تعديل|استدراك') => 'amendment',
            $has('présélect|preselect|convoqu|convocation|liste.*(candidat|retenu)|انتقاء|المدعوين|مرشحي|المقبولين.*لاجتياز') => 'preselection',
            $has('résultat|resultat|admis\b|admissib|نتائج|الناجحين') => 'results',
            default => 'opening',
        };
        $academic = $has('master\b|ماستر|ماسـتر|cycle.*ingénieur|cycle.*ingenieur|école.*ingénieur|ecole.*ingenieur|سلك.*مهندس|ens[acm]\b|ensam\b|ensias\b|encg\b|مدارس.*مهندس')
            && $has('concours|admission|accès|acces|candidatur|inscription|sélection|selection|مبار|ولوج|ترشيح|تسجيل|نتائج|انتقاء');
        $university = $has('universit|faculté|faculte|جامعة|كلية')
            && $has('concours.*(accès|acces|admission)|admission|ولوج|ولوج.*مباراة');
        $selectiveLicence = $has('licence\\b|إجازة|اجازة')
            && $has('admission|accès|acces|sélection|selection|ولوج|انتقائي|انتقاء');
        // These exact institutional names contain "promotion" as part of their name.
        // Mask only those names for advertising checks, including the article URL slug.
        $promotionEmployers = 'office[\s-]+de[\s-]+la[\s-]+formation[\s-]+professionnelle[\s-]+et[\s-]+de[\s-]+la[\s-]+promotion[\s-]+du[\s-]+travail'
            .'|agence[\s-]+nationale[\s-]+de[\s-]+promotion[\s-]+de[\s-]+l[\x{0027}\x{2019}\s-]+emploi[\s-]+et[\s-]+des[\s-]+comp[ée]tences';
        $noiseText = preg_replace('~'.$promotionEmployers.'~u', ' ', $text);
        $noise = (bool) preg_match('~sponsor|publicité|publicite|promotion|webinaire|webinar|masterclass|formation continue|actualité|actualite|guide|conseils|loi de finances|الجريدة الرسمية|مشروع قانون|أخبار|دورة تكوينية|إشهار|اشهار~u', $noiseText);
        $private = $has('centre.*appel|téléconseill|teleconseill|conseiller.*téléphone|أطلس أون لاين|مستشار.*هاتف|hegelmann|marjane|carrefour|attijari|bmce|banque populaire|entreprise privée|secteur privé');
        $public = $has('bank al[ -]maghrib|بنك المغرب|agence[ s]+urbaine|agence.*publique|[ée]tablissement public|h[ôo]pital public|centre hospitalier|minist[èe]re|fonction publique|administration publique|commune|province|pr[ée]fecture|office national|office r[ée]gional|agence.*(nationale|marocaine)|conseil.*(sup[ée]rieur|r[ée]gional)|tribun|universit|facult[ée]|ofppt|oncf|onee|onca|cnss|chu\b|dgsn|police|\bfar\b|forces armées royales|gendarmerie|forces auxiliaires|protection civile|santé publique|[ée]ducation nationale|enseign|وزارة|وزار|المجلس|مجلس|الجماعات|جماعة|عمالة|إقليم|اقليم|المكتب|مكتب|الوكالة|وكالة|جامعة|كلية|الصحة|التربية|التعليم|الأمن الوطني|الامن الوطني|الدرك|القوات|الوقاية المدنية');
        // Narrow name/expanded-acronym gaps demonstrated by the saved 100-item response.
        // Hints suggest scope only; they do not verify employers or alter declared metadata.
        $public = $public || $has($promotionEmployers.'|\boffice[\s-]+des[\s-]+changes\b'
            .'|\bcentre[\s-]+national[\s-]+pour[\s-]+la[\s-]+recherche[\s-]+scientifique[\s-]+et[\s-]+technique\b|\bcnrst\b'
            .'|\bcaisse[\s-]+de[\s-]+d[ée]p[ôo]t[\s-]+et[\s-]+de[\s-]+gestion\b'
            .'|\bcentre[\s-]+r[ée]gional[\s-]+d[\x{0027}\x{2019}\s-]+investissement\b'
            .'|\blaboratoire[\s-]+public[\s-]+des[\s-]+essais[\s-]+et[\s-]+des[\s-]+[ée]tudes\b'
            .'|\b[ée]cole[\s-]+nationale[\s-]+d[\x{0027}\x{2019}\s-]+agriculture[\s-]+de[\s-]+mekn[èe]s\b'
            .'|\bunivesit[ée][\s-]+choua[ïi]b[\s-]+doukkali\b');
        $opportunity = $has('concours|recrut|مباراة|مباريات|توظيف');
        $universityJobWithoutCompetition = $has('universit|facult[ée]|جامعة|كلية') && ! $has('concours|مباراة|مباريات');
        $category = match (true) {
            $noise, $private, ($has('recrut|توظيف') && ! $public) => 'excluded',
            // A degree requirement (e.g. Master) does not turn public recruitment into admissions.
            $public && $opportunity && ! $universityJobWithoutCompetition && $has('recrut|توظيف') => 'employment',
            $academic, $university, $selectiveLicence => 'academic',
            $public && $opportunity && ! $universityJobWithoutCompetition => 'employment',
            default => 'excluded',
        };

        return ['candidate_category' => $category, 'candidate_type' => $category === 'excluded' ? 'unknown' : $type,
            'classification_reason' => $category === 'excluded' ? 'no_identifiable_public_or_academic_competition' : 'title_keywords_suggestion_only'];
    }
}
