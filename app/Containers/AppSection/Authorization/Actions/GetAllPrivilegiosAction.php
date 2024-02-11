<?php

namespace App\Containers\AppSection\Authorization\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Authorization\Tasks\GetAllPrivilegiosTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPrivilegiosAction extends ParentAction
{
    public function __construct(
        private readonly GetAllPrivilegiosTask $getAllPrivilegiosTask
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->getAllPrivilegiosTask->run();
    }
}
