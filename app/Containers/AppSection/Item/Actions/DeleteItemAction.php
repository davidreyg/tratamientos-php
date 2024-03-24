<?php

namespace App\Containers\AppSection\Item\Actions;

use App\Containers\AppSection\Item\Tasks\DeleteItemTask;
use App\Containers\AppSection\Item\UI\API\Requests\DeleteItemRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteItemAction extends ParentAction
{
    /**
     * @param DeleteItemRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteItemRequest $request): int
    {
        return app(DeleteItemTask::class)->run($request->id);
    }
}
