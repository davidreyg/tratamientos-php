<?php

namespace App\Containers\AppSection\Cargo\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Cargo\Tasks\GetAllCargosTask;
use App\Containers\AppSection\Cargo\UI\API\Requests\GetAllCargosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCargosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllCargosRequest $request): mixed
    {
        return app(GetAllCargosTask::class)->run();
    }
}
