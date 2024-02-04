<?php

namespace App\Containers\AppSection\Control\Tasks;

use App\Containers\AppSection\Control\Data\Repositories\ControlRepository;
use App\Containers\AppSection\Control\Models\Control;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindControlByIdTask extends ParentTask
{
    public function __construct(
        protected ControlRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Control
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
