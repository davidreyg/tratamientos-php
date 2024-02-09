<?php

namespace App\Containers\AppSection\Paciente\Data\Seeders;

use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class PacientesSeeder_2 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        Paciente::factory()->count(50)->create();
    }
}
