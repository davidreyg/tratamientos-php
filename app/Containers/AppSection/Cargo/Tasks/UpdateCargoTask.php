<?php

namespace App\Containers\AppSection\Cargo\Tasks;

use App\Containers\AppSection\Cargo\Data\Repositories\CargoRepository;
use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateCargoTask extends ParentTask
{
    public function __construct(
        protected CargoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Cargo
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
