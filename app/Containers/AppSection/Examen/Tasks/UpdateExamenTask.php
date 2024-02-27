<?php

namespace App\Containers\AppSection\Examen\Tasks;

use App\Containers\AppSection\Examen\Data\Repositories\ExamenRepository;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateExamenTask extends ParentTask
{
    public function __construct(
        protected ExamenRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Examen
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
