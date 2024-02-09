<?php

namespace App\Containers\AppSection\Cargo\Tasks;

use App\Containers\AppSection\Cargo\Data\Repositories\CargoRepository;
use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateCargoTask extends ParentTask
{
    public function __construct(
        protected CargoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Cargo
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
