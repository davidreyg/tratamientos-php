<?php

namespace App\Containers\AppSection\Persona\Data\Seeders;

use App\Containers\AppSection\Persona\Models\TipoDocumento;
use App\Containers\AppSection\Persona\Models\TipoPersona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class TipoDocumentosSeeder_1 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        TipoDocumento::create(['nombre' => 'DNI', 'digitos' => 8]);
        TipoDocumento::create(['nombre' => 'Carné de Extranjería', 'digitos' => 11]);
    }
}
