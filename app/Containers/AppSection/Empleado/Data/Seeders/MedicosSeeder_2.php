<?php

namespace App\Containers\AppSection\Empleado\Data\Seeders;

use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class MedicosSeeder_2 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        Establecimiento::all()->each(function (Establecimiento $establecimiento) {
            Empleado::factory()->count(5)->medico($establecimiento->id)->create();
        });
    }
}
