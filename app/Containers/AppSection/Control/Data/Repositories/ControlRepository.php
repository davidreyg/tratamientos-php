<?php

namespace App\Containers\AppSection\Control\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ControlRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
