<?php

namespace App\Containers\AppSection\Examen\Data\Seeders;

use App\Containers\AppSection\Examen\Models\Categoria;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class CategoriasSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Categoria::create(['nombre' => 'HEMATOLOGÍA']);
        Categoria::create(['nombre' => 'BIOQUÍMICA']);
        Categoria::create(['nombre' => 'INMUNOLOGÍA']);
        Categoria::create(['nombre' => 'MICROBIOLOGÍA']);
    }
}
