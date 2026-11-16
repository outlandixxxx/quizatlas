<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MefAllQuizzesSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function (): void {
            $this->call([
                MefMajorSubjectSeeder::class,
                MefCultureGenerale2023Seeder::class,
                MefTopographie2023Seeder::class,
                MefMaintenanceReseaux2023Seeder::class,
                MefDeveloppementInformatique2023Seeder::class,
                MefGestionFinanceComptabilite2023Seeder::class,
                MefFinancesPubliquesFiscalite2026Seeder::class,
                MefPolitiquesPubliques2026Seeder::class,
                MefMicroMacroEconomie2026Seeder::class,
                MefGestionComptabiliteAudit2026Seeder::class,
                MefMonnaieBanque2026Seeder::class,
                MefStatistiquesCalculFinancier2026Seeder::class,
                MefProtectionSociale2026Seeder::class,
            ]);
        });
    }
}
