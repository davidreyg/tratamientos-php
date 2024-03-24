<?php

namespace App\Containers\AppSection\Item\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Item\Tasks\GetAllItemsTask;
use App\Containers\AppSection\Item\UI\API\Requests\GetAllItemsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllItemsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllItemsRequest $request): mixed
    {
        return app(GetAllItemsTask::class)->run();
    }
}
