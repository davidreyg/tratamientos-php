<?php

namespace App\Containers\AppSection\Orden\Tasks;

use App\Containers\AppSection\Orden\Data\Repositories\OrdenRepository;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateOrdenTask extends ParentTask
{
    public function __construct(
        protected OrdenRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Orden
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
