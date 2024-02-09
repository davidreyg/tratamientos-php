<?php

namespace App\Containers\AppSection\Paciente\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\Paciente\Tasks\UpdatePacienteTask;
use App\Containers\AppSection\Paciente\UI\API\Requests\UpdatePacienteRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePacienteAction extends ParentAction
{
    /**
     * @param UpdatePacienteRequest $request
     * @return Paciente
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePacienteRequest $request): Paciente
    {
        $data = $request->validated();
        return app(UpdatePacienteTask::class)->run($data, $request->id);
    }
}
