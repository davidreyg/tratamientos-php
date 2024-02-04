<?php

namespace App\Containers\AppSection\Control\Actions;

use App\Containers\AppSection\Control\Tasks\DeleteControlTask;
use App\Containers\AppSection\Control\UI\API\Requests\DeleteControlRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteControlAction extends ParentAction
{
    /**
     * @param DeleteControlRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteControlRequest $request): int
    {
        return app(DeleteControlTask::class)->run($request->id);
    }
}
