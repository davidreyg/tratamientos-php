<?php

namespace App\Containers\AppSection\TipoDocumento\Data\Seeders;

use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
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
        TipoDocumento::create(['nombre' => 'Carné de extranjeria', 'digitos' => 11]);
    }
}
