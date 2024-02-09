<?php

namespace App\Containers\AppSection\Empleado\Actions;

use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Empleado\Tasks\FindEmpleadoByIdTask;
use App\Containers\AppSection\Empleado\UI\API\Requests\FindEmpleadoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindEmpleadoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindEmpleadoByIdRequest $request): Empleado
    {
        return app(FindEmpleadoByIdTask::class)->run($request->id);
    }
}
