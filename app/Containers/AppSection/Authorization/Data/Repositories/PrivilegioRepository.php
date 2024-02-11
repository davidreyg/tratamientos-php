<?php

namespace App\Containers\AppSection\Authorization\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PrivilegioRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // 'diagnostico_id' => '=',
        // ...
    ];
}
