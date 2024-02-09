<?php

namespace App\Containers\AppSection\Empleado\Tasks;

use App\Containers\AppSection\Empleado\Data\Repositories\EmpleadoRepository;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateEmpleadoTask extends ParentTask
{
    public function __construct(
        protected EmpleadoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Empleado
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
