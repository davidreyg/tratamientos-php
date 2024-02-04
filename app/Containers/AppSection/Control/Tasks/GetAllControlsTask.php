<?php

namespace App\Containers\AppSection\Control\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Control\Data\Repositories\ControlRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllControlsTask extends ParentTask
{
    public function __construct(
        protected ControlRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria(null, ['id', 'diagnostico_id'])->repository->paginate();
    }
}
