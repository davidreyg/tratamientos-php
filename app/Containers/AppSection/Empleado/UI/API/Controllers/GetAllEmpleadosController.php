<?php

namespace App\Containers\AppSection\Empleado\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Empleado\Actions\GetAllEmpleadosAction;
use App\Containers\AppSection\Empleado\UI\API\Requests\GetAllEmpleadosRequest;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllEmpleadosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllEmpleados(GetAllEmpleadosRequest $request): array
    {
        $empleados = app(GetAllEmpleadosAction::class)->run($request);

        return $this->transform($empleados, EmpleadoTransformer::class);
    }
}
