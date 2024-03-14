<?php

namespace App\Containers\AppSection\Unidad\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Unidad\Tasks\GetAllUnidadsTask;
use App\Containers\AppSection\Unidad\UI\API\Requests\GetAllUnidadsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllUnidadsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllUnidadsRequest $request): mixed
    {
        return app(GetAllUnidadsTask::class)->run();
    }
}
