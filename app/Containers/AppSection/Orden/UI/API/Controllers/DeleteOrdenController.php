<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use App\Containers\AppSection\Orden\Actions\DeleteOrdenAction;
use App\Containers\AppSection\Orden\UI\API\Requests\DeleteOrdenRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteOrdenController extends ApiController
{
    /**
     * @param DeleteOrdenRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteOrden(DeleteOrdenRequest $request): JsonResponse
    {
        app(DeleteOrdenAction::class)->run($request);

        return $this->noContent();
    }
}
