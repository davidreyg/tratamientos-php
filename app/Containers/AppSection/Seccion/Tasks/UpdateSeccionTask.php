<?php

namespace App\Containers\AppSection\Seccion\Tasks;

use App\Containers\AppSection\Seccion\Data\Repositories\SeccionRepository;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateSeccionTask extends ParentTask
{
    public function __construct(
        protected SeccionRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Seccion
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
