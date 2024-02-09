<?php

namespace App\Containers\AppSection\TipoDocumento\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class TipoDocumentoRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
