<?php

namespace App\Containers\AppSection\Empleado\Tasks;

use App\Containers\AppSection\Empleado\Data\Repositories\EmpleadoRepository;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindEmpleadoByIdTask extends ParentTask
{
    public function __construct(
        protected EmpleadoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Empleado
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
