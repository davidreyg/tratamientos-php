<?php

namespace App\Containers\AppSection\Respuesta\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class RespuestaRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
