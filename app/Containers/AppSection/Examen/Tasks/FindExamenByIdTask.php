<?php

namespace App\Containers\AppSection\Examen\Tasks;

use App\Containers\AppSection\Examen\Data\Repositories\ExamenRepository;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindExamenByIdTask extends ParentTask
{
    public function __construct(
        protected ExamenRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Examen
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
