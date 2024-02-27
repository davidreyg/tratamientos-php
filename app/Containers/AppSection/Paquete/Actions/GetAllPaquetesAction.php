<?php

namespace App\Containers\AppSection\Paquete\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Paquete\Tasks\GetAllPaquetesTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\GetAllPaquetesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPaquetesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllPaquetesRequest $request): mixed
    {
        return app(GetAllPaquetesTask::class)->run();
    }
}
