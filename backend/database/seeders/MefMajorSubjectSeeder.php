<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class MefMajorSubjectSeeder extends Seeder
{
    public function run(): void
    {
        // French subjects corresponding to the two existing QCM packs.
        // Prefixes prevent collisions with subjects belonging to other majors.
        $subjects = [
            'mef-culture-generale-fr' => ['Culture générale et institutions', 'MEF-CG'],
            'mef-topographie-fr' => ['Topographie', 'MEF-TOP'],
            'mef-maintenance-reseaux-fr' => ['Maintenance et réseaux informatiques', 'MEF-RES'],
            'mef-developpement-informatique-fr' => ['Développement informatique', 'MEF-DEV'],
            'mef-gestion-finance-comptabilite-fr' => ['Gestion, finance et comptabilité', 'MEF-GFC'],
            'mef-finances-publiques-fiscalite-fr' => ['Finances publiques et fiscalité', 'MEF-FPF'],
            'mef-politiques-publiques-economie-marocaine-fr' => ['Politiques publiques et économie marocaine', 'MEF-PEM'],
            'mef-microeconomie-macroeconomie-fr' => ['Microéconomie et macroéconomie', 'MEF-ECO'],
            'mef-gestion-financiere-comptabilite-audit-fr' => ['Gestion financière, comptabilité et audit', 'MEF-AUD'],
            'mef-monnaie-banque-financement-fr' => ['Monnaie, banque et financement', 'MEF-MBF'],
            'mef-statistiques-calcul-financier-fr' => ['Statistiques et calcul financier', 'MEF-STA'],
            'mef-protection-sociale-retraite-emploi-fr' => ['Protection sociale, retraite et emploi', 'MEF-SOC'],
        ];

        $result = DB::transaction(function () use ($subjects): array {
            // Preserve the existing major and its admin settings.
            $major = Major::firstOrCreate(
                ['slug' => 'ministere-economie-finances'],
                [
                    'name' => 'مباريات وزارة الاقتصاد والمالية',
                    'icon' => 'account_balance',
                    'description' => 'اختبارات تدريبية للتحضير لمباريات وزارة الاقتصاد والمالية بالمغرب.',
                    'is_active' => true,
                ]
            );

            // Quiz seeders may resolve subjects by slug across all majors.
            $conflict = Subject::whereIn('slug', array_keys($subjects))
                ->where('major_id', '!=', $major->id)
                ->first();

            if ($conflict !== null) {
                throw new RuntimeException(
                    "Subject slug '{$conflict->slug}' belongs to another major. No changes were committed."
                );
            }

            $created = 0;
            foreach ($subjects as $slug => [$name, $code]) {
                $subject = Subject::firstOrCreate(
                    ['major_id' => $major->id, 'slug' => $slug],
                    [
                        'year' => 'N/A',
                        'code' => $code,
                        'name' => $name,
                        'description' => 'QCM en français de préparation aux concours du ministère de l’Économie et des Finances : ' . $name . '.',
                        'is_active' => true,
                    ]
                );

                if ($subject->wasRecentlyCreated) {
                    $created++;
                }
            }

            return [
                'major_id' => $major->id,
                'major_created' => $major->wasRecentlyCreated,
                'created' => $created,
                'reused' => count($subjects) - $created,
            ];
        });

        $this->command?->info(
            ($result['major_created'] ? 'Created' : 'Reused')
            . " MEF major (ID: {$result['major_id']})."
        );
        $this->command?->info(
            "Subjects created: {$result['created']}; reused: {$result['reused']}."
        );
    }
}
