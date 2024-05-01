<?php

namespace App\Containers\AppSection\Seccion\Tasks;

use App\Containers\AppSection\Seccion\Data\Repositories\SeccionRepository;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindSeccionByIdTask extends ParentTask
{
    public function __construct(
        protected SeccionRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Seccion
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
