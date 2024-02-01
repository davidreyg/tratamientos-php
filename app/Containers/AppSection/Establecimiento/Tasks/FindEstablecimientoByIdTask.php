<?php

namespace App\Containers\AppSection\Establecimiento\Tasks;

use App\Containers\AppSection\Establecimiento\Data\Repositories\EstablecimientoRepository;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindEstablecimientoByIdTask extends ParentTask
{
    public function __construct(
        protected EstablecimientoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Establecimiento
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
