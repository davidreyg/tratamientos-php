<?php

namespace App\Containers\AppSection\Triaje\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Triaje\Tasks\GetAllTriajesTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\GetAllTriajesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTriajesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllTriajesRequest $request): mixed
    {
        return app(GetAllTriajesTask::class)->run($request->fetchAll ?? false);
    }
}
