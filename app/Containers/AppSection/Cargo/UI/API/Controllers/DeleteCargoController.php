<?php

namespace App\Containers\AppSection\Cargo\UI\API\Controllers;

use App\Containers\AppSection\Cargo\Actions\DeleteCargoAction;
use App\Containers\AppSection\Cargo\UI\API\Requests\DeleteCargoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteCargoController extends ApiController
{
    /**
     * @param DeleteCargoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteCargo(DeleteCargoRequest $request): JsonResponse
    {
        app(DeleteCargoAction::class)->run($request);

        return $this->noContent();
    }
}
