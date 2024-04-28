<?php

namespace App\Containers\AppSection\Examen\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class CategoriaRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'is_active' => '=',
        // ...
    ];
}
