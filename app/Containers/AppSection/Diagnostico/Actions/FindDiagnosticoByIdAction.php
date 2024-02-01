<?php

namespace App\Containers\AppSection\Diagnostico\Actions;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Diagnostico\Tasks\FindDiagnosticoByIdTask;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\FindDiagnosticoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindDiagnosticoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindDiagnosticoByIdRequest $request): Diagnostico
    {
        return app(FindDiagnosticoByIdTask::class)->run($request->id);
    }
}
