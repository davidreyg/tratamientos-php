<?php

namespace App\Containers\AppSection\Establecimiento\Data\Seeders;

use App\Containers\AppSection\Establecimiento\Tasks\CreateEstablecimientoTask;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class EstablecimientoSeeder_1 extends ParentSeeder
{
    public function __construct(
        private readonly CreateEstablecimientoTask $createEstablecimientoTask
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        $data = [
            'nombre' => 'Establecmiento1',
            'codigo' => 'CODIGO1',
            'direccion' => 'Calle Los Pepitos S/N',
            'telefono' => 955927839,
            'ris' => 'LIMA'
        ];
        $this->createEstablecimientoTask->run($data);
    }
}
