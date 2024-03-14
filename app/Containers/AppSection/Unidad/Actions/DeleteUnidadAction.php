<?php

namespace App\Containers\AppSection\Unidad\Actions;

use App\Containers\AppSection\Unidad\Tasks\DeleteUnidadTask;
use App\Containers\AppSection\Unidad\UI\API\Requests\DeleteUnidadRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteUnidadAction extends ParentAction
{
    /**
     * @param DeleteUnidadRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteUnidadRequest $request): int
    {
        return app(DeleteUnidadTask::class)->run($request->id);
    }
}
