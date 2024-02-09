<?php

namespace App\Containers\AppSection\Empleado\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Empleado\Tasks\CreateEmpleadoTask;
use App\Containers\AppSection\Empleado\UI\API\Requests\CreateEmpleadoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateEmpleadoAction extends ParentAction
{
    /**
     * @param CreateEmpleadoRequest $request
     * @return Empleado
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateEmpleadoRequest $request): Empleado
    {
        $data = $request->validated();

        return app(CreateEmpleadoTask::class)->run($data);
    }
}
