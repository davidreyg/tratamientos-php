<?php

namespace App\Containers\AppSection\Empleado\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Empleado\Tasks\GetAllEmpleadosTask;
use App\Containers\AppSection\Empleado\UI\API\Requests\GetAllEmpleadosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllEmpleadosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllEmpleadosRequest $request): mixed
    {
        return app(GetAllEmpleadosTask::class)->run();
    }
}
