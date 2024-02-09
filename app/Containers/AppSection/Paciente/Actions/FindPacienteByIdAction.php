<?php

namespace App\Containers\AppSection\Paciente\Actions;

use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\Paciente\Tasks\FindPacienteByIdTask;
use App\Containers\AppSection\Paciente\UI\API\Requests\FindPacienteByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPacienteByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindPacienteByIdRequest $request): Paciente
    {
        return app(FindPacienteByIdTask::class)->run($request->id);
    }
}
