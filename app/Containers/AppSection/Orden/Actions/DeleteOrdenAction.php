<?php

namespace App\Containers\AppSection\Orden\Actions;

use App\Containers\AppSection\Orden\Tasks\DeleteOrdenTask;
use App\Containers\AppSection\Orden\UI\API\Requests\DeleteOrdenRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteOrdenAction extends ParentAction
{
    /**
     * @param DeleteOrdenRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteOrdenRequest $request): int
    {
        return app(DeleteOrdenTask::class)->run($request->id);
    }
}
