<?php

namespace App\Containers\AppSection\Paciente\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\Paciente\Tasks\CreatePacienteTask;
use App\Containers\AppSection\Paciente\UI\API\Requests\CreatePacienteRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePacienteAction extends ParentAction
{
    /**
     * @param CreatePacienteRequest $request
     * @return Paciente
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePacienteRequest $request): Paciente
    {
        $data = $request->validated();

        return app(CreatePacienteTask::class)->run($data);
    }
}
