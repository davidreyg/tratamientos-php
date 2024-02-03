<?php

namespace App\Containers\AppSection\Diagnostico\Data\Seeders;

use App\Containers\AppSection\Diagnostico\Models\Enfermedad;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class EnfermedadesSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Enfermedad::create(['nombre' => 'OBESIDAD']);
        Enfermedad::create(['nombre' => 'PRE DIABETES']);
        Enfermedad::create(['nombre' => 'DIABETES MELLITUS  NO INSULINO DEPENDIENTE']);
        Enfermedad::create(['nombre' => 'HIPERTENSIÓN ARTERIAL']);
        Enfermedad::create(['nombre' => 'DISLIPIDEMIA']);
    }
}
