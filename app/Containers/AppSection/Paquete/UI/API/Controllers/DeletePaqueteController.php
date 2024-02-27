<?php

namespace App\Containers\AppSection\Paquete\UI\API\Controllers;

use App\Containers\AppSection\Paquete\Actions\DeletePaqueteAction;
use App\Containers\AppSection\Paquete\UI\API\Requests\DeletePaqueteRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePaqueteController extends ApiController
{
    /**
     * @param DeletePaqueteRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deletePaquete(DeletePaqueteRequest $request): JsonResponse
    {
        app(DeletePaqueteAction::class)->run($request);

        return $this->noContent();
    }
}
