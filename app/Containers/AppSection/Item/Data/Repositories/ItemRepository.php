<?php

namespace App\Containers\AppSection\Item\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ItemRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
