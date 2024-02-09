<?php

namespace App\Containers\AppSection\Paciente\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Paciente\Tasks\GetAllPacientesTask;
use App\Containers\AppSection\Paciente\UI\API\Requests\GetAllPacientesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPacientesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllPacientesRequest $request): mixed
    {
        return app(GetAllPacientesTask::class)->run();
    }
}
