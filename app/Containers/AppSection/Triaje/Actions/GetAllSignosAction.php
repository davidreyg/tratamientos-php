<?php

namespace App\Containers\AppSection\Triaje\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Triaje\Tasks\GetAllSignosTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\GetAllSignosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSignosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllSignosRequest $request): mixed
    {
        return app(GetAllSignosTask::class)->run();
    }
}
