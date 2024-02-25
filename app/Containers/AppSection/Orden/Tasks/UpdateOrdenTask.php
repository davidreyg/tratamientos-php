<?php

namespace App\Containers\AppSection\Orden\Tasks;

use App\Containers\AppSection\Orden\Data\Repositories\OrdenRepository;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateOrdenTask extends ParentTask
{
    public function __construct(
        protected OrdenRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Orden
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
