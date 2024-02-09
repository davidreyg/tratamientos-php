<?php

namespace App\Containers\AppSection\Empleado\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Empleado\Tasks\UpdateEmpleadoTask;
use App\Containers\AppSection\Empleado\UI\API\Requests\UpdateEmpleadoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateEmpleadoAction extends ParentAction
{
    /**
     * @param UpdateEmpleadoRequest $request
     * @return Empleado
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateEmpleadoRequest $request): Empleado
    {
        $data = $request->validated();

        return app(UpdateEmpleadoTask::class)->run($data, $request->id);
    }
}
