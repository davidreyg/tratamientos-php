<?php

namespace App\Containers\AppSection\Respuesta\UI\API\Controllers;

use App\Containers\AppSection\Respuesta\Actions\DeleteRespuestaAction;
use App\Containers\AppSection\Respuesta\UI\API\Requests\DeleteRespuestaRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteRespuestaController extends ApiController
{
    /**
     * @param DeleteRespuestaRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteRespuesta(DeleteRespuestaRequest $request): JsonResponse
    {
        app(DeleteRespuestaAction::class)->run($request);

        return $this->noContent();
    }
}
