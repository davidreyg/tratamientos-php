<?php

namespace App\Containers\AppSection\Paquete\Tasks;

use App\Containers\AppSection\Paquete\Data\Repositories\PaqueteRepository;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindPaqueteByIdTask extends ParentTask
{
    public function __construct(
        protected PaqueteRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Paquete
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
