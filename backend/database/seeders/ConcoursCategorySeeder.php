<?php

namespace Database\Seeders;

use App\Models\ConcoursCategory;
use Illuminate\Database\Seeder;

class ConcoursCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['education', 'Éducation', 'التعليم'],
            ['security-military', 'Sécurité et armée', 'الأمن والقوات المسلحة'],
            ['health-medicine', 'Santé et médecine', 'الصحة والطب'],
            ['public-administration', 'Administration publique', 'الإدارة العمومية'],
            ['finance-economics', 'Finance et économie', 'المالية والاقتصاد'],
            ['academic-admissions-examinations', 'Admissions et examens académiques', 'الولوج إلى المؤسسات والامتحانات الأكاديمية'],
        ];
        foreach ($categories as $order => [$slug, $french, $arabic]) {
            // Preserve administrator edits and activation choices on subsequent runs.
            ConcoursCategory::firstOrCreate(['slug' => $slug], [
                'parent_id' => null, 'name_fr' => $french, 'name_ar' => $arabic,
                'display_order' => $order, 'is_active' => true,
            ]);
        }
    }
}
