<?php

namespace App\Containers\AppSection\Financiamiento\Actions;

use App\Containers\AppSection\Financiamiento\Tasks\DeleteFinanciamientoTask;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\DeleteFinanciamientoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteFinanciamientoAction extends ParentAction
{
    /**
     * @param DeleteFinanciamientoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteFinanciamientoRequest $request): int
    {
        return app(DeleteFinanciamientoTask::class)->run($request->id);
    }
}
