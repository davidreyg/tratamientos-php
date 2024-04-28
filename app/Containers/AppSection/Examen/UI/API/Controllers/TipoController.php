<?php

namespace App\Containers\AppSection\Examen\UI\API\Controllers;

use App\Containers\AppSection\Examen\UI\API\Requests\GetAllTiposRequest;
use App\Ship\Parents\Controllers\ApiController;

class TipoController extends ApiController
{
    public function getAllTipos(GetAllTiposRequest $request)
    {
        $tipos = config('appSection-examen.tipos');

        return $this->json(['data' => $tipos]);
    }
}
