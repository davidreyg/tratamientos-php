<?php

namespace App\Containers\AppSection\Paquete\Actions;

use App\Containers\AppSection\Paquete\Tasks\DeletePaqueteTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\DeletePaqueteRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePaqueteAction extends ParentAction
{
    /**
     * @param DeletePaqueteRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePaqueteRequest $request): int
    {
        return app(DeletePaqueteTask::class)->run($request->id);
    }
}
