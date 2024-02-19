<?php

namespace App\Containers\AppSection\Triaje\Tasks;

use App\Containers\AppSection\Triaje\Data\Repositories\TriajeRepository;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindTriajeByIdTask extends ParentTask
{
    public function __construct(
        protected TriajeRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Triaje
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
