<?php

namespace App\Containers\AppSection\Financiamiento\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class FinanciamientoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
