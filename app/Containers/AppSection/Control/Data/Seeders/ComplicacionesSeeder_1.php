<?php

namespace App\Containers\AppSection\Control\Data\Seeders;

use App\Containers\AppSection\Control\Models\Complicacion;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class ComplicacionesSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Complicacion::create(['nombre' => 'HIPOGLICEMIA']);
        COmplicacion::create(['nombre' => 'HIPERGLICEMIA']);
        COmplicacion::create(['nombre' => 'URGENCIA']);
        COmplicacion::create(['nombre' => 'EMERGENCIA HIPERTENSIVA']);
    }
}
