<?php

namespace App\Containers\AppSection\Seccion\Actions;

use App\Containers\AppSection\Seccion\Tasks\DeleteSeccionTask;
use App\Containers\AppSection\Seccion\UI\API\Requests\DeleteSeccionRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteSeccionAction extends ParentAction
{
    /**
     * @param DeleteSeccionRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteSeccionRequest $request): int
    {
        return app(DeleteSeccionTask::class)->run($request->id);
    }
}
