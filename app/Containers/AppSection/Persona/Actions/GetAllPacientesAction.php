<?php

namespace App\Containers\AppSection\Persona\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Persona\Tasks\GetAllPacientesTask;
use App\Containers\AppSection\Persona\UI\API\Requests\GetAllPersonasRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPacientesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllPersonasRequest $request): mixed
    {
        return app(GetAllPacientesTask::class)->run();
    }
}
