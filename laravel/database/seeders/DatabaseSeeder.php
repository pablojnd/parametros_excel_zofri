<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        // Para incrementar memoria disponible (si es necesario)
        ini_set('memory_limit', '512M');

        // Parámetros Zofri - Usando un array para mejor mantenibilidad
        $this->call([
            ZofriAduanasSeeder::class,
            ZofriArancelesDeVehículosSeeder::class,
            ZofriAvanzadasAduanerasSeeder::class,
            ZofriCódigosArancelariosSeeder::class,
            ZofriCondicionesDeVentaSeeder::class,
            ZofriDescriptoresSeeder::class,
            ZofriDescriptoresPorArancelSeeder::class,
            ZofriDestinosSeeder::class,
            ZofriEstadosDocumentosSeeder::class,
            ZofriFormatosDeArchivoSeeder::class,
            ZofriListasDeValoresSeeder::class,
            ZofriLocalidadesSeeder::class,
            ZofriMediosDeTransporteSeeder::class,
            ZofriMonedasSeeder::class,
            ZofriOrganismosExternosSeeder::class,
            ZofriPaisesSeeder::class,
            ZofriProcedenciasSeeder::class,
            ZofriPuertosDeEmbarqueSeeder::class,
            ZofriRegionesSeeder::class,
            ZofriTiposDeAdjuntoSeeder::class,
            ZofriTiposDeBultoSeeder::class,
            ZofriTiposDeCertificadoSeeder::class,
            ZofriTiposDeClausulaSeeder::class,
            ZofriTiposDeContenedorSeeder::class,
            ZofriTiposDeDatoDescriptorSeeder::class,
            ZofriTiposDeDocumentoSeeder::class,
            ZofriTiposDeInventarioSeeder::class,
            ZofriTiposDeGarantíaSeeder::class,
            ZofriTiposDeResoluciónAduaneraSeeder::class,
            ZofriTiposDeTrámiteSeeder::class,
            ZofriUnidadesDeMedidaSeeder::class,
            ZofriValoresDeListasDeValorSeeder::class,
            ZofriVíasDeIngresoSeeder::class,
            ZofriZonasDeExportaciónSeeder::class,
            ZofriZonasFrancasSeeder::class,
            ZofriZonasFrancasDeExtensiónSeeder::class,
        ]);
    }
}
