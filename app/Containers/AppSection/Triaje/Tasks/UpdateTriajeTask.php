<?php

namespace App\Containers\AppSection\Triaje\Tasks;

use App\Containers\AppSection\Triaje\Data\Repositories\TriajeRepository;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateTriajeTask extends ParentTask
{
    public function __construct(
        protected TriajeRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Triaje
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
