<?php

namespace App\Containers\AppSection\Unidad\Tasks;

use App\Containers\AppSection\Unidad\Data\Repositories\UnidadRepository;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateUnidadTask extends ParentTask
{
    public function __construct(
        protected UnidadRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Unidad
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
