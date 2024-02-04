<?php

namespace App\Containers\AppSection\Control\Data\Seeders;

use App\Containers\AppSection\Control\Models\Medicamento;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class MedicamentosSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Medicamento::create(['nombre' => 'Paracetamol']);
        Medicamento::create(['nombre' => 'Ibuprofeno']);
        Medicamento::create(['nombre' => 'Otro medicamento :)']);
    }
}
