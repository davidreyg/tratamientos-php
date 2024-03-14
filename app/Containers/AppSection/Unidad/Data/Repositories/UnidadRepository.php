<?php

namespace App\Containers\AppSection\Unidad\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class UnidadRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
