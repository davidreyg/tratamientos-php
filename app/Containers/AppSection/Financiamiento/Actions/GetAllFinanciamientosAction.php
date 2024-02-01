<?php

namespace App\Containers\AppSection\Financiamiento\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Financiamiento\Tasks\GetAllFinanciamientosTask;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\GetAllFinanciamientosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllFinanciamientosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllFinanciamientosRequest $request): mixed
    {
        return app(GetAllFinanciamientosTask::class)->run();
    }
}
