<?php

namespace App\Containers\AppSection\Cargo\Tasks;

use App\Containers\AppSection\Cargo\Data\Repositories\CargoRepository;
use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindCargoByIdTask extends ParentTask
{
    public function __construct(
        protected CargoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Cargo
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
