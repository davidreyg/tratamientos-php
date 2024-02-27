<?php

namespace App\Containers\AppSection\Paquete\Tasks;

use App\Containers\AppSection\Paquete\Data\Repositories\PaqueteRepository;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreatePaqueteTask extends ParentTask
{
    public function __construct(
        protected PaqueteRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Paquete
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
