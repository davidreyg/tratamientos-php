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
    /**
     * @param CreateDiagnosticoRequest $request
     * @return Diagnostico
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateDiagnosticoRequest $request): Diagnostico
    {
        $data = $request->validated();

        return app(CreateDiagnosticoTask::class)->run($data);
    }
}
