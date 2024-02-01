<?php

namespace App\Containers\AppSection\Financiamiento\Tasks;

use App\Containers\AppSection\Financiamiento\Data\Repositories\FinanciamientoRepository;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateFinanciamientoTask extends ParentTask
{
    public function __construct(
        protected FinanciamientoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Financiamiento
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
