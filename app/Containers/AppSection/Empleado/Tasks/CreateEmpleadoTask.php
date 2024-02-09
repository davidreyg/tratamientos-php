<?php

namespace App\Containers\AppSection\Empleado\Tasks;

use App\Containers\AppSection\Empleado\Data\Repositories\EmpleadoRepository;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateEmpleadoTask extends ParentTask
{
    public function __construct(
        protected EmpleadoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Empleado
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
