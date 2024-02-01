<?php

namespace App\Containers\AppSection\Financiamiento\Tasks;

use App\Containers\AppSection\Financiamiento\Data\Repositories\FinanciamientoRepository;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateFinanciamientoTask extends ParentTask
{
    public function __construct(
        protected FinanciamientoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Financiamiento
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
