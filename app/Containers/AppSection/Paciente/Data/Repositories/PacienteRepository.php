<?php

namespace App\Containers\AppSection\Paciente\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PacienteRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'numero_documento' => '=',
        // ...
    ];
}
