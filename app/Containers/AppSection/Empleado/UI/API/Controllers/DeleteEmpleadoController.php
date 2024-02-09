<?php

namespace App\Containers\AppSection\Empleado\UI\API\Controllers;

use App\Containers\AppSection\Empleado\Actions\DeleteEmpleadoAction;
use App\Containers\AppSection\Empleado\UI\API\Requests\DeleteEmpleadoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteEmpleadoController extends ApiController
{
    /**
     * @param DeleteEmpleadoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteEmpleado(DeleteEmpleadoRequest $request): JsonResponse
    {
        app(DeleteEmpleadoAction::class)->run($request);

        return $this->noContent();
    }
}
