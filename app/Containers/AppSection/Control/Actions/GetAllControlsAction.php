<?php

namespace App\Containers\AppSection\Control\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Control\Tasks\GetAllControlsTask;
use App\Containers\AppSection\Control\UI\API\Requests\GetAllControlsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllControlsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllControlsRequest $request): mixed
    {
        return app(GetAllControlsTask::class)->run();
    }
}
