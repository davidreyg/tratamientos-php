<?php

namespace App\Containers\AppSection\Triaje\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class TriajeRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
