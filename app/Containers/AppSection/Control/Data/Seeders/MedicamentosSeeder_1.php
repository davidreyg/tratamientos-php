<?php

namespace App\Containers\AppSection\Control\Data\Seeders;

use App\Containers\AppSection\Control\Models\Medicamento;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class MedicamentosSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Medicamento::create(['nombre' => 'Paracetamol', 'codigo' => 123456]);
        Medicamento::create(['nombre' => 'Ibuprofeno', 'codigo' => 255151]);
        Medicamento::create(['nombre' => 'Otro medicamento :)', 'codigo' => 354885]);
    }
}
