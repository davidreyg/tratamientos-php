<?php

namespace App\Containers\AppSection\Examen\Actions;

use App\Containers\AppSection\Examen\Tasks\DeleteExamenTask;
use App\Containers\AppSection\Examen\UI\API\Requests\DeleteExamenRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteExamenAction extends ParentAction
{
    /**
     * @param DeleteExamenRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteExamenRequest $request): int
    {
        return app(DeleteExamenTask::class)->run($request->id);
    }
}
