<?php

namespace App\Containers\AppSection\Unidad\Tasks;

use App\Containers\AppSection\Unidad\Data\Repositories\UnidadRepository;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindUnidadByIdTask extends ParentTask
{
    public function __construct(
        protected UnidadRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Unidad
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
