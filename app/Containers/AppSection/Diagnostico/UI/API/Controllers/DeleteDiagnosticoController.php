<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use App\Containers\AppSection\Diagnostico\Actions\DeleteDiagnosticoAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\DeleteDiagnosticoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteDiagnosticoController extends ApiController
{
    /**
     * @param DeleteDiagnosticoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteDiagnostico(DeleteDiagnosticoRequest $request): JsonResponse
    {
        app(DeleteDiagnosticoAction::class)->run($request);

        return $this->noContent();
    }
}
