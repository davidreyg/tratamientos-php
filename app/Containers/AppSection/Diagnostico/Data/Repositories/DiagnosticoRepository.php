<?php

namespace App\Containers\AppSection\Diagnostico\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class DiagnosticoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
