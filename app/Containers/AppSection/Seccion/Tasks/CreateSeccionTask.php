<?php

namespace App\Containers\AppSection\Seccion\Tasks;

use App\Containers\AppSection\Seccion\Data\Repositories\SeccionRepository;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateSeccionTask extends ParentTask
{
    public function __construct(
        protected SeccionRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Seccion
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
