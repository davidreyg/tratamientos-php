<?php

namespace App\Containers\AppSection\Triaje\UI\API\Controllers;

use App\Containers\AppSection\Triaje\Actions\DeleteTriajeAction;
use App\Containers\AppSection\Triaje\UI\API\Requests\DeleteTriajeRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteTriajeController extends ApiController
{
    /**
     * @param DeleteTriajeRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteTriaje(DeleteTriajeRequest $request): JsonResponse
    {
        app(DeleteTriajeAction::class)->run($request);

        return $this->noContent();
    }
}
