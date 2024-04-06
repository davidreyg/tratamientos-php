<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Respuesta\Actions\UpdateRespuestaAction;
use App\Containers\AppSection\Respuesta\UI\API\Requests\UpdateRespuestaRequest;
use App\Containers\AppSection\Respuesta\UI\API\Transformers\RespuestaTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateRespuestaController extends ApiController
{
    /**
     * @param UpdateRespuestaRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateRespuesta(UpdateRespuestaRequest $request): array
    {
        $respuesta = app(UpdateRespuestaAction::class)->run($request);

        return $this->transform($respuesta, RespuestaTransformer::class);
    }
}
