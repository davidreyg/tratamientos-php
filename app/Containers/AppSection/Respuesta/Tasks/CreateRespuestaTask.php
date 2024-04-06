<?php

namespace App\Containers\AppSection\Respuesta\Tasks;

use App\Containers\AppSection\Respuesta\Data\Repositories\RespuestaRepository;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateRespuestaTask extends ParentTask
{
    public function __construct(
        protected RespuestaRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Respuesta
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
