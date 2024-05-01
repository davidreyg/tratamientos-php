<?php

namespace App\Containers\AppSection\Categoria\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Categoria\Tasks\GetAllCategoriasTask;
use App\Containers\AppSection\Categoria\UI\API\Requests\GetAllCategoriasRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCategoriasAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllCategoriasRequest $request): mixed
    {
        return app(GetAllCategoriasTask::class)->run();
    }
}
