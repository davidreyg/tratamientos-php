<?php

namespace App\Containers\AppSection\Orden\Tasks;

use App\Containers\AppSection\Orden\Data\Repositories\OrdenRepository;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindOrdenByIdTask extends ParentTask
{
    public function __construct(
        protected OrdenRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Orden
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
