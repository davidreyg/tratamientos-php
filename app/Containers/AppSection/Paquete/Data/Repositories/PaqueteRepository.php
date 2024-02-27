<?php

namespace App\Containers\AppSection\Paquete\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PaqueteRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
