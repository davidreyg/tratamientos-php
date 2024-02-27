<?php

namespace App\Containers\AppSection\Examen\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Examen\Tasks\GetAllExamensTask;
use App\Containers\AppSection\Examen\UI\API\Requests\GetAllExamensRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllExamensAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllExamensRequest $request): mixed
    {
        return app(GetAllExamensTask::class)->run();
    }
}
