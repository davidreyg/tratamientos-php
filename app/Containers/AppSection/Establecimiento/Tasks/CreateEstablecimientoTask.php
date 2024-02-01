<?php

namespace App\Containers\AppSection\Establecimiento\Tasks;

use App\Containers\AppSection\Establecimiento\Data\Repositories\EstablecimientoRepository;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateEstablecimientoTask extends ParentTask
{
    public function __construct(
        protected EstablecimientoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Establecimiento
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
