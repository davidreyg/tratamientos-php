<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Respuesta\Actions\GetAllRespuestasAction;
use App\Containers\AppSection\Respuesta\UI\API\Requests\GetAllRespuestasRequest;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllRespuestasController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllRespuestas(GetAllRespuestasRequest $request): array
    {
        $respuestas = app(GetAllRespuestasAction::class)->run($request);

        return $this->transform($respuestas, RespuestaTransformer::class);
    }
}
