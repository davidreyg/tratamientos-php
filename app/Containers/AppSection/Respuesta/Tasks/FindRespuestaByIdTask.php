<?php

namespace App\Containers\AppSection\Respuesta\Tasks;

use App\Containers\AppSection\Respuesta\Data\Repositories\RespuestaRepository;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindRespuestaByIdTask extends ParentTask
{
    public function __construct(
        protected RespuestaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Respuesta
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
