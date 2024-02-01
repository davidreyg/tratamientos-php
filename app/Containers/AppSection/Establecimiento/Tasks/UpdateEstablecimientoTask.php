<?php

namespace App\Containers\AppSection\Establecimiento\Tasks;

use App\Containers\AppSection\Establecimiento\Data\Repositories\EstablecimientoRepository;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateEstablecimientoTask extends ParentTask
{
    public function __construct(
        protected EstablecimientoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Establecimiento
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
