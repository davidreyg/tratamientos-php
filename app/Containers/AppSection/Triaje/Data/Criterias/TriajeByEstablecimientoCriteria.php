<?php

namespace App\Containers\AppSection\Triaje\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

class TriajeByEstablecimientoCriteria extends Criteria
{

    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->whereHas('user.establecimiento', function ($query) {
            $query->where('id', '=', auth()->user()->establecimiento_id);
        });
    }
}
