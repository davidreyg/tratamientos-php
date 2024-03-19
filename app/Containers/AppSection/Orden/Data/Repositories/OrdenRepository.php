<?php

namespace App\Containers\AppSection\Orden\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class OrdenRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'paciente_id' => '=',
        'fecha_registro' => 'like',
        'estado' => 'in',
        'paciente.nombres' => 'like',
        'paciente.apellido_paterno' => 'like',
        'paciente.apellido_materno' => 'like',
        'paciente.numero_documento' => 'like',
        // ...
    ];
}
