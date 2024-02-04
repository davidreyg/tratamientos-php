<?php

namespace App\Containers\AppSection\Control\Tasks;

use App\Containers\AppSection\Control\Data\Repositories\ControlRepository;
use App\Containers\AppSection\Control\Models\Control;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateControlTask extends ParentTask
{
    public function __construct(
        protected ControlRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Control
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
