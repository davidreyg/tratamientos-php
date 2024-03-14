<?php

namespace App\Containers\AppSection\Unidad\Data\Seeders;

use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class UnidadSeeder_1 extends ParentSeeder
{
    public function run()
    {
        Unidad::create(['nombre' => 'mg']);
        Unidad::create(['nombre' => 'dl']);
    }
}
