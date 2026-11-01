<?php

namespace Database\Seeders;

use App\Models\ConcoursCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Morocco Concours preparation taxonomy, with French slugs for all six main categories.
 * New children are inactive; existing children keep their activation state.
 * Previous English parent slugs are renamed in place to preserve IDs.
 * Parent names/order are synchronized with the agreed taxonomy; no deletes.
 * Does not modify concours, PDFs or QCM relationships.
 */
class ConcoursCategorySeeder extends Seeder
{
    public function run(): void
    {
        $hierarchy = [
            [
                'slug' => 'enseignement',
                'fr' => 'Enseignement',
                'ar' => 'التعليم',
                'children' => [
                    ['enseignement-primaire', 'Enseignement primaire', 'التعليم الابتدائي'],
                    ['enseignement-college', 'Enseignement secondaire collégial', 'التعليم الثانوي الإعدادي'],
                    ['enseignement-lycee', 'Enseignement secondaire qualifiant', 'التعليم الثانوي التأهيلي'],
                    ['administration-pedagogique', 'Administration pédagogique', 'الإدارة التربوية'],
                    ['inspection-orientation', 'Inspection et orientation', 'التفتيش والتوجيه'],
                ],
            ],
            [
                'slug' => 'securite-forces-armees',
                'fr' => 'Sécurité et forces armées',
                'ar' => 'الأمن والقوات المسلحة',
                'children' => [
                    ['surete-nationale', 'Sûreté nationale (Police)', 'الأمن الوطني (الشرطة)'],
                    ['forces-armees-royales', 'Forces armées royales (FAR)', 'القوات المسلحة الملكية'],
                    ['gendarmerie-royale', 'Gendarmerie royale', 'الدرك الملكي'],
                    ['forces-auxiliaires', 'Forces auxiliaires', 'القوات المساعدة'],
                    ['protection-civile', 'Protection civile', 'الوقاية المدنية'],
                    ['administration-penitentiaire', 'Administration pénitentiaire', 'إدارة السجون'],
                ],
            ],
            [
                'slug' => 'sante-medecine',
                'fr' => 'Santé et médecine',
                'ar' => 'الصحة والطب',
                'children' => [
                    ['medecins', 'Médecins', 'الأطباء'],
                    ['infirmiers', 'Soins infirmiers', 'التمريض'],
                    ['techniciens-sante', 'Techniciens de santé', 'تقنيو الصحة'],
                    ['professions-paramedicales', 'Professions paramédicales', 'المهن شبه الطبية'],
                ],
            ],
            [
                'slug' => 'administrations-etablissements-publics',
                'fr' => 'Administrations et établissements publics',
                'ar' => 'الإدارات والمؤسسات العمومية',
                'children' => [
                    ['ministeres-administrations', 'Ministères et administrations', 'الوزارات والإدارات'],
                    ['collectivites-territoriales', 'Collectivités territoriales', 'الجماعات الترابية'],
                    ['justice', 'Justice et métiers judiciaires', 'العدل والقضاء'],
                    ['oncf', 'ONCF', 'المكتب الوطني للسكك الحديدية ONCF'],
                    ['onee', 'ONEE', 'المكتب الوطني للكهرباء والماء الصالح للشرب ONEE'],
                    ['onda', 'ONDA', 'المكتب الوطني للمطارات ONDA'],
                    ['anp', 'ANP', 'الوكالة الوطنية للموانئ ANP'],
                    ['poste-maroc', 'Poste Maroc', 'بريد المغرب'],
                    ['autres-etablissements-publics', 'Autres établissements publics', 'مؤسسات عمومية أخرى'],
                ],
            ],
            [
                'slug' => 'finances-economie',
                'fr' => 'Finance et économie',
                'ar' => 'المالية والاقتصاد',
                'children' => [
                    ['douanes', 'Douanes', 'الجمارك'],
                    ['impots', 'Impôts', 'الضرائب'],
                    ['tresorerie-generale', 'Trésorerie générale du Royaume', 'الخزينة العامة للمملكة'],
                    ['finances-publiques', 'Concours des finances publiques', 'مباريات المالية العمومية'],
                ],
            ],
            [
                'slug' => 'etudes-examens-admissions',
                'fr' => 'Études, examens et admissions',
                'ar' => 'الدراسات والامتحانات والولوج',
                'children' => [
                    ['bac-libre', 'Baccalauréat libre', 'الباك الحر'],
                    ['medecine-pharmacie-dentaire', 'Médecine, pharmacie et médecine dentaire', 'الطب والصيدلة وطب الأسنان'],
                    ['ensa', 'ENSA', 'المدارس الوطنية للعلوم التطبيقية ENSA'],
                    ['encg', 'ENCG', 'المدارس الوطنية للتجارة والتسيير ENCG'],
                    ['bts', 'BTS', 'أقسام تحضير شهادة التقني العالي BTS'],
                    ['ofppt', 'OFPPT', 'مؤسسات التكوين المهني OFPPT'],
                    ['autres-admissions', 'Autres concours et admissions', 'مباريات الولوج والدراسات الأخرى'],
                ],
            ],
        ];

        // Rename previously seeded parent categories in place to retain their IDs
        // and any existing concours/category relationships.
        $legacySlugs = [
            'education' => 'enseignement',
            'security-military' => 'securite-forces-armees',
            'health-medicine' => 'sante-medecine',
            'public-administration' => 'administrations-etablissements-publics',
            'finance-economics' => 'finances-economie',
            'academic-admissions-examinations' => 'etudes-examens-admissions',
        ];

        DB::transaction(function () use ($hierarchy, $legacySlugs): void {
            foreach ($legacySlugs as $oldSlug => $newSlug) {
                $old = ConcoursCategory::query()->where('slug', $oldSlug)->first();
                if (! $old) {
                    continue;
                }

                if (ConcoursCategory::query()->where('slug', $newSlug)->exists()) {
                    throw new \RuntimeException(
                        "Cannot rename concours category '{$oldSlug}' to '{$newSlug}': destination slug already exists."
                    );
                }

                $old->slug = $newSlug;
                $old->save();
            }

            foreach ($hierarchy as $parentOrder => $category) {
                $parent = ConcoursCategory::query()->firstOrNew(['slug' => $category['slug']]);
                $parent->fill([
                    'parent_id' => null,
                    'name_fr' => $category['fr'],
                    'name_ar' => $category['ar'],
                    'display_order' => $parentOrder,
                    'is_active' => true,
                ]);
                $parent->save();

                foreach ($category['children'] as $childOrder => [$slug, $nameFr, $nameAr]) {
                    $child = ConcoursCategory::query()->firstOrNew(['slug' => $slug]);
                    $wasNew = ! $child->exists;
                    $child->fill([
                        'parent_id' => $parent->id,
                        'name_fr' => $nameFr,
                        'name_ar' => $nameAr,
                        'display_order' => $childOrder + 1,
                    ]);
                    // Never deactivate a child that an admin already activated.
                    if ($wasNew) {
                        $child->is_active = false;
                    }
                    $child->save();
                }
            }
        });
    }
}
