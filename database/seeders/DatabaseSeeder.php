<?php

namespace Database\Seeders;

use App\Models\Camion;
use App\Models\mercancia;
use App\Models\Personas;
use App\Models\Predio;
use App\Models\Tipo_mercancia;
use App\Models\Transporte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Transporte::factory(50)->create();
        Camion::factory(50)->create();
        Personas::factory(50)->create();
        Predio::factory(50)->create();
        Tipo_mercancia::factory(50)->create();
        mercancia::factory(50)->create();
    }
}
