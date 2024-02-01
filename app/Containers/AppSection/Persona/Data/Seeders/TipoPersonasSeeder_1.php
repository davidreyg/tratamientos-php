<?php

namespace App\Containers\AppSection\Persona\Data\Seeders;

use App\Containers\AppSection\Persona\Models\TipoPersona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class TipoPersonasSeeder_1 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        TipoPersona::create(['nombre' => 'Médico']);
        TipoPersona::create(['nombre' => 'Paciente']);
    }
}
