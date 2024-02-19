<?php

namespace App\Containers\AppSection\Triaje\Actions;

use App\Containers\AppSection\Triaje\Tasks\DeleteTriajeTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\DeleteTriajeRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteTriajeAction extends ParentAction
{
    /**
     * @param DeleteTriajeRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteTriajeRequest $request): int
    {
        return app(DeleteTriajeTask::class)->run($request->id);
    }
}
