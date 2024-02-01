<?php

namespace App\Containers\AppSection\Diagnostico\Actions;

use App\Containers\AppSection\Diagnostico\Tasks\DeleteDiagnosticoTask;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\DeleteDiagnosticoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteDiagnosticoAction extends ParentAction
{
    /**
     * @param DeleteDiagnosticoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteDiagnosticoRequest $request): int
    {
        return app(DeleteDiagnosticoTask::class)->run($request->id);
    }
}
