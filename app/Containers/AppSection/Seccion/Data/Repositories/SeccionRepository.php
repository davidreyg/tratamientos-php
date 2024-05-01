<?php

namespace App\Containers\AppSection\Seccion\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class SeccionRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
