<?php

namespace App\Containers\AppSection\Triaje\Tasks;

use App\Containers\AppSection\Triaje\Data\Repositories\TriajeRepository;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateTriajeTask extends ParentTask
{
    public function __construct(
        protected TriajeRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Triaje
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
