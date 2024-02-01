<?php

namespace App\Containers\AppSection\Financiamiento\Data\Seeders;

use App\Containers\AppSection\Financiamiento\Tasks\CreateFinanciamientoTask;
use App\Containers\AppSection\Persona\Models\TipoPersona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class FinanciamientosSeeder_1 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        app(CreateFinanciamientoTask::class)->run(['nombre' => 'Pagante']);
        app(CreateFinanciamientoTask::class)->run(['nombre' => 'SIS']);
        app(CreateFinanciamientoTask::class)->run(['nombre' => 'EsSalud']);
        app(CreateFinanciamientoTask::class)->run(['nombre' => 'Otros']);
    }
}
