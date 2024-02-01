<?php

namespace App\Containers\AppSection\Establecimiento\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Establecimiento\Tasks\GetAllEstablecimientosTask;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\GetAllEstablecimientosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllEstablecimientosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllEstablecimientosRequest $request): mixed
    {
        return app(GetAllEstablecimientosTask::class)->run();
    }
}
