<?php

namespace App\Containers\AppSection\Unidad\UI\API\Controllers;

use App\Containers\AppSection\Unidad\Actions\DeleteUnidadAction;
use App\Containers\AppSection\Unidad\UI\API\Requests\DeleteUnidadRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteUnidadController extends ApiController
{
    /**
     * @param DeleteUnidadRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteUnidad(DeleteUnidadRequest $request): JsonResponse
    {
        app(DeleteUnidadAction::class)->run($request);

        return $this->noContent();
    }
}
