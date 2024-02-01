<?php

namespace App\Containers\AppSection\Establecimiento\Actions;

use App\Containers\AppSection\Establecimiento\Tasks\DeleteEstablecimientoTask;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\DeleteEstablecimientoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteEstablecimientoAction extends ParentAction
{
    /**
     * @param DeleteEstablecimientoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteEstablecimientoRequest $request): int
    {
        return app(DeleteEstablecimientoTask::class)->run($request->id);
    }
}
