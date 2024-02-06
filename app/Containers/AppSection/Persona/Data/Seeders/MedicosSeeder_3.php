<?php

namespace App\Containers\AppSection\Persona\Data\Seeders;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class MedicosSeeder_3 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        Establecimiento::all()->each(function (Establecimiento $establecimiento) {
            Persona::factory()->count(5)->medico($establecimiento->codigo)->create();
        });
    }
}
