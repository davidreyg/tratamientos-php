<?php

namespace App\Containers\AppSection\Seccion\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Seccion\Tasks\GetAllSeccionsTask;
use App\Containers\AppSection\Seccion\UI\API\Requests\GetAllSeccionsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSeccionsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllSeccionsRequest $request): mixed
    {
        return app(GetAllSeccionsTask::class)->run();
    }
}
