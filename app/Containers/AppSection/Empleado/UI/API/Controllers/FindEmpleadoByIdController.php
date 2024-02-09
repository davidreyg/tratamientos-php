<?php

namespace App\Containers\AppSection\Empleado\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Empleado\Actions\FindEmpleadoByIdAction;
use App\Containers\AppSection\Empleado\UI\API\Requests\FindEmpleadoByIdRequest;
use App\Containers\AppSection\Empleado\UI\API\Transformers\EmpleadoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindEmpleadoByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findEmpleadoById(FindEmpleadoByIdRequest $request): array
    {
        $empleado = app(FindEmpleadoByIdAction::class)->run($request);

        return $this->transform($empleado, EmpleadoTransformer::class);
    }
}
