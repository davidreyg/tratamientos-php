<?php

namespace App\Containers\AppSection\Cargo\Data\Seeders;

use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class CargosSeeder_1 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        Cargo::create(['nombre' => 'Medico']);
        Cargo::create(['nombre' => 'Secretaria']);
    }
}
