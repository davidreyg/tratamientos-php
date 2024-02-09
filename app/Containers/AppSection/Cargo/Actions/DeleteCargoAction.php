<?php

namespace App\Containers\AppSection\Cargo\Actions;

use App\Containers\AppSection\Cargo\Tasks\DeleteCargoTask;
use App\Containers\AppSection\Cargo\UI\API\Requests\DeleteCargoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteCargoAction extends ParentAction
{
    /**
     * @param DeleteCargoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteCargoRequest $request): int
    {
        return app(DeleteCargoTask::class)->run($request->id);
    }
}
