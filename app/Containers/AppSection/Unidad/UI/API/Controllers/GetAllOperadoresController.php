<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use App\Containers\AppSection\Unidad\UI\API\Requests\GetAllOperadoresRequest;
use App\Ship\Parents\Controllers\ApiController;

class GetAllOperadoresController extends ApiController
{

    public function getAllUnidads(GetAllOperadoresRequest $request)
    {
        $operadores = config('appSection-unidad.operadores');

        return $this->json(['data' => $operadores]);
    }
}
