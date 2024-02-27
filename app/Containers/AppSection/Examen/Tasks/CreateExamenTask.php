<?php

namespace App\Containers\AppSection\Examen\Tasks;

use App\Containers\AppSection\Examen\Data\Repositories\ExamenRepository;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateExamenTask extends ParentTask
{
    public function __construct(
        protected ExamenRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Examen
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
