<?php

namespace App\Containers\AppSection\Orden\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Orden\Tasks\GetAllOrdensTask;
use App\Containers\AppSection\Orden\UI\API\Requests\GetAllOrdensRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllOrdensAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllOrdensRequest $request): mixed
    {
        return app(GetAllOrdensTask::class)->run();
    }
}
