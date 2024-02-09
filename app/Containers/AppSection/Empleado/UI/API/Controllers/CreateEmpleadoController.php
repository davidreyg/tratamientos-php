<?php

namespace App\Containers\AppSection\Empleado\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Empleado\Actions\CreateEmpleadoAction;
use App\Containers\AppSection\Empleado\UI\API\Requests\CreateEmpleadoRequest;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateEmpleadoController extends ApiController
{
    /**
     * @param CreateEmpleadoRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createEmpleado(CreateEmpleadoRequest $request): JsonResponse
    {
        $empleado = app(CreateEmpleadoAction::class)->run($request);

        return $this->created($this->transform($empleado, EmpleadoTransformer::class));
    }
}
