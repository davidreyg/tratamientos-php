<?php

namespace App\Containers\AppSection\Examen\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ExamenRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
