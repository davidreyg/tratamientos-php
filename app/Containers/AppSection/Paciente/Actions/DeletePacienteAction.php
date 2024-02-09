<?php

namespace App\Containers\AppSection\Paciente\Actions;

use App\Containers\AppSection\Paciente\Tasks\DeletePacienteTask;
use App\Containers\AppSection\Paciente\UI\API\Requests\DeletePacienteRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePacienteAction extends ParentAction
{
    /**
     * @param DeletePacienteRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePacienteRequest $request): int
    {
        return app(DeletePacienteTask::class)->run($request->id);
    }
}
