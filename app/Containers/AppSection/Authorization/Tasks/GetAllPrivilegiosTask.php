<?php

namespace App\Containers\AppSection\Authorization\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Authorization\Data\Repositories\PrivilegioRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPrivilegiosTask extends ParentTask
{
    public function __construct(
        protected readonly PrivilegioRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $this->addRequestCriteria($this->repository);

        return $this->repository->all();
    }
}
