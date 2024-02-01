<?php

namespace App\Containers\AppSection\Diagnostico\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Diagnostico\Tasks\GetAllDiagnosticosTask;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\GetAllDiagnosticosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllDiagnosticosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllDiagnosticosRequest $request): mixed
    {
        return app(GetAllDiagnosticosTask::class)->run();
    }
}
