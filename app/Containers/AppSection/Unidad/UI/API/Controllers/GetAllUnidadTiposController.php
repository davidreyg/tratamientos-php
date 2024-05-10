<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use App\Containers\AppSection\Unidad\UI\API\Requests\GetAllUnidadTiposRequest;
use App\Ship\Parents\Controllers\ApiController;

class GetAllUnidadTiposController extends ApiController
{

    public function getAllUnidads(GetAllUnidadTiposRequest $request)
    {
        $tipos = config('appSection-unidad.tipos');

        return $this->json(['data' => $tipos]);
    }
}
