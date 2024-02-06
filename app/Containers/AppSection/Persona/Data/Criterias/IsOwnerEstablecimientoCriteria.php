<?php

namespace App\Containers\AppSection\Persona\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

class IsOwnerEstablecimientoCriteria extends Criteria
{
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('codigo_establecimiento', '=', auth()->user()->establecimiento->codigo);
    }
}
