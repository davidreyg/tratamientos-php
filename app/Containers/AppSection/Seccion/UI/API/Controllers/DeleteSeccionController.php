<?php

namespace App\Containers\AppSection\Seccion\UI\API\Controllers;

use App\Containers\AppSection\Seccion\Actions\DeleteSeccionAction;
use App\Containers\AppSection\Seccion\UI\API\Requests\DeleteSeccionRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteSeccionController extends ApiController
{
    /**
     * @param DeleteSeccionRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteSeccion(DeleteSeccionRequest $request): JsonResponse
    {
        app(DeleteSeccionAction::class)->run($request);

        return $this->noContent();
    }
}
