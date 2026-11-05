<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class HealthCompetitionMajorSubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            'anesthesie-reanimation-fr' => ['Anesthésie-réanimation', 'ANR-FR'],
            'anesthesie-reanimation-ar' => ['التخدير والإنعاش', 'ANR-AR'],
            'assistance-medico-sociale-fr' => ['Assistance médico-sociale', 'AMS-FR'],
            'assistance-medico-sociale-ar' => ['المساعدة الطبية الاجتماعية', 'AMS-AR'],
            'infirmier-polyvalent-fr' => ['Infirmier polyvalent', 'INF-FR'],
            'infirmier-polyvalent-ar' => ['التمريض متعدد التخصصات', 'INF-AR'],
            'kinesitherapie-reeducation-fr' => ['Kinésithérapie et rééducation', 'KIN-FR'],
            'kinesitherapie-reeducation-ar' => ['العلاج الطبيعي وإعادة التأهيل', 'KIN-AR'],
            'laboratoire-medical-fr' => ['Laboratoire médical', 'LAB-FR'],
            'laboratoire-medical-ar' => ['المختبرات الطبية', 'LAB-AR'],
            'technicien-radiologie-fr' => ['Techniques de radiologie', 'RAD-FR'],
            'technicien-radiologie-ar' => ['تقنيات الأشعة', 'RAD-AR'],
            'sage-femme-fr' => ['Sage-femme', 'SFM-FR'],
            'sage-femme-ar' => ['القبالة', 'SFM-AR'],
        ];

        DB::transaction(function () use ($subjects): void {
            $major = Major::updateOrCreate(
                ['slug' => 'health-competition'],
                [
                    'name' => 'مباراة الصحة',
                    'icon' => 'local_hospital',
                    'description' => 'اختبارات تدريبية بالعربية والفرنسية للتحضير لمباريات قطاع الصحة بالمغرب.',
                    'is_active' => true,
                ]
            );

            // The quiz seeders look up subjects by slug across all majors.
            $conflictingSubject = Subject::whereIn('slug', array_keys($subjects))
                ->where('major_id', '!=', $major->id)
                ->first();

            if ($conflictingSubject !== null) {
                throw new RuntimeException(
                    "Subject slug '{$conflictingSubject->slug}' belongs to another major. Resolve the conflict before running this seeder."
                );
            }

            foreach ($subjects as $slug => [$name, $code]) {
                Subject::updateOrCreate(
                    ['major_id' => $major->id, 'slug' => $slug],
                    [
                        'year' => 'N/A',
                        'code' => $code,
                        'name' => $name,
                        'description' => str_ends_with($slug, '-ar')
                            ? 'اختبارات تدريبية للتحضير لمباريات قطاع الصحة بالمغرب.'
                            : 'QCM de préparation aux concours du secteur de la santé au Maroc.',
                        'is_active' => true,
                    ]
                );
            }
        });
    }
}
