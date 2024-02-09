<?php

namespace App\Containers\AppSection\Empleado\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

class IsOwnEstablecimientoCriteria extends Criteria
{

    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('establecimiento_id', '=', auth()->user()->establecimiento_id);
    }
}
