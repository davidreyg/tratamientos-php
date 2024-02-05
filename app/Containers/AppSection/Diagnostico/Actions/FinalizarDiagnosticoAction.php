<?php

namespace App\Containers\AppSection\Diagnostico\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Diagnostico\Tasks\UpdateDiagnosticoTask;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\FinalizarDiagnosticoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FinalizarDiagnosticoAction extends ParentAction
{
    /**
     * @param FinalizarDiagnosticoRequest $request
     * @return Diagnostico
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(FinalizarDiagnosticoRequest $request): Diagnostico
    {
        $data = $request->validated();

        return app(UpdateDiagnosticoTask::class)->run($data, $request->id);
    }
}
