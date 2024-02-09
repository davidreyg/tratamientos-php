<?php

namespace App\Containers\AppSection\Diagnostico\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Diagnostico\Tasks\CreateDiagnosticoTask;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\CreateDiagnosticoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateDiagnosticoAction extends ParentAction
{
    public function __construct(
        private readonly CreateDiagnosticoTask $createDiagnosticoTask,
    ) {
    }

    /**
     * @param CreateDiagnosticoRequest $request
     * @return Diagnostico
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateDiagnosticoRequest $request): Diagnostico
    {
        $data = $request->validated();
        $diagnostico = $this->createDiagnosticoTask->run($data);
        $diagnostico->enfermedades()->sync($request->enfermedades);
        //FIXME: Falta que al registrarlo ponga en inactivo todos los demas diagnosticos
        return $diagnostico;
    }
}
