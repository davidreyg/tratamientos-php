<?php

namespace App\Containers\AppSection\Respuesta\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Respuesta\Tasks\GetAllRespuestasTask;
use App\Containers\AppSection\Respuesta\UI\API\Requests\GetAllRespuestasRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllRespuestasAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllRespuestasRequest $request): mixed
    {
        return app(GetAllRespuestasTask::class)->run();
    }
}
