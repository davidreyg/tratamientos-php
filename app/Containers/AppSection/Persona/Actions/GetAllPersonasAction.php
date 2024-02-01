<?php

namespace App\Containers\AppSection\Persona\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Persona\Tasks\GetAllPersonasTask;
use App\Containers\AppSection\Persona\UI\API\Requests\GetAllPersonasRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPersonasAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllPersonasRequest $request): mixed
    {
        return app(GetAllPersonasTask::class)->run();
    }
}
