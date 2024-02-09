<?php

namespace App\Containers\AppSection\Empleado\Actions;

use App\Containers\AppSection\Empleado\Tasks\DeleteEmpleadoTask;
use App\Containers\AppSection\Empleado\UI\API\Requests\DeleteEmpleadoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteEmpleadoAction extends ParentAction
{
    /**
     * @param DeleteEmpleadoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteEmpleadoRequest $request): int
    {
        return app(DeleteEmpleadoTask::class)->run($request->id);
    }
}
