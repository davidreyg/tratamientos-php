<?php

namespace App\Containers\AppSection\Triaje\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class SignoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'estado' => '=',
    ];
}
