<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Respuesta\Actions\FindRespuestaByIdAction;
use App\Containers\AppSection\Respuesta\UI\API\Requests\FindRespuestaByIdRequest;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindRespuestaByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findRespuestaById(FindRespuestaByIdRequest $request): array
    {
        $respuesta = app(FindRespuestaByIdAction::class)->run($request);

        return $this->transform($respuesta, RespuestaTransformer::class);
    }
}
