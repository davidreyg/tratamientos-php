<?php

namespace App\Containers\AppSection\Empleado\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class EmpleadoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'cargo_id' => '=',
        // ...
    ];
}
