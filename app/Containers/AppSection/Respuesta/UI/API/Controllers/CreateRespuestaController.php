<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Respuesta\Actions\CreateRespuestaAction;
use App\Containers\AppSection\Respuesta\UI\API\Requests\CreateRespuestaRequest;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateRespuestaController extends ApiController
{
    /**
     * @param CreateRespuestaRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createRespuesta(CreateRespuestaRequest $request): JsonResponse
    {
        $respuesta = app(CreateRespuestaAction::class)->run($request);

        return $this->created($this->transform($respuesta, RespuestaTransformer::class));
    }
}
