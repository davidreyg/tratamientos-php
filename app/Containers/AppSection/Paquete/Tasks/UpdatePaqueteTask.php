<?php

namespace App\Containers\AppSection\Paquete\Tasks;

use App\Containers\AppSection\Paquete\Data\Repositories\PaqueteRepository;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePaqueteTask extends ParentTask
{
    public function __construct(
        protected PaqueteRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Paquete
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
