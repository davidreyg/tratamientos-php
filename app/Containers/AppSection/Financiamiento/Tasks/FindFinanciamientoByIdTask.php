<?php

namespace App\Containers\AppSection\Financiamiento\Tasks;

use App\Containers\AppSection\Financiamiento\Data\Repositories\FinanciamientoRepository;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindFinanciamientoByIdTask extends ParentTask
{
    public function __construct(
        protected FinanciamientoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Financiamiento
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
