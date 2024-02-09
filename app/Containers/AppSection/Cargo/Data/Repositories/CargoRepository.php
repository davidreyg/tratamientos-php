<?php

namespace App\Containers\AppSection\Cargo\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class CargoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
