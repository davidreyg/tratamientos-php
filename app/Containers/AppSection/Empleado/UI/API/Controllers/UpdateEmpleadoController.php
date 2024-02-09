<?php

namespace App\Containers\AppSection\Empleado\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Empleado\Actions\UpdateEmpleadoAction;
use App\Containers\AppSection\Empleado\UI\API\Requests\UpdateEmpleadoRequest;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateEmpleadoController extends ApiController
{
    /**
     * @param UpdateEmpleadoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateEmpleado(UpdateEmpleadoRequest $request): array
    {
        $empleado = app(UpdateEmpleadoAction::class)->run($request);

        return $this->transform($empleado, EmpleadoTransformer::class);
    }
}
